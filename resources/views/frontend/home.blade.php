@extends('frontend.main')

@section('content')

<style>
    .bg_img {
        background-image: linear-gradient(180deg,
            rgba(0, 0, 0, 0.2) 0%,
            rgba(0, 0, 0, 0.59) 100%),
        asset("frontend/images/{{$data[0]->s1_Image}}") !important;

    }

    .bg_img_1 {
        background-image: linear-gradient(180deg,
            rgba(0, 0, 0, 0.2) 0%,
            rgba(0, 0, 0, 0.59) 100%),
        asset("frontend/images/{{$data[0]->s7_Image}}") !important;
        background-position: top;
        background-size: cover;
    }
</style>


<header id="gtco-header" class="gtco-cover gtco-cover-md bg_img" role="banner">
    <!-- <div class="overlay"></div> -->

    <div class="gtco-container">
        <div class="row">



            <div class="col-md-12 col-md-offset-0 text-left form_sec">


                <div class="row ">

                    <div class="col-md-8 mt-text animate-box et_pb_text_2" data-animate-effect="fadeInUp">
                        <!-- <h2>WE BUY HOUSES NATIONWIDE!</h2> -->
                        <h1 style="font-family: 'Lato', Arial, sans-serif;">{{$data[0]->s1_Title}}</h1>
                        <p>{{$data[0]->s1_Description}}</p>
                    </div>
                    <div class="col-md-4 col-md-push-1 animate-box" data-animate-effect="fadeInRight">
                        <div class="form-wrap">
                            <div class="et_pb_text_1">
                                <p> Get A Fair Cash Offer Today!</p>
                            </div>
                            <div class="tab">

                                <div class="tab-content">

                                    <div class="tab-content-inner active" data-content="signup">
                                        <form action="#">
                                            <div class="row form-group">
                                                <div class="col-md-12">
                                                    <label for="fullname">Property Address</label>
                                                    <input type="text" id="fullname" class="form-control">
                                                </div>
                                            </div>
                                            <div class="row form-group">
                                                <div class="col-md-12">
                                                    <label for="activities">Phone </label>
                                                    <input type="text" id="Phone" class="form-control">

                                                </div>
                                            </div>
                                            <div class="row form-group">
                                                <div class="col-md-12">
                                                    <label for="activities">Email</label>
                                                    <input type="email" id="Property" class="form-control">

                                                </div>
                                            </div>



                                            <div class="row form-group get_cash">
                                                <div class="col-md-12">
                                                    <input type="submit" class="btn btn-primary btn-block" value="GET MY CASH OFFER NOW">
                                                </div>
                                            </div>
                                        </form>
                                    </div>


                                </div>
                            </div>
                        </div>
                    </div>
                </div>


            </div>
        </div>
    </div>
</header>



<div class="gtco-section abc">
    <div class="gtco-container">
        <div class="row">
            <div class="col-md-12  text-center gtco-heading nimate-box et_pb_text_2 fadeInUp animated-fast" data-animate-effect="fadeInUp">
                <h3 class="text-center">{{$data[0]->s2_Title}}</h3>
                <!-- <p><span style="text-decoration: underline; color: #777;">We Buy Houses at Any Price in any condition.</span></p> -->
            </div>
        </div>
        <div class="row">

            <div class="col-md-12">
                <div class="main_ main_section">
                    <div class="et_pb_main_blurb_image">
                        <span class="et_pb_image_wrap">
                            <img src={{asset("/frontend/images/".$data[0]->s2_Image )}} />
                        </span>
                    </div>
                    <div class="et_pb_blurb_container">

                        <h4 class="et_pb_module_header"><span>{{$data[0]->s2_Heading1}}</span></h4>
                        <div class="et_pb_blurb_description">
                            <p>{{$data[0]->s2_Description1}}</p>
                        </div>


                    </div>
                </div>
                <div class="main_ main_section">
                    <div class="et_pb_main_blurb_image">
                        <span class="et_pb_image_wrap">
                            <img src={{asset("/frontend/images/".$data[0]->s2_Image)}} />
                        </span>
                    </div>
                    <div class="et_pb_blurb_container">

                        <h4 class="et_pb_module_header"><span>{{$data[0]->s2_Heading2}}</span></h4>
                        <div class="et_pb_blurb_description">
                            <p>{{$data[0]->s2_Description2}}</p>
                        </div>


                    </div>
                </div>
                <div class="main_ main_section">
                    <div class="et_pb_main_blurb_image">
                        <span class="et_pb_image_wrap">
                            <img src={{asset("/frontend/images/".$data[0]->s2_Image)}} />
                        </span>
                    </div>
                    <div class="et_pb_blurb_container">

                        <h4 class="et_pb_module_header"><span>{{$data[0]->s2_Heading3}}</span></h4>
                        <div class="et_pb_blurb_description">
                            <p>{{$data[0]->s2_Description3}}</p>
                        </div>


                    </div>
                </div>
                <div class="main_ main_section">
                    <div class="et_pb_main_blurb_image">
                        <span class="et_pb_image_wrap">
                            <img src={{asset("/frontend/images/".$data[0]->s2_Image )}} />
                        </span>
                    </div>
                    <div class="et_pb_blurb_container">

                        <h4 class="et_pb_module_header"><span>{{$data[0]->s2_Heading4}}</span></h4>
                        <div class="et_pb_blurb_description">
                            <p>{{$data[0]->s2_Description4}}</p>
                        </div>


                    </div>
                </div>
            </div>

        </div>

    </div>
</div>

<div class="gtco-section abc testimonils_sec">
    <div class="gtco-container">

        <div class="row">
            <div class="col-md-5 img_classs nimate-box et_pb_text_2 fadeInUp animated-fast" data-animate-effect="fadeInUp">
                <img src={{asset("/frontend/images/".$data[0]->s3_Image)}} alt="" class="img-fluid" style="height: auto;
                        max-width: 100%;">
            </div>
            <div class="col-md-6">
                <div class="">

                    <div class="et_pb_blurb_container" id="gtco-header">

                        <h1><span class="meet">{{$data[0]->s3_Title}}</span></h1> <br>
                        <div class="et_pb_blurb_description">
                            <p class="para"> {{$data[0]->s3_Description}}</p>
                        </div>


                    </div>
                </div>

            </div>

        </div>

    </div>
</div>

<!-- <div class="overlay"></div> -->

<div class="gtco-container" id="gtco-header">
    <div class="row">



        <div class=" gtco-heading  col-md-12 my_head col-md-offset-0 text-left form_sec mt-text animate-box et_pb_text_2 fadeInUp animated-fast" data-animate-effect="fadeInUp" ">



                                <!-- <h2>WE BUY HOUSES NATIONWIDE!</h2> -->
                                <h1 style=" color: #000;text-align:center;font-size:35px; ">{{$data[0]->s4_Title}} </h1> <br>
                                <div class=" form-wrap formwrap2">

            <div class="tab ">

                <div class="tab-content ">

                    <div class="tab-content-inner active " data-content="signup ">
                        <form action="# ">
                            <div class="row form-group ">
                                <div class="col-md-12 ">
                                    <label for="fullname ">Property Address</label>
                                    <input type="text " id="fullname " class="form-control ">
                                </div>
                            </div>
                            <div class="row form-group ">
                                <div class="col-md-6 ">
                                    <label for="activities ">Phone </label>
                                    <input type="text " id="Phone " class="form-control ">

                                </div>
                                <div class="col-md-6 ">
                                    <label for="activities ">Email</label>
                                    <input type="email " id="Property " class="form-control ">

                                </div>
                            </div>




                            <div class="row form-group get_cash ">
                                <div class="col-md-12 ">
                                    <input type="submit " class="btn btn-primary btn-block " value="GET MY CASH OFFER NOW">
                                </div>
                            </div>
                        </form>
                    </div>


                </div>
            </div>
        </div>






    </div>
</div>
</div>

<div class="gtco-section mysec_1 ">
    <div class="gtco-container ">
        <div class="row ">
            <hr style="margin-bottom: 15px;border-color: #000;    padding-bottom: 20px;">
            <div class="col-md-12 text-center gtco-heading nimate-box et_pb_text_2 fadeInUp animated-fast " data-animate-effect="fadeInUp ">
                <h3 class="text-center ">
                    {{$data[0]->s5_Title}}
                </h3>

            </div>
        </div>
        <div class="row new_statr " id="new ">
            <div class="col-md-4">
                <div class="box_border">
                    <div class="et_pb_blurb_content ">

                        <div class="et_pb_blurb_container " style="text-align: center; ">
                            <img loading="lazy " src="{{ asset('/frontend/images/'.$data[0]->s5_Image1) }}" height="120px" width="120px" alt=" " class="et-waypoint et_pb_animation_off
                    wp-image-118 et-animated ">
                            <h4 class="et_pb_module_header "><span><label>Step 1</label><br>{{$data[0]->s5_Heading1}}</span></h4>
                            <div class="et_pb_blurb_description ">
                                <p class=" ">Fill out our <a href="# ">{{$data[0]->s5_Description1}} </a> with the required details, or call us at <a href="tel:9095314183 ">(949) 520-1924</a> .</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="box_border">
                    <div class="et_pb_blurb_content ">

                        <div class="et_pb_blurb_container " style="text-align: center; ">
                            <img loading="lazy " src="{{ asset('/frontend/images/'.$data[0]->s5_Image2) }}" height="120px" width="120px">
                            <h4 class="et_pb_module_header "><span><label>Step 2</label><br>
                                    {{$data[0]->s5_Heading2}}
                                </span></h4>
                            <div class="et_pb_blurb_description ">
                                <p>{{$data[0]->s5_Description2}}</p>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="box_border">
                    <div class="et_pb_blurb_content ">

                        <div class="et_pb_blurb_container " style="text-align: center; ">
                            <img loading="lazy " src="{{ asset('/frontend/images/'.$data[0]->s5_Image3) }}" alt="" width="120px" height="120">
                            <h4 class="et_pb_module_header "><span><label>Step 3</label><br> {{$data[0]->s5_Heading3}}</span></h4>
                            <div class="et_pb_blurb_description ">
                                <p>{{$data[0]->s5_Description3}}</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>

        <div class="container " style="text-align: center; ">
            <div class="row menu-1 menu-22">

                <div class="col-md-6 text-right">
                    <span class="btn btn-primary" style="font-weight: bold">
                        More Questions About The Process

                    </span>
                </div>
                <div class="col-md-6 text-left">
                    <span class="btn btn-primary" style="font-weight: bold">
                        Call Now! {{$data2[0]->Contact}}
                    </span>
                </div>

            </div>
        </div>

    </div>
</div>
<!-- helped -->

<div class="gtco-section mysec_1 mysec2">
    <div class="gtco-container ">
        <div class="row ">
            <div class="col-md-12 text-center gtco-heading nimate-box et_pb_text_2 fadeInUp animated-fast " data-animate-effect="fadeInUp ">
                <hr style="margin-bottom: 15px;border-color: #000;    padding-bottom: 20px;">
                <h3 class="text-center ">{{$data[0]->s6_Title}}</h3> <br>

                <p class="mainpara"><span style="text-decoration: underline; text-decoration: none; ">
                        {{$data[0]->s6_Paragraph}}</span></p>
                </span>
            </div>
        </div>
        <div class="row new_statr " id="new1 ">
            <div class="col-md-4 ">
                <div class="et_pb_blurb_content ">

                    <div class="et_pb_blurb_containe ">
                        <img loading="lazy " width="100 " height="100 " src="{{ asset('/frontend/images/'.$data[0]->s6_Image1) }}" alt=" " class="et-waypoint et_pb_animation_off wp-image-118
                    et-animated ">
                        <div class="et_pb_blurb_description ">
                            <p>{{$data[0]->s6_Description1}}</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-4 ">
                <div class="et_pb_blurb_content ">

                    <div class="et_pb_blurb_containe ">
                        <img loading="lazy " width="100 " height="100 " src="{{ asset('/frontend/images/'.$data[0]->s6_Image2) }}" alt=" " class="et-waypoint et_pb_animation_off wp-image-118 et-animated ">
                        <div class="et_pb_blurb_description ">
                            <p>{{$data[0]->s6_Description2}}</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-4 ">
                <div class="et_pb_blurb_content ">

                    <div class="et_pb_blurb_containe ">
                        <img loading="lazy " width="100 " height="100 " src="{{ asset('/frontend/images/'.$data[0]->s6_Image3) }}" alt=" " class="et-waypoint et_pb_animation_off wp-image-118 et-animated ">
                        <div class="et_pb_blurb_description ">
                            <p>{{$data[0]->s6_Description3}}</p>
                        </div>
                    </div>
                </div>
            </div>

        </div>
        <div class="row new_statr pt_12 " id="new1 ">
            <div class="col-md-4 ">
                <div class="et_pb_blurb_content ">

                    <div class="et_pb_blurb_containe ">
                        <img loading="lazy " width="100 " height="100 " src="{{ asset('/frontend/images/'.$data[0]->s6_Image4) }}" alt=" " class="et-waypoint et_pb_animation_off wp-image-118 et-animated ">
                        <div class="et_pb_blurb_description ">
                            <p>{{$data[0]->s6_Description4}}</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-4 ">
                <div class="et_pb_blurb_content ">

                    <div class="et_pb_blurb_containe ">
                        <img loading="lazy " width="100 " height="100 " src="{{ asset('/frontend/images/'.$data[0]->s6_Image5) }}" alt=" " class="et-waypoint et_pb_animation_off wp-image-118 et-animated ">
                        <div class="et_pb_blurb_description ">
                            <p>{{$data[0]->s6_Description5}}</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-4 ">
                <div class="et_pb_blurb_content ">

                    <div class="et_pb_blurb_containe ">
                        <img loading="lazy " width="100 " height="100 " src="{{ asset('/frontend/images/'.$data[0]->s6_Image6) }}" alt=" " class="et-waypoint et_pb_animation_off wp-image-118 et-animated ">
                        <div class="et_pb_blurb_description ">
                            <p>{{$data[0]->s6_Description6}}</p>
                        </div>
                    </div>
                </div>
            </div>

        </div>


    </div>
</div>



<!-- again geader -->
<header id="gtco-header " class="gtco-cover gtco-cover-md bg_img_1 banner_3 " role="banner ">

    <div class="gtco-container " id="gtco-header ">
        <div class="row ">



            <div class="col-md-12 col-md-offset-0 text-left form_sec ">


                <div class="row ">

                    <div class="col-md-7 mt-text animate-box et_pb_text_2 fadeInUp animated-fast new_head " data-animate-effect="fadeInUp ">
                        <h1>{{$data[0]->s7_Heading}}


                        </h1>
                        <h3>{{$data[0]->s7_Description}}</h3>
                        <p style="margin-bottom:0px ">Call Now! </p>
                        <p style="margin-top:0px;font-weight: bold;" class="cell_num ">{{$data2[0]->Contact}}</p>
                    </div>
                    <div class=" col-md-4 col-md-push-1 animate-box fadeInRight animated-fast " data-animate-effect="fadeInRight ">
                        <div class="form-wrap ">
                            <div class="et_pb_text_1 ">
                                <p>What do you have to lose? Get a Fair Cash Offer Today.

                                </p>
                            </div>
                            <div class="tab ">

                                <div class="tab-content_1 ">

                                    <div class="tab-content-inner active " data-content="signup ">
                                        <form action="# ">
                                            <div class="row form-group ">
                                                <div class="col-md-12 ">
                                                    <label for="fullname "> Property Address</label>
                                                    <input type="text " id="fullname " class="form-control ">
                                                </div>
                                            </div>
                                            <div class="row form-group ">
                                                <div class="col-md-12 ">
                                                    <label for="activities ">Phone </label>
                                                    <input type="number " id="Phone " class="form-control ">

                                                </div>
                                            </div>
                                            <div class="row form-group ">
                                                <div class="col-md-12 ">
                                                    <label for="activities ">Email</label>
                                                    <input type="email " id="Property " class="form-control ">

                                                </div>
                                            </div>



                                            <div class="row form-group get_cash ">
                                                <div class="col-md-12 ">
                                                    <input type="submit " class="btn btn-primary btn-block " value="GET MY CASH OFFER NOW ">
                                                </div>
                                            </div>
                                        </form>
                                    </div>


                                </div>
                            </div>
                        </div>
                    </div>
                </div>


            </div>
        </div>
    </div>

</header>


@endsection