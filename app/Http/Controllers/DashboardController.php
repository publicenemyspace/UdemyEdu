<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Course;
class DashboardController extends Controller
{
    public function dashboard()
    {
        return view('dashboard.dashboard');
    }

    public function add()
    {
        return view('dashboard.add');
    }

    public function mycourses()
    {
        return view('layouts.dashboard');
    }

    public function myprofile()
    {
        return view('layouts.dashboard');
    }

    
    public function addcourse (Request $request){ 

       
        
        if($request->hasFile('photo')){

            $fileNameWithExtphoto = $request->file('photo')->getClientOriginalName();
 
            $fileNamephoto = pathinfo($fileNameWithExtphoto, PATHINFO_FILENAME);
 
            $extensionphoto = $request->file('photo')->getClientOriginalExtension();
 
            $fileNameToStorephoto = $fileNamephoto.'_'.time().''.Str::random(5).'.'.$extensionphoto;
 
            $pathphoto = $request->file('photo')->storeAs('public/files', $fileNameToStorephoto); 
 
          }else{
 
              $fileNameToStorephoto = 'public/files/no_image.jpg';
                     }


                     if($request->hasFile('video')){

                        $fileNameWithExtvideo = $request->file('video')->getClientOriginalName();
             
                        $fileNamevideo = pathinfo($fileNameWithExtvideo, PATHINFO_FILENAME);
             
                        $extensionvideo = $request->file('video')->getClientOriginalExtension();
             
                        $fileNameToStorevideo = $fileNamevideo.'_'.time().''.Str::random(5).'.'.$extensionvideo;
             
                        $pathvideo = $request->file('video')->storeAs('public/files', $fileNameToStorevideo); 
             
                      }else{
             
                          $fileNameToStorevideo = 'public/files/no_video.mp4';
                                 }

        $Course = new Course;
        $Course->category_id = $request->input('category_id');
        $Course->title = $request->input('title');
        $Course->instructor = $request->input('instructor');
        $Course->accessibility = $request->input('accessibility');
        $Course->cost = $request->input('cost');
        $Course->description = $request->input('description');
        $Course->photo =  $fileNameToStorephoto;
        $Course->video =  $fileNameToStorevideo;
       
        $Course->save();

        return back();
                            
    }


}
