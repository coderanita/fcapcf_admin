<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Profile extends Model
{
  use HasFactory;
  protected $fillable = [
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
    'emergency_country_code',
    'emergency_phone',
    'emergency_relationship',
    'personal_home_address',


    //employment
    'employment',
    'employment_job_title',
    'employment_department',
    'employment_employment_status',
    'employment_start_date',
    'employment_reporting_manager_supervisor',
    'employment_probation_period',
    'employment_work_location',


    //education
    'education',
    'education_highest_qualification',
    'education_institution_name',
    'education_graduation_year',
    'education_Languages_spoken',
    'education_professional_certs',


    //experience
    'work_experience',
    'prev_emp',
    'exp_start_date',
    'exp_end_date',
    'reason_leaving',

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




  ];
  /**
   * Get the user that owns the Profile
   *
   * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
   */
  public function user(): BelongsTo
  {
    return $this->belongsTo(User::class);
  }

  public function country(): BelongsTo
  {
    return $this->belongsTo(Country::class, 'personal_nationality');
  }
}
