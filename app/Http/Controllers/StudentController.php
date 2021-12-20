<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Student;

class StudentController extends Controller
{
    public function index()
    {
        $students = Student::latest()->get();
        return view('students/index', ['students' => $students]);
    }

    public function show($id)
    {
        $student = Student::findOrFail($id);
        return view('students/details', ['student' => $student]);
    }
}
