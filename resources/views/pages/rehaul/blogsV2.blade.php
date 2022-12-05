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

        .lists-blog-front {
            border-right: 1px solid rgba(128, 128, 128, 0.35);
        }

        @media screen and (max-width: 996px) {
            .title-contact {
                font-size: 42px;
            }

            .lists-blog-front {
                border-right: none;
            }

        }

        @media screen and (max-width: 450px) {
            .title-contact {
                font-size: 36px;
            }
        }

        .content-wrap {
            overflow: visible !important;
        }

    </style>
    <link rel="stylesheet" href="{{ asset('asset/css/rehaul/homepage.css') }}">
    <link rel="stylesheet" href="{{ asset('asset/css/rehaul/blogs.css') }}?v=1.0.4">
    <link rel="stylesheet" href="{{ asset('asset/css/rehaul/pagination.css') }}?v=1.1.3">
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
@endsection
@section('banner')
    <section id="page-title" class="bg-color page-title-dark py-6">

        <div class="container clearfix">
            <div class="row">
                <div class="col-lg-6 col-md-9 col-12">
                    <h1>Blogs</h1>
                    <span>Tetap terhubung dan sefrekuensi dengan berita atau informasi terbaru di era digital untuk wawasan
                        dalam
                        bisnis dengan Resonansi</span>
                </div>
            </div>

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
                <div class="row">
                    <div class="col-lg-8 lists-blog-front" style="">

                        <div class="post-grid row col-mb-30 ">
                            @foreach ($blogs as $items)
                                <div class="entry open-detail col-lg-4 col-md-6" data-slug="{{ $items->blogSlug }}">
                                    <div class="grid-inner card">
                                        <img src="https://crm.resonansi.co.id/{{ $items->blogImage1 }}" alt="Image"
                                            class="card-img-top">

                                        <div class="p-3">
                                            <div class="entry-title title-sm">
                                                <h4 class="nott ls0 h5 title-blog">{{ $items->blogTitle }}</h4>
                                            </div>
                                            <div class="entry-meta">
                                                <ul>
                                                    <li><i class="fas fa-calendar-alt"></i>
                                                        {{ timestamp_to_date($items->created_at) }}</li>
                                                    <li><a href="blog-single.html#comments"><i class="fas fa-eye "
                                                                style="color:#061a35; margin-right: 10px"></i>{{ $items->blogRead }}</a>
                                                    </li>
                                                </ul>
                                            </div>
                                            <div class="entry-content mt-2">
                                                {!! $items->blogContent !!}
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            @endforeach
                        </div>
                        <div class="d-flex justify-content-center pagination-blogs">
                          {{$blogs->links()}}
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-12">
                        <div class="list-blog">
                            <div class="title-latest-art">
                                <h4 class="title-latest">Latest Article</h4>
                            </div>

                            <div class="list-blogs-right row">
                                @foreach ($latest as $items)
                                    @component('components.rehaul.small-blog-child')
                                        @slot('slug')
                                            {{ $items->blogSlug }}
                                        @endslot
                                        @slot('title')
                                            {{ $items->blogTitle }}
                                        @endslot
                                        @slot('date')
                                            {{ timestamp_to_date($items->created_at) }}
                                        @endslot
                                        @slot('img')
                                            https://crm.resonansi.co.id/{{ $items->blogImage1 }}
                                        @endslot
                                    @endcomponent
                                @endforeach
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

    @if (Session::has('successContact'))
        <script type="text/javascript">
            Swal.fire(
                'Success!',
                'Pesan telah terkirim!',
                'success'
            );
        </script>
    @endif
    <script type="text/javascript">
        $('.open-detail').click(function() {
            let slug = $(this).data('slug');
            location.href = "/blogs/read/" + slug;
        })
    </script>
@endsection
