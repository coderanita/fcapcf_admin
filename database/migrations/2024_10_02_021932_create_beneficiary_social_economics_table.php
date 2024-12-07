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
        Schema::create('beneficiary_social_economics', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('beneficiary_id');
            $table->string('occupation')->nullable();
            $table->string('household_size')->nullable();
            $table->string('education_level')->nullable();
            $table->string('income')->nullable();
            $table->string('housing_status')->nullable();
            $table->string('vulnerabilities')->nullable();
            $table->timestamps();

            // $table->foreign('beneficiary_id')->references('id')->on('beneficiaries')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('beneficiary_social_economics');
    }
};
