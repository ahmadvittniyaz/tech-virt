@extends('admin/layout')
@section('page_title','Dashboard')

@section('student_name','Student')
@section('dashboard_select','active')
@section('container')


<div class="container" style="margin-top:50px ">

    <!-- Button trigger modal -->
    <button type="button" class="btn btn-primary btn-lg" data-toggle="modal" data-target="#modelId">
      ADD COURSE
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
                      <form action="addcourseAdmin" method="POST">

                       @csrf
                                     <label for="inputName">Full Course Name</label>
                                     <input type="text" class="form-control" name="fname" id="inputName" placeholder="">
                                     <br>
                                     <label for="inputName">Short Course Name</label>
                                     <input type="text" class="form-control" name="sname" id="inputName" placeholder="">







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
            <th><h4>Full Course Name </h4></th>
            <th><h4>Short Course Name</h4></th>

        </tr>
    </thead>
    <tbody>

         @foreach ($course as $item)

        <tr>
            <td scope="row">{{$item->id}}</td>
            <td>{{$item->fn_course}}</td>
            <td>{{$item->sn_course}}</td>

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
