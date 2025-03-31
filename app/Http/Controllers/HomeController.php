<?php

namespace App\Http\Controllers;

use App\Models\Status;
use App\Models\Student;
use App\Models\Suffix;
use App\Models\YearLevel;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        $studs = Student::whereIn('status_id', [1,3,4,5])->get();

        return view('welcome', [
            'studs' => $studs
        ]);
    }

    public function create()
    {
        $suffixes = Suffix::all();
        $year_levels = YearLevel::all();
        $statuses = Status::all();

        return view('create', [
            'suffixes' => $suffixes,
            'year_levels' => $year_levels,
            'statuses' => $statuses
        ]);
    }

    public function store(Request $request)
    {
        $request->validate([
            'first_name' => 'required',
            'middle_name' => 'nullable',
            'last_name' => 'required',
            'suffix_id' => 'nullable',
            'contact_no' => 'required',
            'email' => 'required',
            'address' => 'required',
            'year_level_id' => 'required',
            'status_id' => 'required'
        ]);

        $stud_check = Student::where('first_name', $request->first_name)->where('last_name', $request->last_name)->get();

        if (count($stud_check) != 0) {
            dd('Student Exists');
        } else {
            Student::create($request->all());
        }

        return redirect()->route('student.index');
    }

    public function edit(Student $student)
    {
        $suffixes = Suffix::all();
        $year_levels = YearLevel::all();
        $statuses = Status::all();

        return view('create', [
            'suffixes' => $suffixes,
            'year_levels' => $year_levels,
            'statuses' => $statuses,
            'student' => $student
        ]);
    }

    public function update(Request $request, Student $student)
    {
        $request->validate([
            'first_name' => 'required',
            'middle_name' => 'nullable',
            'last_name' => 'required',
            'suffix_id' => 'nullable',
            'contact_no' => 'required',
            'email' => 'required',
            'address' => 'required',
            'year_level_id' => 'required',
            'status_id' => 'required'
        ]);
        
        $student->update($request->all());

        return redirect()->route('student.index');
    }

    public function destroy(Student $student)
    {
        $student->update([
            'status_id' => 2
        ]);

        return redirect()->back();
    }
}
