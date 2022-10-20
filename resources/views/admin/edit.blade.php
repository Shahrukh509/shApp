@extends('admin.master')

@section('content')

<form class="myform">
    <div class="form-group">
        <label for="Heading">Heading</label>
        <input type="text" name="Heading" class="form-control" id="heading" placeholder="Heading" value="{{$data->Heading}}">

    </div>


    <div class="form-group">
        <label for="Description">Description</label>
        <textarea name="Description" id="" cols="72" rows="10" placeholder="Description">{{$data->Description}}</textarea>


    </div>


    <div class="form-group">
        <label for="Status">Status</label>
        <select class="form-control" name="status" id="dropdown">
            <option value="1" <?php if ($data->status == 1) { ?> selected <?php } ?>> Active</option>

            <option value="0" <?php if ($data->status == 0) { ?> selected <?php } ?>>Inactive</option>
        </select>


    </div>


    <button type="submit" class="btn btn-primary">Submit</button>
</form>


@endsection