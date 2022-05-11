@extends('student/layout')
@section('page_title','Chat')

@section('student_name','Student')
@section('dashboard_select','active')

@section('container')
<style>
#ul li{
	list-style: none;
   border: 2px solid #1a2d40;
    margin-top: 10px;
    padding: 10px;
    width: 50%;
     background: #1a2d40;
    border-top-right-radius: 15px;
    border-bottom-right-radius: 15px;
    transition: 2s;
}
#ul li:hover{
 
   background: white;
    margin-top: 3px;
     border: 2px solid #1a2d40;
  

}
#ul li:hover a{
  color:#1a2d40;
}
#ul li a{
    text-transform: uppercase;
  font-weight: 900;
  font-size: 20px;
  color: white;
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
<div class="head">
<h2>Chat With Teacher </h2>
</div>
<ul id="ul">
@php $i=1 @endphp
@foreach($teachers as $teacher)
@if($i%2==0)

<li  data-aos="flip-left"><a href="{{route('chat',['id'=>$teacher->id])}}">{{$teacher->name}}
  <img src="{{asset('images/chat.png')}}" style="height:40px;float: right;"></a></li>
@php $i++ @endphp
@else
<li  data-aos="flip-right"><a href="{{route('chat',['id'=>$teacher->id])}}">{{$teacher->name}}
  <img src="{{asset('images/chat.png')}}" style="height:40px;float: right;"></a></li>
  @php $i++ @endphp
@endif
@endforeach
</ul>
@endsection