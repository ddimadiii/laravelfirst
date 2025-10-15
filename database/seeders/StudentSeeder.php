<?php
namespace Database\Seeders;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Student;
class StudentSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Student::create([
            'nama' => 'John Doe',
            'birthday' => '2000-01-01',
            'email' => 'john.doe@example.com',
            'address' => '123 Main St',
            'grade' => 'A'
        ]);

        Student::create([
            'nama' => 'Jane Smith',
            'birthday' => '1999-05-15',
            'email' => 'jane.smith@example.com',
            'address' => '456 Elm St',
            'grade' => 'B'
        ]);

        Student::create([
            'nama' => 'Alice Johnson',
            'birthday' => '2001-03-22',
            'email' => 'alice.johnson@example.com',
            'address' => '789 Pine St',
            'grade' => 'A'
        ]);

        Student::create([
            'nama' => 'Bob Brown',
            'birthday' => '1998-07-10',
            'email' => 'bob.brown@example.com',
            'address' => '321 Oak St',
            'grade' => 'C'
        ]);

        Student::create([
            'nama' => 'Charlie Green',
            'birthday' => '2002-11-05',
            'email' => 'charlie.green@example.com',
            'address' => '654 Maple St',
            'grade' => 'B'

        ]);
    }
}
