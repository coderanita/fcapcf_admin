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

            $table->unsignedBigInteger('region_id')->nullable();
            $table->unsignedBigInteger('country_id')->nullable();
            $table->unsignedBigInteger('state_id')->nullable();
            $table->string('project_name')->nullable();
            $table->text('project_details')->nullable();
            $table->date('start_date')->nullable();
            $table->date('end_date')->nullable();
            $table->decimal('project_cost', 15, 2)->nullable();
            $table->string('project_target')->nullable();
            $table->boolean('allow_phone')->default(false);
            $table->boolean('allow_email')->default(false);
            $table->string('project_status_id')->nullable();

            $table->json('invited_teams')->nullable();
            
            $table->json('files')->nullable();

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
