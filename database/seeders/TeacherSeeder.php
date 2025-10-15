<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Teacher;
use App\Models\Subject;

class TeacherSeeder extends Seeder
{
    public function run(): void
    {
        // Kosongkan tabel teachers sebelum isi ulang
        Teacher::truncate();

        // Ambil semua subject
        $subjects = Subject::all();

        // Buat 1 teacher untuk setiap subject
        $subjects->each(function ($subject) {
            Teacher::factory()->create([
                'subject_id' => $subject->id,
            ]);
        });
    }
}
