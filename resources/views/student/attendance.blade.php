@extends('student/layout')
@section('page_title','Attendance')
@section('attendance_select','active')
@section('container')

  <section class="wrapper">
        <div class="border-head">
              <h3>Attendance</h3>

            </div>
            <div class="container" style="background:white;padding:10px">

                @php
                    use Carbon\Carbon;
                     $Date = Carbon::now()->format('Y-m-d');
                @endphp

                <div class="row" style="padding: 15px">
                    <form action="{{route('SendAttendance')}}" method="POST">
                        @csrf
<div class="col-md-4">
                    <th scope="col"><h3>Today Attendence</h3></th>
</div>
<div class="col-md-4 mt-5">
                    <th scope="col-md-4"><input value="{{$Date}}" style="width:200px;margin-top:10px;padding:10px;" class="col-md-3 form-control mt-5" readonly></th>
</div>
                    <input value="{{$auth->id}}" name="user_id" hidden>
                    <input value="{{$Date}}" name="date" hidden>
                    <input value="{{$auth->name}}" name="user_name" hidden>

<div class="col-md-4 mt-5">
    @if(Session::has('button'))
    <button class="btn" style="margin-top:10px;padding:10px;color:white;background: #286ed6;

    "> Attendence Request Send <i class="fa fa-hourglass-end"></i></button>
    @else

    <button class="btn" style="margin-top:10px;padding:10px;color:white;background: #ca354e;

    ">Mark Your Attendence <i class="fa fa-file-import"></i></button>

    @endif




                </div>
                    </form>
                </div>


            </div>
            <div class="custom-bar-chart" style="margin-top: 20px">
                <h3>Record</h3>
                <hr>
              <ul class="y-axis">
                <li><span>10.000</span></li>
                <li><span>8.000</span></li>
                <li><span>6.000</span></li>
                <li><span>4.000</span></li>
                <li><span>2.000</span></li>
                <li><span>0</span></li>
              </ul>
              <div class="bar">
                <div class="title">JAN</div>
                <div class="value tooltips" data-original-title="8.500" data-toggle="tooltip" data-placement="top">85%</div>
              </div>
              <div class="bar ">
                <div class="title">FEB</div>
                <div class="value tooltips" data-original-title="5.000" data-toggle="tooltip" data-placement="top">50%</div>
              </div>
              <div class="bar ">
                <div class="title">MAR</div>
                <div class="value tooltips" data-original-title="6.000" data-toggle="tooltip" data-placement="top">60%</div>
              </div>
              <div class="bar ">
                <div class="title">APR</div>
                <div class="value tooltips" data-original-title="4.500" data-toggle="tooltip" data-placement="top">45%</div>
              </div>
              <div class="bar">
                <div class="title">MAY</div>
                <div class="value tooltips" data-original-title="3.200" data-toggle="tooltip" data-placement="top">32%</div>
              </div>
              <div class="bar ">
                <div class="title">JUN</div>
                <div class="value tooltips" data-original-title="6.200" data-toggle="tooltip" data-placement="top">62%</div>
              </div>
              <div class="bar">
                <div class="title">JUL</div>
                <div class="value tooltips" data-original-title="7.500" data-toggle="tooltip" data-placement="top">75%</div>
              </div>
          <!-- page end-->
        </div>
        <!-- /row -->
      </section>

@endsection
