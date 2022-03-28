<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CategoryController extends Controller
{
    public function development(){
        return view('development');
    }

    public function crypto(){
        return view('crypto');
    }

    public function forex(){
        return view('forex');
    }

    public function programming(){
        return view('programming');
    }

    public function become_an_instructor(){
        return view('become_an_instructor');
    }

    public function instructor(){
        return view('instructor');
    }

    public function single_instructor(){
        return view('single_instructor');
    }

   

    

}
