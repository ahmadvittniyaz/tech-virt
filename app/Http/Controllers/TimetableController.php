<?php

namespace App\Http\Controllers;

use App\Models\Timetable;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\AdminBranch;
use App\Models\StudyEvent;
use App\Models\AdminSubject;
use Auth;


class TimetableController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function timetable()
    {
    	$users = DB::table('timetables')->select('id','subject_name','time','branch','subject_code','subject_teacher','class_url')->get();
        return view('student.timetable', compact('users'));
       
    }
    
    public function addStudy()
    {
        $sub=AdminSubject::all();
          $branch=AdminBranch::all();

        return view('teacher.studyEvent')->with('sub',$sub)->with('branch',$branch);
    }
    
    public function addEvent(Request $req)
    {
        $study=new StudyEvent();
        $study->teacher_id=Auth::user()->id;
        $study->teacher_name=Auth::user()->name;
        $study->subject=$req->sub;
        $study->dateTimeEvent=$req->mytime;
        $study->zlink=$req->zlink;
        $study->mlink=$req->mlink;
        $study->description=$req->desc;
        $study->branchName=$req->branch;
        $study->save();
        return redirect()->back()->with('msg',"Event Added!!");

    }
    public function allEvent()
    {
        $event=StudyEvent::where('teacher_id',Auth::user()->id)->get();
        return view('teacher.event')->with('event',$event);
    }
}
