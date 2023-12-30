<?php

namespace App\Http\Controllers\Website;

use App\Http\Controllers\Controller;
use App\Models\Courses;
use Illuminate\Http\Request;

class WebsiteCourseController extends Controller
{
    function index(){
        $courses = Courses::query()->get();
        return view('website.course.index',compact('courses'));
    }

    function show($id){
        $course = Courses::query()->find($id);
        return view('website.course.show',compact('course'));
    }
}
