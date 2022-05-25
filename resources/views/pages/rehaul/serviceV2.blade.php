@extends('master-landing')
@section('page')
    | Service
@endsection
@section('css')
    <link rel="stylesheet" href="https://unpkg.com/swiper/swiper-bundle.min.css" />
    <style>
        .img-layanan-bg {
            width: 100%;
            max-height: 350px;
            object-fit: contain
        }

        .card-problem {
            border-radius: 12px;
            background: #CED3DC !important;
            box-shadow: 0px 10px 20px 2px rgba(255, 255, 255, 0.25);
            transition: all 0.5s;

        }

        .card-problem .card-body {
            padding: 0.85rem;
        }

        .card-problem img {
            width: 100%;
            height: 120px;
            object-fit: contain;
            margin-bottom: 10px;
        }

        .card-problem .problem-title {
            color: black;
            line-height: 1.75;
        }

        .card-problem:hover {
            transform: translateY(-5px);
            background: white !important;
            box-shadow: 0px 10px 20px 2px rgba(255, 255, 255, 0.35);

        }

        .title-service {
            font-size: 34px;
        }

        @media screen and (max-width: 996px) {
            .title-service {
                font-size: 28px;
            }
        }

        @media screen and (max-width: 450px) {
            .title-service {
                font-size: 24px;
            }
            .card-problem .problem-title{
                font-size: 11px;
            }
            .card-problem{
                min-height: 270px;
            }
            .card-problem img{
                height: 100px;
            }
        }

    </style>
    <link rel="stylesheet" href="{{ asset('asset/css/rehaul/homepage.css') }}">
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
@endsection
@section('banner')
    <section id="page-title" class="bg-color page-title-dark py-6">

        <div class="container clearfix">
            <h1 class="nott">Service</h1>
            <span>Layanan dari Kami untuk Anda</span>
            {{-- <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="{{ route('homePageV2') }}">Home</a></li>
                <li class="breadcrumb-item"><a href="{{ route('servicePageV2') }}">Services</a></li>
            </ol> --}}
        </div>

    </section>
@endsection
@section('content')
    <section id="content">


        <div class="section mt-0"
            style="background-position: center center; background-repeat: no-repeat; background-size: cover; background-color: #061a35;);">
            <div class="shape-divider" data-shape="wave" data-position="bottom" data-height="100"></div>

            <div class="container dark">
                <div style="padding: 50px 0px 150px">
                    <div class="row align-items-center">
                        <div class="col-lg-4">
                            <h5 class="mb-3 text-uppercase ls3 " style="color: rgba(255, 255, 255, 0.85)">Solusi Resonansi
                            </h5>
                            <h2 class="title-service mb-4" style="font-weight: 500">Kami paham masalahmu dalam menjalani
                                <strong>bisnis online</strong>.
                                </h3>
                                <p class="text-white">
                                    Apapun masalahmu ketika menjalani bisnis online, Resonansi bisa menjawab dan
                                    menyelesaikan masalah tersebut dengan berbagai layanan yang kami sediakan.
                                </p>
                        </div>
                        <div class="col-lg-8">
                            <div class="row justify-content-center align-items-md-center">
                                <div class="col-md-4 col-6 order-md-1 order-1">
                                    @component('components.rehaul.problem-card')
                                        @slot('img')
                                            {{ asset('images/rehaul/service/resonansi-1.png') }}
                                        @endslot
                                        @slot('title')
                                            Udah bikin konten tapi gak ada likes & comment. Sering posting tapi gak ada interaksi di
                                            sosmed?
                                        @endslot
                                    @endcomponent
                                    @component('components.rehaul.problem-card')
                                        @slot('img')
                                            {{ asset('images/rehaul/service/resonansi-4.png') }}
                                        @endslot
                                        @slot('title')
                                            Punya website tapi gak ada pengunjung responsifnya, bingung bikin design yang
                                            profesional & menarik
                                        @endslot
                                    @endcomponent
                                </div>
                                <div class="col-md-4 col-6 order-md-2 order-3">
                                    @component('components.rehaul.problem-card')
                                        @slot('img')
                                            {{ asset('images/rehaul/service/resonansi-3.png') }}
                                        @endslot
                                        @slot('title')
                                            Omzet usaha masih gitu-gitu aja,
                                            mau naikin profit & berkembang di dunia digital tapi gak tau gimana caranya
                                        @endslot
                                    @endcomponent
                                </div> 
                                <div class="col-md-4 col-6 order-md-3 order-2">
                                    @component('components.rehaul.problem-card')
                                        @slot('img')
                                            {{ asset('images/rehaul/service/resonansi-2.png') }}
                                        @endslot
                                        @slot('title')
                                            Nambah barang /toko = nambah admin. Biaya operasional terus naik seiring dengan naiknya
                                            omzet
                                        @endslot
                                    @endcomponent
                                    @component('components.rehaul.problem-card')
                                        @slot('img')
                                            {{ asset('images/rehaul/service/resonansi-5.png') }}
                                        @endslot
                                        @slot('title')
                                            Mau bikin virtual event/ webinar tapi gak punya resource buat handle acara?
                                        @endslot
                                    @endcomponent
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row align-items-center h-100 justify-content-center">
                        <div class=" col-lg-8 col-md-11">
                            {{-- <h5 class="mb-3 text-uppercase ls3 text-white-50">Siapa Kami</h5> --}}

                            {{-- <p>Resonansi ada untuk membantu sebuah brand agar dapat satu frekuensi yang sama, dengan apa
                                    yang sedang diperbincangan setiap saat oleh masyarakat, untuk membantu masyarakat atau
                                    konsumen dari brand untuk paham tentang produk milik brand.</p> --}}
                        </div>
                        {{-- <div class="col-12 mt-2">
                                <a href="{{ asset('brosur/brosur_resonansi.pdf') }}" download>
                                    <button class="btn btn-blue-dark">Learn More</button>
                                </a>
                            </div> --}}
                    </div>

                </div>




            </div>
        </div>

        <div class="" style="height: 60px"></div>
        <div class="container ">
            <h3 class="display-6 fw-bold mb-5 text-center" style="color: #000000AE">Layanan <span class="span-bl">Resonansi</span> untuk Anda</h3>
            <div class="row justify-content-center">
                <div class="col-lg-12 col-md-10">
                    <div class="row align-items-center">
                        <div class="col-lg-6 col-sm-6 ">
                            <img src="{{ asset('images/rehaul/landing-page-campaign.png') }}" alt="Image 1"
                                class="img-layanan-bg">
                        </div>
                        <div class="col-lg-6 col-sm-6">
                            <h3 class="text-center text-sm-start" style="margin-bottom: 25px">Technology</h3>
                            <div class="d-flex justify-content-center ms-sm-0 ms-3 justify-content-sm-start box-data">
                                <div>
                                    <span class="list-layanan ">
                                        <i class="fas fa-check-circle me-2 mt-1"></i>
                                        Company Profile Website
                                    </span>
                                    <span class="list-layanan">
                                        <i class="fas fa-check-circle me-2 mt-1"></i>
                                        Landing Page Campaign
                                    </span>
                                    <p class="mb-2 text-start text-sm-start mt-4 fw-bold">
                                        Software as a Service
                                    </p>
                                    <span class="list-layanan ">
                                        <i class="fas fa-check-circle me-2 mt-1"></i>
                                        AJAKIN (Referral Software Management System)
                                    </span>
                                    <span class="list-layanan">
                                        <i class="fas fa-check-circle me-2 mt-1"></i>
                                        NGERTIYO (Gamification Education Business))
                                    </span>
                                    <div class="d-flex justify-content-center mt-4 justify-content-sm-start me-sm-0 me-3">
                                        <button class="btn btn-blue btn-bigger btn-order" data-type="technology">Order
                                            Now</button>
                                    </div>
                                </div>
                            </div>




                        </div>
                    </div>
                    <div class="row align-items-center mt-5">
                        <div class="col-sm-6 mb-4 mb-sm-0 order-sm-1 order-2">
                            <h3 class="text-center text-sm-end" style="margin-bottom: 25px">Digital Strategy</h3>
                            <div class="row no-gutters">
                                <div class="col-lg-6">
                                    <div class="d-flex flex-column ms-sm-0 ms-3 align-items-sm-end">
                                        <div>
                                            <p class="mb-2 text-start text-sm-end fw-bold">
                                                Social Media Marketing
                                            </p>

                                            <span class="list-layanan text-start text-sm-end ">
                                                <i class="fas fa-check-circle me-2 mt-1 d-sm-none d-inline-flex"></i>
                                                Campaign
                                                <i class="fas fa-check-circle ms-2 mt-1 d-sm-inline-flex d-none"></i>
                                            </span>
                                            <span class="list-layanan text-start text-sm-end ">
                                                <i class="fas fa-check-circle me-2 mt-1 d-sm-none d-inline-flex"></i>
                                                Matrix Plan
                                                <i class="fas fa-check-circle ms-2 mt-1 d-sm-inline-flex d-none"></i>
                                            </span>

                                            <span class="list-layanan text-start text-sm-end ">
                                                <i class="fas fa-check-circle me-2 mt-1 d-sm-none d-inline-flex"></i>
                                                Content Management
                                                <i class="fas fa-check-circle ms-2 mt-1 d-sm-inline-flex d-none"></i>
                                            </span>
                                            <span class="list-layanan text-start text-sm-end ">
                                                <i class="fas fa-check-circle me-2 mt-1 d-sm-none d-inline-flex"></i>
                                                Digital Branding
                                                <i class="fas fa-check-circle ms-2 mt-1 d-sm-inline-flex d-none"></i>
                                            </span>
                                            <span class="list-layanan text-start text-sm-end ">
                                                <i class="fas fa-check-circle me-2 mt-1 d-sm-none d-inline-flex"></i>
                                                Brand Logo
                                                <i class="fas fa-check-circle ms-2 mt-1 d-sm-inline-flex d-none"></i>
                                            </span>

                                        </div>

                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="d-flex flex-column ms-sm-0 ms-3 align-items-sm-end">
                                        <div>
                                            <p class="mb-2 text-start text-sm-end fw-bold">
                                                Conversion Optimization
                                            </p>

                                            <span class="list-layanan text-start text-sm-end ">
                                                <i class="fas fa-check-circle me-2 mt-1 d-sm-none d-inline-flex"></i>
                                                Google Ads
                                                <i class="fas fa-check-circle ms-2 mt-1 d-sm-inline-flex d-none"></i>
                                            </span>
                                            <span class="list-layanan text-start text-sm-end ">
                                                <i class="fas fa-check-circle me-2 mt-1 d-sm-none d-inline-flex"></i>
                                                Facebook Ads
                                                <i class="fas fa-check-circle ms-2 mt-1 d-sm-inline-flex d-none"></i>
                                            </span>

                                            <span class="list-layanan text-start text-sm-end ">
                                                <i class="fas fa-check-circle me-2 mt-1 d-sm-none d-inline-flex"></i>
                                                Instagram Ads
                                                <i class="fas fa-check-circle ms-2 mt-1 d-sm-inline-flex d-none"></i>
                                            </span>
                                            <span class="list-layanan text-start text-sm-end ">
                                                <i class="fas fa-check-circle me-2 mt-1 d-sm-none d-inline-flex"></i>
                                                Youtube Ads
                                                <i class="fas fa-check-circle ms-2 mt-1 d-sm-inline-flex d-none"></i>
                                            </span>
                                            <span class="list-layanan text-start text-sm-end ">
                                                <i class="fas fa-check-circle me-2 mt-1 d-sm-none d-inline-flex"></i>
                                                Tiktok Ads
                                                <i class="fas fa-check-circle ms-2 mt-1 d-sm-inline-flex d-none"></i>
                                            </span>
                                            <span class="list-layanan text-start text-sm-end ">
                                                <i class="fas fa-check-circle me-2 mt-1 d-sm-none d-inline-flex"></i>
                                                Email Marketing
                                                <i class="fas fa-check-circle ms-2 mt-1 d-sm-inline-flex d-none"></i>
                                            </span>
                                            <span class="list-layanan text-start text-sm-end ">
                                                <i class="fas fa-check-circle me-2 mt-1 d-sm-none d-inline-flex"></i>
                                                SEO (Search Engine Optimization)
                                                <i class="fas fa-check-circle ms-2 mt-1 d-sm-inline-flex d-none"></i>
                                            </span>
                                            <span class="list-layanan text-start text-sm-end ">
                                                <i class="fas fa-check-circle me-2 mt-1 d-sm-none d-inline-flex"></i>
                                                Influencer & KOL Management
                                                <i class="fas fa-check-circle ms-2 mt-1 d-sm-inline-flex d-none"></i>
                                            </span>


                                        </div>

                                    </div>
                                </div>
                                <div class="col-12">
                                    <div class="d-flex justify-content-center mt-4 justify-content-sm-end">
                                        <button class="btn btn-blue btn-bigger btn-order"
                                            data-type=" digital-strategy">Order Now!</button>
                                    </div>
                                </div>
                            </div>


                        </div>
                        <div class="col-sm-6 order-sm-2 order-1">
                            <img src="{{ asset('images/rehaul/campaign.png') }}" alt="Image 1" class="img-layanan-bg">
                        </div>
                    </div>
                    <div class="row align-items-center mt-5">
                        <div class="col-sm-6 ">
                            <img src="{{ asset('images/rehaul/product-opt.png') }}" alt="Image 1" class="img-layanan-bg">
                        </div>
                        <div class="col-sm-6">
                            <h3 class="text-center text-sm-start" style="margin-bottom: 25px">Marketplace Optimization
                            </h3>

                            <div class="d-flex justify-content-center justify-content-sm-start box-data">
                                <div>
                                    <span class="list-layanan ">
                                        <i class="fas fa-check-circle me-2 mt-1"></i>
                                        Shop & Ads Optimization
                                    </span>
                                    <span class="list-layanan">
                                        <i class="fas fa-check-circle me-2 mt-1"></i>
                                        Product Optimization
                                    </span>

                                    <span class="list-layanan ">
                                        <i class="fas fa-check-circle me-2 mt-1"></i>
                                        Marketplace Live Interaction
                                    </span>
                                    <span class="list-layanan">
                                        <i class="fas fa-check-circle me-2 mt-1"></i>
                                        Marketplace Ads
                                    </span>
                                    <div class="d-flex justify-content-center mt-4 justify-content-sm-start">
                                        <button class="btn btn-blue btn-bigger btn-order" data-type="marketplace-opt">Order
                                            Now!</button>
                                    </div>
                                </div>
                            </div>


                        </div>
                    </div>
                    <div class="row align-items-center mt-5">
                        <div class="col-sm-6 mb-4 mb-sm-0 order-sm-1 order-2">
                            <h3 class="text-center text-sm-end" style="margin-bottom: 25px">Multimedia</h3>
                            <div class="row no-gutters">
                                <div class="col-lg-6">
                                    <div class="d-flex flex-column ms-sm-0 ms-4 align-items-sm-end">
                                        <div>
                                            <p class="mb-2 text-start text-sm-end fw-bold">
                                                Content Creator Management
                                            </p>

                                            <span class="list-layanan text-start text-sm-end ">
                                                <i class="fas fa-check-circle me-2 mt-1 d-sm-none d-inline-flex"></i>
                                                TVC Production
                                                <i class="fas fa-check-circle ms-2 mt-1 d-sm-inline-flex d-none"></i>
                                            </span>
                                            <span class="list-layanan text-start text-sm-end ">
                                                <i class="fas fa-check-circle me-2 mt-1 d-sm-none d-inline-flex"></i>
                                                3D Animation
                                                <i class="fas fa-check-circle ms-2 mt-1 d-sm-inline-flex d-none"></i>
                                            </span>

                                            <span class="list-layanan text-start text-sm-end ">
                                                <i class="fas fa-check-circle me-2 mt-1 d-sm-none d-inline-flex"></i>
                                                Youtube
                                                <i class="fas fa-check-circle ms-2 mt-1 d-sm-inline-flex d-none"></i>
                                            </span>


                                        </div>

                                    </div>
                                </div>
                                <div class="col-lg-6 ">
                                    <div class="d-flex flex-column ms-sm-0 ms-4 align-items-sm-end">
                                        <div>
                                            <p class="mb-2 text-start text-sm-end fw-bold">
                                                Virtual
                                            </p>

                                            <span class="list-layanan text-start text-sm-end ">
                                                <i class="fas fa-check-circle me-2 mt-1 d-sm-none d-inline-flex"></i>
                                                Virtual Event
                                                <i class="fas fa-check-circle ms-2 mt-1 d-sm-inline-flex d-none"></i>
                                            </span>
                                            <span class="list-layanan text-start text-sm-end ">
                                                <i class="fas fa-check-circle me-2 mt-1 d-sm-none d-inline-flex"></i>
                                                Live Streaming
                                                <i class="fas fa-check-circle ms-2 mt-1 d-sm-inline-flex d-none"></i>
                                            </span>

                                            <span class="list-layanan text-start text-sm-end ">
                                                <i class="fas fa-check-circle me-2 mt-1 d-sm-none d-inline-flex"></i>
                                                Webinar
                                                <i class="fas fa-check-circle ms-2 mt-1 d-sm-inline-flex d-none"></i>
                                            </span>
                                            <p class="mb-2  mt-4 text-start text-sm-end fw-bold">
                                                Cross Platform Streaming


                                            </p>

                                            <span class="list-layanan text-start text-sm-end ">
                                                <i class="fas fa-check-circle me-2 mt-1 d-sm-none d-inline-flex"></i>
                                                Interactive Website

                                                <i class="fas fa-check-circle ms-2 mt-1 d-sm-inline-flex d-none"></i>
                                            </span>

                                        </div>

                                    </div>
                                </div>
                                <div class="col-12">
                                    <div class="d-flex justify-content-center mt-4 justify-content-sm-end">
                                        <button class="btn btn-blue btn-bigger btn-order" data-type="multimedia">Order
                                            Now</button>
                                    </div>
                                </div>
                            </div>

                        </div>
                        <div class="col-sm-6 order-sm-2 order-1">
                            <img src="{{ asset('images/rehaul/mktp-live.png') }}" alt="Image 1" class="img-layanan-bg">
                        </div>
                    </div>
                    <div class="row align-items-center mt-5">
                        <div class="col-sm-6 ">
                            <img src="{{ asset('images/rehaul/jasa-fulfillment.png') }}" alt="Image 1"
                                class="img-layanan-bg">
                        </div>
                        <div class="col-sm-6">
                            <h3 class="text-center text-sm-start" style="margin-bottom: 25px">Cloud Warehouse Software

                            </h3>
                            <div class="d-flex justify-content-center justify-content-sm-start box-data">
                                <div>
                                    <p class="mb-2 text-center text-sm-start fw-bold">
                                        Gudangin
                                    </p>
                                    <span class="list-layanan ">
                                        <i class="fas fa-check-circle me-2 mt-1"></i>
                                        Jasa Fulfillment
                                    </span>
                                    <span class="list-layanan">
                                        <i class="fas fa-check-circle me-2 mt-1"></i>
                                        Jasa Agregasi Chat
                                    </span>


                                    <div class="d-flex justify-content-center mt-4 justify-content-sm-start">
                                        <button class="btn btn-blue btn-bigger btn-order"
                                            data-type="cloud-warehouse-software">Order Now</button>
                                    </div>
                                </div>
                            </div>


                        </div>
                    </div>
                </div>
            </div>
        </div>





        <div class="" style="height: 60px"></div>

        <div class="section section-form  pt-0 mb-0 bg-color mt-0"
            style="background: url('demos/movers/images/bg-2.png') no-repeat center bottom / 100%; overflow: visible">
            <svg viewBox="0 0 1960 206.8" class="bg-white">
                <path class="svg-themecolor" style="opacity:0.2;"
                    d="M0,142.8A2337.49,2337.49,0,0,1,297.5,56.3C569.33-3.53,783.89.22,849.5,2.3c215.78,6.86,382.12,45.39,503.25,73.45,158.87,36.8,283.09,79.13,458.75,54.55A816.49,816.49,0,0,0,1983,86.8v110H0Z" />
                <path class="svg-themecolor" d="M.5,152.8s498-177,849-150,1031,238,1134,94v110H.5Z" />
            </svg>
            <div class="container">
                <div class="d-flex justify-content-center align-items-center">
                    <h2 class="text-white center" style="max-width: 750px">Berminat Untuk Diskusi Dengan
                        Account Executive Kami?
                    </h2>
                </div>

                <div class="row justify-content-center">
                    <div class="col-lg-6 col-md-9 img-mbl-form mb-lg-0 mb-4">
                        <!-- <img src="{{ asset('images/calendar.png') }}" alt="" class="img-form rounded"> -->
                        <iframe
                            src="https://calendar.google.com/calendar/embed?src=uon0rocne2ndmlcp14vl2jl5v0%40group.calendar.google.com&ctz=Asia%2FJakarta"
                            style="border: 0" frameborder="0" scrolling="no" class="iframe-calendar"></iframe>
                    </div>
                    <div class="col-lg-6 col-md-9 my-auto">
                        <div class="card bg-white shadow-lg border-0">
                            <div class="card-body p-4">
                                <!-- <div class="form-widget" data-loader="button" data-alert-type="inline"> -->
                                <h4 class="text-center">Meet With <span style="color:#0F66DD">Our Account
                                        Executive</span>
                                </h4>
                                <div class="form-result"></div>

                                <form class="row mb-0 form-services" id="form-enq" action="{{ route('meet-create') }}"
                                    method="POST" enctype="multipart/form-data">
                                    @csrf
                                    <div class="form-process"></div>
                                    <div class="col-12 form-group mb-2">
                                        <label>Name:</label>
                                        <input type="text" name="name" id="landing-enquiry-name"
                                            class="form-control  required" value="{{ old('name') }}"
                                            placeholder="John Doe" required>
                                        <div style="color: red; font-size:11px" id="err-name">

                                        </div>
                                    </div>
                                    <div class="col-12 form-group mb-2">
                                        <label>Email:</label>
                                        <input type="email" name="email" id="landing-enquiry-email"
                                            class="form-control  required" value="{{ old('email') }}"
                                            placeholder="user@company.com" required>
                                        <div style="color: red; font-size:11px" id="err-email">

                                        </div>
                                    </div>
                                    <div class="col-12 form-group mb-2">
                                        <label>Phone:</label><br>
                                        <div class="input-group input-group-lg">
                                            <select class="form-select required" name="landing-enquiry-idd"
                                                id="landing-enquiry-idd" style="max-width: 110px;">
                                                {{-- <option value="+1">+1</option>
                                                    <option value="+44">+44</option>
                                                    <option value="+66">+66</option> --}}
                                                <option value="+62" selected>+62</option>
                                                {{-- <option value="+61">+61</option>
                                                    <option value="+852">+852</option>
                                                    <option value="+65">+61</option>
                                                    <option value="+33">+61</option>
                                                    <option value="+49">+49</option> --}}
                                            </select>
                                            <input type="number" name="phone" id="landing-enquiry-phone"
                                                class="form-control  required" value="{{ old('phone') }}" placeholder=""
                                                required>
                                        </div>
                                        <div style="color: red; font-size:11px" id="err-phone">

                                        </div>
                                    </div>
                                    <!-- {{-- <div class="col-12 form-group mb-4">
                                            <label>Message:</label>
                                            <textarea name="landing-enquiry-additional-requirements"
                                                id="landing-enquiry-additional-requirements"
                                                class="form-control " cols="30" rows="5"
                                                placeholder="Please let us know how we can help you..."></textarea>
                                        </div> --}} -->
                                    <div class="col-12 form-group mb-2">
                                        <label>Nama Perusahaan</label>
                                        <input type="text" name="company" id="landing-enquiry-company"
                                            class="form-control  required" value="{{ old('company') }}"
                                            placeholder="Company Name" required>
                                        <div style="color: red; font-size:11px" id="err-company">

                                        </div>
                                    </div>
                                    <div class="col-12 form-group mb-2">
                                        <label>Kota Asal</label>
                                        <input type="text" name="city" id="landing-enquiry-company"
                                            class="form-control  required" value="" placeholder="Nama Kota" required>
                                        <div style="color: red; font-size:11px" id="err-city">

                                        </div>
                                    </div>
                                    <div class="col-12 form-group mb-2">
                                        <label>Paket</label>
                                        <select class="form-select form-control  required" name="landing_enquiry_paket"
                                            id="landing-enquiry-paket">

                                            @for ($i = 0; $i < $count; $i++)
                                                @if ($i == 0)
                                                    <option value="{{ $data[$i]->value }}" selected>
                                                        {{ $data[$i]->name }}</option>
                                                @else
                                                    <option value="{{ $data[$i]->value }}">{{ $data[$i]->name }}
                                                    </option>
                                                @endif
                                            @endfor
                                            <!-- <option value="paket-technology-conversion-opt" selected>Paket Technology Conversion Optimization</option>
                                                                                                                                                                                                                        <option value="paket-virtual-event">Paket Virtual Event / Webinar</option>
                                                                                                                                                                                                                        <option value="paket-marketplace">Paket Marketplace</option>
                                                                                                                                                                                                                        <option value="technology">Technology</option>
                                                                                                                                                                                                                        <option value="digital-strategy">Digital Strategy</option>

                                                                                                                                                                                                                        <option value="marketplace-opt">Marketplace Optimization</option>
                                                                                                                                                                                                                        <option value="multimedia">Multimedia </option>
                                                                                                                                                                                                                        <option value="cloud-warehouse-software">Cloud Warehouse Software</option> -->
                                        </select>

                                    </div>
                                    <div class="col-12 form-group mb-2">
                                        <label>Jadwal Meeting dengan Account Executive</label>
                                        <input type="date" name="date" id="landing-enquiry-date"
                                            class="form-control  required" value="{{ old('date') }}" placeholder="date"
                                            required>
                                        <div style="color: red; font-size:11px" id="err-date">

                                        </div>
                                    </div>
                                    <div class="col-12 form-group mb-2">
                                        <label>Jam Meeting dengan Account Executive</label>
                                        <input type="time" name="time" id="landing-enquiry-time"
                                            class="form-control  required" value="{{ old('time') }}" placeholder="time"
                                            required>
                                        <div style="color: red; font-size:11px" id="err-time">

                                        </div>
                                    </div>
                                    <div class="col-12 d-none">
                                        <input type="text" id="landing-enquiry-botcheck" name="landing-enquiry-botcheck"
                                            value="" />

                                    </div>
                                    <div class="g-recaptcha" data-callback="recaptchaCallback"
                                        data-sitekey="6LdLM1UeAAAAANIPJEOY3Bo_7bysZ5pSdgMMkyc5"></div>

                                    <div class="col-12">
                                        <button disabled name="" id="btn-sub"
                                            class="btn w-100 text-white bg-color rounded-3 py-3 fw-semibold text-uppercase mt-2">Book
                                            Now!</button>
                                    </div>

                                    <input type="hidden" name="prefix" value="landing-enquiry-">
                                    <input type="hidden" name="ref" value="{{ $ref }}">
                                    <input type="hidden" name="so" value="{{ $so }}">
                                    <input type="hidden" name="campaign" value="{{ $campaign }}">
                                </form>
                            </div>

                        </div>
                        <!-- {{-- <div class="card">
                                <div class="card-body">
                                    <h5 class="text-center title-part mb-4">
                                        Yuk Bertemu dengan <span>Account Executive</span> Kami!
                                    </h5>
                                    <form action="">
                                        <div class="form-error" id="error_name"></div>
                                        <input type="text" name="email" class="form-control" placeholder="Email" required>
                                        <div class="form-error" id="error_email"></div>
                                        <input type="number" name="whatsapp" class="form-control"
                                            placeholder="Nomor Handphone" required>
                                        <div class="form-error" id="error_whatsapp"></div>
                                        <input type="text" name="company" class="form-control"
                                            placeholder="Nama Perusahaan" required>
                                        <div class="form-error" id="error_company"></div>
                                        <input type="date" name="date" class="form-control"
                                            placeholder="Tanggal Bertemu" required>
                                        <div class="form-error" id="error_date"></div>
                                        <input type="time" name="time" class="form-control"
                                            placeholder="Jam Bertemu" required>
                                        <div class="form-error" id="error_time"></div>
                                        <div class="d-flex justify-content-center mt-7">
                                            <button class="btn btn-blue">
                                                Book Now!
                                            </button>
                                        </div>
                                    </form>
                                </div>
                            </div> --}} -->

                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
@section('js')
    <script src="https://unpkg.com/swiper/swiper-bundle.min.js"></script>
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
    <script>
        $('.btn-klien').click(function() {
            $('html, body').animate({
                scrollTop: ($(".section-klien").offset().top) - 120
            }, 1500);
        });
        $('.btn-order').click(function() {

            $('html, body').animate({
                scrollTop: ($(".section-form").offset().top)

            }, 1500);
            if ($(this).data('type') !== undefined) {

                let type = $(this).data('type');
                $('#landing-enquiry-paket option:selected').removeAttr('selected');
                $('#landing-enquiry-paket option[value="' + type + '"]').attr('selected', 'selected');
            }
        });
    </script>
@endsection
