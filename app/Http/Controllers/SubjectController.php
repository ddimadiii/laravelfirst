<?php

namespace App\Http\Controllers;

use App\Models\Subject;

class SubjectController extends Controller
{
    public function index()
    {
        // eager-load teacher jika ingin menampilkan pengampu
        $subjects = Subject::with('teacher')->get();

        return view('subject', [
            'title' => 'subject',
            'subjects' => $subjects
        ]);
    }
}
