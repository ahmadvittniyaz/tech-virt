@extends('teacher/layout')
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
                    $date = Carbon::now()->format('Y-m-d');
                @endphp


                <div class="row" style="padding: 15px">


                    <table class="table">
                        <thead>
                            <tr>
                                <th><h3>Student Name</h3></th>
                                <th><h3>Date/Time</h3></th>
                                <th></th>
                                <th></th>


                                <th><h3>Action</h3></th>

                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($attendance as $item)

                            @if ($item->date==$date)




                            <tr>


                                <td>{{$item->user_name}}</td>
                                <td>{{$item->created_at}}</td>
                                <td></td>
                                <td></td>
                                @if ($item->present==0 && $item->absent==0 && $item->late==0)


                                <td><form action="{{route('attendanceAction')}}" method="POST">
                                    @csrf
                                            <input type="text" value="approve" name="approve" hidden>
                                            <input value="{{$item->id}}" name="id" hidden>
                                            <div class="col-md-4"><button class="btn btn-success">Approve</button></div>
                                    </form>
                                </td>
                                <td> <form action="{{route('attendanceAction')}}" method="POST">
                                    @csrf
                                    <input type="text" value="approve" name="absent" hidden>
                                    <input value="{{$item->id}}" name="id" hidden>
                                            <div class="col-md-4"><button class="btn btn-danger">Absent</div>
                                                </form>
                                </td>
                                <td>
                                    <form action="{{route('attendanceAction')}}" method="POST">
                                        @csrf
                                        <input type="text" value="approve" name="late" hidden>
                                        <input value="{{$item->id}}" name="id" hidden>
                                    <div class="col-md-4"><button class="btn btn-primary">Late</button></div>
                                    </form>
                                </td>
                                @else
                               <td>
                                  @if ($item->absend==1)
                                     <button class="btn btn-danger" disabled>Absent</button>

                                  @elseif ($item->present==1)
                                  <button class="btn btn-success" disabled>Present</button>

                                  @else
                                  <button class="btn btn-primary" disabled>Late</button>

                                  @endif
                                <td>

                                @endif




                                    </div>
                                <td>

                            </tr>

                            @endif

                            @endforeach
                        </tbody>
                    </table>

                </div>


            </div>

        <!-- /row -->
      </section>

@endsection
