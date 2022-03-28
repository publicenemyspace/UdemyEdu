<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function dashboard()
    {
        return view('layouts.dashboard');
    }

    public function dashboardpage()
    {
        return view('dashboardpage');
    }

    public function add()
    {
        return view('add');
    }

    public function mycourses()
    {
        return view('layouts.dashboard');
    }

    public function myprofile()
    {
        return view('layouts.dashboard');
    }

}
