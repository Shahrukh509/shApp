@extends('frontend.main')

@section('content')
<div class="gtco-section">
    <div class="gtco-container">
        <div class="row">
            <div class="col-md-12   gtco-heading nimate-box et_pb_text_2 fadeInUp animated-fast" data-animate-effect="fadeInUp">

                <div class="faq_area section_padding_130" id="faq">
                    <div class="container">
                        <div class="row justify-content-center">
                            <div class="col-12 col-sm-8 col-lg-6">
                                <!-- Section Heading-->
                                <div class="section_heading  wow fadeInUp" data-wow-delay="0.2s" style="visibility: visible; animation-delay: 0.2s; animation-name: fadeInUp;">
                                    <h3><span>Frequently </span> Asked Questions</h3>
                                    <div class="line"></div>
                                </div>
                            </div>
                        </div>
                        <div class="row ">
                            <!-- FAQ Area-->
                            <div class="col-12 col-sm-10 col-lg-8">
                                <div class="accordion faq-accordian" id="faqAccordion">
                                    @foreach($data as $faq)
                                    <div class="card border-0 wow fadeInUp" data-wow-delay="0.2s" style="visibility: visible; animation-delay: 0.2s; animation-name: fadeInUp;">
                                        <div class="card-header" id="headingOne">
                                            <h6 class="mb-0 collapsed" data-toggle="collapse" data-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                                                <strong>Q: {{$faq->Question}}</strong>
                                                <span class="lni-chevron-up"></span>
                                            </h6>
                                        </div>
                                        <div class="collapse" id="collapseOne" aria-labelledby="headingOne" data-parent="#faqAccordion">
                                            <div class="card-body">
                                                <p>
                                                    A: {{$faq->Answer}}
                                                </p>
                                            </div>
                                        </div>
                                    </div>
                                    @endforeach

                                </div>
                                <!-- Support Button-->

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>


    </div>





</div>

@endsection