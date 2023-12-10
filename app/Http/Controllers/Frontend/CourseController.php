<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class CourseController extends Controller
{
    function index() {
        return view('frontend.course.index');
    }

    function show($id) {
        return view('frontend.course.show', compact('id'));
    }
}
