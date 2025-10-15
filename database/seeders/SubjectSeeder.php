<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Subject;
class SubjectSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
        Subject::create(['name' => 'Mathematics']);
        Subject::create(['name' => 'Physics']);
        Subject::create(['name' => 'Chemistry']);
        Subject::create(['name' => 'Biology']);
        Subject::create(['name' => 'English']);
    }
}
