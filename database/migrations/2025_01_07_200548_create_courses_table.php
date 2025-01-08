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
            $table->unsignedBigInteger('curriculum_year');
            $table->string('code');
            $table->string('thai_name');
            $table->string('eng_name');
            $table->text('thai_description')->nullable();
            $table->text('eng_description')->nullable();
            $table->unsignedTinyInteger('credit');
            $table->unsignedTinyInteger('lecture_hours')->nullable();
            $table->unsignedTinyInteger('practice_hours')->nullable();
            $table->unsignedTinyInteger('self_study_hours')->nullable();
            $table->string('condition')->nullable();
            $table->softDeletes();
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
