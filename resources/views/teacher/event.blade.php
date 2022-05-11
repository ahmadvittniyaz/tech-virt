@extends('teacher/layout')
@section('page_title','Profile')

@section('container')
<style>
.head h2{
  text-transform: uppercase;
  font-weight: 900;
  font-size: 20px;
  color: white;
}
h2{
  text-transform: uppercase;
  font-weight: 900;
  font-size: 20px;
  color: grey;
}
a{
	font-size: 15px;
	margin-top: 10px;
	 font-weight: 700;
	margin-left: 20px;
}
img{
	height: 50px;
	width: 50px;
}
.head{
  background-color: #4ECDC4;
  padding: 5px;
  margin-bottom: 10px;
  margin-top: 10px;
}
</style>
<div class="head">
		<h2>All Event Organised By You</h2>
	</div>
<div class="container">
	
@foreach($event as $item)
	<div class="card" style="padding:5px">
 <h2>{{$item->subject}}</h2>
 @if($item->zlink)
 <div class="" style="display:flex;">
 <img src="https://img.icons8.com/color/48/000000/zoom.png"/>
 <a href="../{{$item->zlink}}" target="blank">{{$item->zlink}}</a>
</div>
 @endif
 @if($item->mlink)
 <div style="display:flex">
 <img src="{{asset('images/google_meet_macos_bigsur_icon_190116.png')}}">
 <a href="{{$item->mlink}}">{{$item->mlink}}</a>
</div>
 @endif
</div>
@endforeach
</div>
@endsection