<?php

namespace App\Livewire\Administrator\Users;

use App\Models\Profile;
use App\Models\User;
use Livewire\Component;

class ManageProfile extends Component
{
  public ProfileForm $profile;
  public $profileTab = 'personal', $profileStep = 1;
  public $work_experience, $employment, $education, $allowedTab;


  public function mount(User $user,)
  {
    $this->profile->setProfile($user);

    //its like temp variable
    $this->employment =  $this->profile->employment;
    $this->education =  $this->profile->education;
    $this->work_experience =  $this->profile->work_experience;

    $this->allowedTab = ['employment', 'education', 'work_experience'];

  }

  public function setProfileTab(string $tab, int $step)
  {
    $this->profileStep = $step;
    $this->profileTab = $tab;
  }

  public function isActiveTab(string $tab)
  {

    return $this->profileTab == $tab ? "show active" : "";
  }

  public function updatePersonal(): void
  {
    // dd($this->profile->fname,$this->profile->personal_identification_type);
    $this->authorize('update', $this->profile->userProfile);
    $this->profileTab = 'personal';
    $this->validate();
    $this->profile->user->update([
      "fname" => $this->profile->fname,
      "lname" => $this->profile->lname,
      "email" => $this->profile->email,
    ]);
    $this->profile->userProfile->update([
      "personal_mname" => $this->profile->personal_mname,
      "personal_gender" => $this->profile->personal_gender,
      "personal_phone" => $this->profile->personal_phone,
      "personal_birth_date" => $this->profile->personal_birth_date,
      "personal_marital_status" => $this->profile->personal_marital_status,
      "personal_nationality" => $this->profile->personal_nationality,
      "personal_identification_type" => $this->profile->personal_identification_type,
      "personal_id_number" => $this->profile->personal_id_number,
      "personal_expiry_date" => $this->profile->personal_expiry_date,
      "emergency_full_name" => $this->profile->emergency_full_name,
      "emergency_phone" => $this->profile->emergency_phone,
      "emergency_relationship" => $this->profile->emergency_relationship,
      "personal_home_address" => $this->profile->personal_home_address,
    ]);

    $this->dispatch(
      'alert',
      type: "success",
      msg: "{$this->profile->user->fullName()}'s Personal Information  saved successfully"
    );
  }
  public function updateEmployment(): void
  {
    //experience
    // $work_experience,
    $this->authorize('update', $this->profile->userProfile);
    $this->profileTab = 'employment';

    $this->validate(
      [
        "employment" => "array",

        'employment.*.job_title' => ['required_with:employment', 'string'],
        'employment.*.dempartment' => ['required_with:employment', 'string'],
        'employment.*.status' => ['required_with:employment', 'string', 'in:full_time,part_time,contract'],
        'employment.*.start_date' => ['nullable', 'date'],
        'employment.*.reporting_manager_supervisor' => ['required_with:employment', 'string'],
        'employment.*.probation_period' => ['required_with:employment', 'string'],
        'employment.*.work_location' => ['nullable', 'string'],
        
      
      ],
      [
        'employment.*.job_title.required_with' => 'This field #:position  Job Title is required',
        'employment.*.dempartment.required_with' => 'This field #:position Department is required',
        'employment.*.status.required_with' => 'This field #:position  Employment Status is required',
        'employment.*.reporting_manager_supervisor.required_with' => 'This field #:position  Reporting Manager/Supervisor is required',
        'employment.*.probation_period.required_with' => 'This field #:position  Probation Period  is required',

      ]
    );


    $this->profile->userProfile->update([
      "employment" => $this->employment ? serialize($this->employment) : null
    ]);



    $this->dispatch(
      'alert',
      type: "success",
      msg: "{$this->profile->user->fullName()}'s Employment Information  saved successfully"
    );
  }


  // public function updateEmployment(): void
  // {
  //   //employment

  //   $this->authorize('update', $this->profile->userProfile);
  //   $this->profileTab = 'employment';
  //   $this->validate();

  //   $this->profile->userProfile->update([
  //     "employment_job_title" => $this->profile->employment_job_title,
  //     "employment_dempartment" => $this->profile->employment_dempartment,
  //     "employment_employment_status" => $this->profile->employment_employment_status,
  //     "employment_start_date" => $this->profile->employment_start_date,
  //     "employment_reporting_manager_supervisor" => $this->profile->employment_reporting_manager_supervisor,
  //     "employment_probation_period" => $this->profile->employment_probation_period,
  //     "employment_work_location" => $this->profile->employment_work_location
  //   ]);

  //   $this->dispatch(
  //     'alert',
  //     type: "success",
  //     msg: "{$this->profile->user->fullName()}'s Employment Information  saved successfully"
  //   );
  // }

  public function updateEducation(): void
  {
    //education
    // $education,
    $this->authorize('update', $this->profile->userProfile);
    $this->profileTab = 'education';
    $this->validate(
      [
        "education" => "array",

        'education.*.highest_qualification' => ['required', 'string','in:phd,   msc,bsc,college,primary'],
        'education.*.institution_name' => ['required', 'string'],
        'education.*.graduation_year' => ['required', 'string'],
        'education.*.Languages_spoken' => ['required', 'string'],
        'education.*.professional_certs' => ['required', 'string']


      
      ],
      [
        'education.*.highest_qualification.required' => 'This field #:position  Highest Qualification  is required',
        'education.*.institution_name.required' => 'This field #:position  Institution Name is required',
        'education.*.graduation_year.required' => 'This field #:position  Graduation Year is required',
        'education.*.Languages_spoken.required' => 'This field #:position  List Languages Spoken is required',
        'education.*.professional_certs.required' => 'This field #:position  Professional Certifications is required',


      ]
    );


    $this->profile->userProfile->update([
      "education" => $this->education ? serialize($this->education) : null
    ]);



    $this->dispatch(
      'alert',
      type: "success",
      msg: "{$this->profile->user->fullName()}'s Education Information  saved successfully"
    );
  }

  // public function updateEducation(): void
  // {
  //   //education
  //   // $education_highest_qualification,
  //   // $education_institution_name,
  //   // $education_graduation_year,
  //   // $education_Languages_spoken,
  //   // $education_professional_certs,
  //   $this->authorize('update', $this->profile->userProfile);
  //   $this->profileTab = 'education';
  //   $this->validate();

  //   $this->profile->userProfile->update([
  //     "education_highest_qualification" => $this->profile->education_highest_qualification,
  //     "education_institution_name" => $this->profile->education_institution_name,
  //     "education_graduation_year" => $this->profile->education_graduation_year,
  //     "education_Languages_spoken" => $this->profile->education_Languages_spoken,
  //     "education_professional_certs" => $this->profile->education_professional_certs


  //   ]);

  //   $this->dispatch(
  //     'alert',
  //     type: "success",
  //     msg: "{$this->profile->user->fullName()}'s  Information  saved successfully"
  //   );
  // }


  public function updateExperience(): void
  {
    //experience
    // $work_experience,
    $this->authorize('update', $this->profile->userProfile);
    $this->profileTab = 'work_experience';
    $this->validate(
      [

        "work_experience" => "nullable|array",
        "work_experience.*.title" => "required_with:work_experience|string|max:255",
        "work_experience.*.previous_employer" => "required_with:work_experience|string|max:255",
        "work_experience.*.from_year" => "required_with:work_experience|date_format:Y|after:" . date('Y', strtotime("-69 year", time())),
        "work_experience.*.to_year" => "required_with:work_experience|date_format:Y|before_or_equal:" . date('Y'),
        "work_experience.*.leaving_reason" => "required_with:work_experience|string",
      ],
      [
        'work_experience.*.title.required_with' => 'This field #:position  Job Title is required',
        'work_experience.*.previous_employer.required_with' => 'This field #:position  Previous Employer is required',
        'work_experience.*.from_year.required_with' => 'This field #:position  Experience Years is required',
        'work_experience.*.to_year.required_with' => 'This field #:position  Experience Years is required',
        'work_experience.*.leaving_reason.required_with' => 'This field #:position  Reason for leaving  is required',

      ]
    );


    $this->profile->userProfile->update([
      "work_experience" => $this->work_experience ? serialize($this->work_experience) : null
    ]);



    $this->dispatch(
      'alert',
      type: "success",
      msg: "{$this->profile->user->fullName()}'s Work Experience Information  saved successfully"
    );
  }




  public function removeItem(string $tab, int $index)
  {

    $this->profileTab = $tab;

    if ($index == 0) {
      $this->dispatch(
        'alert',
        type: "warning",
        msg: "Sorry you can't remove this item."
      );
      return;
    }

  
    if (in_array($tab, $this->allowedTab) && array_key_exists($index, $this->$tab)) {
      unset($this->$tab[$index]);
      $this->$tab = array_values($this->$tab);
    } else {
      $this->dispatch(
        'alert',
        type: "warning",
        msg: "Sorry you can't remove this item."
      );
      return;
    }


    // switch ($type) {
    //   case 'employment':
    //     if (array_key_exists($index, $this->employment)) {
    //       unset($this->employment[$index]);
    //       $this->employment = array_values($this->employment);
    //     }

    //     break;
    //   case 'education':
    //     if (array_key_exists($index, $this->education)) {
    //       unset($this->education[$index]);
    //       $this->education = array_values($this->education);
    //     }

    //     break;
    //   case 'experience':
    //     if (array_key_exists($index, $this->work_experience)) {
    //       unset($this->work_experience[$index]);
    //       $this->work_experience = array_values($this->work_experience);
    //     }

    //     break;

    //   default:
    //     $this->dispatch(
    //       'alert',
    //       type: "warning",
    //       msg: "Sorry you can't remove this item."
    //     );
    //     return;
    //     break;
    // }
  }



  public function addItem(string $tab)
  {
    $this->profileTab = $tab;
    if (in_array($tab, $this->allowedTab)) {
      $this->$tab[] = $this->profile->emptyArr[$tab];
    } else {
      $this->dispatch(
        'alert',
        type: "warning",
        msg: "Sorry you can't remove this item."
      );
      return;
    }


  }

  public function updateBanking(): void
  {
    //banking
    // $bk_bank_name,
    // $bk_account_number,
    // $bk_bank_sort_code,
    // $bk_bank_branch,
    // //benefits
    // $bk_previours_salary,
    // $bk_pension_scheme,
    // $bk_pension_admin_name,
    // $bk_pension_id,
    // $bk_health_insurance,
    // $bk_insurance_name,
    // $bk_insurance_id,
    // $bk_other_benefit,

    $this->authorize('update', $this->profile->userProfile);
    $this->profileTab = 'banking_and_compensation';
    // dd($this->all());
    $this->validate();

    $this->profile->userProfile->update([
      "bk_bank_name" => $this->profile->bk_bank_name,
      "bk_account_number" => $this->profile->bk_account_number,
      "bk_bank_sort_code" => $this->profile->bk_bank_sort_code,
      "bk_bank_branch" => $this->profile->bk_bank_branch,
      "bk_previours_salary" => $this->profile->bk_previours_salary,
      "bk_pension_scheme" => $this->profile->bk_pension_scheme,
      "bk_pension_admin_name" => $this->profile->bk_pension_admin_name,
      "bk_pension_id" => $this->profile->bk_pension_id,
      "bk_health_insurance" => $this->profile->bk_health_insurance,
      "bk_insurance_name" => $this->profile->bk_insurance_name,
      "bk_insurance_id" => $this->profile->bk_insurance_id,
      "bk_other_benefit" => $this->profile->bk_other_benefit
    ]);

    $this->dispatch(
      'alert',
      type: "success",
      msg: "{$this->profile->user->fullName()}'s  Banking Information  saved successfully"
    );
  }
  public function updateSecurity(): void
  {
    //it and security
    //  $sec_offical_email,
    //  $sec_company_equipment_issued,
    //  $sec_sys_access_requirement,
    //  $sec_security_clearance;

    $this->authorize('update', $this->profile->userProfile);
    $this->profileTab = 'it_and_security';
    $this->validate();

    $this->profile->userProfile->update([
      "sec_offical_email" => $this->profile->sec_offical_email,
      "sec_company_equipment_issued" => $this->profile->sec_company_equipment_issued,
      "sec_sys_access_requirement" => $this->profile->sec_sys_access_requirement,
      "sec_security_clearance" => $this->profile->sec_security_clearance,
    ]);

    $this->dispatch(
      'alert',
      type: "success",
      msg: "{$this->profile->user->fullName()}'s IT & Security  Information  saved successfully"
    );
  }
  

  public function render()
  {
    // logger($this->profileTab);
    // dd($this->profileTab);
    return view('_administrator.users.profile.manage');
  }

  public function rules()
  {
    switch ($this->profileTab) {
      case 'personal':
        return [
          'profile.fname' => ['required', 'string'],
          'profile.lname' => ['required', 'string'],
          'profile.email' => ['required', 'email'],
          'profile.personal_mname' => ['nullable', 'string'],
          'profile.personal_gender' => ['required', 'string', 'in:male,female'],
          'profile.personal_phone' => ['required', 'string'],
          'profile.personal_birth_date' => ['required', 'string'],
          'profile.personal_marital_status' => ['required', 'string', 'in:single,married,divorced,widow,widower'],
          'profile.personal_nationality' => ['required', 'string', 'in:nigeria,ghana,zambia'],
          'profile.personal_identification_type' => ['required', 'string', 'in:' . implode(',', array_keys($this->profile->identity_type))],
          'profile.personal_id_number' => ['required', 'string'],
          'profile.personal_expiry_date' => ['required', 'string'],
          'profile.emergency_full_name' => ['required', 'string'],
          'profile.emergency_phone' => ['nullable', 'string'],
          'profile.emergency_relationship' => ['required', 'string', 'in:father,mother,brother,sister,son'],
          'profile.personal_home_address' => ['nullable', 'string']
        ];
        break;
      // case 'employment':
      //   return [
      //     'profile.employment_job_title' => ['nullable', 'string'],
      //     'profile.employment_dempartment' => ['required', 'string'],
      //     'profile.employment_employment_status' => ['required', 'string', 'in:full_time,part_time,contract'],
      //     'profile.employment_start_date' => ['nullable', 'date'],
      //     'profile.employment_reporting_manager_supervisor' => ['required', 'string'],
      //     'profile.employment_probation_period' => ['required', 'string'],
      //     'profile.employment_work_location' => ['nullable', 'string'],


      //   ];
      //   break;
      // case 'education':
      //   return [
      //     'profile.education_highest_qualification' => ['required', 'string'],
      //     'profile.education_institution_name' => ['required', 'string'],
      //     'profile.education_graduation_year' => ['required', 'string'],
      //     'profile.education_Languages_spoken' => ['required', 'string'],
      //     'profile.education_professional_certs' => ['required', 'string']

      //   ];
      //   break;

      case 'banking_and_compensation':
        return [
          "profile.bk_bank_name" => ['nullable', 'string'],
          "profile.bk_account_number" => ['nullable', 'string'],
          "profile.bk_bank_sort_code" => ['nullable', 'string'],
          "profile.bk_bank_branch" => ['nullable', 'string'],
          "profile.bk_previours_salary" => ['nullable', 'string'],

          "profile.bk_pension_scheme" => ['required',  'in:yes,no'],
          "profile.bk_pension_admin_name" => ['required_if_accepted:profile.bk_pension_scheme'],
          "profile.bk_pension_id" => ['required_if_accepted:profile.bk_pension_scheme'],

          "profile.bk_health_insurance" => ['required',  'in:yes,no'],
          "profile.bk_insurance_name" => ['required_if_accepted:profile.bk_health_insurance'],
          "profile.bk_insurance_id" => ['required_if_accepted:profile.bk_health_insurance'],
          "profile.bk_other_benefit" => ['nullable', 'string']
        ];
        break;
      case 'it_and_security':
        return [
          'profile.sec_offical_email' => ['required', 'string'],
          'profile.sec_company_equipment_issued' => ['nullable', 'string'],
          'profile.sec_sys_access_requirement' => ['nullable', 'string'],
          'profile.sec_security_clearance' => ['nullable', 'string']

        ];
        break;

      default:
        return ['profile.*' => 'filled'];
        break;
    }
  }
}
