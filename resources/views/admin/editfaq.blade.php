@extends('admin.master')

@section('content')

<form class="myform" action="/admin/update/{{$data->id}}" method="POST">
    @csrf


    <div class="form-group">
        <label for="Heading">Question</label>
        <input type="text" name="Question" value="{{$data->Question}}" class="form-control" id="Question" placeholder="Question">

    </div>


    <div class="form-group">
        <label for="Answer">Answer</label>
        <input type="text" name="Answer" value="{{$data->Answer}}" class="form-control" id="Answer" placeholder="Answer">


    </div>


    <div class="form-group">
        <label for="Status">Status</label>
        <select class="form-control" name="Status" id="dropdown">
            <option value="1" <?php if ($data->Status == 1) { ?> selected <?php } ?>> Active</option>

            <option value="0" <?php if ($data->Status == 0) { ?> selected <?php } ?>>Inactive</option>
        </select>


    </div>



    <button type="submit" class="btn btn-primary">Submit</button>

</form>


@endsection