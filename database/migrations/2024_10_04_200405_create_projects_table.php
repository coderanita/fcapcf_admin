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
        Schema::create('projects', function (Blueprint $table) {
            $table->id();
            $table->string('plan')->nullable();
            $table->unsignedBigInteger('customer_id')->nullable();
            $table->string('name')->nullable();
            $table->text('details')->nullable();
            $table->date('date')->nullable();

            $table->boolean('allow_phone')->default(false);
            $table->boolean('allow_email')->default(false);

            $table->json('invited_teams')->nullable();
            $table->json('files')->nullable();

            $table->string('status')->default('In Progress')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('projects');
    }
};
