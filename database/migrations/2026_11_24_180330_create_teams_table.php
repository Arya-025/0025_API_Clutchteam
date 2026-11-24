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
        Schema::create('teams', function (Blueprint $table) {
    $table->id();
    $table->foreignId('captain_id')->constrained('users')->cascadeOnDelete();
    $table->string('nama', 50)->unique();
    $table->string('game', 50);
    $table->string('deskripsi', 255)->nullable();
    $table->string('logo_path', 255)->nullable();
    $table->timestamps();
});
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('teams');
    }
};
