@extends('frontend.main')

@section('content')



<header id="gtco-header" class="gtco-cover gtco-cover-md bg_img" role="banner">
    <!-- <div class="overlay"></div> -->

    <div class="gtco-container">
        <div class="row">



            <div class="col-md-12 col-md-offset-0 text-left form_sec">


                <div class="row ">

                    <div class="col-md-8 mt-text animate-box et_pb_text_2" data-animate-effect="fadeInUp">
                        <!-- <h2>WE BUY HOUSES NATIONWIDE!</h2> -->
                        <h1 style="font-family: 'Lato', Arial, sans-serif;">Sell Your House Today With Properdeed For The Best Price.</h1>
                        <p>No commissions or fees, sell your house ”AS IS”.</p>
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
                <h3 class="text-center">Why Sell Your Home To Us At Properdeed?</h3>
                <!-- <p><span style="text-decoration: underline; color: #777;">We Buy Houses at Any Price in any condition.</span></p> -->
            </div>
        </div>
        <div class="row">

            <div class="col-md-12">
                <div class="main_ main_section">
                    <div class="et_pb_main_blurb_image">
                        <span class="et_pb_image_wrap">
                            <img src={{asset("frontend/images/-oCcrsTU.jpeg" )}} />
                        </span>
                    </div>
                    <div class="et_pb_blurb_container">

                        <h4 class="et_pb_module_header"><span>Experience and Reliable</span></h4>
                        <div class="et_pb_blurb_description">
                            <p>We have over 10 years experience buying properties. We will treat you professionally.</p>
                        </div>


                    </div>
                </div>
                <div class="main_ main_section">
                    <div class="et_pb_main_blurb_image">
                        <span class="et_pb_image_wrap">
                            <img src={{asset("frontend/images/-oCcrsTU.jpeg" )}} />
                        </span>
                    </div>
                    <div class="et_pb_blurb_container">

                        <h4 class="et_pb_module_header"><span>We Never charge fees or closing cost</span></h4>
                        <div class="et_pb_blurb_description">
                            <p>Save your money. We will pay all closing costs.</p>
                        </div>


                    </div>
                </div>
                <div class="main_ main_section">
                    <div class="et_pb_main_blurb_image">
                        <span class="et_pb_image_wrap">
                            <img src={{asset("frontend/images/-oCcrsTU.jpeg" )}} />
                        </span>
                    </div>
                    <div class="et_pb_blurb_container">

                        <h4 class="et_pb_module_header"><span>We buy houses in AS-IS condition</span></h4>
                        <div class="et_pb_blurb_description">
                            <p>You don't have to worry about clean-up or repairs. Leave any unwanted items behind. We’ll take care of it for you, while you focus on your future.</p>
                        </div>


                    </div>
                </div>
                <div class="main_ main_section">
                    <div class="et_pb_main_blurb_image">
                        <span class="et_pb_image_wrap">
                            <img src={{asset("frontend/images/-oCcrsTU.jpeg" )}} />
                        </span>
                    </div>
                    <div class="et_pb_blurb_container">

                        <h4 class="et_pb_module_header"><span>Convenience</span></h4>
                        <div class="et_pb_blurb_description">
                            <p>We can close in as little as 10 days or you can pick your move out date. We make your life easy.</p>
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
                <img src={{asset("frontend/images/Testimonial.jpg")}} alt="" class="img-fluid" style="height: auto;
                        max-width: 100%;">
            </div>
            <div class="col-md-6">
                <div class="">

                    <div class="et_pb_blurb_container" id="gtco-header">

                        <h1><span class="meet">Meet James and Donna</span></h1> <br>
                        <div class="et_pb_blurb_description">
                            <p class="para"> “We had a distress property that was costing us money. James contacted Properdeed to see if they might be interested in buying our property. The staff was professional and responsive and we were pleased with the offer.
                                Selling was a seamless process. Properdeed team made this a very pleasent experience."</p>
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
                                <h1 style=" color: #000;text-align:center;font-size:35px; ">Ready To Move On? <br> Get a Fair Cash Offer Today  </h1> <br>
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
                    Our Process Is Fast And Easy
                </h3>

            </div>
        </div>
        <div class="row new_statr " id="new ">
            <div class="col-md-4">
                <div class="box_border">
                    <div class="et_pb_blurb_content ">

                        <div class="et_pb_blurb_container " style="text-align: center; ">
                            <img loading="lazy " src="https://i1.wp.com/properdeed.com/wp-content/uploads/2021/07/shutterstock_1625233630__1_-removebg-preview.png?fit=120%2C120&ssl=1 " alt=" " class="et-waypoint et_pb_animation_off
                    wp-image-118 et-animated ">
                            <h4 class="et_pb_module_header "><span><label>Step 1</label><br>Contact Us </span></h4>
                            <div class="et_pb_blurb_description ">
                                <p class=" ">Fill out our <a href="# ">Get My Cash Offer Now Form </a> with the required details, or call us at <a href="tel:9095314183 ">(949) 520-1924</a> .</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="box_border">
                    <div class="et_pb_blurb_content ">

                        <div class="et_pb_blurb_container " style="text-align: center; ">
                            <img loading="lazy " src="https://i1.wp.com/properdeed.com/wp-content/uploads/2021/07/N_CDigfQ-removebg-preview.png?fit=120%2C120&ssl=1 " alt=" " class="et-waypoint et_pb_animation_off wp-image-118 et-animated ">
                            <h4 class="et_pb_module_header "><span><label>Step 2</label><br>
                                    Get An Offer
                                </span></h4>
                            <div class="et_pb_blurb_description ">
                                <p>We present you with highest cash offer possible within 24 hours. No obligation and no fees.</p>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="box_border">
                    <div class="et_pb_blurb_content ">

                        <div class="et_pb_blurb_container " style="text-align: center; ">
                            <img loading="lazy " src="https://i1.wp.com/properdeed.com/wp-content/uploads/2021/07/hMXKA53g-removebg-preview.png?fit=120%2C120&ssl=1 " alt=" " class="et-waypoint et_pb_animation_off wp-image-118 et-animated ">
                            <h4 class="et_pb_module_header "><span><label>Step 3</label><br> Get Paid</span></h4>
                            <div class="et_pb_blurb_description ">
                                <p>We close at a local reputable title company.</p>
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
                        Call Now! (949) 520-1924
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
                <h3 class="text-center ">We’ve helped homeowners get a fresh start</h3> <br>

                <p class="mainpara"><span style="text-decoration: underline; text-decoration: none; ">
                        We help property owners just like you, in all kinds of situations. We purchase outdated and distressed homes ‘as-is’ and we pay for all the repairs and for all your real estate fees.
                        <span style=" text-align: left; ">
                            If you simply don’t want to put up with the hassle of owning that house any longer, and if you don’t want to put up with the hassle and time-consuming expense of selling your property the traditional way , let us know we ca provide you with cash in as little as 10 days. We promise to deliver peace of mind and support throughout the process. </span></p>
                </span>
            </div>
        </div>
        <div class="row new_statr " id="new1 ">
            <div class="col-md-4 ">
                <div class="et_pb_blurb_content ">

                    <div class="et_pb_blurb_containe ">
                        <img loading="lazy " width="100 " height="100 " src="https://i2.wp.com/properdeed.com/wp-content/uploads/2021/07/repair_image-removebg-preview.png?fit=85%2C85&ssl=1 " alt=" " class="et-waypoint et_pb_animation_off wp-image-118
                    et-animated ">
                        <div class="et_pb_blurb_description ">
                            <p>Property in Need of Repairs</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-4 ">
                <div class="et_pb_blurb_content ">

                    <div class="et_pb_blurb_containe ">
                        <img loading="lazy " width="100 " height="100 " src="https://i2.wp.com/properdeed.com/wp-content/uploads/2021/07/bills-removebg-preview.png?fit=80%2C80&ssl=1 " alt=" " class="et-waypoint et_pb_animation_off wp-image-118 et-animated ">
                        <div class="et_pb_blurb_description ">
                            <p>Financial Distress</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-4 ">
                <div class="et_pb_blurb_content ">

                    <div class="et_pb_blurb_containe ">
                        <img loading="lazy " width="100 " height="100 " src="https://i0.wp.com/properdeed.com/wp-content/uploads/2021/07/events.png?fit=90%2C90&ssl=1 " alt=" " class="et-waypoint et_pb_animation_off wp-image-118 et-animated ">
                        <div class="et_pb_blurb_description ">
                            <p>Unexpected Life Events</p>
                        </div>
                    </div>
                </div>
            </div>

        </div>
        <div class="row new_statr pt_12 " id="new1 ">
            <div class="col-md-4 ">
                <div class="et_pb_blurb_content ">

                    <div class="et_pb_blurb_containe ">
                        <img loading="lazy " width="100 " height="100 " src="https://i1.wp.com/properdeed.com/wp-content/uploads/2021/07/relocation.png?fit=80%2C80&ssl=1 " alt=" " class="et-waypoint et_pb_animation_off wp-image-118 et-animated ">
                        <div class="et_pb_blurb_description ">
                            <p>Downsizing Or Relocation</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-4 ">
                <div class="et_pb_blurb_content ">

                    <div class="et_pb_blurb_containe ">
                        <img loading="lazy " width="100 " height="100 " src="https://i1.wp.com/properdeed.com/wp-content/uploads/2021/07/property.png?fit=80%2C80&ssl=1 " alt=" " class="et-waypoint et_pb_animation_off wp-image-118 et-animated ">
                        <div class="et_pb_blurb_description ">
                            <p>Inherited Property</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-4 ">
                <div class="et_pb_blurb_content ">

                    <div class="et_pb_blurb_containe ">
                        <img loading="lazy " width="100 " height="100 " src={{asset("frontend/images/alert.jpg")}} alt=" " class="et-waypoint et_pb_animation_off wp-image-118 et-animated ">
                        <div class="et_pb_blurb_description ">
                            <p>Problematic Property</p>
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
                        <h1>Over 10,000 Offers Received.


                        </h1>
                        <h3>Each day homeowners get their offers on Properdeed.</h3>
                        <p style="margin-bottom:0px ">Call Now! </p>
                        <p style="margin-top:0px;font-weight: bold;" class="cell_num ">(949) 520-1924</p>
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