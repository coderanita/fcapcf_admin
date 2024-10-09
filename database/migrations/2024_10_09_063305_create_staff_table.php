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
        Schema::create('staffs', function (Blueprint $table) {
            $table->id();
            $table->string('first_name');
            $table->string('middle_name');
            $table->string('last_name');

            $table->string('gender');
            $table->string('phone_number');
            $table->string('email');
            $table->date('date_of_birth');
            $table->string('marital_status');
            $table->unsignedBigInteger('nationality_id');
            $table->string('identification_id');
            $table->string('id_number')->nullable();
            $table->date('expiration_date');

            $table->string('full_name');
            $table->string('telephone');
            $table->unsignedBigInteger('relationship_id');
            $table->text('home_address');

            $table->string('emp_job_title');
            $table->string('emp_department');
            $table->string('emp_status');
            $table->date('emp_start_date');
            $table->string('emp_reporting_manager');
            $table->date('emp_probationary_date');
            $table->string('emp_work_location');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('staff');
    }
};
