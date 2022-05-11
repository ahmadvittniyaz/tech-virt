@extends('student/layout')
@section('page_title','Profile')

@section('container')
<style>

    th{
        font-weight: 900;
        font-size: 20px;
    }
    </style>
@php

$user=Auth::user();

@endphp

   <div class="container">
<table class="table">
    <h2>{{ $name }} Uploaded Notes</h2>



    <hr>
    <thead>
        <tr>
       <th>Uploaded Date</th>
       <th>About Subject</th>
       <th>Subject</th>
       <th>Topic</th>
       <th>View</th>
       <th>Download</th>
        </tr>
    </thead>
        @foreach ($note as $item)
        <tbody>
        <tr>
            <td>{{$item->date}}</td>
            <td>{{$item->description}}</td>
            <td>{{$item->subject}}</td>
            <td>{{$item->topic}}</td>

            <th>     <a href="{{asset('notes')}}/{{$item->notes_file}}" class="badge badge-success">{{$item->notes_file}}</a></th>
        <td>                     <a href="{{asset('notes')}}/{{$item->notes_file}}" class="badge" style="background-color:blue" download><i class="fa fa-download" aria-hidden="true"></i></a></th>
        </td>
        </tr>
    </tbody>
        @endforeach

    </thead>

</table>


</div>


<script>
    $('#exampleModal').on('show.bs.modal', event => {
        var button = $(event.relatedTarget);
        var modal = $(this);
        // Use above variables to manipulate the DOM

    });
</script>


@endsection
