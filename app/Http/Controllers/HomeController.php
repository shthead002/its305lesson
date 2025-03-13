<?php

namespace App\Http\Controllers;

use App\Models\Student;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        $studs = Student::all();

        return view('welcome',[
            'studs' => $studs
        ]);
    }
}
