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

class Create extends Component
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
                'profile_photo_path' => 'required|image', // Validate image size
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
        $beneficiary = Beneficiary::create([
            'first_name' => $this->first_name,
            'last_name' => $this->last_name,
            'profile_photo_path' => $this->profile_photo_path->store('beneficiaries/profile_photos', 'public'), // Store image
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

        $this->beneficiary_id = $beneficiary->id;

        // Save Emergency Contact and associate it with the Beneficiary
        BeneficiaryEmergencyContact::create([
            'beneficiary_id' =>  $this->beneficiary_id, // Associate with beneficiary
            'full_name' => $this->full_name,
            'telephone' => $this->telephone,
            'relationship_id' => $this->relationship_id,
            'home_address' => $this->home_address,
        ]);

        // Social Economic and associate it with the Beneficiary
        BeneficiarySocialEconomic::create([
            'beneficiary_id' =>  $this->beneficiary_id,
            'occupation' => $this->occupation,
            'household_size' => $this->household_size,
            'education_level' => $this->education_level,
            'income' => $this->income,
            'housing_status' => $this->housing_status,
            'vulnerabilities' => $this->vulnerabilities,
        ]);

        // Insert data into the 'beneficiary_assistances' table
        BeneficiaryAssistance::create([
            'beneficiary_id' => $this->beneficiary_id,
            'type_of_assistance' => $this->type_of_assistance,
            'previous_assistance' => $this->previous_assistance,
            'health_status' => $this->health_status,
            'skills_or_training' => $this->skills_or_training,
            'geographical_location' => $this->geographical_location,
            'ethnicity_tribe' => $this->ethnicity_tribe,
            'religion' => $this->religion,
            'referring_organization' => $this->referring_organization,
        ]);

        $this->dispatch(
            'alert',
            msg: 'New Beneficiary Added!',
            type: 'success'
        );

        $this->reset();
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

        return view('_administrator.beneficiaries.create', [
            'nationalities' => $this->nationalities,
            'languages' => $this->languages,
            'beneficiaryRelationships' => $this->beneficiaryRelationships
        ]);
    }
}
