@extends('student/layout')
@section('page_title','Time Table')
@section('timetable_select','active')
@section('container')

<section class="wrapper">
        <h3><i class="fa fa-angle-right"></i> Time Table</h3>
        <div class="row mb">
          <!-- page start-->
          <div class="content-panel">
            <div class="adv-table">
              <table cellpadding="0" cellspacing="0" border="0" class="display table table-bordered" id="hidden-table-info">
                <thead>
                  <tr>
                  	<th>S No.</th>
                    <th>Subject Name</th>
                  
                    <th class="hidden-phone">Time</th>
                    <th class="hidden-phone">Subject Code</th>
                    <th class="hidden-phone">Subject Teacher</th>
                    <th class="hidden-phone">Class URL</th>
                  </tr>
                </thead>
                <tbody>
                 @foreach($users as $user)
    
                  <tr class="gradeX">
                    <td>{{ $user->id }}</td>
                    <td>{{ $user->subject_name }}</td>
                    <td class="hidden-phone">{{ $user->time }}</td>
                    
                    <td class="center hidden-phone">{{ $user->subject_code }}</td>
                    <td class="center hidden-phone"> {{ $user->subject_teacher }}</td>
                     <td class="center hidden-phone"><a href="" >{{ $user->class_url }}</a></td>

                  </tr>
                  @endforeach      
                 
                </tbody>
              </table>
            </div>
          </div>
          <!-- page end-->
        </div>
        <!-- /row -->
      </section>

@endsection