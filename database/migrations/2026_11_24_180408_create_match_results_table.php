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
       Schema::create('match_results', function (Blueprint $table) {
    $table->id();
    $table->foreignId('scrim_id')->unique()->constrained()->cascadeOnDelete();
    $table->unsignedTinyInteger('skor_tim');
    $table->unsignedTinyInteger('skor_lawan');
    $table->enum('hasil', ['menang', 'kalah', 'seri']);
    $table->string('screenshot_path', 255)->nullable();
    $table->timestamps();
});
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('match_results');
    }
};
