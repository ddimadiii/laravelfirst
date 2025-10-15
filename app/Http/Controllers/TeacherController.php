<?php

namespace App\Http\Controllers;

use App\Models\Teacher;
use Illuminate\Http\Request;

class TeacherController extends Controller
{
    public function index()
    {
        // eager-load subject untuk mencegah N+1
        $teachers = Teacher::with('subject')->get();

        return view('teacher', [
            'title' => 'teacher',
            'teachers' => $teachers
        ]);
    }
}
