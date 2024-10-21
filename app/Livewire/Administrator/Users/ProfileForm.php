<?php

namespace App\Livewire\Administrator\Users;


use App\Models\User;
use Livewire\Attributes\Validate;
use Livewire\Form;

class ProfileForm extends Form
{
  public ?User $user;
  public $userProfile;
  public $emptyArr, $identity_type;
  public
    $fname,
    $lname,
    $email,
    $personal_mname,
    $personal_gender,
    $personal_phone,
    $personal_birth_date,
    $personal_marital_status,
    $personal_nationality,
    $personal_identification_type,
    $personal_id_number,
    $personal_expiry_date,
    //emergency
    $emergency_full_name,
    $emergency_phone,
    $emergency_relationship,
    $personal_home_address,


    //employment
    $employment,
    // $employment_job_title,
    // $employment_dempartment,
    // $employment_employment_status,
    // $employment_start_date,
    // $employment_reporting_manager_supervisor,
    // $employment_probation_period,
    // $employment_work_location,


    //education
    $education,
    // $education_highest_qualification,
    // $education_institution_name,
    // $education_graduation_year,
    // $education_Languages_spoken,
    // $education_professional_certs,


    //experience
    $work_experience,

    //banking
    $bk_bank_name,
    $bk_account_number,
    $bk_bank_sort_code,
    $bk_bank_branch,

    //benefits
    $bk_previours_salary,
    $bk_pension_scheme,
    $bk_pension_admin_name,
    $bk_pension_id,
    $bk_health_insurance,
    $bk_insurance_name,
    $bk_insurance_id,
    $bk_other_benefit,

    //it and security
    $sec_offical_email,
    $sec_company_equipment_issued,
    $sec_sys_access_requirement,
    $sec_security_clearance;
  public function setProfile(User $user)
  {
    $this->emptyArr = [
      "employment" => [
        "job_title" => "",
        "dempartment" => "",
        "status" => "",
        "start_date" => "",
        "reporting_manager_supervisor" => "",
        "probation_period" => "",
        "work_location" => "",
      ],
      "education" => [
        "highest_qualification" => "",
        "institution_name" => "",
        "graduation_year" => "",
        "Languages_spoken" => "",
        "professional_certs" => "",
      ],
      "work_experience" => [
        "title" => "",
        "previous_employer" => "",
        "from_year" => "",
        "to_year" => "",
        "leaving_reason" => ""
      ]
    ];

    $this->identity_type = [
      "nin" => "National ID",
      "voters_card" => "Voter's Card",
      "intl_passport" => "International Passport",
      "drivers_license" => "Driver's License",
      "social_security_number" => "Social Security Number",
      "tax_identification_number" => "Tax Identification Number",
    ];


    $this->user = $user;
    $this->userProfile = $user->profile ?? $user->profile()->create();
    // dd($this->userProfile->all());
    $this->fill($this->userProfile->only(
      'user_id',

      //personal information
      'personal_mname',
      'personal_gender',
      'personal_phone',
      'personal_birth_date',
      'personal_marital_status',
      'personal_nationality',
      'personal_identification_type',
      'personal_id_number',
      'personal_expiry_date',
      //emergency
      'emergency_full_name',
      'emergency_phone',
      'emergency_relationship',
      'personal_home_address',


      //employment
      'employment_job_title',
      'employment_dempartment',
      'employment_employment_status',
      'employment_start_date',
      'employment_reporting_manager_supervisor',
      'employment_probation_period',
      'employment_work_location',


      //education
      'education_highest_qualification',
      'education_institution_name',
      'education_graduation_year',
      'education_Languages_spoken',
      'education_professional_certs',
      //banking
      'bk_bank_name',
      'bk_account_number',
      'bk_bank_sort_code',
      'bk_bank_branch',

      //benefits
      'bk_previours_salary',
      'bk_pension_scheme',
      'bk_pension_admin_name',
      'bk_pension_id',
      'bk_health_insurance',
      'bk_insurance_name',
      'bk_insurance_id',
      'bk_other_benefit',

      //it and security
      'sec_offical_email',
      'sec_company_equipment_issued',
      'sec_sys_access_requirement',
      'sec_security_clearance',




    ));
    $this->fill($this->user->only(['fname',    'lname',    'email']));

    //experience
    $this->employment = $this->userProfile->employment ? unserialize($this->userProfile->employment) : [$this->emptyArr['employment']];
    $this->education = $this->userProfile->education ? unserialize($this->userProfile->education) : [$this->emptyArr['education']];
    $this->work_experience = $this->userProfile->work_experience ? unserialize($this->userProfile->work_experience) : [$this->emptyArr['work_experience']];
  }
}
