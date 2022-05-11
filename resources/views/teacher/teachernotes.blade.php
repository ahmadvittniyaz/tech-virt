@extends('teacher/layout')
@section('page_title','Profile')

@section('container')

@php

$user=Auth::user();

@endphp

   <div class="container">
<table class="table">
    <h2>{{ $name }} Uploaded Notes</h2>

<div class="container" style="margin-top: 50px">
    <div class="row" style="display: flex;justify-content:right;align-items:center">

 <!-- Button trigger modal -->
 <button type="button" class="btn btn-lg" style="background-color:gold;color:white;padding:19px;"data-toggle="modal" data-target="#modelId">
   ADD NEW NOTES
 </button>

 <!-- Modal -->
 <div class="modal fade" id="modelId" tabindex="-1" role="dialog" aria-labelledby="modelTitleId" aria-hidden="true">
     <div class="modal-dialog" role="document">
         <div class="modal-content">
                 <div class="modal-header">
                         <h5 class="modal-title">Modal title</h5>
                             <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                 <span aria-hidden="true">&times;</span>
                             </button>
                     </div>
                     <form action="{{route('uploadnotes')}}" method="POST" enctype="multipart/form-data">
                         @csrf
             <div class="modal-body">
                 <div class="container-fluid">
                    <label>Subject Topic</label>
                    <input type="text" name="topic" class="form-control"><br>

                    <select type="text" class="form-control" id="branch" placeholder="Enter branch" name="branch">
                        @foreach ($branch as $item)
                        <option value="{{$item->sbranch_name}}" style="color:black">{{$item->sbranch_name}} ({{$item->course_name}})</option>
                        @endforeach

                    </select>
                    <label>Subject Notes</label>
                    <input type="file" name="notes" class="form-control"><br>


<script>
  $(".alert").alert();
</script>
                    <input name="subject" value="{{ $name }}" hidden >

                    <textarea name="desc" id="" cols="30" rows="10" class="form-control" placeholder="Add Your Description About Uploaded Notes/Add Your Comment!!"></textarea>

                 </div>
             </div>
             <div class="modal-footer">

                 <button type="submit" class="btn btn-primary">Add</button>
             </div>
             </form>
         </div>
     </div>
 </div>

    </div></div>
    <hr>
    <thead>
        @foreach ($upload as $item)
        <tr>
            <th>{{$item->date}}</th>
            <th>{{$item->description}}</th>
            <th>{{$item->subject}}</th>
            <th>{{$item->topic}}</th>

            <th>
                     <a href="{{asset('notes')}}/{{$item->notes_file}}" class="badge badge-success">{{$item->notes_file}}</a></th>
        </tr>
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
