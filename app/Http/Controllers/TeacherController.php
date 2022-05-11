<?php

namespace App\Http\Controllers;

use App\Models\AdminBranch;
use App\Models\AdminSubject;
use App\Models\TeacherDetail;
use App\Models\TeacherSubject;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class TeacherController extends Controller
{
    public function teacherdashboard()
    {
      return view('teacher.teacherdashboard');
    }
    public function addteacherdetail()
    {
        return view('teacher.addteacherdetail');
    }
    //teacherdetail
    public function teacherdetail(Request $req)
    {
        $user=Auth::user();
        $teacher=new TeacherDetail();
        $teacher->state=$req->state;
        $teacher->city=$req->City;
        $teacher->district=$req->District;
        $teacher->highest_qualification=$req->hq;
        $teacher->specialization=$req->Specialization;
        $teacher->experience=$req->Experience;
        $teacher->board=$req->board;
        $teacher->save();
        $users=User::where('rid',$user->rid)->first();
        $users->completeprofile="1";
        $users->update();
        return redirect('teacherdashboard');
    }
    public function TeacherAddNotes()
    {
        $sub=AdminSubject::all();
        $id=Auth::user()->id;
        $branch=AdminBranch::all();
        $ownSubject=TeacherSubject::where('user_id',$id)->get();
        return view('teacher.teacheraddnotes')->with('sub',$sub)->with('own',$ownSubject)->with('branch',$branch);

    }

    public function addteachersubject(Request $req)

    {
        $sub=AdminSubject::where('subject',$req->subject)->first();
        $code= $sub->subject_code;
        $add=new TeacherSubject();
        $add->user_id=$req->id;
        $add->subject_name=$req->subject;
        $add->subject_code=$code;
        $add->save();
        return redirect()->back();

    }
}
