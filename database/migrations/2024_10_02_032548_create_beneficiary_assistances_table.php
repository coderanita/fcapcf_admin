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
        Schema::create('beneficiary_assistances', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('beneficiary_id');
            $table->string('type_of_assistance')->nullable();
            $table->string('previous_assistance')->nullable();
            $table->string('health_status')->nullable();
            $table->string('skills_or_training')->nullable();
            $table->string('geographical_location')->nullable();
            $table->string('ethnicity_tribe')->nullable();
            $table->string('religion')->nullable();
            $table->string('referring_organization')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('beneficiary_assistances');
    }
};
