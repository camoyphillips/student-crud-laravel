<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seeding the application's database.
     */
    public function run(): void
    {
        
        $this->call([
            StudentSeeder::class,
            CourseSeeder::class,
            ProfessorSeeder::class,
        ]);
    }
}
