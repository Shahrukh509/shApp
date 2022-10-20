@extends('admin.master')

@section('content')

<form class="myform" action="/admin/addform" method="POST">
    @csrf


    <div class="form-group">
        <label for="Heading">Question</label>
        <input type="text" name="Question" class="form-control" id="Question" placeholder="Question">

    </div>


    <div class="form-group">
        <label for="Answer">Answer</label>
        <input type="text" name="Answer" class="form-control" id="Answer" placeholder="Answer">


    </div>


    <div class="form-group">
        <label for="Status">Status</label>
        <select class="form-control" name="Status" id="dropdown">
            <option value="1"> Active</option>

            <option value="0">Inactive</option>
        </select>


    </div>



    <button type="submit" class="btn btn-primary">Submit</button>

</form>


@endsection