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
        Schema::create('beneficiaries', function (Blueprint $table) {
            $table->id();
            $table->string('first_name');
            $table->string('last_name');
            $table->string('profile_photo_path');

            $table->string('gender');
            $table->string('phone_number');
            $table->string('country_code');
            $table->string('email');
            $table->date('date_of_birth');
            $table->string('marital_status');
            $table->unsignedBigInteger('nationality_id');
            $table->string('disability_status');
            $table->string('type_of_disability')->nullable();
            $table->unsignedBigInteger('language_id');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('beneficiaries');
    }
};
