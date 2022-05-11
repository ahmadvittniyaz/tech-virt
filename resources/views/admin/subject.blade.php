@extends('admin/layout')
@section('page_title','Dashboard')

@section('student_name','Student')
@section('dashboard_select','active')
@section('container')


<div class="container" style="margin-top:50px ">

    
    <!-- Button trigger modal -->
    <button type="button" class="btn btn-primary btn-lg" data-toggle="modal" data-target="#modelId">
      ADD SUBJECT
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
                <div class="modal-body">
                    <div class="container-fluid">
                      <form action="addsubject" method="POST">

                       @csrf
                                     <label for="inputName">Subject Name</label>
                                     <input type="text" class="form-control" name="sub" id="inputName" placeholder="">
                                     <br>
                                     <label for="inputName">Subject Code</label>
                                     <input type="text" class="form-control" name="subcode" id="inputName" placeholder="">







                    </div>
                </div>

            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                <button type="submit" class="btn btn-primary">Add</button>
            </div>
        </form>
            </div>
        </div>
    </div>

    <script>
        $('#exampleModal').on('show.bs.modal', event => {
            var button = $(event.relatedTarget);
            var modal = $(this);
            // Use above variables to manipulate the DOM

        });
    </script>
<div class="row" style="margin-top: 20px">




<table class="table">
    <thead>
        <tr>
            <th><h4>ID</h4></th>
            <th><h4>Subject_Name</h4></th>
            <th><h4>Subject_Code</h4></th>
            <th><h4>Delete</h4></th>
        </tr>
    </thead>
    <tbody>

        @foreach ($subject as $item)

        <tr>
            <td scope="row">{{$item->id}}</td>
            <td>{{$item->subject}}</td>
            <td>{{$item->subject_code}}</td>
            <td >
                <form action="/del" method="post">
                    @csrf
                    <input name="id" value="{{$item->id}}" hidden>
                     <button class="btn btn-danger" type="submit">Delete</button>

                </form>
                </td>
        </tr>

        @endforeach

    </tbody>
</table>

</div></div>

@endsection

<div class="container">
    <div class="row">

    </div>
</div>
