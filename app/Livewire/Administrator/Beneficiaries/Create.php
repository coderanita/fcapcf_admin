<?php

namespace App\Livewire\Administrator\Beneficiaries;

use App\Models\Beneficiary;
use App\Models\BeneficiaryEmergencyContact;
use App\Models\Language;
use App\Services\DataSourceService;
use Livewire\Attributes\Validate;
use Livewire\Component;
use Livewire\WithFileUploads;

class Create extends Component
{
    use WithFileUploads;

    public $languages = [];
    public $nationalities = [];
    public $beneficiaryRelationships = [];

    public $totalStep = 4;
    public $currentStep = 1;

    // Personal Information
    #[Validate('required')]
    public $first_name, $last_name, $gender, $phone_number, $email, $marital_status;

    #[Validate('required')]
    public $profile_photo_path;

    #[Validate('required')]
    public $nationality_id, $disability_status, $language_id;

    public $type_of_disability;

    #[Validate('required', as: 'date of birth')]
    public $date_of_birth;

    // Personal Information - Emergency Contact
    #[Validate('required')]
    public $full_name, $telephone, $relationship_id, $home_address;

    public function rules()
    {
        return [
            'type_of_disability' => $this->disability_status === 'no' ? 'nullable' : 'required',
        ];
    }

    protected $messages = [
        'required' => 'This field is required.',
    ];

    public function setCurrentStep($step)
    {
        $this->currentStep = $step;
    }

    public function increaseStep()
    {
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

    public function submit()
    {
        // Validate the data before saving
        $this->validate();

        // Save Beneficiary
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

        // Save Emergency Contact and associate it with the Beneficiary
        BeneficiaryEmergencyContact::create([
            'beneficiary_id' => $beneficiary->id, // Associate with beneficiary
            'full_name' => $this->full_name,
            'telephone' => $this->telephone,
            'relationship_id' => $this->relationship_id,
            'home_address' => $this->home_address,
        ]);

        // Optionally, reset form fields after saving
        $this->dispatch('alert', [
            'msg' => 'New Beneficiary Added!',
            'type' => 'success'
        ]);

        $this->reset();
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
