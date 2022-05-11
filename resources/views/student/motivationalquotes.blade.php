@extends('student/layout')
@section('page_title','Dashboard')

@section('student_name','Student')
@section('dashboard_select','active')

@section('container')
<style>
    .card{
    border-radius: 4px;
    background: #fff;
    box-shadow: 0 6px 10px rgba(0,0,0,.08), 0 0 6px rgba(0,0,0,.05);
      transition: .3s transform cubic-bezier(.155,1.105,.295,1.12),.3s box-shadow,.3s -webkit-transform cubic-bezier(.155,1.105,.295,1.12);
  padding: 14px 80px 18px 36px;
  cursor: pointer;
}

.card:hover{
     transform: scale(1.05);
  box-shadow: 0 10px 20px rgba(0,0,0,.12), 0 4px 8px rgba(0,0,0,.06);
}

.card h3{
  font-weight: 600;
}

.card img{
  position: absolute;
  top: 20px;
  right: 15px;
  max-height: 120px;
}

.card-1{
  background-image: url(https://ionicframework.com/img/getting-started/ionic-native-card.png);
      background-repeat: no-repeat;
    background-position: right;
    background-size: 80px;
}

.card-2{
   background-image: url(https://ionicframework.com/img/getting-started/components-card.png);
      background-repeat: no-repeat;
    background-position: right;
    background-size: 80px;
}

.card-3{
   background-image: url(https://ionicframework.com/img/getting-started/theming-card.png);
      background-repeat: no-repeat;
    background-position: right;
    background-size: 80px;
}

@media(max-width: 990px){
  .card{
    margin: 20px;
  }
} </style>
    @php
       $d=json_decode($data,true);

    @endphp
      <div class="container" style="margin-top:40px">
        <div class="row">
    @foreach ($d as $ite)

          <div class="col-md-4">
            <div class="card card-1">
             <h3>{{$ite['text']}}</h3>
             <br>
             <p style="color: black;font-weight:900">-{{$ite['author']}}</p>            </div>
          </div>




    @endforeach </div></div>

@endsection
