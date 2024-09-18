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
    Schema::create('roles', function (Blueprint $table) {
      $table->id();
      $table->string('name')->unique();
    });

    if (Schema::hasTable('users')) {
      Schema::table('users', function (Blueprint $table) {
        $table->foreignId('role_id')->after('id')->constrained('roles')->cascadeOnDelete();
      });
    }
  }

  /**
   * Reverse the migrations.
   */
  public function down(): void
  {
    Schema::dropIfExists('roles');
  }
};
