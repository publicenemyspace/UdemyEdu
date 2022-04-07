
@extends('layouts.dashboard')

@section('content')

            <div class="row justify-content-center">
                <div class="col-lg-8">
                    <div class="contact-inner">
                        <form class="contact-form" action="/dashboard/addcourse" method="POST" enctype="multipart/form-data">
                        @csrf
                        <div class="single-input-wrap">
                                <input type="text" name="title" placeholder="Enter Course Title">
                            </div>
                        <div class="single-input-wrap">
                                <input type="text" name="instructor" placeholder="Enter Course Instructor">
                            </div>
                            <div class="single-input-wrap">
                                <input type="text" name="instructor" placeholder="Enter Instructor">
                            </div>

                            <select class="form-control" name="category_id" id="" >
                            <option disabled selected>Course Category</option>
                                <option value="Programming"> Programming</option>
                                <option value="Crypto"> Crypto</option>
                                <option value="Forex"> Forex</option>
                            </select>
                            <br>
                            <select class="form-control" name="accessibility" id="" >
                            <option disabled selected>Select accessibliity</option>
                                <option value="paid"> Paid</option>
                                <option value="free"> Free</option>
                            </select>
                            <br>
                            <div class="single-input-wrap">
                                <input type="number" name="cost" placeholder="Enter Cost">
                            </div>
                            <div class="single-input-wrap">
                               Course photo: <input type="file" name="photo">
                            </div>
                            <div class="single-input-wrap">
                               Course video: <input type="file" name="video">
                            </div>
                            <div class="single-input-wrap">
                                <textarea rows="5" name="description" placeholder="Enter Description...."></textarea>
                            </div>                                    
                            <button type="submit" name="submit" class="btn btn-base w-100">Submit your project</button>
                        </form>
                    </div>
                </div>
            </div>

            @endsection