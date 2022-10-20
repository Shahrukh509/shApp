@extends('admin.master')

@section('content')

<form class="myform" action="/admin/form" method="POST">
    @csrf

    <div class="form-group">
        <label for="Heading">Heading</label>
        <input type="text" name="Heading" class="form-control" id="heading" placeholder="Heading">

    </div>


    <div class="form-group">
        <label for="Description">Description</label>
        <textarea name="Description" id="" cols="72" rows="10" placeholder="Description"></textarea>


    </div>


    <div class="form-group">
        <label for="Status">Status</label>
        <select class="form-control" name="status" id="dropdown">
            <option value="1">Active</option>
            <option value="0">Inactive</option>
        </select>


    </div>






    <button type="submit" class="btn btn-primary">Submit</button>
</form>


@endsection