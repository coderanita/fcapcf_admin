<?php

namespace App\Livewire\Administrator\Staff;

use App\Models\Profile;
use App\Models\Role;
use App\Models\User;
use App\Services\DataSourceService;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Str;
use Livewire\Component;

class Create extends Component
{
    public $languages;
    public $nationalities;
    public $beneficiaries;
    public $countries;
    public $selectedRole;

    public $totalStep = 7;
    public $currentStep = 1;

    // Step 1
    public $first_name, $middle_name, $last_name, $gender, $phone_number, $email, $date_of_birth, $marital_status, $countryCode;
    public $nationality_id, $id_type, $id_number, $expiry_date;

    public $full_name, $countryCodeEmergency, $telephone, $relationship_id, $home_address;

    // Sterp 2
    public $job_title, $department, $emp_status, $start_date, $reporting_manager, $probation_period, $work_location;

    // Step 3
    public $institution, $highest_qualification, $graduation_date, $lan_spoken, $certification;

    // Step 4
    public $exp_job_title, $prev_emp, $exp_start_date, $exp_end_date, $reason_leaving;

    // Step 5
    public $bank_name, $acc_no, $bank_code, $bank_branch, $prev_salary, $pension_scheme,
        $pension_adm, $pension_id, $health_insurance, $insurance_name, $insurance_id, $benefits;

    // Step 6
    public $office_email, $comp_equipment, $system_access, $security;

    protected $messages = [
        'required' => 'This field is required.',
        'email' => 'Please enter a valid email address.',
        'language_id.exists' => 'Please select a valid language.',
        'relationship_id.exists' => 'Please select a valid relationship.',
    ];

    public function validateData()
    {
        if ($this->currentStep == 1) {
            $this->validate([
                'selectedRole' => 'required|string',
                'first_name' => 'required|string|max:255',
                'last_name' => 'required|string|max:255',
                'gender' => 'required|string',
                'phone_number' => 'required|string|max:15',
                'email' => 'required|email|max:255',
                'date_of_birth' => 'required|date',
                'marital_status' => 'required|string',
                'nationality_id' => 'required',

                'id_type' => 'required|string|max:255',
                'id_number' => 'required|string|max:255',
                'expiry_date' => 'required|date',

                // Emergency Contact Validation
                'full_name' => 'required|string|max:255',
                'telephone' => 'required|string|max:15',
                'relationship_id' => 'required|exists:relationships,id',
                'home_address' => 'required|string|max:500',
            ]);
        }

        if ($this->currentStep == 2) {
            $this->validate([
                'job_title' => 'nullable|string|max:255',
                'department' => 'required|string|max:255',
                'emp_status' => 'required|string|max:255',
                'start_date' => 'required|date',
                'reporting_manager' => 'required|string|max:255',
                'probation_period' => 'required|string|max:255',
                'work_location' => 'nullable|string|max:255',
            ]);
        }

        if ($this->currentStep == 3) {
            $this->validate([
                'highest_qualification' => 'required|string|max:255',
                'graduation_date' => 'required|date',
                'lan_spoken' => 'required|string|max:255',
                'certification' => 'required|string|max:255',
            ]);
        }

        if ($this->currentStep == 4) {
            $this->validate([
                'exp_job_title' => 'nullable|string|max:255',
                'prev_emp' => 'nullable|string|max:255',
                'exp_start_date' => 'nullable|date',
                'exp_end_date' => 'nullable|date',
                'reason_leaving' => 'nullable|string|max:255',
            ]);
        }

        if ($this->currentStep == 5) {
            $this->validate([
                'bank_name' => 'nullable|string|max:255',
                'acc_no' => 'nullable|string|max:255',
                'bank_code' => 'nullable|string|max:255',
                'bank_branch' => 'nullable|string|max:255',
                'prev_salary' => 'nullable|string|max:255',
                'pension_scheme' => 'nullable|string|max:255',
                'pension_adm' => 'nullable|string|max:255',
                'health_insurance' => 'nullable|string|max:255',
                'insurance_name' => 'nullable|string|max:255',
                'insurance_id' => 'nullable|string|max:255',
                'benefits' => 'nullable|string|max:255',
            ]);
        }

        if ($this->currentStep == 6) {
            $this->validate([
                'office_email' => 'nullable|string|max:255',
                'comp_equipment' => 'nullable|string|max:255',
                'system_access' => 'nullable|string|max:255',
                'security' => 'nullable|string|max:255',
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

        $this->authorize('create', User::class);
        $this->authorize('create', Profile::class);

        $password = Str::random(10);
        $user = User::create([
            'role_id' => $this->selectedRole,
            'fname' => $this->first_name,
            'lname' => $this->last_name,
            'email' => $this->email,
            'password' => Hash::make($password),
            'role_id' => $this->selectedRole
        ]);

        Profile::create([
            'user_id' =>  $user->id,
            'personal_mname' =>  $this->middle_name,
            'personal_gender' =>  $this->gender,
            'personal_phone' =>  $this->phone_number,
            'personal_birth_date' =>  $this->date_of_birth,
            'personal_marital_status' =>  $this->marital_status,
            'personal_nationality' =>  $this->nationality_id,
            'personal_identification_type' =>  $this->id_type,
            'personal_id_number' =>  $this->id_number,
            'personal_expiry_date'  =>  $this->expiry_date,

            'emergency_full_name'  =>  $this->full_name,
            'emergency_country_code'  =>  $this->countryCodeEmergency,
            'emergency_phone'  =>  $this->telephone,
            'emergency_relationship'  =>  $this->relationship_id,
            'personal_home_address'  =>  $this->home_address,

            // step 2
            'employment'  =>  $this->job_title,
            'employment_job_title'  =>  $this->job_title,
            'employment_department'  =>  $this->department,
            'employment_employment_status'  =>  $this->emp_status,
            'employment_start_date'  =>  $this->start_date,
            'employment_reporting_manager_supervisor'  =>  $this->reporting_manager,
            'employment_probation_period'  =>  $this->probation_period,
            'employment_work_location'  =>  $this->work_location,

            // step 3
            'education'  =>  $this->highest_qualification,
            'education_highest_qualification'  =>  $this->highest_qualification,
            'education_institution_name'  =>  $this->institution,
            'education_graduation_year'  =>  $this->graduation_date,
            'education_Languages_spoken'  =>  $this->lan_spoken,
            'education_professional_certs'  =>  $this->certification,

            // step 4
            'work_experience'  =>  $this->exp_job_title,
            'prev_emp'  =>  $this->prev_emp,
            'exp_start_date'  =>  $this->exp_start_date,
            'exp_end_date'  =>  $this->exp_end_date,
            'reason_leaving'  =>  $this->reason_leaving,

            // step 5
            'bk_bank_name'  =>  $this->bank_name,
            'bk_account_number'  =>  $this->acc_no,
            'bk_bank_sort_code'  =>  $this->bank_code,
            'bk_previours_salary'  =>  $this->prev_salary,
            'bk_pension_scheme'  =>  $this->pension_scheme,
            'bk_pension_admin_name'  =>  $this->pension_adm,
            'bk_pension_id'  =>  $this->pension_id,
            'bk_health_insurance'  =>  $this->health_insurance,
            'bk_insurance_name'  =>  $this->insurance_name,
            'bk_insurance_id'  =>  $this->insurance_id,
            'bk_other_benefit'  =>  $this->benefits,
            'bk_bank_branch'  =>  $this->bank_branch,

            // step 6
            'sec_offical_email'  =>  $this->office_email,
            'sec_company_equipment_issued'  =>  $this->comp_equipment,
            'sec_sys_access_requirement'  =>  $this->system_access,
            'sec_security_clearance'  =>  $this->security,

        ]);

        $this->dispatch(
            'alert',
            msg: 'New Staff Added!',
            type: 'success'
        );

        Mail::send('emails.new-user', ['data' => $user, 'password' => $password], function ($message) use ($user) {
            $message->to($user['email'], $user['fname'])
                ->subject('New User');
            $message->from(env('MAIL_FROM_ADDRESS'), env('MAIL_FROM_NAME'));
        });

        return redirect()->to(route('administrator.users'))->with('message', 'New Staff Added!');


        $this->reset();
    }

    public function render()
    {
        $dataSource = new DataSourceService;

        $this->nationalities = $dataSource->nationalities();
        $this->languages = $dataSource->languages();
        $this->beneficiaries = $dataSource->beneficiaries();
        $this->countries = $dataSource->countries();

        return view('_administrator.staff.create', [
            'nationalities' => $this->nationalities,
            'languages' => $this->languages,
            'beneficiaries' => $this->beneficiaries,
            'countries' => $this->countries,
            'roles' => Role::all(),
        ]);
    }
}
