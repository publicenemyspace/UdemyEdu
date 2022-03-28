
@extends('layouts.dashboard')

@section('content')

            <div class="row justify-content-center">
                <div class="col-lg-8">
                    <div class="contact-inner">
                        <form class="contact-form">
                            <div class="single-input-wrap">
                                <input type="text" placeholder="Enter Your Full Name">
                            </div>
                            <div class="single-input-wrap">
                                <input type="text" placeholder="Enter Your Email Address">
                            </div>
                            <div class="single-input-wrap">
                                <textarea rows="5" placeholder="Enter Your Project Details...."></textarea>
                            </div>                                    
                            <button type="submit" class="btn btn-base w-100">Submit your project</button>
                        </form>
                    </div>
                </div>
            </div>

            @endsection