<?php

namespace App\Http\Controllers;

use App\Models\Notes;
use App\Models\SubjectNotes;
use Illuminate\Http\Request;
use App\Models\AdminBranch;
use Illuminate\Support\Facades\Auth;
use Carbon\Carbon;

class SubjectNotesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {


        $name=$request->name;
        $branch=AdminBranch::all();
        $request->session()->put('subject', $name);
        $user_id=Auth::user()->id;
        $uploaded=Notes::where('user_id',$user_id)->where('subject',$name)->get();
        return view('teacher.teachernotes')->with('name',$name)->with('upload',$uploaded)->with('branch',$branch);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $notes=new Notes();
        $user_id=Auth::user()->id;
        $notes->subject=$request->subject;
        $notes->topic=$request->topic;
        if($request->hasfile('notes'))
        {
          $file = $request->file('notes');
          $extension = $file->getClientOriginalExtension(); // getting image extension
          $filename =time().'.'.$extension;
          $file->move('notes', $filename);
        }

        $notes->notes_file=$filename;
        $notes->description=$request->desc;
        $notes->user_id=$user_id;
        $notes->branch=$request->branch;
        $notes->date = Carbon::now()->format('Y-m-d');
        $notes->save();
        return redirect("subnotes/$notes->subject");

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\SubjectNotes  $subjectNotes
     * @return \Illuminate\Http\Response
     */
    public function show(SubjectNotes $subjectNotes)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\SubjectNotes  $subjectNotes
     * @return \Illuminate\Http\Response
     */
    public function edit(SubjectNotes $subjectNotes)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\SubjectNotes  $subjectNotes
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, SubjectNotes $subjectNotes)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\SubjectNotes  $subjectNotes
     * @return \Illuminate\Http\Response
     */
    public function destroy(SubjectNotes $subjectNotes)
    {
        //
    }
}
