<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Course;
use App\Lesson;

class CourseController extends Controller
{
    public function index()
    {
        $courses = Course::latest()->get();
        return view('courses/index', ['courses' => $courses]);
    }

    public function show($url)
    {
        $course = Course::where('url','=',$url)->first();
        $lessons = Lesson::where('course_id','=',$course->id)->get();
        return view('courses/details', ['course' => $course, 'lessons'=>$lessons]);
    }
}
