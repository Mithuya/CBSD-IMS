<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        // $courses =Course::get();
        // $courseCount = count(Course::get());
        // $examCount = count(Exam::get());

        return view('dashboard.index',
        // compact('courses','studentCount','staffCount','courseCount','examCount')
    );
    }
}
