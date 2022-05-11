@extends('layout')
@section('content')



<style>
    .outer-container{
        background: white;
    }
</style>


<!-- Mirrored from html.commonsupport.xyz/2018/Moran/contact.html by HTTrack Website Copier/3.x [XR&CO'2014], Sat, 09 May 2020 07:03:20 GMT -->




<div class="page-wrapper">

    @if(Session::has('msg'))

    <p class="alert
    {{ Session::get('alert-class', 'alert-info') }}">{{Session::get('msg') }}</p>

    @endif
    <!-- Preloader -->
    <div class="preloader"></div>

    <div class="header-span"></div>

    <!-- Main Header-->


    <!--End Main Header -->

    <!-- Hidden Navigation Bar -->

    <!-- End / Hidden Bar -->

    <!-- page title -->


    <!--Contact Section-->
    <section class="contact-section sp-three">
        <div class="auto-container">
            <div class="row clearfix">
                <!--Info Column-->


                <!--Form Column-->
                <div class="form-column col-md-8 col-sm-12 col-xs-12">

                    <!--Map Section-->
                    <section class="map-section">
                        <!--Map Outer-->
                        <div >
                            <img src="{{asset('images/1DDFE633-2B85-468D-B28D05ADAE7D1AD8_source.jpg')}}">
                        </div>

                    </section>
                    <!--End Map Section-->
                </div>
                <div class="col-md-7 col-md-offset-5 col-sm-12">
                    <!-- contact Form -->
                    <div class="contact-form">
                        <h2>Register</h2>
                        <!--contact Form-->
                        <form action="/register" method="POST">
                            @csrf
                                <div class="form-group">
                                    <label for="name">Name:</label>
                                    <input type="text" class="form-control" id="name" placeholder="Enter Name" name="name">
                                  </div>
                                <div class="form-group">
                                  <label for="email">Email:</label>
                                  <input type="email" class="form-control" id="email" placeholder="Enter email" name="email">
                                </div>
                                <div class="form-group">
                                    <label for="phone">Mobile:</label>
                                    <input type="text" class="form-control" id="mobile" placeholder="Enter Mobile" name="mobile">
                                  </div>
                                <div class="form-group">
                                  <label for="pwd">Password:</label>
                                  <input type="password" class="form-control" id="pwd" placeholder="Enter password" name="pwd">
                                </div>
                                <div class="form-group">
                                    <label for="pwd">Password:</label>
                                    <input type="password" class="form-control" id="pwd" placeholder="Enter password" name="pwd">
                                  </div>
                                  <div class="form-group">
                                    <label for="type">Type</label>


                                    <select  class="form-control" name="type">
                                        <option value="teacher" style="color: black">Teacher</option>
                                        <option value="student" style="color: black">Student</option>
                                    </select>
                                  </div>
                                <div class="checkbox">
                                  <label><input type="checkbox" name="remember"> Remember me</label>
                                </div>
                                <button type="submit" class="btn btn-default">Submit</button>
                              </form>


                    </div>
                    <!--End Contact Form -->
                </div>
            </div>
        </div>
    </section>
    <!--End Contact Section-->



    <!-- subscribe section -->

    @endsection
