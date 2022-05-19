@extends('master-landing')
@section('page')
    | Contact Us
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
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
@endsection
@section('banner')
    <section id="page-title" class="bg-color page-title-dark py-6">

        <div class="container clearfix">
            <h1>Blogs</h1>
            <span>Berita Terbaru dari Kami untuk Anda.</span>
            {{-- <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="{{route('homePageV2')}}">Home</a></li>
                <li class="breadcrumb-item active" aria-current="page"><a href="{{route('contactUsV2')}}">Contact us</a></li>
            </ol> --}}
        </div>

    </section>
@endsection
@section('content')
    <section id="content">

        <div class="content-wrap pb-0">

            <div class="container mb-5">
                <div class="post-grid row col-mb-30">

                    <div class="entry col-lg-4 col-md-6">
                        <div class="grid-inner card">
                            <a href="#" data-lightbox="image">
                                <img src="demos/movers/images/blog/1.jpg" alt="Image" class="card-img-top">
                            </a>
                            <div class="p-4">
                                <div class="entry-title title-sm">
                                    <h3 class="nott ls0 h5"><a href="blog-single.html">Rules of COVID 19</a></h3>
                                </div>
                                <div class="entry-meta">
                                    <ul>
                                        <li><i class="icon-calendar3"></i> 10th Feb 2021</li>
                                        <li><a href="blog-single.html#comments"><i class="icon-comments"></i> 13</a></li>
                                    </ul>
                                </div>
                                <div class="entry-content mt-4">
                                    <p class="mb-0">Lorem ipsum dolor sit amet, consectetur adipisicing elit.
                                        Repellat velit, quidem illo non harum illum! Sed omnis facilis facere, tenetur
                                        reiciendis dolor sit amet mollitia suscipit aut, nemo soluta..</p>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="entry col-lg-4 col-md-6">
                        <div class="grid-inner card">
                            <a href="#" data-lightbox="image">
                                <img src="demos/movers/images/blog/2.jpg" alt="Image" class="card-img-top">
                            </a>
                            <div class="p-4">
                                <div class="entry-title title-sm">
                                    <h3 class="nott ls0 h5"><a href="blog-single.html">International Shipment
                                            available</a></h3>
                                </div>
                                <div class="entry-meta">
                                    <ul>
                                        <li><i class="icon-calendar3"></i> 10th Feb 2021</li>
                                        <li><a href="blog-single.html#comments"><i class="icon-comments"></i> 13</a></li>
                                    </ul>
                                </div>
                                <div class="entry-content mt-4">
                                    <p class="mb-0">Lorem ipsum dolor sit amet, consectetur adipisicing elit.
                                        Repellat velit, quidem illo non harum illum! Sed omnis facilis facere, tenetur
                                        reiciendis dolor sit amet mollitia..</p>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="entry col-lg-4 col-md-6">
                        <div class="grid-inner card">
                            <a href="#" data-lightbox="image">
                                <img src="demos/movers/images/blog/3.jpg" alt="Image" class="card-img-top">
                            </a>
                            <div class="p-4">
                                <div class="entry-title title-sm">
                                    <h3 class="nott ls0 h5"><a href="blog-single.html">Partnership with Amazon</a></h3>
                                </div>
                                <div class="entry-meta">
                                    <ul>
                                        <li><i class="icon-calendar3"></i> 10th Feb 2021</li>
                                        <li><a href="blog-single.html#comments"><i class="icon-comments"></i> 13</a></li>
                                    </ul>
                                </div>
                                <div class="entry-content mt-4">
                                    <p class="mb-0">Lorem ipsum dolor sit amet, consectetur adipisicing elit.
                                        Repellat velit, quidem illo non harum illum! Sed omnis facilis facere, tenetur
                                        reiciendis dolor sit amet mollitia..</p>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="entry col-lg-4 col-md-6">
                        <div class="grid-inner card">
                            <a href="#" data-lightbox="image">
                                <img src="demos/movers/images/blog/4.jpg" alt="Image" class="card-img-top">
                            </a>
                            <div class="p-4">
                                <div class="entry-title title-sm">
                                    <h3 class="nott ls0 h5"><a href="blog-single.html">Coronavirus: Safe and Cleaness</a>
                                    </h3>
                                </div>
                                <div class="entry-meta">
                                    <ul>
                                        <li><i class="icon-calendar3"></i> 10th Feb 2021</li>
                                        <li><a href="blog-single.html#comments"><i class="icon-comments"></i> 13</a></li>
                                    </ul>
                                </div>
                                <div class="entry-content mt-4">
                                    <p class="mb-0">Lorem ipsum dolor sit amet, consectetur adipisicing elit.
                                        Repellat velit, quidem illo non harum illum! Sed omnis facilis facere, tenetur
                                        reiciendis dolor sit amet mollitia suscipit aut, nemo soluta..</p>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="entry col-lg-4 col-md-6">
                        <div class="grid-inner card">
                            <a href="#" data-lightbox="image">
                                <img src="demos/movers/images/blog/5.jpg" alt="Image" class="card-img-top">
                            </a>
                            <div class="p-4">
                                <div class="entry-title title-sm">
                                    <h3 class="nott ls0 h5"><a href="blog-single.html">7 Tips to make Moving Home Easier
                                            for Kids</a></h3>
                                </div>
                                <div class="entry-meta">
                                    <ul>
                                        <li><i class="icon-calendar3"></i> 10th Feb 2021</li>
                                        <li><a href="blog-single.html#comments"><i class="icon-comments"></i> 13</a></li>
                                    </ul>
                                </div>
                                <div class="entry-content mt-4">
                                    <p class="mb-0">Lorem ipsum dolor sit amet, consectetur adipisicing elit.
                                        Repellat velit, quidem illo non harum illum! Sed omnis facilis facere, tenetur
                                        reiciendis dolor sit amet mollitia..</p>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="entry col-lg-4 col-md-6">
                        <div class="grid-inner card">
                            <a href="#" data-lightbox="image">
                                <img src="demos/movers/images/blog/6.jpg" alt="Image" class="card-img-top">
                            </a>
                            <div class="p-4">
                                <div class="entry-title title-sm">
                                    <h3 class="nott ls0 h5"><a href="blog-single.html">Long Distance or Inter - City
                                            Moving Services</a></h3>
                                </div>
                                <div class="entry-meta">
                                    <ul>
                                        <li><i class="icon-calendar3"></i> 10th Feb 2021</li>
                                        <li><a href="blog-single.html#comments"><i class="icon-comments"></i> 13</a></li>
                                    </ul>
                                </div>
                                <div class="entry-content mt-4">
                                    <p class="mb-0">Lorem ipsum dolor sit amet, consectetur adipisicing elit.
                                        Repellat velit, quidem illo non harum illum! Sed omnis facilis facere, tenetur
                                        reiciendis dolor sit amet mollitia..</p>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
            </div>

            <div class="clear"></div>

            <div class="section dark pt-0 mb-0 bg-color"
                style="background: url('demos/movers/images/bg-2.png') no-repeat center bottom / 100%; overflow: visible">
                <svg viewBox="0 0 1960 206.8" class="bg-white">
                    <path class="svg-themecolor" style="opacity:0.2;"
                        d="M0,142.8A2337.49,2337.49,0,0,1,297.5,56.3C569.33-3.53,783.89.22,849.5,2.3c215.78,6.86,382.12,45.39,503.25,73.45,158.87,36.8,283.09,79.13,458.75,54.55A816.49,816.49,0,0,0,1983,86.8v110H0Z" />
                    <path class="svg-themecolor" d="M.5,152.8s498-177,849-150,1031,238,1134,94v110H.5Z" />
                </svg>
                <div class="container">
                    <div class="row align-items-center justify-content-center center my-4">

                        <div class="col-sm-8">
                            <div class="heading-block border-bottom-0 mb-4">
                                <h2 class="fw-semibold ls0 nott mb-3" style="font-size: 44px; line-height: 1.3">Contact Our
                                    Movers Specialist</h2>
                                <p>Phosfluorescently develop customized relationships vis-a-vis B2C infomediaries.</p>
                            </div>
                            <a href="demo-movers-contact.html"
                                class="button button-white button-light button-rounded fw-medium m-0">Get In Touch</a>
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

    @if (Session::has('successContact'))
        <script type="text/javascript">
            Swal.fire(
                'Success!',
                'Pesan telah terkirim!',
                'success'
            );
        </script>
    @endif
@endsection
