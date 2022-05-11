<?php

namespace App\Http\Controllers;

use App\Models\Attendance;
use Illuminate\Support\Facades\Auth;
use App\Models\User;
use Illuminate\Http\Request;
use Carbon\Carbon;

class AttendanceController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function attendance()
    {
        $user=Auth::User();
        return view('student.attendance')->with('auth',$user);
    }
    public function SendAttendance(Request $req)
    {
        $attendence=new Attendance();
        $attendence->user_id=$req->user_id;
        $attendence->user_name=$req->user_name;
        $attendence->date=$req->date;
        $attendence->save();
        $req->session()->put('button', '1');
        return redirect('attendance');
    }
    public function TeacherAttendance()
    {
        $attendance=Attendance::all();
        return view('teacher.attendance')->with('attendance',$attendance);
    }

    public function attendanceAction(Request $req)
    {

        $date = Carbon::now()->format('Y-m-d');
        $attendance=Attendance::where('id',$req->id)->where('date',$date)->first();


        if($req->approve)
        {
          $attendance->present=1;
          $attendance->update();
        }
        elseif($req->absent)
        {
            $attendance->absent=1;
            $attendance->update();
        }
        else{
            $attendance->late=1;
            $attendance->update();
        }
        return redirect()->back();

    }

}
