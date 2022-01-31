@extends('master2')

@section('banner')
    <section id="slider" class="slider-element dark min-vh-25 min-vh-md-50 include-header py-5"
        style="background-image: url('{{ asset('images/bg-hero.svg') }}');">
        <div class="slider-inner">

            <div class="vertical-middle text-center">
                <div class="container">
                    <div class="row align-items-center justify-content-center">

                        <div class="col-lg-6 col-md-6">
                            <h2 class="display-3 fw-bold text-white mb-2">Services</h2>
                            <p class="lead mb-0 fw-normal">Layanan dari Kami untuk Anda</p>
                        </div>

                    </div>
                </div>
            </div>

        </div>
    </section><!-- #slider end -->
@endsection

@section('content')
    <section id="content">
        <div class="content-wrap">

            <div class="section mb-0 bg-transparent p-0">
                <div class="container clearfix">
                    <div class="row">
                        <div class="col-lg-12 mb-5">
                            <h2 class="fw-bold h2 mb-4 text-center">Dipercaya lebih dari <span>100</span>  klien</h2>
                            <p class="fw-normal mb-2 h6 text-muted text-center  ">Mengevolusi cara meningkatkan kualitas website anda.
                                Mengubah persepsi klien dan kustomer terhadap website anda secara radikal.</p>

                            <div class="row my-5 justify-content-center">
                                @component('components.custom.services-card')
                                    @slot('id')
                                        service-landing
                                    @endslot
                                    @slot('pic')
                                        {{ asset('images/landing-page.png') }}

                                    @endslot
                                    @slot('title')
                                        Landing Page Website
                                    @endslot
                                    @slot('details')
                                        "Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt
                                        ut labore
                                        et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris
                                        nisi ut
                                        aliquip ex ea commodo consequat.
                                    @endslot

                                @endcomponent
                                @component('components.custom.services-card')
                                    @slot('id')
                                        service-social-media
                                    @endslot
                                    @slot('pic')
                                        {{ asset('images/social-media.png') }}

                                    @endslot
                                    @slot('title')
                                        Social Media Service
                                    @endslot
                                    @slot('details')
                                        "Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt
                                        ut labore
                                        et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris
                                        nisi ut
                                        aliquip ex ea commodo consequat.
                                    @endslot
                                @endcomponent
                                @component('components.custom.services-card')
                                    @slot('id')
                                        service-sem
                                    @endslot
                                    @slot('pic')

                                        {{ asset('images/digital-marketing.png') }}
                                    @endslot
                                    @slot('title')
                                        SEM (Search Engine Marketing)
                                    @endslot
                                    @slot('details')
                                        "Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt
                                        ut labore
                                        et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris
                                        nisi ut
                                        aliquip ex ea commodo consequat.
                                    @endslot
                                @endcomponent
                                @component('components.custom.services-card')
                                    @slot('id')
                                        service-seo
                                    @endslot
                                    @slot('pic')

                                        {{ asset('images/seo.png') }}
                                    @endslot
                                    @slot('title')
                                        SEO (Search Engine Optimization)
                                    @endslot
                                    @slot('details')
                                        "Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt
                                        ut labore
                                        et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris
                                        nisi ut
                                        aliquip ex ea commodo consequat.
                                    @endslot
                                @endcomponent
                                @component('components.custom.services-card')
                                    @slot('id')
                                        service-content
                                    @endslot
                                    @slot('pic')

                                        {{ asset('images/content-creator.png') }}
                                    @endslot
                                    @slot('title')
                                        Content Creator
                                    @endslot
                                    @slot('details')
                                        "Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt
                                        ut labore
                                        et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris
                                        nisi ut
                                        aliquip ex ea commodo consequat.
                                    @endslot
                                @endcomponent
                                @component('components.custom.services-card')
                                    @slot('id')
                                        service-opt
                                    @endslot
                                    @slot('pic')

                                        {{ asset('images/opt.png') }}
                                    @endslot
                                    @slot('title')
                                        Marketplace Ads Optimization
                                    @endslot
                                    @slot('details')
                                        "Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt
                                        ut labore
                                        et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris
                                        nisi ut
                                        aliquip ex ea commodo consequat.
                                    @endslot
                                @endcomponent
                                {{-- <div class="col-md-9">
                                    <div class="feature-box fbox-plain">
                                        <div class="fbox-icon">
                                            <a href="#"><i class="icon-line2-support text-danger"></i></a>
                                        </div>
                                        <div class="fbox-content">
                                            <h3>Extensive Documentation</h3>
                                            <p>We have covered each &amp; everything in our Documentation including Videos
                                                &amp; Screenshots.</p>
                                        </div>
                                    </div>
                                </div> --}}
                            </div>
                        </div>
                        {{-- <div class="col-lg-1"></div> --}}

                        {{-- <div class="col-lg-5 d-flex align-items-end">
                            <div class="device-video-wrap">
                                <img src="demos/landing/images/iphone-hand.png" alt="Image">
                                <video poster="images/videos/deskwork.jpg" preload="auto" loop autoplay muted>
                                    <source src='demos/landing/images/form-video.mp4' type='video/mp4' />
                                </video>
                            </div>
                        </div> --}}
                    </div>
                </div>
            </div>

            <div class="section m-0 bg-color dotted-bg"
                style="background-image: linear-gradient(to bottom, #3D80E4 0%, #0a4bab 50%, #FFF 50%);">

                <div class="container clearfix">
                    <div class="row mx-auto justify-content-center shadow-lg py-5 my-5 text-center rounded-3 bg-white"
                        style="max-width: 940px; ">
                        <div class="col-md-8">
                            <div class="card border-0 bg-transparent">
                                <div class="card-body">
                                    <h3 class="display-4 fw-bold">Start your journey right now</h3>
                                    <p class="text-black-50">Lorem ipsum dolor, sit amet consectetur adipisicing elit.
                                        Voluptate sequi natus autem non temporibus aperiam, nesciunt iusto, perspiciatis.
                                    </p>
                                    <a href="{{route('homepage2')}}#section-form" class="btn btn-lg btn-dark" >Klik Disini!</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>

    </section>
@endsection

@section('js')

@endsection
