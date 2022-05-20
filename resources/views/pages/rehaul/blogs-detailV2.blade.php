@extends('master-landing')
@section('page')
    | Blogs
@endsection
@section('css')
    <link rel="stylesheet" href="https://unpkg.com/swiper/swiper-bundle.min.css" />
    <style>
        .title-contact {
            font-size: 48px;
        }

        @media screen and (max-width: 996px) {
            .title-contact {
                font-size: 42px;
            }
        }

        @media screen and (max-width: 450px) {
            .title-contact {
                font-size: 36px;
            }
        }

    </style>
    <link rel="stylesheet" href="{{ asset('asset/css/rehaul/homepage.css') }}">
    <link rel="stylesheet" href="{{ asset('asset/css/rehaul/blogs.css') }}">
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
@endsection

@section('banner')
    <section id="page-title" class="bg-color head-blog-detail page-title-dark py-6"
        style="background-position: center center;
                                        background-repeat: no-repeat;
                                        background-size: cover !important;background: linear-gradient(to right, rgba(0,0,0,.6), rgba(0,0,0,0.3)), url('{{ asset('images/blogs/blog-detail-bg.jpg') }}')">

        <div class="container clearfix h-100">
            <div class="d-flex flex-column justify-content-center h-100">
                <h1 class="blogs-detail-title nott">Title Blog Untuk Percobaan Bikin Design </h1>
                <span class="text-center span-time">1 bulan yang lalu</span>
            </div>

            {{-- <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="{{route('homePageV2')}}">Home</a></li>
                <li class="breadcrumb-item active" aria-current="page"><a href="{{route('contactUsV2')}}">Contact us</a></li>
            </ol> --}}
        </div>

    </section>
@endsection
@section('content')
    <div class="content">

        <div class="container container-detail ">
            <div class="card">
                <div class="card-body">
                    <div class="row">

                        <div class="col-lg-8 col-md-9 body-blogs-detail">
                            <img src="https://thumbs.dreamstime.com/z/blogger-woman-demo%E2%80%A6d-blogger-woman-demonstrates-sewing-233628615.jpg"
                                alt="" class="w-100 ">
                            <p class="txt-copyright mb-4 mt-1">Copyright by <a href="{{ route('aboutPageV2') }}"><span
                                        class="span-bl">Team Resonansi</span></a> </p>
                            <div class="detail-text">
                                <p>Frank Lampard has declared keeping Everton in the Premier League as "one of the greatest
                                    moments of my footballing life and career".

                                    Everton came from 2-0 down to beat Crystal Palace 3-2 on Thursday - a result which
                                    guaranteed their survival after a tense relegation battle.

                                    Lampard enjoyed a stellar playing career, which saw him make 106 international
                                    appearances for England and perform at three World Cups.</p>

                                <p>
                                    Lampard enjoyed a stellar playing career, which saw him make 106 international
                                    appearances for England and perform at three World Cups.</p>
                                <p>
                                    Lampard enjoyed a stellar playing career, which saw him make 106 international
                                    appearances for England and perform at three World Cups.</p>
                            </div>
                            <div class="d-flex justify-content-center mt-7 mb-5">
                                <div class="card shadow share-card">
                                    <div class="card-body ">
                                        <div class="d-flex">
                                            <a href="https://facebook.com/sharer/sharer.php?u={{ urlencode(Request::url() . '&utm_source=facebook&utm_campaign=Coba%20Lihat%20Produk%20Ini&utm_medium=share%20button&utm_content=dashboard') }}"
                                                target="_blank">
                                                <img src="{{ asset('images/socialmedia/socmed (2).svg') }}"
                                                    >
                                            </a>
                                            <a href="https://wa.me/?text=Yuk+Lihat+Produk+Ini+di+{{ urlencode(Request::url() . '&utm_source=whatsapp&utm_campaign=Coba%20Lihat%20Produk%20Ini&utm_medium=share%20button&utm_content=dashboard') }}"
                                                target="_blank">
                                                <img src="{{ asset('images/socialmedia/socmed (1).svg') }}"
                                                   >
                                            </a>
                                            <a href="https://telegram.me/share/url?text=Yuk+Lihat+Produk+Ini+di+&amp;url={{ urlencode(Request::url() . '&utm_source=telegram&utm_campaign=Bawa%20Sobat&utm_medium=share%20button&utm_content=dashboard') }}"
                                                target="_blank">
                                                <img src="{{ asset('images/socialmedia/socmed (3).svg') }}"
                                                    >
                                            </a>
                                            <a
                                                href="https://twitter.com/intent/tweet/?text=Yuk+Lihat+Produk+Ini+di+&amp;url={{ urlencode(Request::url() . '&utm_source=telegram&utm_campaign=Bawa%20Sobat&utm_medium=share%20button&utm_content=dashboard') }}">
                                                <img src="{{ asset('images/socialmedia/socmed (4).svg') }}"
                                                    style="width:32px;">
                                            </a>
                                            <a onclick="" id=" copyLink" href="javascript:">
                                                <img src="{{ asset('images/socialmedia/socmed (5).svg') }}"
                                                    style="width:32px;cursor:pointer;">
                                            </a>
                                        </div>

                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

@section('js')
@endsection
