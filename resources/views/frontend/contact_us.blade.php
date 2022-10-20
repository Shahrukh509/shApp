@extends('frontend.main')

@section('content')



<div class="gtco-section privacy_policy_para">
    <div class="gtco-container">


        <div class="row contact_us ">
            <div class="col-md-12   gtco-heading nimate-box et_pb_text_2 fadeInUp animated-fast" data-animate-effect="fadeInUp">
                <div class="row ">

                    <!--Grid column-->
                    <div class="col-lg-5 mb-4">

                        <!--Form with header-->
                        <div class="card border-primary rounded-0">

                            <div class="card-header p-0">
                                <div class=" text-white text-center py-2">
                                    <h3><i class="fa fa-envelope"></i>{{$data[0]->Heading}}</h3>
                                    <p class="m-0">{{$data[0]->Description}}</p>
                                </div>
                            </div>
                            <div class="card-body p-3">

                                <!--Body-->
                                <div class="form-group">
                                    <label>Your name</label>
                                    <div class="input-group">
                                        <div class="input-group-addon bg-light"><i class="fa fa-user text-primary"></i></div>
                                        <input type="text" class="form-control" id="inlineFormInputGroupUsername" placeholder="Username">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label>Your email</label>
                                    <div class="input-group mb-2 mb-sm-0">
                                        <div class="input-group-addon bg-light"><i class="fa fa-envelope text-primary"></i></div>
                                        <input type="text" class="form-control" id="inlineFormInputGroupUsername" placeholder="Username">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label>Service</label>
                                    <div class="input-group mb-2 mb-sm-0">
                                        <div class="input-group-addon bg-light"><i class="fa fa-tag prefix text-primary"></i></div>
                                        <input type="text" class="form-control" id="inlineFormInputGroupUsername" placeholder="Username">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label>Message</label>
                                    <div class="input-group mb-2 mb-sm-0">
                                        <div class="input-group-addon bg-light"><i class="fa fa-pencil text-primary"></i></div>
                                        <textarea class="form-control"></textarea>
                                    </div>
                                </div>

                                <div class="text-center">
                                    <button class="btn btn-primary btn-block rounded-0 py-2">Submit</button>
                                </div>

                            </div>

                        </div>
                        <!--Form with header-->

                    </div>
                    <!--Grid column-->

                    <!--Grid column-->
                    <div class="col-lg-7">

                        <!--Google map-->
                        <div class="mb-4">

                        </div>

                        <!--Buttons-->
                        <div class="row text-center">
                            <div class="col-md-4">
                                <a class=" px-3 py-2 rounded text-white mb-2 d-inline-block"><i class="fa fa-map-marker"></i></a>
                                <p>{{$data2[0]->Address}}</p>

                            </div>

                            <div class="col-md-4">
                                <a class=" px-3 py-2 rounded text-white mb-2 d-inline-block"><i class="fa fa-phone"></i></a>
                                <p>{{$data2[0]->Phone}} <br>{{$data2[0]->Timings}}</p>
                            </div>

                            <div class="col-md-4">
                                <a class=" px-3 py-2 rounded text-white mb-2 d-inline-block"><i class="fa fa-envelope"></i></a>
                                <p>{{$data2[0]->Email}}<br>{{$data2[0]->Email2}}</p>
                            </div>
                        </div>

                    </div>
                    <!--Grid column-->

                </div>
            </div>



        </div>





    </div>


    <!-- <div class="row  footer_p">
        <div class="col-md-12 covid_p ">
            <span> Copyright &nbsp; © Same Day Home Sale | All Rights Reserved | View Our privacy policy | Designed by Gold Level Marketing </span>
        </div>
    </div> -->




</div>

@endsection