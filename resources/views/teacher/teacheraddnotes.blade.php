@extends('teacher/layout')
@section('page_title','Profile')

@section('container')

@php

$user=Auth::user();

@endphp

<div class="container" style="margin-top: 50px">
   <div class="row" style="display: flex;justify-content:center;align-items:center">

<!-- Button trigger modal -->
<button type="button" class="btn btn-lg" style="background-color:gold;color:white;padding:19px;"data-toggle="modal" data-target="#modelId">
  ADD YOUR SUBJECT
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
                    <form action="addteachersubject" method="post">
                        @csrf
            <div class="modal-body">
                <div class="container-fluid">
                    <input value="{{$user->id}}" name="id" hidden>
                    <input type="text" list="sub_list" name="subject" class="form-control">
                    <datalist id="sub_list">
                        @foreach ($sub as $item)
                        <option value="{{$item->subject}}" />
                            @endforeach

                    </datalist>
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
   <div class="container">
<table class="table">
    <h2>Your Selected Subject</h2>
    <thead>
        @foreach ($own as $item)


        <tr>
            <th>{{$item->subject_name}}</th>
            <th>{{$item->subject_code}}</th>
            <form method="POST" action="subnotes/{{$item->subject_name}}">
                @csrf
                <input value="{{$item->subject_name}}" name="subject" hidden>
            <th><button class="btn btn-primary">NOTES</button></th>
            </form>

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
