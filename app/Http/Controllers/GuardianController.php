<?php

namespace App\Http\Controllers;

use App\Models\Guardian;

class GuardianController extends Controller
{
    public function index()
    {
        $guardians = Guardian::all();

        return view('guardian', [
            'title' => 'guardian',
            'guardians' => $guardians
        ]);
    }
}
