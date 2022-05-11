<?php

namespace App\Http\Controllers;

use App\Models\StudentProfile;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class StudentProfileController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function profile()
    {
       // $users = DB::table('users')->select('id','subject_name','branch','Standard','subject_code','subject_notes')->get();
        return view('student.profile');
    }

    public function changeprofile(Request $request)
    {

        $user=User::where('id',$request->id)->first();
        echo $user;
      if($request->hasfile('profile'))
{
  $file = $request->file('profile');
  $extension = $file->getClientOriginalExtension(); // getting image extension
  $filename =time().'.'.$extension;
  $file->move('user_image', $filename);
}
$user->image_name=$filename;
$user->update();
return redirect()->back();
    }

}
