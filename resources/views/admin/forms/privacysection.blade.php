@extends('admin.master')

@section('content')

<form class="myform">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <a href="/admin/form" button class="btn btn-warning" style="float: right;">Add New</a>
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
                            <th>Heading</th>
                            <th>Status</th>
                            <th>Action</th>

                        </tr>
                    </thead>
                    <tbody>
                        @foreach($data as $policy)
                        <tr>

                            <td>{{$policy->id}}</td>
                            <td>{{$policy->Heading}}</td>

                            @if($policy->status == 1)
                            <td>Active</td>
                            @else
                            <td>Inactive</td>
                            @endif

                            <td><a href="{{action('PrivacyController@edit',$policy->id)}}" button type="button" class="btn btn-primary">Edit</a>
                                <button type="button" class="btn btn-danger">Delete</button>
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