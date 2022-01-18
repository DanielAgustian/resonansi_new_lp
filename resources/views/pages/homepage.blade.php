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
                        <h1 class="title">Mengapa Bisnis Anda Perlu
                            Bergabung Dengan Resonansi?</h1>
                        <p class="desc">“Kami adalah perusahaan yang bergerak di bidang
                            teknologi informasi dan digital strategi yang akan
                            membantu meningkatkan penjualan produk dan brand
                            anda, sehingga akan beresonansi bersama-sama
                            dengan customer anda”</p>
                    </div>
                    <div class="col-md-6">
                        <div class="swiper mySwiper">
                            <div class="swiper-wrapper">
                                <div class="swiper-slide">
                                    Slide1
                                    {{-- <img src="{{ asset('images/emas.png') }}" alt="" class="img-slide"> --}}
                                </div>
                                <div class="swiper-slide">
                                    Slide2
                                    {{-- <img src="{{ asset('images/mobil.png') }}" alt=""
                                        class="img-slide"> --}}
                                </div>
                                <div class="swiper-slide"> 
                                    Slide3
                                    {{-- <img src="{{ asset('images/scoopy.png') }}" alt=""
                                        class="img-slide"> --}}
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

        <!--begin::Container-->
        <div class="container">

            <!--[html-partial:begin:{"id":"demo2/dist/inc/view/demos/pages/index","page":"index"}]/-->

            <!--[html-partial:begin:{"id":"demo1/dist/inc/view/partials/content/dashboards/demo2","page":"index"}]/-->

            <!--begin::Dashboard-->

            <!--begin::Row-->


            <!--end::Row-->

            <!--end::Dashboard-->

            <!--[html-partial:end:{"id":"demo1/dist/inc/view/partials/content/dashboards/demo2","page":"index"}]/-->

            <!--[html-partial:end:{"id":"demo2/dist/inc/view/demos/pages/index","page":"index"}]/-->
        </div>

        <!--end::Container-->
    </div>
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
        });
    </script>
@endsection


<!--end::Entry-->
