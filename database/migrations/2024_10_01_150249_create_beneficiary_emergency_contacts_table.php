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
        Schema::create('beneficiary_emergency_contacts', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('beneficiary_id');
            $table->string('full_name');
            $table->string('telephone');
            $table->unsignedBigInteger('relationship_id');
            $table->text('home_address');
            $table->timestamps();

            $table->foreign('beneficiary_id')->references('id')->on('beneficiaries')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('beneficiary_emergency_contacts');
    }
};
