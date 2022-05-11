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
                        <h2>Login</h2>
                        <!--contact Form-->
                        <form action="/login" method="POST">
                            @csrf
                            <div class="row clearfix">
                                <div class="col-md-12 col-sm-12 col-xs-12 form-group">
                                    <input type="text" name="rid" placeholder="Enter Registered Id" required>
                                </div>

                                <div class="col-md-12 col-sm-12 col-xs-12 form-group">
                                    <input type="password" name="psw" placeholder="Enter Password" required>
                                </div>



                                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 form-group">
                                    <button class="theme-btn btn-style-three" type="submit" name="submit-form">Login</button>
                                </div>

                            </div>
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
