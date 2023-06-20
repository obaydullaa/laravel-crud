<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class StudentController extends Controller
{
    //Load All Student
    function index(){
        return view('student.index');
    }
    
    // Create Student
    function create()  {
        return view('student.create');
    }

    // eddit Student
    function edit()  {
        return view('student.edit');
    }

    // show all Student
    function show()  {
        return view('student.show');
    }
}
