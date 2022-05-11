<?php

namespace App\Http\Controllers;

use App\Models\AdminSubject;
use App\Models\Studentsubject;
use App\Models\Subject;
use App\Models\Notes;
use App\Models\User;
use App\Models\StudentDetail;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class SubjectController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function subject()
    {
       $sub=AdminSubject::all();
       $id=Auth::user()->id;
       $ownSubject=Studentsubject::where('user_id',$id)->get();
        return view('student.subject')->with('sub',$sub)->with('own',$ownSubject);

      //  return view('student.subject');
    }

    public function addstudentsubject(Request $req)
    {
        $sub=AdminSubject::where('subject',$req->subject)->first();
        $code= $sub->subject_code;
        $check=Studentsubject::where([['user_id',$req->id],['subject_name',$req->subject]])->first();
        if($check)
        {
            return redirect()->back()->with('msg','Already Added');
        }
        $add=new Studentsubject();
        $add->user_id=$req->id;
        $add->subject_name=$req->subject;
        $add->subject_code=$code;
        $add->save();
        return redirect()->back()->with('msg','Addded');

    }
    public function studentsubnotes(Request $req)
    { 
      $id=Auth::user()->id;
        $exist=StudentDetail::where('user_id',$id)->doesntExist();
        if(!$exist){
        $branch= StudentDetail::select('branch')->where('user_id',$id);


        $name=$req->name;
        $notes=Notes::where('subject',$req->name)->where('branch',$branch)->get();
        $req->session()->put('subject', $name);
        return view('student.subject_notes')->with('note',$notes)->with('name',$name);



    }
    else
    {
        return redirect()->back();
    }
}
    /*public function download(){
    $downloads=DB::table('subjects')->get();
  return view('student.subject', compact('downloads'));-->*/

}
