<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
  /**
   * Run the migrations.
   */
  public function up(): void
  {
    Schema::create('profiles', function (Blueprint $table) {
      $table->id();

      $table->foreignId('user_id')->constrained()->cascadeOnDelete()->nullable();
      //personal information
      $table->string('personal_mname')->nullable();
      $table->string('personal_gender')->nullable();
      $table->string('personal_phone')->nullable();
      $table->string('personal_birth_date')->nullable();
      $table->string('personal_marital_status')->nullable();
      $table->string('personal_nationality')->nullable();
      $table->string('personal_identification_type')->nullable();
      $table->string('personal_id_number')->nullable();
      $table->string('personal_expiry_date')->nullable();
      //emergency
      $table->string('emergency_full_name')->nullable();
      $table->string('emergency_phone')->nullable();
      $table->string('emergency_relationship')->nullable();
      $table->string('personal_home_address')->nullable();

      //employment
      $table->longText('employment')->nullable();
      $table->string('employment_job_title')->nullable();
      $table->string('employment_department')->nullable();
      $table->string('employment_employment_status')->nullable();
      $table->string('employment_start_date')->nullable();
      $table->string('employment_reporting_manager_supervisor')->nullable();
      $table->string('employment_probation_period')->nullable();
      $table->string('employment_work_location')->nullable();

      //education
      $table->longText('education')->nullable();
      $table->string('education_highest_qualification')->nullable();
      $table->string('education_institution_name')->nullable();
      $table->string('education_graduation_year')->nullable();
      $table->string('education_Languages_spoken')->nullable();
      $table->string('education_professional_certs')->nullable();

      //experience
      $table->longText('work_experience')->nullable();
      $table->longText('prev_emp')->nullable();
      $table->longText('exp_start_date')->nullable();
      $table->longText('exp_end_date')->nullable();
      $table->longText('reason_leaving')->nullable();

      //banking
      $table->string('bk_bank_name')->nullable();
      $table->string('bk_account_number')->nullable();
      $table->string('bk_bank_sort_code')->nullable();
      $table->string('bk_bank_branch')->nullable();

      //benefits
      $table->string('bk_previours_salary')->nullable();
      $table->string('bk_pension_scheme')->nullable();
      $table->string('bk_pension_admin_name')->nullable();
      $table->string('bk_pension_id')->nullable();
      $table->string('bk_health_insurance')->nullable();
      $table->string('bk_insurance_name')->nullable();
      $table->string('bk_insurance_id')->nullable();
      $table->string('bk_other_benefit')->nullable();

      //it and security
      $table->string('sec_offical_email')->nullable();
      $table->string('sec_company_equipment_issued')->nullable();
      $table->string('sec_sys_access_requirement')->nullable();
      $table->string('sec_security_clearance')->nullable();
      $table->timestamps();
    });
  }

  /**
   * Reverse the migrations.
   */
  public function down(): void
  {
    Schema::dropIfExists('profiles');
  }
};
