@extends('teacher/layout')
@section('page_title','Chat')

@section('student_name','Student')
@section('dashboard_select','active')

@section('container')
<style>

div.scroll {
  background-color: #fed9ff;
  width: 100%;
  height: 650px;
  overflow-x: hidden;
  overflow-y: auto;
 
}
   
#msgbox{
  margin-left: 20px;
}
 .send{
  margin-left: 65%;
  width: 200px;
 
  border-top-right-radius: 20px;
  border-top-left-radius: 20px;
  border-bottom-left-radius: 20px;
  color: white;
  padding: 15px;
  background-color: hotpink;
 }
 .receiver{
  width: 200px;
 
  border-top-right-radius: 20px;
  border-top-left-radius: 20px;
  border-bottom-right-radius: 20px;
  color: white;
  padding: 15px;
  background-color: blue;
 }
  form input{
      background: #eee;
      padding: 16px;
      margin: 8px 0;
      width: 85%;
      border: 0;
      outline: none;
      border-radius: 20px;
      box-shadow: inset 7px 2px 10px #babebc,
                  inset -5px -5px 12px #fff;
  }
  button{
      border-radius: 20px;
      border: none;
      outline: none;
      font-size: 12px;
      font-weight: bold;
      padding: 15px 45px;
      margin: 14px;
      letter-spacing: 1px;
      text-transform: uppercase;
      cursor: pointer;
      transition: transform 80ms ease-in;
  }
  .form_btn{
      box-shadow: -5px -5px 10px #fff,
                  5px 5px 8px #babebc;
   
  }
  .form_btn:active{
      box-shadow: inset 1px 1px 2px #babebc,
                  inset -1px -1px 2px #fff;
  }
  .overlay_btn{
      background-color: blue;
      color: #fff;
      box-shadow: -5px -5px 10px #1f1a27,
                  5px 5px 8px #b650b6;
                  }
  .sign-in-container{
      position: absolute;
      left: 0;
      width: 50%;
      height: 100%;
      transition: all 0.5s;
  }   
  .sign-up-container{
      position: absolute;
      left: 0;
      width: 50%;
      height: 100%;
      opacity: 0;
      transition: all 0.5s;
  }  
  .overlay-left{
      display: flex;
      flex-direction: column;
      padding: 0 50px;
      justify-content: center;
      align-items: center;
      position: absolute;
      right: 0;
      width: 50%;
      height: 100%;
      opacity: 0;
      background-color: #b650b6;
      color: #fff;
      transition: all 0.5s;
  }   
  .p{
    margin-top: -10px;
    font-size: 10px;
  } 
  .p.right{
    margin-left: 65%;
  }  
  .overlay-right{
      display: flex;
      flex-direction: column;
      padding: 0 50px;
      justify-content: center;
      align-items: center;
      position: absolute;
      right: 0;
      width: 50%;
      height: 100%;
      background-color: #b650b6;
      color: #fff;
      transition: all 0.5s;
  }  

#bottom {
background-color:#DADADA;
height:50px;
padding:10px;
border-top:1px solid #ABABAB;
position:fixed;
left:0;
bottom:0;
width:100%
}
.head{
  background-color: #4ECDC4;
  padding: 5px;
  margin-bottom: 10px;
  margin-top: 10px;
}
.head h2{
  text-transform: uppercase;
  font-weight: 900;
  font-size: 20px;
  color: white;
}
</style>
<div class="main">
<div class="head" style="display:flex;">
<img src="{{asset('user_image')}}/{{$reciever->image_name}}" style="width:45px;height:45px;border-radius: 50%;">
<h2 style="margin-left: 25px;">Chat With {{$reciever->name}}</h2>
</div>
<ul id="mymsg">
	
</ul>

<form id="sendMessageForm" action="{{route('sendMessage')}}">
	@csrf

<input type="text" name="reciever_id" value="{{$reciever->id}}" hidden>
<div class="row head" >
<div class="col-md-8" >
<input type="text"  id="msgbox" name="message" placeholder="Please enter message" required="Please enter message first!!">
</div>
<div class="col-md-4">
<button type ="submit" class="form_btn">Send</button>
</div>
</div>
</form>
</div>
<script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
<script>
	 // this is the id of the form
$("#sendMessageForm").submit(function(e) {

    e.preventDefault(); // avoid to execute the actual submit of the form.

    var form = $(this);
    var url = form.attr('action');
    
    $.ajax({
           type: "POST",
           url: url,
           data: form.serialize(), // serializes the form's elements.
           success: function(data)
           {
               ///alert(data); // show response from the php script.
               document.getElementById('msgbox').value="";
               getMessages();
           }
         });

    
});



function getMessages() {
  var xhttp;
  if (window.XMLHttpRequest) {
    // code for modern browsers
    xhttp = new XMLHttpRequest();
    } else {
    // code for IE6, IE5
    xhttp = new ActiveXObject("Microsoft.XMLHTTP");
  }
  xhttp.onreadystatechange = function() {
    if (this.readyState == 4 && this.status == 200) {
      //alert();
     document.getElementById('mymsg').innerHTML=this.responseText;
   
    }
  };
  xhttp.open("GET", "{{route('getMessages')}}?receiver_id="+{{$reciever->id}}, true);
  xhttp.send();
}

getMessages();
setInterval('getMessages()',3000);
</script>

@endsection