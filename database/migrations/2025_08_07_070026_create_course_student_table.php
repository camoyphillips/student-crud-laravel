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
        Schema::create('course_student', function (Blueprint $table) {
            $table->id();

            // Foreign key to students table for lms.
            $table->foreignId('student_id')
                  ->constrained()
                  ->onDelete('cascade');

            // Foreign key to courses table for lms.
            $table->foreignId('course_id')
                  ->constrained()
                  ->onDelete('cascade');

            $table->timestamps();

        
            $table->unique(['student_id', 'course_id']);
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('course_student');
    }
};
