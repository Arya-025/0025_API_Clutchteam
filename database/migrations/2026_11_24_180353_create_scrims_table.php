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
        Schema::create('scrims', function (Blueprint $table) {
    $table->id();
    $table->foreignId('team_id')->constrained()->cascadeOnDelete();
    $table->string('tim_lawan', 50);
    $table->dateTime('tanggal_waktu');
    $table->enum('format', ['BO1', 'BO3', 'BO5']);
    $table->enum('status', ['terjadwal', 'selesai', 'dibatalkan'])->default('terjadwal');
    $table->timestamps();
});
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('scrims');
    }
};
