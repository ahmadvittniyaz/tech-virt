@extends('teacher/layout')
@section('page_title','Profile')

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
h2{
 text-transform: uppercase;
  font-weight: 900;
  font-size: 20px;
  
}
label{
	font-size: 15px;
	font-weight: 700;
	text-transform: uppercase;
}
</style>
<div class="head">
<h2>Add Study Event
 </h2>
</div>
<div class="container">
	@if(session()->has('msg'))
    <div class="alert alert-success">
        {{ session()->get('msg') }}
    </div>
@endif
	<form class="col-md-8" method="POST" action="{{route('addEvent')}}" style="padding:20px">
		@csrf
		<div class="form-group">
			<div>
				<label>Subject</label>
				<select class="form-control" name="sub">
					@foreach($sub as $item)
					<option value="{{$item->subject}}" required>{{$item->subject}}</option>
					@endforeach
				</select>
			</div>
		</div>
		<div class="form-group">
			<div>
				<label>Branch</label>
				<select type="text" class="form-control" id="branch" placeholder="Enter branch" name="branch" required>
                        @foreach ($branch as $item)
                        <option value="{{$item->sbranch_name}}" style="color:black">{{$item->sbranch_name}} ({{$item->course_name}})</option>
                        @endforeach

                </select>
			</div>
		</div>
		<div class="form-group">
			<div>
				<label>Zoom Link:</label>
				<input type="link" name="zlink" class="form-control">
			</div>
		</div>
         
		<div class="form-group">
			<div>
				<label>Meet Link:</label>
				<input  type="link" name="mlink" class="form-control">
			</div>
		</div>
		<div class="form-group">
			<div>
				<label>Date Time</label>
				<input required type="datetime-local" class="form-control" id="birthdaytime" name="mytime">
			</div>
		</div>
		<div class="form-group">
			<div>
				<label>Description:</label>
				<textarea required name="desc" class="form-control"></textarea> 
			</div>
		</div>
		<input type="submit" value="Add Schdule" class="btn btn-primary">
	</form>
	</div>
@endsection