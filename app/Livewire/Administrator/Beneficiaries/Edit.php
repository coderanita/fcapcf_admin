<?php

namespace App\Livewire\Administrator\Beneficiaries;

use App\Models\Beneficiary;
use App\Models\BeneficiaryAssistance;
use App\Models\BeneficiaryEmergencyContact;
use App\Models\BeneficiarySocialEconomic;
use App\Models\Language;
use App\Services\DataSourceService;
use Livewire\Attributes\Validate;
use Livewire\Component;
use Livewire\WithFileUploads;

class Edit extends Component
{
    use WithFileUploads;

    public $beneficiary_id;

    public $languages;
    public $nationalities;
    public $beneficiaryRelationships;

    public $totalStep = 4;
    public $currentStep = 1;


    // Personal Information
    public $first_name, $last_name, $gender, $phone_number, $email, $marital_status;
    public $profile_photo_path;
    public $nationality_id, $disability_status, $language_id;
    public $type_of_disability;
    public $date_of_birth;

    // Personal Information - Emergency Contact
    public $full_name, $telephone, $relationship_id, $home_address;

    // Social Ecomics
    public $occupation, $household_size, $education_level, $income, $housing_status, $vulnerabilities;

    // Assistance
    public $type_of_assistance, $previous_assistance, $health_status, $skills_or_training, $geographical_location, $ethnicity_tribe, $religion, $referring_organization;

    public $savedImage;

    protected $messages = [
        'required' => 'This field is required.',
        'email' => 'Please enter a valid email address.',
        'profile_photo_path.image' => 'Please upload a valid image.',
        'profile_photo_path.max' => 'Image size cannot exceed 2MB.',
        'nationality_id.exists' => 'Please select a valid nationality.',
        'language_id.exists' => 'Please select a valid language.',
        'relationship_id.exists' => 'Please select a valid relationship.',
    ];

    public function validateData()
    {
        if ($this->currentStep == 1) {
            $this->validate([
                'first_name' => 'required|string|max:255',
                'last_name' => 'required|string|max:255',
                // 'profile_photo_path' => 'required|image',
                'gender' => 'required|string',
                'phone_number' => 'required|string|max:15',
                'email' => 'required|email|max:255',
                'date_of_birth' => 'required|date',
                'marital_status' => 'required|string',
                'nationality_id' => 'required|exists:nationalities,id',
                'disability_status' => 'required|string',
                'type_of_disability' => $this->disability_status === 'no' ? 'nullable' : 'required',
                'language_id' => 'required|exists:languages,id',

                // Emergency Contact Validation
                'full_name' => 'required|string|max:255',
                'telephone' => 'required|string|max:15',
                'relationship_id' => 'required|exists:relationships,id',
                'home_address' => 'required|string|max:500',
            ]);
        }

        if ($this->currentStep == 2) {
            $this->validate([
                'occupation' => 'required|string|max:255',
                'household_size' => 'required|numeric|min:1',
                'education_level' => 'required|string',
                'income' => 'nullable|numeric',
                'housing_status' => 'required|string',
                'vulnerabilities' => 'required|string',
            ]);
        }

        if ($this->currentStep == 3) {
            $this->validate([
                'type_of_assistance' => 'required|string|max:255',
                'previous_assistance' => 'nullable|string|max:255',
                'health_status' => 'required|string|max:255',
                'skills_or_training' => 'required|string|max:255',
                'geographical_location' => 'required|string|max:255',
                'ethnicity_tribe' => 'nullable|string|max:255',
                'religion' => 'nullable|string|max:255',
                'referring_organization' => 'nullable|string|max:255',
            ]);
        }
    }

    public function mount($beneficiaryId)
    {
        $beneficiary = Beneficiary::with('emergencyContact', 'assistance', 'socialEconomic')
            ->findOrFail($beneficiaryId);

        // Set beneficiary data to form inputs
        $this->beneficiary_id = $beneficiary->id;
        $this->first_name = $beneficiary->first_name;
        $this->last_name = $beneficiary->last_name;
        $this->gender = $beneficiary->gender;
        $this->phone_number = $beneficiary->phone_number;
        $this->email = $beneficiary->email;
        $this->marital_status = $beneficiary->marital_status;
        $this->date_of_birth = $beneficiary->date_of_birth;
        $this->nationality_id = $beneficiary->nationality_id;
        $this->disability_status = $beneficiary->disability_status;
        $this->type_of_disability = $beneficiary->type_of_disability;
        $this->language_id = $beneficiary->language_id;
        $this->savedImage = $beneficiary->profile_photo_path;

        // Emergency Contact
        $this->full_name = $beneficiary->emergencyContact->first()->full_name ?? '';
        $this->telephone = $beneficiary->emergencyContact->first()->telephone ?? '';
        $this->relationship_id = $beneficiary->emergencyContact->first()->relationship_id ?? '';
        $this->home_address = $beneficiary->emergencyContact->first()->home_address ?? '';

        // Social Economics
        $this->occupation = $beneficiary->socialEconomic->first()->occupation ?? '';
        $this->household_size = $beneficiary->socialEconomic->first()->household_size ?? '';
        $this->education_level = $beneficiary->socialEconomic->first()->education_level ?? '';
        $this->income = $beneficiary->socialEconomic->first()->income ?? '';
        $this->housing_status = $beneficiary->socialEconomic->first()->housing_status ?? '';
        $this->vulnerabilities = $beneficiary->socialEconomic->first()->vulnerabilities ?? '';

        // Assistance
        $this->type_of_assistance = $beneficiary->assistance->first()->type_of_assistance ?? '';
        $this->previous_assistance = $beneficiary->assistance->first()->previous_assistance ?? '';
        $this->health_status = $beneficiary->assistance->first()->health_status ?? '';
        $this->skills_or_training = $beneficiary->assistance->first()->skills_or_training ?? '';
        $this->geographical_location = $beneficiary->assistance->first()->geographical_location ?? '';
        $this->ethnicity_tribe = $beneficiary->assistance->first()->ethnicity_tribe ?? '';
        $this->religion = $beneficiary->assistance->first()->religion ?? '';
        $this->referring_organization = $beneficiary->assistance->first()->referring_organization ?? '';
    }




    public function setCurrentStep($step)
    {
        $this->currentStep = $step;
    }

    public function increaseStep()
    {
        $this->validateData();

        $this->currentStep++;
        if ($this->currentStep > $this->totalStep) {
            $this->currentStep = $this->totalStep;
        }
    }

    public function decreaseStep()
    {
        $this->currentStep--;
        if ($this->currentStep < 1) {
            $this->currentStep = 1;
        }
    }

    public function save()
    {
        $beneficiary = Beneficiary::findOrFail($this->beneficiary_id);

        // Check if a new profile photo has been uploaded
        $profilePic = $this->savedImage;
        if ($this->profile_photo_path) {
            $profilePic = $this->profile_photo_path->store('beneficiaries/profile_photos', 'public');
        }

        // Update Beneficiary data
        $beneficiary->update([
            'first_name' => $this->first_name,
            'last_name' => $this->last_name,
            'profile_photo_path' => $profilePic,
            'gender' => $this->gender,
            'phone_number' => $this->phone_number,
            'email' => $this->email,
            'date_of_birth' => $this->date_of_birth,
            'marital_status' => $this->marital_status,
            'nationality_id' => $this->nationality_id,
            'disability_status' => $this->disability_status,
            'type_of_disability' => $this->type_of_disability,
            'language_id' => $this->language_id,
        ]);

        $emergencyContact = BeneficiaryEmergencyContact::where('beneficiary_id', $this->beneficiary_id)->first();

        if ($emergencyContact) {
            $emergencyContact->update([
                'full_name' => $this->full_name,
                'telephone' => $this->telephone,
                'relationship_id' => $this->relationship_id,
                'home_address' => $this->home_address,
            ]);
        }

        $socialEconomic = BeneficiarySocialEconomic::where('beneficiary_id', $this->beneficiary_id)->first();
        if ($socialEconomic) {
            $socialEconomic->update([
                'occupation' => $this->occupation,
                'household_size' => $this->household_size,
                'education_level' => $this->education_level,
                'income' => $this->income,
                'housing_status' => $this->housing_status,
                'vulnerabilities' => $this->vulnerabilities,
            ]);
        }

        $assistance = BeneficiaryAssistance::where('beneficiary_id', $this->beneficiary_id)->first();
        if ($assistance) {
            $assistance->update([
                'type_of_assistance' => $this->type_of_assistance,
                'previous_assistance' => $this->previous_assistance,
                'health_status' => $this->health_status,
                'skills_or_training' => $this->skills_or_training,
                'geographical_location' => $this->geographical_location,
                'ethnicity_tribe' => $this->ethnicity_tribe,
                'religion' => $this->religion,
                'referring_organization' => $this->referring_organization,
            ]);
        }

        $this->dispatch(
            'alert',
            msg: 'Beneficiary Updated Successfully!',
            type: 'success'
        );

        $this->currentStep = 1;
    }

    public function getNationalityName($nationalityId)
    {
        return $this->nationalities->firstWhere('id', $nationalityId)->name ?? 'Unknown';
    }

    public function getLanguageName($languageId)
    {
        return $this->languages->firstWhere('id', $languageId)->name ?? 'Unknown';
    }

    public function getRelationshipName($relationshipId)
    {
        return $this->beneficiaryRelationships->firstWhere('id', $relationshipId)->name ?? 'Unknown';
    }

    public function render()
    {
        $dataSource = new DataSourceService;

        $this->nationalities = $dataSource->nationalities();
        $this->languages = $dataSource->languages();
        $this->beneficiaryRelationships = $dataSource->beneficiaryRelationships();

        return view('_administrator.beneficiaries.edit', [
            'nationalities' => $this->nationalities,
            'languages' => $this->languages,
            'beneficiaryRelationships' => $this->beneficiaryRelationships
        ]);
    }
}
