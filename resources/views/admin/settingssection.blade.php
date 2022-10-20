@extends('admin.master')

@section('content')

<div class="container myform">



    <div class="tab">
        <button class="tablinks active" onclick="openCity(event, 'image')">Logo</button>
        <button class="tablinks" onclick="openCity(event, 'contact')">Contact</button>
        <button class="tablinks" onclick="openCity(event, 'footer')">Footer</button>
        <!-- <button class="tablinks" onclick="openCity(event, 'Tokyo')">Tokyo</button> -->
    </div>

    <div id="image" class="tabcontent" style="display: block;">
        <form action="/admin/settings/logo/{{$data[0]->id}}" method="POST" enctype="multipart/form-data">
            @csrf

            <input type="hidden" name="id" value="">

            <div class="form-group" style="margin-top: 30px;">


                <label for="img">Existing image:</label>
                <img src="{{ asset('/frontend/images/'.$data[0]->Image) }}" alt="" width="120px" height="120px">


            </div>
            <div class="form-group" style="margin-top: 30px;">


                <label for="img">Change LOGO image:</label>
                <input type="file" id="image" name="Image" accept="image/*"> <br>

            </div>

            <button type="submit" class="btn btn-primary">Update</button>

        </form>
    </div>

    <div id="contact" class="tabcontent">
        <form action="/admin/settings/contact/{{$data[0]->id}}" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="form-group" style="margin-top: 30px;">
                <label for="exampleInputEmail1">Header Contact #</label>
                <input type="text" class="form-control" name="Contact" value="{{$data[0]->Contact}}" placeholder="Enter contact number">

            </div>
            <div class="form-group" style="margin-top: 30px;">
                <label for="exampleInputEmail1">Address #</label>
                <input type="text" class="form-control" name="Address" value="{{$data[0]->Address}}" placeholder="Enter contact number">

            </div>
            <div class="form-group" style="margin-top: 30px;">
                <label for="exampleInputEmail1">Phone #</label>
                <input type="text" class="form-control" name="Phone" value="{{$data[0]->Phone}}" placeholder="Enter contact number">

            </div>
            <div class="form-group" style="margin-top: 30px;">
                <label for="exampleInputEmail1">Timings</label>
                <input type="text" class="form-control" name="Timings" value="{{$data[0]->Timings}}" placeholder="Enter contact number">

            </div>
            <div class="form-group" style="margin-top: 30px;">
                <label for="exampleInputEmail1">Email</label>
                <input type="email" class="form-control" name="Email" value="{{$data[0]->Email}}" placeholder="Enter contact number">

            </div>
            <div class="form-group" style="margin-top: 30px;">
                <label for="exampleInputEmail1">Email 2</label>
                <input type="email" class="form-control" name="Email2" value="{{$data[0]->Email2}}" placeholder="Enter contact number">

            </div>
            <button type="submit" class="btn btn-primary">Update</button>

        </form>
    </div>

    <div id="footer" class="tabcontent">
        <form action="/admin/settings/footer/{{$data[0]->id}}" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="form-group" style="margin-top: 30px;">
                <label for="footer">Footer</label>
                <input type="text" class="form-control" name="Footer" value="{{$data[0]->Footer}}" placeholder="Footer Description">

            </div>
            <button type="submit" class="btn btn-primary">Update</button>
        </form>

    </div>


</div>

<script>
    function openCity(evt, cityName) {
        var i, tabcontent, tablinks;
        tabcontent = document.getElementsByClassName("tabcontent");
        for (i = 0; i < tabcontent.length; i++) {
            tabcontent[i].style.display = "none";
        }
        tablinks = document.getElementsByClassName("tablinks");
        for (i = 0; i < tablinks.length; i++) {
            tablinks[i].className = tablinks[i].className.replace(" active", "");
        }
        document.getElementById(cityName).style.display = "block";
        evt.currentTarget.className += " active";
    }
</script>


@endsection