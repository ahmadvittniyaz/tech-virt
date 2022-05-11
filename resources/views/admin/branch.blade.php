@extends('admin/layout')
@section('page_title','Dashboard')

@section('student_name','Student')
@section('dashboard_select','active')
@section('container')


<div class="container" style="margin-top:50px ">

    <!-- Button trigger modal -->
    <button type="button" class="btn btn-primary btn-lg" data-toggle="modal" data-target="#modelId">
      ADD BRANCH
    </button>

    <!-- Modal -->
    <div class="modal fade" id="modelId" tabindex="-1" role="dialog" aria-labelledby="modelTitleId" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                    <div class="modal-header">
                            <h5 class="modal-title">BRANCH</h5>
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                        </div>
                <div class="modal-body">
                    <div class="container-fluid">
                      <form action="addbranchAdmin" method="POST">

                       @csrf
                                     <label for="inputName">Full Branch Name</label>
                                     <input type="text" class="form-control" name="fname" id="inputName" placeholder="">
                                     <br>
                                     <label for="inputName">Short Branch Name</label>
                                     <input type="text" class="form-control" name="sname" id="inputName" placeholder="">
                                   <br>
                                     <label for="inputName">Short Course Name</label>
                                     <select name="course" class="form-control">
                                         @foreach ($course as $c)


                                         <option value="{{$c->sn_course}}">{{$c->sn_course}}({{$c->fn_course}})</option>
                                            @endforeach
                                     </select>







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
            <th><h4>Course Name</h4></th>
            <th><h4>Full Branch Name </h4></th>
            <th><h4>Short Branch Name</h4></th>
            <th><h4>Action</h4></th>






        </tr>
    </thead>
    <tbody>

         @foreach ($branch as $item)

        <tr>

            <td scope="row">{{$item->id}}</td>
            <td>{{$item->course_name}}</td>
            <td scope="row">{{$item->fbranch_name}}</td>
            <td>{{$item->sbranch_name}}</td>
            <td><a class="btn btn-danger" href="delbranch/{{$item->id}}">Delete</a></td>


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
