<?php

namespace App\Http\Controllers;

use App\Models\Classroom;

class ClassroomController extends Controller
{
    public function index()
    {
        $classrooms = Classroom::all();

        return view('classroom', [
            'title' => 'classroom',
            'classrooms' => $classrooms
        ]);
    }
}
