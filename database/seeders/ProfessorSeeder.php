<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Professor;
use App\Models\Course;

class ProfessorSeeder extends Seeder
{
    public function run(): void
    {
        $courses = Course::all();

        
        if ($courses->count() === 0) {
            $courses = Course::factory()->count(10)->create();
        }

        // Assigning each course a professor for the lms.
        foreach ($courses as $course) {
            Professor::factory()->create([
                'course_id' => $course->id,
            ]);
        }
    }
}
