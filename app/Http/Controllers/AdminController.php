<?php

namespace App\Http\Controllers;

use App\Models\AdminBranch;
use App\Models\AdminCourse;
use App\Models\AdminSubject;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    //
    public function Adminsubject()
    {
          $sub=AdminSubject::all();
          return view('admin.subject')->with('subject',$sub);
    }
    public function addsubject(Request $req)
    {
       $sub=new AdminSubject();
       $sub->subject=$req->sub;
       $sub->subject_code=$req->subcode;

       $sub->save();
       return redirect()->back();


    }

    public function delsubject(Request $req)
    {

        $id=$req->id;
        $sub=AdminSubject::find($id)->delete();
        return redirect()->back();

    }

    public function Admincourse()
    {
      $course=AdminCourse::all();
      return view('admin.course')->with('course',$course);
    }
    public function Adminbranch()
    {
      $course=AdminCourse::all();
      $branch=AdminBranch::all();
      return view('admin.branch')->with('course',$course)->with('branch',$branch);
    }

    public function addcourseAdmin(Request $req)
    {
       $course=New AdminCourse();
       $course->fn_course=$req->fname;
       $course->sn_course=$req->sname;
       $course->save();
       return redirect()->back()->with('msg','Course Added!!');
    }
    public function addbranchAdmin(Request $req)
    {
       $course=New AdminBranch();
       $course->fbranch_name=$req->fname;
       $course->sbranch_name=$req->sname;
       $course->course_name=$req->course;
       $course->save();
       return redirect()->back()->with('msg','Branch Added!!');
    }
    public function delbranch(Request $req)
    {
        $branch=AdminBranch::find($req->id)->delete();
        return redirect()->back();
    }

}
