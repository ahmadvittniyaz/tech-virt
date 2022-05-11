<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Chat;
use Auth;
use Response;

class ChatController extends Controller
{
    //
    public function index()

    {
        $user=Auth::User();
        if($user->type=="teacher")
        {
              $teachers=User::where('type','student')->get();
              return view('teacher.chatindex')->with('teachers',$teachers);
        }
        //send all teacher from teacher model or usermodels
        $teachers=User::where('type','teacher')->get();
        return view('student.chatindex')->with('teachers',$teachers);
      
    }

    public function chat(Request $req){
          
         $user=Auth::User();
        if($user->type=="teacher")
        {
        $reciever=User::where('type','student')->where('id',$req->id)->first();
        return view('teacher.chat')->with('reciever',$reciever);
    }
     $reciever=User::where('type','teacher')->where('id',$req->id)->first();
        return view('student.chat')->with('reciever',$reciever);

    }
    public function sendMessage(Request $req)

    {
      $chat=new Chat();
      $chat->sid=Auth::User()->id;
      $chat->rid=$req->reciever_id;
      $chat->message=$req->message;
      $chat->save();
      return Response::json($chat);


    }
    public function getMessage(Request $req)
    {

      $messages=Chat::where(['sid'=>Auth::User()->id,'rid'=>$_GET['receiver_id']])->orWhere(['sid'=>$_GET['receiver_id'],'rid'=>Auth::User()->id])->get();
       
       foreach($messages as $msg)
       {
        if($msg->sid==Auth::User()->id){
             echo '<li class="send">'.$msg->message.'</li><br>
             <p class="p right">'.$msg->created_at.'</p>';
        }else{
         echo '<li class="receiver">'.$msg->message.'</li><br>
         <p class="p">'.$msg->created_at.'</p>';
             }
        }
        
       }
       

    
}
