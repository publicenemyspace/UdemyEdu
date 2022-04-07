<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Course;

class CourseController extends Controller
{
    public function course_detail($id){ 
        $Course = Course::find($id);
        $category_id = $Course->category_id;
       
        
        $course_category = Course::where('category_id', $category_id)->get();
        
       
        return view('courses.course_detail', ['Course' => $Course, 'course_category' => $course_category]);
    }

}
