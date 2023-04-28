<?php

namespace App\Http\Controllers;

use App\Models\Course;
use App\Models\Exam;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        $courses =Course::get();
        $courseCount = count(Course::get());
        $examCount = count(Exam::get());

        return view('dashboard.index',compact('courses','courseCount','examCount')
    );
    }
}
