<!--begin::Entry-->
@extends('master')

@section('cssinline')
    <link rel="stylesheet" href="https://unpkg.com/swiper/swiper-bundle.min.css" />

@endsection


@section('content')
    <div class="d-flex flex-column-fluid flex-column">
        <section class="banner-hero">
            <div class="container h-100">
                <div class="row h-100">
                    <div class="col-md-6 my-auto">
                        <h1 class="title mb-5">Mengapa Bisnis Anda Perlu
                            Bergabung Dengan Resonansi?</h1>
                        <p class="desc">“Kami adalah perusahaan yang bergerak di bidang
                            teknologi informasi dan digital strategi yang akan
                            membantu meningkatkan penjualan produk dan brand
                            anda, sehingga akan beresonansi bersama-sama
                            dengan customer anda”</p>
                        <div class="d-flex mt-7">
                            <button class="btn btn-blue-bordered mr-8 btn-client">Our Client</button>

                            <button class="btn btn-white-cus btn-pricing">Pricing</button>
                        </div>
                        
                    </div>
                    <div class="col-md-6">
                        <div class="swiper mySwiper">
                            <div class="swiper-wrapper">
                                <div class="swiper-slide">
                                    {{-- <img src="{{ asset('images/emas.png') }}" alt="" class="img-slide"> --}}
                                    <div class="d-flex align-items-center h-100">
                                        <img src=""
                                            alt="" class="img-banner">

                                    </div>
                                </div>
                                <div class="swiper-slide">
                                    <div class="d-flex align-items-center h-100">
                                        <img src=""
                                            alt="" class="img-banner">

                                    </div>

                                </div>
                                <div class="swiper-slide">
                                    <div class="d-flex align-items-center h-100">
                                        <img src="https://www.gallerysystems.com/wp-content/uploads/crafting-your-digital-strategy-1.png"
                                            alt="" class="img-banner">

                                    </div>
                                </div>

                            </div>
                            <div class="swiper-button-next"></div>
                            <div class="swiper-button-prev"></div>
                            <div class="swiper-pagination"></div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <div class="divider"></div>
        {{-- <section class="section-1">
            <div class="container">
                <h2 class="title-part text-center">Jasa Layanan Apa Saja Yang Disediakan Oleh <span>Resonansi</span> ?
                </h2>

                <div class="row mt-7">

                    @component('components.custom.section-1-div')

                        @slot('title1')
                            Landing Page Website
                        @endslot
                        @slot('title2')
                            Social Media Strategy
                        @endslot

                        @slot('img1')
                            http://simpleicon.com/wp-content/uploads/landing-page.png
                        @endslot
                        @slot('img2')
                            http://simpleicon.com/wp-content/uploads/social_media_icon_3.png
                        @endslot
                    @endcomponent
                    @component('components.custom.section-1-div')

                        @slot('title1')
                            Landing Page Website
                        @endslot
                        @slot('title2')
                            Social Media Strategy
                        @endslot

                        @slot('img1')
                            http://simpleicon.com/wp-content/uploads/landing-page.png
                        @endslot
                        @slot('img2')
                            http://simpleicon.com/wp-content/uploads/social_media_icon_3.png
                        @endslot
                    @endcomponent
                    @component('components.custom.section-1-div')

                        @slot('title1')
                            Landing Page Website
                        @endslot
                        @slot('title2')
                            Social Media Strategy
                        @endslot

                        @slot('img1')
                            http://simpleicon.com/wp-content/uploads/landing-page.png
                        @endslot
                        @slot('img2')
                            http://simpleicon.com/wp-content/uploads/social_media_icon_3.png
                        @endslot
                    @endcomponent

                </div>
            </div>
        </section> --}}
        <div class="divider"></div>
        <section class="section-2">
            <div class="container">
                <div class="inner-pad"></div>
                <h2 class="title-part-white text-center">Layanan Apa Saja Yang Disediakan Resonansi?</h2>
                <div class="row justify-content-around">
                    @component('components.custom.layanan-card')
                        @slot('title')
                            Paket A
                        @endslot
                        @slot('details')
                            <ul>
                                <li>Loremoiahfasfsaf</li>
                                <li>jioughfjvadsav</li>
                                <li>lhajvn dsajk</li>
                                <li>ahxbdmnsadjvuu</li>
                                <li>hjkhb fmeo8ui</li>
                                <li>jrj3q90qf3l;ecj90qefkm fihqoefnqklq faicashcas chfuoh3nqef9u90evnd</li>
                            </ul>
                        @endslot
                        @slot('harga')
                            Rp 100.000,00
                        @endslot
                    @endcomponent
                    @component('components.custom.layanan-card')
                        @slot('title')
                            Paket B
                        @endslot
                        @slot('details')
                            <ul>
                                <li>Loremoiahfasfsaf</li>
                                <li>jioughfjvadsav</li>
                                <li>lhajvn dsajk</li>
                                <li>ahxbdmnsadjvuu</li>
                                <li>hjkhb fmeo8ui</li>
                                <li>jrj3q90qf3l;ecj90qefkm fihqoefnqklq faicashcas chfuoh3nqef9u90evnd</li>
                                <li>lhajvn dsajk</li>
                                <li>ahxbdmnsadjvuu</li>
                                <li>hjkhb fmeo8ui</li>
                                <li>jrj3q90qf3l;ecj90qefkm fihqoefnqklq faicashcas chfuoh3nqef9u90evnd</li>
                            </ul>
                        @endslot
                        @slot('harga')
                            Rp 100.000,00
                        @endslot
                    @endcomponent
                    @component('components.custom.layanan-card')
                        @slot('title')
                            Paket C
                        @endslot
                        @slot('details')
                            <ul>
                                <li>Loremoiahfasfsaf</li>
                                <li>jioughfjvadsav</li>
                                <li>lhajvn dsajk</li>
                                <li>ahxbdmnsadjvuu</li>
                                <li>hjkhb fmeo8ui</li>
                                <li>jrj3q90qf3l;ecj90qefkm fihqoefnqklq faicashcas chfuoh3nqef9u90evnd</li>
                            </ul>
                        @endslot
                        @slot('harga')
                            Rp 100.000,00
                        @endslot
                    @endcomponent
                </div>
                <div class="inner-pad"></div>
            </div>
        </section>
        <div class="divider"></div>
        <section class="section-3">
            <div class="container">
                <h2 class="title-part text-center">Siapa Saja Klien <span>Kami</span>?</h2>
                <div class="row justify-content-center mt-7">
                    <div class="col-lg-3 col-md-4 col-6">
                        <img src=" https://www.larutanpenyegar.com/po-content/themes/cap-badak/images/logo.jpg" alt=""
                            class="img-client">
                        <h6 class="blue-text">Cv. Blabla</h6>
                    </div>
                    <div class="col-lg-3 col-md-4 col-6">
                        <img src=" https://www.larutanpenyegar.com/po-content/themes/cap-badak/images/logo.jpg" alt=""
                            class="img-client">
                        <h6 class="blue-text">Cv. Blabla</h6>
                    </div>
                    <div class="col-lg-3 col-md-4 col-6">
                        <img src=" https://www.larutanpenyegar.com/po-content/themes/cap-badak/images/logo.jpg" alt=""
                            class="img-client">
                        <h6 class="blue-text">Cv. Blabla</h6>
                    </div>
                    <div class="col-lg-3 col-md-4 col-6">
                        <img src=" https://www.larutanpenyegar.com/po-content/themes/cap-badak/images/logo.jpg" alt=""
                            class="img-client">
                        <h6 class="blue-text">Cv. Blabla</h6>
                    </div>
                    <div class="col-lg-3 col-md-4 col-6">
                        <img src=" https://www.larutanpenyegar.com/po-content/themes/cap-badak/images/logo.jpg" alt=""
                            class="img-client">
                        <h6 class="blue-text">Cv. Blabla</h6>
                    </div>
                    <div class="col-lg-3 col-md-4 col-6">
                        <img src=" https://www.larutanpenyegar.com/po-content/themes/cap-badak/images/logo.jpg" alt=""
                            class="img-client">
                        <h6 class="blue-text">Cv. Blabla</h6>
                    </div>
                </div>
            </div>
        </section>
        <div class="divider"></div>
        <section class="section-4">
            <div class="inner-pad"></div>

            <div class="container">
                <h2 class="title-part-white text-center mb-7">
                    Apa Kata Mereka Tentang Resonansi?
                </h2>
                <div class="swiper swiperTestimoni">
                    <div class="swiper-wrapper">


                        @component('components.custom.testi-card')
                            @slot('img')
                                https://www.larutanpenyegar.com/po-content/themes/cap-badak/images/logo.jpg
                            @endslot
                            @slot('details')
                                Terimakasih untuk para team Resonansi
                                yang telah membantu dalam
                                mengembangkan binis di perusahaan kami
                            @endslot
                        @endcomponent
                        @component('components.custom.testi-card')
                            @slot('img')
                                https://www.larutanpenyegar.com/po-content/themes/cap-badak/images/logo.jpg
                            @endslot
                            @slot('details')
                                Terimakasih untuk para team Resonansi
                                yang telah membantu dalam
                                mengembangkan binis di perusahaan kami
                            @endslot
                        @endcomponent
                        @component('components.custom.testi-card')
                            @slot('img')
                                https://www.larutanpenyegar.com/po-content/themes/cap-badak/images/logo.jpg
                            @endslot
                            @slot('details')
                                Terimakasih untuk para team Resonansi
                                yang telah membantu dalam
                                mengembangkan binis di perusahaan kami
                            @endslot
                        @endcomponent
                    </div>
                    <div class="swiper-button-next"></div>
                    <div class="swiper-button-prev"></div>
                    <div class="swiper-pagination"></div>
                </div>
            </div>

            <div class="inner-pad"></div>
        </section>
        <div class="divider"></div>
        <section class="section-form">
            <div class="container">
                <h2 class="blue-text mb-8" style="font-weight: 600">Berminat untuk diskusi dengan Account Executive Kami?
                </h2>
                <div class="row">
                    <div class="col-md-6 img-mbl-form">
                        <img src="{{ asset('images/calendar.png') }}" alt="" class="img-form">
                    </div>
                    <div class="col-md-6 my-auto">
                        <div class="card">
                            <div class="card-body">
                                <h5 class="text-center title-part mb-4">
                                    Yuk Bertemu dengan <span>Account Executive</span> Kami!
                                </h5>
                                <form action="">
                                    <input type="text" name="name" class="form-control" placeholder="Nama" required>
                                    <div class="form-error" id="error_name"></div>
                                    <input type="text" name="email" class="form-control" placeholder="Email" required>
                                    <div class="form-error" id="error_email"></div>
                                    <input type="number" name="whatsapp" class="form-control"
                                        placeholder="Nomor Handphone" required>
                                    <div class="form-error" id="error_whatsapp"></div>
                                    <input type="text" name="company" class="form-control" placeholder="Nama Perusahaan"
                                        required>
                                    <div class="form-error" id="error_company"></div>
                                    <div class="d-flex justify-content-center mt-7">
                                        <button class="btn btn-blue">
                                            Book Now!
                                        </button>
                                    </div>
                                </form>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </section>
        <div class="divider"></div>
    @endsection


    @section('jsPage')
        <script src="https://unpkg.com/swiper/swiper-bundle.min.js"></script>
        <script>
            var swiper = new Swiper(".mySwiper", {
                cssMode: true,
                navigation: {
                    nextEl: ".swiper-button-next",
                    prevEl: ".swiper-button-prev",
                },
                pagination: {
                    el: ".swiper-pagination",
                },
                mousewheel: true,
                keyboard: true,
                autoplay: {
                    delay: 25000,
                },
            });
        </script>
        <script>
            var swiper = new Swiper(".swiperTestimoni", {
                cssMode: true,
                navigation: {
                    nextEl: ".swiper-button-next",
                    prevEl: ".swiper-button-prev",
                },
                pagination: {
                    el: ".swiper-pagination",
                },
                mousewheel: true,
                keyboard: true,
                autoplay: {
                    delay: 2500,
                },
            });
        </script>
        <script>
            $('.btn-pricing').click(function() {
                $('html, body').animate({
                    scrollTop: ($(".section-2").offset().top)-80
                }, 1500);
            });
            $('.btn-order').click(function() {
                $('html, body').animate({
                    scrollTop: ($(".section-form").offset().top)-80
                }, 1500);
            });
            $('.btn-client').click(function() {
                $('html, body').animate({
                    scrollTop: ($(".section-3").offset().top)-80
                }, 1500);
            });
        </script>
    @endsection


    <!--end::Entry-->
