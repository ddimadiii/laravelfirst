<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    public function run(): void
    {
        // Urutan penting: subject dulu baru teacher
        $this->call([
            SubjectSeeder::class,
            TeacherSeeder::class,
            GuardianSeeder::class,
            ClassroomSeeder::class,
            StudentSeeder::class,
        ]);
    }
}
