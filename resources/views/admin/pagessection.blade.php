@extends('admin.master')

@section('content')

<div class="container myform">



    <div class="tab">
        <button class="tablinks active" onclick="openCity(event, 'home')">Home</button>
        <button class="tablinks" onclick="openCity(event, 'contact')">Contact Us</button>
        <button class="tablinks" onclick="openCity(event, 'faq')">FAQ's</button>
        <!-- <button class="tablinks" onclick="openCity(event, 'Tokyo')">Tokyo</button> -->
    </div>



    <div id="home" class="tabcontent" style="display: block;">
        <form action="/admin/pages/section1/{{$data[0]->id}}" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="form-group" style="margin-top: 30px;">
                <label class="mycss" for="footer">First Section</label>

                <div class="form-group" style="margin-top: 30px;">
                    <label for="title">Title</label>
                    <input type="text" class="form-control" value="{{$data[0]->s1_Title}}" name="s1_Title" placeholder="Title">

                </div>

                <div class="form-group" style="margin-top: 20px;">
                    <label for="title">Description</label>
                    <input type="text" class="form-control" value="{{$data[0]->s1_Description}}" name="s1_Description" placeholder="Description">

                </div>

                <div class="form-group" style="margin-top: 20px;">
                    <label for="title">Select Background Image:</label>
                    <input type="file" id="image" name="s1_Image" accept="image/*"> <br>

                </div>
                <div class="form-group" style="margin-top: 20px;">
                    <label for="img">Existing image:</label>
                    <img src="{{ asset('/frontend/images/'.$data[0]->s1_Image) }}" alt="" width="120px" height="120">

                </div>

            </div>
            <button type="submit" class="btn btn-primary">Update</button>
        </form>

        <form action="/admin/pages/section2/{{$data[0]->id}}" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="form-group" style="margin-top: 30px;">
                <label class="mycss" for="footer">Second Section</label>

                <div class="form-group" style="margin-top: 30px;">
                    <label for="title">Title</label>
                    <input type="text" class="form-control" value="{{$data[0]->s2_Title}}" name="s2_Title" placeholder="Title">

                </div>

                <div class="form-group" style="margin-top: 20px;">
                    <label for="title">Heading1</label>
                    <input type="text" class="form-control" value="{{$data[0]->s2_Heading1}}" name="s2_Heading1" placeholder="Heading1">

                </div>

                <div class="form-group" style="margin-top: 30px;">
                    <label for="title">Description1</label>
                    <input type="text" class="form-control" value="{{$data[0]->s2_Description1}}" name="s2_Description1" placeholder="Description1">

                </div>

                <div class="form-group" style="margin-top: 20px;">
                    <label for="title">Heading2</label>
                    <input type="text" class="form-control" value="{{$data[0]->s2_Heading2}}" name="s2_Heading2" placeholder="Heading2">

                </div>

                <div class="form-group" style="margin-top: 30px;">
                    <label for="title">Description2</label>
                    <input type="text" class="form-control" value="{{$data[0]->s2_Description2}}" name="s2_Description2" placeholder="Description2">

                </div>

                <div class="form-group" style="margin-top: 20px;">
                    <label for="title">Heading3</label>
                    <input type="text" class="form-control" value="{{$data[0]->s2_Heading3}}" name="s2_Heading3" placeholder="Heading3">

                </div>
                <div class="form-group" style="margin-top: 30px;">
                    <label for="title">Description3</label>
                    <input type="text" class="form-control" value="{{$data[0]->s2_Description3}}" name="s2_Description3" placeholder="Description3">

                </div>

                <div class="form-group" style="margin-top: 20px;">
                    <label for="title">Heading4</label>
                    <input type="text" class="form-control" value="{{$data[0]->s2_Heading4}}" name="s2_Heading4" placeholder="Heading4">

                </div>
                <div class="form-group" style="margin-top: 30px;">
                    <label for="title">Description4</label>
                    <input type="text" class="form-control" value="{{$data[0]->s2_Description4}}" name="s2_Description4" placeholder="Description4">

                </div>

                <div class="form-group" style="margin-top: 20px;">
                    <label for="title">Select Background Image:</label>
                    <input type="file" id="image" name="s2_Image" accept="image/*"> <br>

                </div>
                <div class="form-group" style="margin-top: 20px;">
                    <label for="img">Existing image:</label>
                    <img src="{{ asset('/frontend/images/'.$data[0]->s2_Image) }}" alt="" width="120px" height="120px">

                </div>

            </div>
            <button type="submit" class="btn btn-primary">Update</button>
        </form>


        <form action="/admin/pages/section3/{{$data[0]->id}}" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="form-group" style="margin-top: 30px;">
                <label class="mycss" for="footer">Third Section</label>

                <div class="form-group" style="margin-top: 30px;">
                    <label for="title">Title</label>
                    <input type="text" class="form-control" value="{{$data[0]->s3_Title}}" name="s3_Title" placeholder="Title">

                </div>

                <div class="form-group" style="margin-top: 20px;">
                    <label for="title">Description</label>
                    <input type="text" class="form-control" value="{{$data[0]->s3_Description}}" name="s3_Description" placeholder="Description">

                </div>

                <div class="form-group" style="margin-top: 20px;">
                    <label for="title">Select Background Image:</label>
                    <input type="file" id="image" name="s3_Image" accept="image/*"> <br>

                </div>
                <div class="form-group" style="margin-top: 20px;">
                    <label for="img">Existing image:</label>
                    <img src="{{ asset('/frontend/images/'.$data[0]->s3_Image) }}" alt="" width="120px" height="120px">

                </div>

            </div>
            <button type="submit" class="btn btn-primary">Update</button>
        </form>


        <form action="/admin/pages/section4/{{$data[0]->id}}" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="form-group" style="margin-top: 30px;">
                <label class="mycss" for="footer">Fourth Section</label>

                <div class="form-group" style="margin-top: 30px;">
                    <label for="title">Title</label>
                    <input type="text" class="form-control" value="{{$data[0]->s4_Title}}" name="s4_Title" placeholder="Title">

                </div>

            </div>
            <button type="submit" class="btn btn-primary">Update</button>
        </form>

        <form action="/admin/pages/section5/{{$data[0]->id}}" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="form-group" style="margin-top: 30px;">
                <label class="mycss" for="footer">Fifth Section</label>

                <div class="form-group" style="margin-top: 30px;">
                    <label for="title">Title</label>
                    <input type="text" class="form-control" value="{{$data[0]->s5_Title}}" name="s5_Title" placeholder="Title">

                </div>

                <div class="form-group" style="margin-top: 20px;">
                    <label for="title">Heading1</label>
                    <input type="text" class="form-control" value="{{$data[0]->s5_Heading1}}" name="s5_Heading1" placeholder="Heading1">

                </div>

                <div class="form-group" style="margin-top: 30px;">
                    <label for="title">Description1</label>
                    <input type="text" class="form-control" value="{{$data[0]->s5_Description1}}" name="s5_Description1" placeholder="Description1">


                </div>

                <div class="form-group" style="margin-top: 20px;">
                    <label for="title">Select Image:</label>
                    <input type="file" id="image" name="s5_Image1" accept="image/*"> <br>

                </div>
                <div class="form-group" style="margin-top: 20px;">
                    <label for="img">Existing image:</label>
                    <img src="{{ asset('/frontend/images/'.$data[0]->s5_Image1) }}" alt="" width="120px" height="120">

                </div>

                <div class="form-group" style="margin-top: 20px;">
                    <label for="title">Heading2</label>
                    <input type="text" class="form-control" value="{{$data[0]->s5_Heading2}}" name="s5_Heading2" placeholder="Heading2">

                </div>

                <div class="form-group" style="margin-top: 30px;">
                    <label for="title">Description2</label>
                    <input type="text" class="form-control" value="{{$data[0]->s5_Description2}}" name="s5_Description2" placeholder="Description2">

                </div>

                <div class="form-group" style="margin-top: 20px;">
                    <label for="title">Select 2 Image:</label>
                    <input type="file" id="image" name="s5_Image2" accept="image/*"> <br>

                </div>
                <div class="form-group" style="margin-top: 20px;">
                    <label for="img">Existing image:</label>
                    <img src="{{ asset('/frontend/images/'.$data[0]->s5_Image2) }}" alt="" width="120px" height="120">

                </div>

                <div class="form-group" style="margin-top: 20px;">
                    <label for="title">Heading3</label>
                    <input type="text" class="form-control" value="{{$data[0]->s5_Heading3}}" name="s5_Heading3" placeholder="Heading3">

                </div>
                <div class="form-group" style="margin-top: 30px;">
                    <label for="title">Description3</label>
                    <input type="text" class="form-control" value="{{$data[0]->s5_Description3}}" name="s5_Description3" placeholder="Description3">

                </div>

                <div class="form-group" style="margin-top: 20px;">
                    <label for="title">Select 3 Image:</label>
                    <input type="file" id="image" name="s5_Image3" accept="image/*"> <br>

                </div>
                <div class="form-group" style="margin-top: 20px;">
                    <label for="img">Existing image:</label>
                    <img src="{{ asset('/frontend/images/'.$data[0]->s5_Image3) }}" alt="" width="120px" height="120">

                </div>




            </div>
            <button type="submit" class="btn btn-primary">Update</button>
        </form>


        <form action="/admin/pages/section6/{{$data[0]->id}}" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="form-group" style="margin-top: 30px;">
                <label class="mycss" for="footer">Sixth Section</label>

                <div class="form-group" style="margin-top: 30px;">
                    <label for="title">Title</label>
                    <input type="text" class="form-control" value="{{$data[0]->s6_Title}}" name="s6_Title" placeholder="Title">

                </div>



                <div class="form-group" style="margin-top: 30px;">
                    <label for="title">Paragraph</label>
                    <input type="text" class="form-control" value="{{$data[0]->s6_Paragraph}}" name="s6_Paragraph" placeholder="Paragraph">


                </div>

                <div class="form-group" style="margin-top: 20px;">
                    <label for="title">Select 1 Image:</label>
                    <input type="file" id="image" name="s6_Image1" accept="image/*"> <br>

                </div>
                <div class="form-group" style="margin-top: 20px;">
                    <label for="img">Existing image:</label>
                    <img src="{{ asset('/frontend/images/'.$data[0]->s6_Image1) }}" alt="" width="120px" height="120">

                </div>


                <div class="form-group" style="margin-top: 30px;">
                    <label for="title">Description1</label>
                    <input type="text" class="form-control" value="{{$data[0]->s6_Description1}}" name="s6_Description1" placeholder="Description1">

                </div>

                <div class="form-group" style="margin-top: 20px;">
                    <label for="title">Select 2 Image:</label>
                    <input type="file" id="image" name="s6_Image2" accept="image/*"> <br>

                </div>
                <div class="form-group" style="margin-top: 20px;">
                    <label for="img">Existing image:</label>
                    <img src="{{ asset('/frontend/images/'.$data[0]->s6_Image2) }}" alt="" width="120px" height="120">

                </div>


                <div class="form-group" style="margin-top: 30px;">
                    <label for="title">Description2</label>
                    <input type="text" class="form-control" value="{{$data[0]->s6_Description2}}" name="s6_Description2" placeholder="Description2">

                </div>

                <div class="form-group" style="margin-top: 20px;">
                    <label for="title">Select 3 Image:</label>
                    <input type="file" id="image" name="s6_Image3" accept="image/*"> <br>

                </div>
                <div class="form-group" style="margin-top: 20px;">
                    <label for="img">Existing image:</label>
                    <img src="{{ asset('/frontend/images/'.$data[0]->s6_Image3) }}" alt="" width="120px" height="120">

                </div>
                <div class="form-group" style="margin-top: 30px;">
                    <label for="title">Description3</label>
                    <input type="text" class="form-control" value="{{$data[0]->s6_Description3}}" name="s6_Description3" placeholder="Description3">

                </div>

                <div class="form-group" style="margin-top: 20px;">
                    <label for="title">Select 4 Image:</label>
                    <input type="file" id="image" name="s6_Image4" accept="image/*"> <br>

                </div>
                <div class="form-group" style="margin-top: 20px;">
                    <label for="img">Existing image:</label>
                    <img src="{{ asset('/frontend/images/'.$data[0]->s6_Image4) }}" alt="" width="120px" height="120">

                </div>


                <div class="form-group" style="margin-top: 30px;">
                    <label for="title">Description4</label>
                    <input type="text" class="form-control" value="{{$data[0]->s6_Description4}}" name="s6_Description4" placeholder="Description4">

                </div>

                <div class="form-group" style="margin-top: 20px;">
                    <label for="title">Select 5 Image:</label>
                    <input type="file" id="image" name="s6_Image5" accept="image/*"> <br>

                </div>
                <div class="form-group" style="margin-top: 20px;">
                    <label for="img">Existing image:</label>
                    <img src="{{ asset('/frontend/images/'.$data[0]->s6_Image5) }}" alt="" width="120px" height="120">

                </div>


                <div class="form-group" style="margin-top: 30px;">
                    <label for="title">Description5</label>
                    <input type="text" class="form-control" value="{{$data[0]->s6_Description5}}" name="s6_Description5" placeholder="Description5">

                </div>

                <div class="form-group" style="margin-top: 20px;">
                    <label for="title">Select 6 Image:</label>
                    <input type="file" id="image" name="s6_Image6" accept="image/*"> <br>

                </div>
                <div class="form-group" style="margin-top: 20px;">
                    <label for="img">Existing image:</label>
                    <img src="{{ asset('/frontend/images/'.$data[0]->s6_Image6) }}" alt="" width="120px" height="120">

                </div>
                <div class="form-group" style="margin-top: 30px;">
                    <label for="title">Description6</label>
                    <input type="text" class="form-control" value="{{$data[0]->s6_Description6}}" name="s6_Description6" placeholder="Description6">

                </div>




            </div>
            <button type="submit" class="btn btn-primary">Update</button>
        </form>


        <form action="/admin/pages/section7/{{$data[0]->id}}" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="form-group" style="margin-top: 30px;">
                <label class="mycss" for="footer">Seventh Section</label>

                <div class="form-group" style="margin-top: 20px;">
                    <label for="title">Heading</label>
                    <input type="text" class="form-control" value="{{$data[0]->s7_Heading}}" name="s7_Heading" placeholder="Heading">

                </div>


                <div class="form-group" style="margin-top: 20px;">
                    <label for="title">Description</label>
                    <input type="text" class="form-control" value="{{$data[0]->s7_Description}}" name="s7_Description" placeholder="Description">

                </div>

                <div class="form-group" style="margin-top: 20px;">
                    <label for="title">Select Background Image:</label>
                    <input type="file" id="image" name="s7_Image" accept="image/*"> <br>

                </div>
                <div class="form-group" style="margin-top: 20px;">
                    <label for="img">Existing image:</label>
                    <img src="{{ asset('/frontend/images/'.$data[0]->s7_Image) }}" alt="" width="120px" height="120">

                </div>

            </div>
            <button type="submit" class="btn btn-primary">Update</button>
        </form>




    </div>

    <!--Contact Page-->

    <div id="contact" class="tabcontent">
        <form action="/admin/pages/contact/{{$data2[0]->id}}" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="form-group" style="margin-top: 30px;">
                <label for="footer">Heading</label>
                <input type="text" class="form-control" value="{{$data2[0]->Heading}}" name="Heading" placeholder="Heading">

            </div>
            <div class="form-group" style="margin-top: 30px;">
                <label for="footer">Description</label>
                <input type="text" class="form-control" value="{{$data2[0]->Description}}" name="Description" placeholder=" Description">

            </div>
            <button type="submit" class="btn btn-primary">Update</button>
        </form>

    </div>

    <!--FAQ Page-->

    <div id="faq" class="tabcontent">
        <form action="/admin/pages/faq/{{$data3[0]->id}}" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="form-group" style="margin-top: 30px;">
                <label for="footer">Heading</label>
                <input type="text" class="form-control" value="{{$data3[0]->Heading}}" name="Heading" placeholder="Heading">

            </div>
            <br>

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