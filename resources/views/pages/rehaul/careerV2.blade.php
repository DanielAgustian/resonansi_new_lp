@extends('master-landing')
@section('page')
    | Career
@endsection
@section('css')
    <link rel="stylesheet" href="https://unpkg.com/swiper/swiper-bundle.min.css" />
    <style>

    </style>
    <link rel="stylesheet" href="{{ asset('asset/css/rehaul/homepage.css') }}">
    <link rel="stylesheet" href="{{ asset('asset/css/rehaul/career.css') }}">
@endsection

@section('banner')
    <section id="page-title" class="bg-color page-title-dark py-6">

        <div class="container clearfix">
            <h1>Karir</h1>
            <span>Berkarir Bersama Kami</span>
            {{-- <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="{{route('homePageV2')}}">Home</a></li>
            <li class="breadcrumb-item active" aria-current="page"><a href="{{route('contactUsV2')}}">Contact us</a></li>
        </ol> --}}
        </div>

    </section>
@endsection

@section('content')
    <div class="content">
        <div class="section mt-0"
            style="background-position: center center; background-repeat: no-repeat; background-size: cover; background-image: linear-gradient(to right, rgba(0,0,0,.6), rgba(0,0,0,0.3)),  url('{{ asset('images/rehaul/1.jpg') }}');">
            <div class="shape-divider" data-shape="wave" data-position="bottom" data-height="100"></div>

            <div class="container dark">
                <div class="row align-items-center h-100" style="padding: 50px 0 150px">
                    <div class=" col-lg-6 col-md-11">
                        <h5 class="mb-3 text-uppercase ls3 text-white-50">Join Our Team</h5>
                        <h3 class="display-5 fw-semibold mb-4">Working at
                            <span class="span-bl">Resonansi</span>
                        </h3>
                        <p>We live to work together with you to help your customers understand better about your brand or
                            products, help you break through technology barriers, capitalize on opportunities and connect
                            with people in this evolving digital landscape
                        </p>
                    </div>
                    <div class="col-lg-6">
                        <img src="https://www.openaccessgovernment.org/wp-content/uploads/2019/03/dreamstime_s_115214614-696x465.jpg"
                            alt="" class="w-100 rounded">
                    </div>
                </div>


            </div>
        </div>
        <div class=" py-5 section-team">
            <div class="container">
                <div class="row">
                    <div class="col-md-5">
                        <img src="{{ asset('images/logo-resonansi.png') }}" alt="" class="logo-reso w-100">
                    </div>
                    <div class="col-md-7">
                        <h3 class="display-6 fw-semibold mb-4"> <span class="span-bl">Resonansi</span>'s Team
                        </h3>
                        <p>We can make your digital strategy become action & implement our technology and data science into
                            your
                            marketing strategy.
                        </p>
                        <p>With our expertise in technology and digital strategy, We always aim to make your company’s grow
                            that
                            minimum
                            10 times.
                        </p>
                        <p>We live to work together with you to help your customer understand better about your brand or
                            products.
                        </p>
                    </div>
                </div>

            </div>
        </div>
        <div class="value-team">
            <div class="container">
                <div class=" row justify-content-between align-items-center">
                    <div class="col-lg-4 mb-lg-0 mb-4">
                        <h3 class="display-6 fw-semibold mb-3">Our <span class="span-bl">Values</span></h3>
                        <p>Our values is integral to our quality and it is implemented on our daily basis.</p>
                    </div>
                    <div class="col-lg-7">
                        <div class="row justify-content-around">
                            <div class="col-md-4 col-6">
                                <div class="value-box">
                                    <i class="fas fa-running"></i>
                                    <h5 class="value-title">Going Extra Miles</h5>
                                </div>
                            </div>
                            <div class="col-md-1 d-md-flex d-none"></div>
                            <div class="col-md-4 col-6">
                                <div class="value-box">
                                    <i class="fas fa-history"></i>
                                    <h5 class="value-title">Break a Routine</h5>
                                </div>
                            </div>
                            <div class="col-md-3 d-md-flex d-none"></div>
                            <div class="w-100"></div>
                            <div class="col-md-3 d-md-flex d-none"></div>
                            <div class="col-md-4 col-6">
                                <div class="value-box">
                                    <i class="fas fa-crown"></i>
                                    <h5 class="value-title">Be a Master</h5>
                                </div>
                            </div>
                            <div class="col-md-1 d-md-flex d-none"></div>
                            <div class="col-md-4 col-6">
                                <div class="value-box">
                                    <i class="fas fa-star"></i>
                                    <h5 class="value-title">Living in a 5 stars</h5>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>


        </div>
        <div class="clear"></div>

        <div class="dark py-5" style="background-color: #061a35;">

            <div class="container">
                <div class="row justify-content-center align-items-center">
                    <div class="col-md-7 text-center">
                        <h3 class="display-6 text-center mb-4 fw-semibold">Advantages Of Working With <strong>Resonansi</strong></h3>
                        {{-- <p class="text-center">Lorem, ipsum dolor, sit amet consectetur adipisicing elit. Voluptatem facere quibusdam numquam fugiat reiciendis et, dolorem illo, quisquam tempore, id ducimus quis officia sit quam, doloremque rerum necessitatibus labore modi.</p> --}}
                        
                    </div>
                    <div class="col-lg-9 col-md-10">
                        <div class="row mt-5 justify-content-center">
                            <div class="col-lg-4 col-6">
                                <div class="box-advan">
                                    <img src="https://www.openaccessgovernment.org/wp-content/uploads/2019/03/dreamstime_s_115214614-696x465.jpg"
                                        alt="">
                                    <h5 class="adv-title">Increase Product or Service
                                        Sales Conversion
                                    </h5>
                                </div>
                            </div>
                            <div class="col-lg-4 col-6">
                                <div class="box-advan">
                                    <img src="https://www.openaccessgovernment.org/wp-content/uploads/2019/03/dreamstime_s_115214614-696x465.jpg"
                                        alt="">
                                    <h5 class="adv-title">Helping Businesses to Compete with Competitors

                                    </h5>
                                </div>
                            </div>
                            <div class="col-lg-4 col-6">
                                <div class="box-advan">
                                    <img src="https://www.openaccessgovernment.org/wp-content/uploads/2019/03/dreamstime_s_115214614-696x465.jpg"
                                        alt="">
                                    <h5 class="adv-title">Expanding Potential Market Reach

                                    </h5>
                                </div>
                            </div>
                        </div>
                    </div>
                   
                    {{-- <div class="col-md-5" style="transform: translateY(-45px)">
								<img src="demos/movers/images/team/section.jpg" alt="John Doe">
							</div> --}}
                </div>
            </div>

        </div>

        <div class="section dark pt-0 m-0 bg-color"
            style="background: url('demos/movers/images/bg-2.png') no-repeat center bottom / 100%; overflow: visible">
            <svg viewBox="0 0 1960 206.8" style="background-color: #061a35;">
                <path class="svg-themecolor" style="opacity:0.2;"
                    d="M0,142.8A2337.49,2337.49,0,0,1,297.5,56.3C569.33-3.53,783.89.22,849.5,2.3c215.78,6.86,382.12,45.39,503.25,73.45,158.87,36.8,283.09,79.13,458.75,54.55A816.49,816.49,0,0,0,1983,86.8v110H0Z" />
                <path class="svg-themecolor" d="M.5,152.8s498-177,849-150,1031,238,1134,94v110H.5Z" />
            </svg>
            <div class="container">
                <div class="row align-items-center justify-content-center center my-4">

                    <div class="col-sm-8">
                        <div class="heading-block border-bottom-0 mb-4">
                            <h3 class="fw-semibold ls0 nott mb-3 display-6" style=" line-height: 1.3">Interested to Join Us?</h3>
                            
                        </div>
                        <a href=""
                            class="button button-white button-light button-rounded fw-bold m-0">Click here</a>
                    </div>

                </div>
            </div>
        </div>

    </div>

    </div>
@endsection

@section('js')
@endsection
