@extends('master-landing')
@section('page')
    | About Us
@endsection
@section('css')
    <link rel="stylesheet" href="https://unpkg.com/swiper/swiper-bundle.min.css" />

    <link rel="stylesheet" href="{{ asset('asset/css/rehaul/homepage.css') }}">
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
    <style>
        .big-icon {
            font-size: 66px;
            color: white;
        }

        .img-about {
            max-height: 520px;
        }

        @media screen and (max-width: 450px) {
            .big-icon {
                font-size: 54px;
            }

            .img-about {
                max-height: 420px;
            }
        }

        .link-yokesen {
            color: #c59f34;
        }

        .link-yokesen:hover {
            text-decoration: underline !important;
            color: #c59f34 !important;
        }
        .section-perusahaan{
            background: linear-gradient(180deg , white, #052c6310);
        }
        .img-sis-comp{
            width: 100%;
            border-radius: 8px;
            box-shadow: rgba(50, 50, 93, 0.25) 0px 50px 100px -20px, rgba(0, 0, 0, 0.3) 0px 30px 60px -30px, rgba(10, 37, 64, 0.35) 0px -2px 6px 0px inset;
        }
    </style>
    <link rel="stylesheet" href="">
@endsection
@section('banner')
    <section id="page-title" class="bg-color page-title-dark py-6">

        <div class="container clearfix">
            <h1 class="nott">About Us</h1>
            <span>Siapa Kami dan Filosofi Kami</span>
            {{-- <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="{{ route('homePageV2') }}">Home</a></li>
                <li class="breadcrumb-item"><a href="{{ route('aboutPageV2') }}">About Us</a></li>
            </ol> --}}

        </div>

    </section>
@endsection
@section('content')
    <section id="content">

        <div class="content-wrap p-0">

            <div class="section mt-0"
                style="background-position: center center; background-repeat: no-repeat; background-size: cover; background-image: linear-gradient(to right, rgba(0,0,0,.6), rgba(0,0,0,0.3)),  url('{{ asset('images/rehaul/1.jpg') }}');">
                <div class="shape-divider" data-shape="wave" data-position="bottom" data-height="100"></div>

                <div class="container dark">
                    <div class="row align-items-center h-100" style="padding: 100px 0 150px">
                        <div class="col-xl-7 col-lg-10 col-md-11">
                            <h5 class="mb-3 text-uppercase ls3 text-white-50">Siapa Kami</h5>
                            <h3 class="display-4 fw-semibold mb-4"> <span class="span-bl">Resonansi</span> from
                                <a href="https://yokesen.com/" class="link-yokesen">Yokesen</a>
                            </h3>
                            <p>Resonansi ada untuk membantu sebuah brand agar dapat satu frekuensi yang sama, dengan apa
                                yang sedang diperbincangan setiap saat oleh masyarakat, untuk membantu masyarakat atau
                                konsumen dari brand untuk paham tentang produk milik brand.</p>
                        </div>
                        <div class="col-12 mt-2">
                            <a href="{{ asset('brosur/brosur_resonansi.pdf') }}" download>
                                <button class="btn btn-blue-dark">Learn More</button>
                            </a>
                        </div>
                    </div>
                    

                </div>
            </div>

            <div class="section-perusahaan py-5">
                <div class="holder-company">
                    <div class="container">
                        <div class="row align-items-center justify-content-center">
                            <div class="col-lg-5 pe-3 col-md-10">
                                <h2 class=" fw-semibold mb-4 text-lg-start text-center"> Perusahaan Induk <span>Kami</span>  
                                </h2>
                                <p class="text-lg-start text-center">Resonansi hanya dapat terjadi karena adanya sinergi dengan perusahaan induk kami. Sinergi tersebut menghasilkan produk yang mumpuni, berkualitas dan sesuai permintaan customer.</p>
                            </div>
                            <div class="col-lg-7 col-md-10">
                                <div class="row justify-content-center">
                                    <div class="col-md-4 mb-3 col-6">
                                        <img src="{{asset('images/klien/logo-yokesen.png')}}" alt="" class="img-sis-comp">
                                    </div>
                                    <div class="w-100 d-none d-md-block"></div>
                                    <div class="col-md-4 mb-3 col-6">
                                        <img src="{{asset('images/klien/logo-gudangin.png')}}" alt="" class="img-sis-comp">
                                    </div>
                                    <div class="col-md-4 mb-3 col-6">
                                        <img src="{{asset('images/klien/logo-warisan.png')}}" alt="" class="img-sis-comp">
                                    </div>
                                    {{-- <div class="col-md-4 mb-3 col-6">
                                        <img src="{{asset('images/klien/WGM.png')}}" alt="" class="img-sis-comp">
                                    </div>
                                    <div class="col-md-4 mb-3 col-6">
                                        <img src="{{asset('images/klien/WHW2_1.png')}}" alt="" class="img-sis-comp">
                                    </div> --}}
                                    <div class="col-md-4 mb-3 col-6">
                                        <img src="{{asset('images/klien/logo-kagumi.png')}}" alt="" class="img-sis-comp">
                                    </div>
                                    <div class="col-md-4 mb-3 col-6">
                                        <img src="{{asset('images/klien/logo-wpn.png')}}" alt="" class="img-sis-comp">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    
                </div>

            </div>

            <div class="section-map clearfix bottommargin-lg topmargin-lg">
                <div class="container">
                    {{-- <img src="{{ asset('images/rehaul/map-indo-alt.png') }}" alt="Map Image" class="img-fluid map-image"> --}}
                    {{-- Company Section --}}
                    
                    <div class="map-title">
                        <h2 class="center">Kami Dipercaya oleh <span class="span-bl">Klien</span> dari Seluruh Indonesia.</h2>
                        <div class="row justify-content-center">
                            <div class="col-xl-9 col-lg-10 col-md-11">
                                <div class="row justify-content-center">

                                    <div class="col-lg-3 col-md-4 col-6"><img class="img-client rounded"
                                            style="background: white"
                                            src=" {{ asset('images/klien/kopgron.png') }}?v=1.0.0.1" alt="Clients"></div>
                                    {{-- <div class="col-6"><img class="img-client rounded" style="background: white" src=" {{asset('images/klien/sweet_monsta.png')}}?v=1.0.0.1" alt="Clients"></div> --}}
                                    <div class="col-lg-3 col-md-4 col-6"><img class="img-client rounded"
                                            style="background: white"
                                            src=" {{ asset('images/klien/warung_52.png') }}?v=1.0.0.1" alt="Clients">
                                    </div>
                                    <div class="col-lg-3 col-md-4 col-6"><img class="img-client rounded"
                                            style="background: white" src=" {{ asset('images/klien/WGM.png') }}?v=1.0.0.1"
                                            alt="Clients"></div>
                                    <div class="col-lg-3 col-md-4 col-6"><img class="img-client rounded"
                                            style="background: white"
                                            src=" {{ asset('images/klien/WHW2_1.png') }}?v=1.0.0.1" alt="Clients"></div>
                                    <div class="col-lg-3 col-md-4 col-6"><img class="img-client rounded"
                                            style="background: white"
                                            src=" {{ asset('images/klien/logo-warisan.png') }}?v=1.0.0.1" alt="Clients">
                                    </div>
                                    <div class="col-lg-3 col-md-4 col-6"><img class="img-client rounded"
                                            style="background: white"
                                            src=" {{ asset('images/klien/twg-2.png') }}?v=1.0.0.1" alt="Clients"></div>
                                    <div class="col-lg-3 col-md-4 col-6"><img class="img-client rounded"
                                            style="background: white"
                                            src=" {{ asset('images/klien/yutensil.png') }}?v=1.0.0.1" alt="Clients"></div>

                                </div>
                            </div>
                        </div>

                    </div>

                    <div class="d-flex justify-content-center mt-3">
                        <a href="https://yokesen.com/#client-section">
                            <button class="btn btn-blue-dark btn-bigger">More Clients</button>
                        </a>
                    </div>
                </div>


            </div>

            <div class="clear"></div>

            <div class="py-6 mt-5 dark" style="background-color: #061a35; margin-bottom: 0px; padding-bottom: 60px">
                <div class="container mb-5">
                    <div class="row justify-content-between">
                        <div class="col-md-5">
                            <h3 class="display-4 fw-bold mb-4">Teknologi Terbaik untuk <br> Bisnis Anda</h3>
                            <img src="{{ asset('images/rehaul/lower-pic.png') }}" alt="Image" class="img-about rounded"
                                style="width: 100%;

                                object-fit: cover;">
                        </div>
                        <div class="col-md-6 mt-md-0 mt-4">

                            <i class="fas fa-lightbulb big-icon"></i>
                            <h3 class="text-white fw-bold mb-2 mt-4">Filosofi Resonansi</h3>
                            <p class="mt-2 mb-1">Seperti sebuah garpu tala ketika bergetar, dapat memberikan getaran
                                yang sama kepada garpu tala yang memiliki frekuensi yang sama.</p>
                            <i class="fas fa-eye mt-5 big-icon"></i>
                            <h3 class="text-white fw-bold mb-2 mt-4">Visi Resonansi</h3>

                            <p class="mb-1">Menjadi digital strategi yang dapat meningkatkan Return on Digital
                                Investment</p>
                            <i class="fas fa-bullseye mt-5 big-icon"></i>
                            <h3 class="text-white fw-bold mb-2 mt-4">Misi Resonansi</h3>
                            <p class="mb-1">Membantu sebuah brand agar dapat satu frekuensi yang sama dengan apa
                                yang sedang diperbincangan masyarakat, agar masyarakat atau konsumen dari brand dapat paham
                                tentang produk milik brand.</p>

                        </div>
                    </div>
                </div>
            </div>



            <div class="clear"></div>

            <div class="section dark pt-0 mt-0 mb-0 bg-color"
                style="background: url('demos/movers/images/bg-2.png') no-repeat center bottom / 100%; overflow: visible">
                <svg viewBox="0 0 1960 206.8" style="background-color: #061a35">
                    <path class="svg-themecolor" style="opacity:0.2;"
                        d="M0,142.8A2337.49,2337.49,0,0,1,297.5,56.3C569.33-3.53,783.89.22,849.5,2.3c215.78,6.86,382.12,45.39,503.25,73.45,158.87,36.8,283.09,79.13,458.75,54.55A816.49,816.49,0,0,0,1983,86.8v110H0Z" />
                    <path class="svg-themecolor" d="M.5,152.8s498-177,849-150,1031,238,1134,94v110H.5Z" />
                </svg>
                <div class="container">
                    <div class="row align-items-center justify-content-center center my-4">

                        <div class="col-sm-10">
                            <div class="heading-block border-bottom-0 mb-4">
                                <h2 class="fw-semibold ls0 nott mb-3" style="font-size: 31px; line-height: 1.3">Ingin
                                    Mengetahui Layanan Kami Lebih Lanjut?</h2>
                                <p>Klik tombol di bawah ini jika ingin mengetahui lebih lanjut tentang apa yang bisa
                                    dilakukan Resonansi!</p>
                            </div>
                            <a href="{{ route('servicePageV2') }}"
                                class="button button-white button-light button-rounded fw-medium m-0">Klik disini</a>
                        </div>

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
