@extends('admin.master')

@section('content')



<form class="myform">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <a href="/admin/addform" button class="btn btn-warning" style="float: right;">Add New</a>
            </div>
        </div>
    </div>

    <div class="container table_bg">
        <div class="row">
            <div class="col-lg-12">
                <table id="myTable" class="display">
                    <thead>
                        <tr>
                            <th>Sr#</th>
                            <th>Question</th>
                            <th>Status</th>
                            <th>Action</th>

                        </tr>
                    </thead>
                    <tbody>

                        @foreach($data as $view)

                        <tr>

                            <td>{{$view->id}}</td>
                            <td>{{$view->Question}}</td>

                            @if($view->Status == 1)
                            <td>Active</td>
                            @else
                            <td>Inactive</td>
                            @endif


                            <td><a href="{{action('FaqController@edit',$view->id)}}" button type="button" class="btn btn-primary">Edit</a>
                                <a href="{{action('FaqController@delete',$view->id)}}" button type="button" class="btn btn-danger">Delete</a>
                            </td>
                        </tr>

                        @endforeach



                    </tbody>
                </table>
            </div>

        </div>
    </div>





</form>


<script>
    $(document).ready(function() {
        $('#myTable').DataTable();
    });
</script>




@endsection