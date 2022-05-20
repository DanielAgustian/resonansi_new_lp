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
    <div class="share-card-fixed">
        <a href="https://facebook.com/sharer/sharer.php?u={{ urlencode(Request::url()) }}" target="_blank"
            class="d-block">
            <img src="{{ asset('images/socmed/socmed-(2).svg') }}">
        </a>
        <a href="https://wa.me/?text=Coba+Lihat+Artikel+Menarik+di+{{ urlencode(Request::url()) }}" target="_blank"
            class="d-block">
            <img src="{{ asset('images/socmed/socmed-(1).svg') }}">
        </a>
        <a href="https://telegram.me/share/url?text=Coba+Lihat+Artikel+Menarik+di+&amp;url={{ urlencode(Request::url()) }}"
            class="d-block" target="_blank">
            <img src="{{ asset('images/socmed/socmed-(3).svg') }}">
        </a>
        <a href="https://twitter.com/intent/tweet/?text=Coba+Lihat+Artikel+Menarik+di+&amp;url={{ urlencode(Request::url()) }}"
            class="d-block">
            <img src="{{ asset('images/socmed/socmed-(4).svg') }}">
        </a>
        <a onclick="" id=" copyLink" href="javascript:" class="d-block">
            <img src="{{ asset('images/socmed/socmed-(5).svg') }}" style="cursor:pointer;">
        </a>
    </div>
    <div class="content">

        <div class="container container-detail ">
            <div class="card border-0 shadow">
                <div class="card-body p-lg-4 p-3">
                    <div class="row justify-content-center">

                        <div class="col-lg-8 col-md-10 body-blogs-detail">
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
                            <div class="d-flex mt-5 mb-3">
                                <div class="card shadow share-card">
                                    <div class="card-body ">
                                        <h4 class=" mb-2">Share <span class="span-bl">Our Story</span> </h4>
                                        <div class="d-flex">
                                            <a href="https://facebook.com/sharer/sharer.php?u={{ urlencode(Request::url()) }}"
                                                target="_blank">
                                                <img src="{{ asset('images/socmed/socmed-(2).svg') }}">
                                            </a>
                                            <a href="https://wa.me/?text=Coba+Lihat+Artikel+Menarik+di+{{ urlencode(Request::url()) }}"
                                                target="_blank">
                                                <img src="{{ asset('images/socmed/socmed-(1).svg') }}">
                                            </a>
                                            <a href="https://telegram.me/share/url?text=Coba+Lihat+Artikel+Menarik+di+&amp;url={{ urlencode(Request::url()) }}"
                                                target="_blank">
                                                <img src="{{ asset('images/socmed/socmed-(3).svg') }}">
                                            </a>
                                            <a
                                                href="https://twitter.com/intent/tweet/?text=Coba+Lihat+Artikel+Menarik+di+&amp;url={{ urlencode(Request::url()) }}">
                                                <img src="{{ asset('images/socmed/socmed-(4).svg') }}">
                                            </a>
                                            <a onclick="" id=" copyLink" href="javascript:">
                                                <img src="{{ asset('images/socmed/socmed-(5).svg') }}"
                                                    style="cursor:pointer;">
                                            </a>
                                        </div>

                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-10">
                            <div class="list-blog">
                                <div class="title-latest-art">
                                    <h4 class="title-latest">Latest Article</h4>
                                </div>

                                <div class="list-blogs-right row">
                                    @for ($i = 0; $i < 6; $i++)
                                        @component('components.rehaul.small-blog-child')
                                            @slot('slug')
                                                jjadada
                                            @endslot
                                            @slot('title')
                                                Kita Coba menjadi Pemain Sepak Bola Terbaik indonesia
                                            @endslot
                                            @slot('date')
                                                Senin, 23 November 2022
                                            @endslot
                                            @slot('img')
                                                https://thumbs.dreamstime.com/z/blogger-woman-demo%E2%80%A6d-blogger-woman-demonstrates-sewing-233628615.jpg
                                            @endslot
                                        @endcomponent
                                    @endfor
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
    <script>
        $('#copyLink').click(function() {
            let link = window.location.href;
            navigator.clipboard.writeText(link);
            Toastify({
                text: 'Link Berhasil Disalin',
                duration: 5000,
                gravity: 'bottom',
            }).showToast();
        })
    </script>
@endsection
