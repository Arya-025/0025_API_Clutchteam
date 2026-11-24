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
        Schema::create('scrim_notes', function (Blueprint $table) {
    $table->id();
    $table->foreignId('scrim_id')->constrained()->cascadeOnDelete();
    $table->foreignId('author_id')->constrained('users')->cascadeOnDelete();
    $table->string('judul', 100);
    $table->text('isi');
    $table->timestamps();
});
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('scrim_notes');
    }
};
