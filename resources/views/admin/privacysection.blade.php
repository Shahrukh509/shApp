@extends('admin.master')

@section('content')




<form class="myform" action="/admin/update" method="POST" enctype="multipart/form-data">

    @csrf

    <div class=" container">








        @foreach($data as $view)


        <input type="hidden" name="id" value="{{$view->id}}">

        <textarea id="summernote" name="Description" value="">{{$view->Description}}</textarea>

        @endforeach




    </div>


    <button type="submit" class="btn btn-primary">Update</button>

</form>

<script>
    $(document).ready(function() {
        $('#summernote').summernote({

            height: 500
        });

    });
</script>



@endsection