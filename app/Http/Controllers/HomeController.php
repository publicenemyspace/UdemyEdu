<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Course;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {

        $Course = Course::where('category_id', 'Programming')->get();//programming courses
        $crypto_courses = Course::where('category_id', 'Crypto')->get();
        $forex_courses = Course::where('category_id', 'Forex')->get();

       
        return view('welcome', ['Course' => $Course, 'crypto_courses' => $crypto_courses, 'forex_courses' => $forex_courses]);       
            
           }
    
}
