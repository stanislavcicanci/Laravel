<?php

namespace App\Http\Controllers;

use App\Models\Student;

use Illuminate\Http\Request;

class StudentController extends Controller
{
    public function show(){
        $student = Student::all();
        return View('Student', compact('student'));
    }
}
