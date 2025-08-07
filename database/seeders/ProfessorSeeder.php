<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Professor;

class ProfessorSeeder extends Seeder
{
    /**
     * Seed the professors table with 10 fake records.
     */
    public function run(): void
    {
        Professor::factory()->count(10)->create();
    }
}
