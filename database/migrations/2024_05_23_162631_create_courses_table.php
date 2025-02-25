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
        Schema::create('courses', function (Blueprint $table) {
            $table->id();
            $table->uuid();
            $table->string('code')->unique();
            $table->string('name')->unique();
            $table->foreignId('semester_id')->constrained()->restrictOnUpdate()->restrictOnDelete();
            $table->foreignId('kelas_id')->constrained()->restrictOnUpdate()->restrictOnDelete();
            $table->foreignId('prodi_id')->constrained()->restrictOnUpdate()->restrictOnDelete();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('courses');
    }
};
