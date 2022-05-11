<?php

namespace App\Http\Controllers;

use App\Models\AdminBranch;
use App\Models\AdminCourse;
use App\Models\StudentDetail;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class StudentController extends Controller
{
    //
    public function studentdeshboard()
    {
        return view('student.student_deshboard');
    }
    public function addstudentdetail()
    {
        $course=AdminCourse::all();
        $branch=AdminBranch::all();

        return view('student.addstudentdetail')->with('course',$course)->with('branch',$branch);
    }

    public function studentdetail(Request $req)
    {
        $user=Auth::user();
        $stu=new StudentDetail();
        $stu->state=$req->state;
        $stu->city=$req->City;
        $stu->pincode=$req->pincode;
        $stu->collegecode=$req->collegecode;
        $stu->college=$req->college;
        $stu->rid=$user->rid;
        $stu->branch=$req->branch;
        $stu->course=$req->course;
        $stu->board=$req->board;
        $stu->year=$req->year;
        $stu->standard=$req->standard;
        $stu->user_id=$user->id;
        $stu->save();
        $users=User::where('rid',$user->rid)->first();
        $users->completeprofile="1";
        $users->update();
        return redirect('studentdeshboard');

    }
}
