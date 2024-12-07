<?php

namespace App\Livewire\Administrator\Users;

use App\Models\Project;
use App\Models\User;
use Livewire\Component;

class ShowUser extends Component
{
  public ProfileForm $profile;
  public User $user;
  public $identity_type;
  public $projects = [];

  // Step 1
  public $first_name, $middle_name, $last_name, $gender, $phone_number, $email, $date_of_birth, $marital_status, $countryCode;
  public $nationality_id, $id_type, $id_number, $expiry_date;

  public $full_name, $countryCodeEmergency,  $telephone, $relationship_id, $home_address;

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
  public $office_email, $comp_equipment, $system_access, $security, $savedImage;

  // public function mount(User $user)
  // {
  //   $this->profile->setProfile($user);
  // }

  public function mount(User $user)
  {
    $this->user = $user;

    $this->savedImage = $user->profile_photo_url;

    $this->first_name = $user->fname;
    $this->last_name = $user->lname;
    $this->email = $user->email;

    $this->middle_name = $user->profile->personal_mname ?? '';
    $this->gender = $user->profile->personal_gender ?? '';
    $this->phone_number = $user->profile->personal_phone ?? '';
    $this->date_of_birth = $user->profile->personal_birth_date ?? '';
    $this->marital_status = $user->profile->personal_marital_status ?? '';
    $this->nationality_id = $user->profile->personal_nationality ?? '';
    $this->id_type = $user->profile->personal_identification_type ?? '';
    $this->id_number = $user->profile->personal_id_number ?? '';
    $this->expiry_date = $user->profile->personal_expiry_date ?? '';

    $this->full_name = $user->profile->emergency_full_name ?? '';
    $this->countryCodeEmergency = $user->profile->emergency_country_code ?? '';
    $this->telephone = $user->profile->emergency_phone ?? '';
    $this->relationship_id = $user->profile->emergency_relationship ?? '';
    $this->home_address = $user->profile->personal_home_address ?? '';

    $this->job_title = $user->profile->employment_job_title ?? '';
    $this->department = $user->profile->employment_department ?? '';
    $this->emp_status = $user->profile->employment_employment_status ?? '';
    $this->start_date = $user->profile->employment_start_date ?? '';
    $this->reporting_manager = $user->profile->employment_reporting_manager_supervisor ?? '';
    $this->probation_period = $user->profile->employment_probation_period ?? '';
    $this->work_location = $user->profile->employment_work_location ?? '';

    $this->highest_qualification = $user->profile->education_highest_qualification ?? '';
    $this->institution = $user->profile->education_institution_name ?? '';
    $this->graduation_date = $user->profile->education_graduation_year ?? '';
    $this->lan_spoken = $user->profile->education_Languages_spoken ?? '';
    $this->certification = $user->profile->education_professional_certs ?? '';

    $this->exp_job_title = $user->profile->work_experience ?? '';
    $this->prev_emp = $user->profile->prev_emp ?? '';
    $this->exp_start_date = $user->profile->exp_start_date ?? '';
    $this->exp_end_date = $user->profile->exp_end_date ?? '';
    $this->reason_leaving = $user->profile->reason_leaving ?? '';

    $this->bank_name = $user->profile->bk_bank_name ?? '';
    $this->acc_no = $user->profile->bk_account_number ?? '';
    $this->bank_code = $user->profile->bk_bank_sort_code ?? '';
    $this->prev_salary = $user->profile->bk_previours_salary ?? '';
    $this->pension_scheme = $user->profile->bk_pension_scheme ?? '';
    $this->pension_adm = $user->profile->bk_pension_admin_name ?? '';
    $this->pension_id = $user->profile->bk_pension_id ?? '';
    $this->health_insurance = $user->profile->bk_health_insurance ?? '';
    $this->insurance_name = $user->profile->bk_insurance_name ?? '';
    $this->insurance_id = $user->profile->bk_insurance_id ?? '';
    $this->benefits = $user->profile->bk_other_benefit ?? '';

    $this->office_email = $user->profile->sec_offical_email ?? '';
    $this->comp_equipment = $user->profile->sec_company_equipment_issued ?? '';
    $this->system_access = $user->profile->sec_sys_access_requirement ?? '';
    $this->security = $user->profile->sec_security_clearance ?? '';

    $this->projects = Project::whereJsonContains('invited_teams', ['id' => $user->id, 'is_lead' => true])->get();
  }

  public function render()
  {
    return view('_administrator.users.show');
  }
}
