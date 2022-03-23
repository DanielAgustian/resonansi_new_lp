@extends('master2')
@section('page')
    | Home
@endsection
@section('banner')
    <section id="slider" class="slider-element dark min-vh-100 include-header"
        style="background-image: url('{{ asset('images/bg-hero.svg') }}');">
        <div class="slider-inner flex-column">

            <div class="vertical-middle">
                <div class="container mb-3">
                    <div class="row align-items-center g-0">

                        <div class="col-lg-6 col-md-6">
                            <div style="margin-right: 20px">
                                <h4 class="display-7 fw-bold text-white">Seperti sebuah garpu tala ketika bergetar, dapat
                                    memberikan getaran yang sama kepada garpu tala yang memiliki frekuensi yang sama.
                                </h4>
                                <p class="lead mb-4 fw-normal">Resonansi ada untuk membantu sebuah brand agar dapat satu
                                    frekuensi yang sama, dengan apa yang sedang diperbincangan setiap saat oleh masyarakat,
                                    untuk membantu masyarakat atau konsumen dari brand untuk paham tentang produk milik
                                    brand</p>
                                <div class="d-flex mt-7">
                                    <button class="btn btn-blue-bordered  btn-client bigger" style="margin-right: 15px">Our
                                        Client</button>

                                    <a href="{{ route('pricingPage') }}" class="btn btn-white-cus bigger">Pricing</a>
                                </div>
                            </div>
                        </div>
                        <div class=" col-lg-1 col-0 d-lg-flex d-none">

                        </div>



                        <!-- <div class="col-lg-1 col-0"></div> -->

                        <div class="col-lg-5 col-md-6 mt-md-0 mt-3">
                            <div class="slide-imgs">
                                <!-- {{-- <img src="{{asset('images/1-2.png')}}" alt="Image" class="card-img"> --}} -->
                                <img src="{{ asset('images/hp_banner_3.png') }}" alt="Image" class="iphone-img">
                            </div>
                            <!-- {{-- <div class="swiper mySwiper ">
                                <div class="swiper-wrapper">
                                    <div class="swiper-slide">

                                        <div class="d-flex align-items-center h-100">
                                            <img src="{{ asset('images/soc-med-banner.png') }}" alt=""
                                                class="img-banner">

                                        </div>
                                    </div>
                                    <div class="swiper-slide">
                                        <div class="d-flex align-items-center h-100">
                                            <img src="https://i0.wp.com/rumahkomunikasi.com/wp-content/uploads/2021/08/seoimage.jpg"
                                                alt="" class="img-banner">

                                        </div>

                                    </div>
                                    <div class="swiper-slide">
                                        <div class="d-flex align-items-center h-100">
                                            <img src="https://buzzup.id/wp-content/uploads/2021/09/Search-Engine-Marketing-adalah.png"
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
                            </div> --}} -->
                        </div>

                    </div>
                </div>
            </div>
            <div class="section-clients">

            </div>


        </div>
    </section>
@endsection

@section('content')
    <section id="content">
        <div class="content-wrap pb-0">

            <div class="container">
                <div class="mx-auto center mt-0 bottommargin heading-block" style="max-width: 640px;">
                    <h5 class="text-uppercase ls1 text-muted mb-3" id="layanan-section">Layanan Kami</h5>
                    <h3 class="nott mb-5">Jasa Layanan Apa Saja Yang Disediakan Oleh Resonansi?</h3>
                    <p class="lead fw-normal font-primary mb-5">Membantu Bisnis Anda Untuk Menjadi <strong>NOMOR 1 DI GOOGLE.</strong>
                      <strong>MENINGKATKAN JUMLAH PENGUNJUNG</strong> Anda Secara Pasti. Meningkatkan <strong>EFISIENSI IKLAN</strong>  Anda.</p>
                </div>
                <div class="features-items mx-auto" style="max-width: 1000px;">
                    <div class="row justify-content-around">
                        @component('components.custom.layanan-div-1')
                            @slot('route')
                                service-technology
                            @endslot
                            @slot('pic')
                                {{ asset('images/landing-page.png') }}

                            @endslot
                            @slot('title')
                                Technology
                            @endslot
                            @slot('details')
                            <!-- <p class=" fw-bold ">Software Warehouse</p>
                            <ul style="margin-left:20px;">
                              <li>Website</li>
                              <li>Landing Page</li>
                              <li>Mobile Application Department</li>
                              <li>Augmented Reality</li>
                              <li>Virtual Reality</li>
                            </ul> -->
                            <ul style="margin-left:20px; margin-top: 15px">
                              <li>Company Profile Website</li>
                              <li>Landing Page Campaign </li>

                            </ul>
                            <p class=" fw-bold ">Software as a Service</p>
                            <ul style="margin-left:20px">
                              <li>AJAKIN (Referral Software Management System)</li>
                              <li>NGERTIYO  (Gamification Education Business))</li>
                            </ul>
                              <!-- <p class=" fw-bold">Software as a Service</p>
                              <ul  style="margin-left:20px;">
                                <li>Ajakin</li>
                                <li>NGERTIYO</li>
                              </ul> -->
                                <!-- Landing page adalah sebuah halaman khusus yang menjadi tujuan user dan berisi informasi lebih detail
                                dan spesifik tentang suatu produk, layanan, penawaran, dan sebagainya, untuk keperluan marketing
                                atau campaign tertentu -->
                            @endslot
                        @endcomponent
                        @component('components.custom.layanan-div-1')
                            @slot('route')
                                service-digital-strategy
                            @endslot
                            @slot('pic')
                                {{ asset('images/digital-marketing.png') }}

                            @endslot
                            @slot('title')
                                Digital Strategy
                            @endslot
                            @slot('details')
                            <!-- <p class=" fw-bold ">Social Media Marketing</p>
                            <ul style="margin-left:20px;">
                              <li>Campaign</li>
                              <li>Matrix Plan</li>
                              <li>Content Management</li>
                              <li>Insight Reports</li>
                              <li>Branding</li>


                            </ul> -->
                            <p class=" fw-bold ">Social Media Marketing</p>
                            <ul style="margin-left:20px;">
                              <li>Campaign</li>
                              <li>Matrix Plan</li>
                              <li>Content Management</li>

                              <li>Digital Branding</li>

                              <li>Brand Logo</li>

                            </ul>
                            <!-- <p class=" fw-bold">Media Buying</p>
                            <ul  style="margin-left:20px;">
                              <li>Media Streaming</li>
                              <li>Google and Facebook Ads</li>
                            </ul>
                            <p class="fw-bold">Conversion Optimization</p>
                            <ul  style="margin-left:20px;">

                              <li>Marketing & Sales Funnel</li>
                              <li>SEM </li>
                              <li>SEO (Search Engine Optimization)</li>
                              <li>SEMO</li>
                              <li>Influencer Marketing</li>
                            </ul> -->
                            @endslot
                        @endcomponent
                        <!-- @component('components.custom.layanan-div-1')
                            @slot('route')
                                service-consultant-technology
                            @endslot
                            @slot('pic')
                                {{ asset('images/tech-consultant.png') }}
                            @endslot
                            @slot('title')
                                Consultant Technology
                            @endslot
                            @slot('details')
                            <p class="fw-bold">Digital Transformation</p>
                            <ul  style="margin-left:20px;">

                              <li>Data Collection + Operation Audit</li>
                              <li>Analisys SWOT, Score Card</li>
                              <li>Set Matrix per Variabel CTQ (critical to quality) KPIV-KPOV, SOP</li>
                              <li>Implementasi POAC dengan metrics & evaluas</li>
                              <li>Metrics dan Score Card</li>
                            </ul>
                                SEM atau Search Engine Marketing adalah sebuah aktivitas marketing menggunakan iklan berbayar yang
                                akan muncul pada mesin pencarian atau search engine seperti Google
                            @endslot
                        @endcomponent -->
                        @component('components.custom.layanan-div-1')
                            @slot('route')
                                service-marketplace
                            @endslot
                            @slot('pic')

                                {{ asset('images/opt.png') }}
                            @endslot
                            @slot('title')
                                Marketplace Optimization
                            @endslot
                            @slot('details')
                            <!-- <p class="fw-bold">Online Sales Strategy</p>
                            <ul  style="margin-left:20px;">

                              <li>Marketplace Optimization</li>
                              <li>Marketplace Ads Optimization</li>
                              <li>Marketplace Live </li>
                            </ul> -->
                            <ul  style="margin-left:20px; margin-top: 15px">

                              <li>Shop & Ads Optimization</li>
                              <li>Product Optimization</li>
                              <li>Marketplace Live Interaction</li>
                              <li>Marketplace Ads</li>
                            </ul>
                            <!-- <p class="fw-bold">Hyperlocal Enabler</p>
                            <ul  style="margin-left:20px;">

                              <li>Consolidated E-Commerce Dashboard</li>

                            </ul> -->

                                <!-- SEO atau Search Engine Optimization adalah sebuah teknik optimasi website yang bertujuan untuk bisa
                                mendapatkan ranking teratas di mesin pencari Google. -->
                            @endslot
                        @endcomponent
                        @component('components.custom.layanan-div-1')
                            @slot('route')
                                service-multimedia
                            @endslot
                            @slot('pic')

                                {{ asset('images/content-creator.png') }}
                            @endslot
                            @slot('title')
                                Multimedia
                            @endslot
                            @slot('details')
                                <!-- Content Creator adalah seseorang yang memiliki tanggung jawab pada setiap informasi yang mereka
                                sebarkan di media sosial. -->
                                <p class="fw-bold">Virtual</p>
                                <ul  style="margin-left:20px;">

                                  <li>Virtual Event</li>
                                  <li>Live Streaming</li>
                                  <li>Webinar</li>

                                </ul>
                                <p class="fw-bold">Cross Platform Streaming</p>
                                <ul  style="margin-left:20px;">
                                  <li>Interactive Website </li>
                                </ul>
                                <!-- <p class="fw-bold">Cross Platform Streaming</p>
                                <ul  style="margin-left:20px;">
                                  <li>Interactive Website </li>
                                </ul> -->
                                <!-- <p class="fw-bold">Content Creator Management</p>
                                <ul  style="margin-left:20px;">
                                  <li>TVC Production</li>
                                  <li>3D Animation</li>
                                  <li>Youtube</li>
                                </ul> -->

                            @endslot
                        @endcomponent
                        @component('components.custom.layanan-div-1')
                            @slot('route')
                                service-business
                            @endslot
                            @slot('pic')

                                {{ asset('images/bussiness.png') }}
                            @endslot
                            @slot('title')
                                Cloud Warehouse Software
                            @endslot
                            @slot('details')

                            <!-- <p class="fw-bold">Network Brick and Click</p>
                            <ul style="margin-left:20px;">
                              <li>Warisan Platform</li>
                            </ul>
                            <p class="fw-bold">One Stop Order Management System</p>
                            <ul  style="margin-left:20px;">
                              <li>Gudangin Cloud Warehouse (Omnichannel & Fulfillment) </li>
                              <li>Teratur Part of Puninar Logistic</li>
                            </ul> -->
                            <p class="fw-bold">Gudangin</p>
                            <ul  style="margin-left:20px; margin-top: 15px">
                              <li>Jasa Fulfillment </li>
                              <li>Jasa Agregasi Chat</li>
                            </ul>
                            <!-- <p class="fw-bold">One Stop Order Management System</p>
                            <ul  style="margin-left:20px;">
                              <li>Gudangin Cloud Warehouse</li>
                              <li>Teratur Part of Puninar Logistics</li>
                            </ul> -->
                                <!-- Marketplace Ads Optimization adalah teknik optimasi berbayar yang dilakukan untuk sebuah toko pada
                                marketplace tertentu -->

                            @endslot
                        @endcomponent
                    </div>

                </div>
                {{-- <div class="row mt-7">

                @component('components.custom.section-1-div')

                @slot('title1')
                Landing Page Website
                @endslot
                @slot('title2')
                Social Media Strategy
                @endslot

                @slot('img1')
                {{ asset('images/landing-page.png') }}
                @endslot
                @slot('img2')
                {{ asset('images/social-media.png') }}
                @endslot
                @endcomponent
                @component('components.custom.section-1-div')

                @slot('title1')
                SEM (Search Engine Marketing)
                @endslot
                @slot('title2')
                SEO (Search Engine Optimization)
                @endslot

                @slot('img1')
                {{ asset('images/digital-marketing.png') }}
                @endslot
                @slot('img2')
                {{ asset('images/seo.png') }}
                @endslot
                @endcomponent
                @component('components.custom.section-1-div')

                @slot('title1')
                Content Creator
                @endslot
                @slot('title2')
                Marketplace Ads Optimization
                @endslot

                @slot('img1')
                {{ asset('images/content-creator.png') }}
                @endslot
                @slot('img2')
                {{ asset('images/ads-opt.png') }}
                @endslot
                @endcomponent

            </div> --}}
            </div>
            <div class="clear"></div>
            <div class="divider-sect"></div>

        <!--    {{-- <section class="section-3">-->

        <!--        <div class="blue-title mx-auto center mt-4 bottommargin heading-block" style="max-width: 640px;">-->
        <!--            <h3 class="nott title-part text-center"><span>Siapa Saja Klien Kami?</span> </h3>-->
        <!--            <p class="lead fw-normal font-primary mb-5 mt-3">Banyak klien sudah puas dengan servis kami. Apakah-->
        <!--                anda akan menjadi salah satunya?</p>-->

        <!--        </div>-->
        <!--        <div class="row align-items-stretch align-content-stretch g-0 topmargin">-->

        <!--            <div class="col-md-6 order-md-2 mb-lg-0 mb-md-0 mb-3"-->
        <!--                style="background: url('{{ asset('images/handphone.jpg') }}') center center / cover; min-height: 350px">-->
        <!--            </div>-->

        <!--            <div class="col-md-6 bg-white dark order-md-1">-->
        <!--                <div class="section-features">-->
        <!--                    <div class="row justify-content-center mt-7">-->
        <!--                        <div class="col-lg-4 col-6">-->
        <!--                            <img src=" https://sribu-sg.s3.amazonaws.com/assets/media/contest_detail/2015/11/logo-ukm-indonesia-5645b0ccca6bcb3c1400000c/8fefabc2e6.png"-->
        <!--                                alt="" class="img-client shadow rounded">-->
        <!--                            <h6 class="blue-text">Cv. Blabla</h6>-->
        <!--                        </div>-->
        <!--                        <div class="col-lg-4 col-6">-->
        <!--                            <img src=" https://sribu-sg.s3.amazonaws.com/assets/media/contest_detail/2015/11/logo-ukm-indonesia-5645b0ccca6bcb3c1400000c/8fefabc2e6.png"-->
        <!--                                alt="" class="img-client shadow rounded">-->
        <!--                            <h6 class="blue-text">Cv. Blabla</h6>-->
        <!--                        </div>-->
        <!--                        <div class="col-lg-4 col-6">-->
        <!--                            <img src=" https://sribu-sg.s3.amazonaws.com/assets/media/contest_detail/2015/11/logo-ukm-indonesia-5645b0ccca6bcb3c1400000c/8fefabc2e6.png"-->
        <!--                                alt="" class="img-client shadow rounded">-->
        <!--                            <h6 class="blue-text">Cv. Blabla</h6>-->
        <!--                        </div>-->
        <!--                        <div class="col-lg-4 col-6">-->
        <!--                            <img src=" https://sribu-sg.s3.amazonaws.com/assets/media/contest_detail/2015/11/logo-ukm-indonesia-5645b0ccca6bcb3c1400000c/8fefabc2e6.png"-->
        <!--                                alt="" class="img-client shadow rounded">-->
        <!--                            <h6 class="blue-text">Cv. Blabla</h6>-->
        <!--                        </div>-->
        <!--                        <div class="col-lg-4 col-6">-->
        <!--                            <img src=" https://sribu-sg.s3.amazonaws.com/assets/media/contest_detail/2015/11/logo-ukm-indonesia-5645b0ccca6bcb3c1400000c/8fefabc2e6.png"-->
        <!--                                alt="" class="img-client shadow rounded">-->
        <!--                            <h6 class="blue-text">Cv. Blabla</h6>-->
        <!--                        </div>-->
        <!--                        <div class="col-lg-4 col-6">-->
        <!--                            <img src=" https://sribu-sg.s3.amazonaws.com/assets/media/contest_detail/2015/11/logo-ukm-indonesia-5645b0ccca6bcb3c1400000c/8fefabc2e6.png"-->
        <!--                                alt="" class="img-client shadow rounded">-->
        <!--                            <h6 class="blue-text">Cv. Blabla</h6>-->
        <!--                        </div>-->
        <!--                    </div>-->
        <!--                </div>-->
        <!--                <div class="feature-pc"></div>-->
        <!--            </div>-->

        <!--        </div>-->


        <!--    </section> --}}-->
        <!--    {{-- <div class="divider-sect"></div> --}}-->
        <!--    {{-- <section class="section-4" style="background-image: url('{{ asset('images/bg-hero.svg') }}');">-->

        <!--</section> --}}-->
            <div class="section bg-transparent" id="section-klien">
                <div class="container">
                    <div class="row ">

                        <div class="col-lg-5 col-md-6 mb-4 mb-md-0">
                            <img src="{{ asset('images/testimonial-2.png') }}" alt="Image">
                        </div>

                        <div class="col-md-6 offset-lg-1">
                            <div class="heading-block border-bottom-0 mb-4">
                                <i class="icon-line-paper h1 color"></i>
                                <h3 class="nott ls0 text-md-start text-center">Siapa Saja Klien Kami?</h3>
                            </div>
                            <p class="fw-normal lead text-md-start text-center  ">Banyak klien sudah puas dengan servis kami. Apakah
                                anda akan menjadi salah satunya?</p>

                            <div class="clear"></div>

                            <ul class="skills mt-2 mb-5">
                                <li data-percent="90">
                                    <span>Tingkat Kepuasan Klien</span>
                                    <div class="progress">
                                        <div class="progress-percent">
                                            <div class="counter counter-inherit counter-instant"><span data-from="0"
                                                    data-to="90" data-refresh-interval="20" data-speed="1500"></span>%
                                                Puas</div>
                                        </div>
                                    </div>
                                </li>
                            </ul>
                            <div class="section-features">
                                <div class="row justify-content-center mt-7">
                                    <div class="col-lg-4 col-6">
                                        <img src="{{asset('images/klien/kopgron.png')}}?v=1.0.0.1"
                                            alt="" class="img-client shadow rounded">
                                        <h6 class="blue-text">Kopi Grontol</h6>
                                    </div>
                                    <div class="col-lg-4 col-6">
                                        <img src="{{asset('images/klien/mowilex.png')}}?v=1.0.0.1"
                                            alt="" class="img-client shadow rounded">
                                        <h6 class="blue-text">Mowilex</h6>
                                    </div>
                                    <div class="col-lg-4 col-6">
                                        <img src="{{asset('images/klien/twg-2.png')}}?v=1.0.0.1"
                                            alt="" class="img-client shadow rounded">
                                        <h6 class="blue-text">TWG</h6>
                                    </div>
                                    <div class="col-lg-4 col-6">
                                        <img src="{{asset('images/klien/warung_52.png')}}?v=1.0.0.1"
                                            alt="" class="img-client shadow rounded">
                                        <h6 class="blue-text">Warung Makan 52</h6>
                                    </div>
                                    <div class="col-lg-4 col-6">
                                        <img src="{{asset('images/klien/yutensil.png')}}?v=1.0.0.1"
                                            alt="" class="img-client shadow rounded">
                                        <h6 class="blue-text">Yutensil</h6>
                                    </div>
                                    <div class="col-lg-4 col-6">
                                        <img src="{{asset('images/klien/WGM.png')}}?v=1.0.0.1"
                                            alt="" class="img-client shadow rounded">
                                        <h6 class="blue-text">Warisan Gajah Mada</h6>
                                    </div>
                                    <div class="col-lg-4 col-6">
                                        <img src="{{asset('images/klien/WHW2_1.png')}}?v=1.0.0.1"
                                            alt="" class="img-client shadow rounded">
                                        <h6 class="blue-text">Warisan Hayam Wuruk</h6>
                                    </div>
                                    <div class="col-lg-4 col-6">
                                        <img src="{{asset('images/klien/logo-warisan.png')}}"
                                            alt="" class="img-client shadow rounded p-1">
                                        <h6 class="blue-text">Warisan.co.id</h6>
                                    </div>
                                    <!-- <div class="col-lg-4 col-6">
                                        <img src=" https://sribu-sg.s3.amazonaws.com/assets/media/contest_detail/2015/11/logo-ukm-indonesia-5645b0ccca6bcb3c1400000c/8fefabc2e6.png"
                                            alt="" class="img-client shadow rounded">
                                        <h6 class="blue-text">Cv. Blabla</h6>
                                    </div> -->
                                </div>
                            </div>

                            {{-- <a href="#"
                                class="btn text-white bg-color rounded-3 px-4 py-3 fw-semibold text-uppercase shadow-sm">Learn
                                More <i class="icon-line-arrow-right ms-1"></i></a> --}}
                        </div>
                    </div>
                </div>
            </div>
            <section class="section-form"
                style="background-image: linear-gradient(to bottom, #3D80E4 0%, #0a4bab 80%, #FFF 80%);">
                <div class="inner-pad"></div>

                <div class="container">
                    {{-- <div class="white-title mx-auto center mt-4 bottommargin heading-block" style="max-width: 640px;">
                    <h3 class="nott title-part-white text-center">Apa Kata Mereka Tentang Resonansi?</h3>
                    <p class="lead fw-normal font-primary mb-5"></p>
                </div> --}}
                    <div class="mt-4"></div>
                    <div class="swiper swiperTestimoni">
                        <div class="swiper-wrapper">

                          @component('components.custom.testi-card')
                              @slot('img')
                                  {{asset('images/testi/shinta.jpeg')}}
                              @endslot
                              @slot('name')
                                Shinta
                              @endslot
                              @slot('jabatan')
                                Jr. Manager Operational Warisan Perdagangan Nusantara
                              @endslot
                              @slot('details')
                                  Semenjak dibantu Resonansi, toko-toko ku kebanjiran followers & pengunjung, customer yang checkout juga nambah pesat! Pokoknya toko aku tambah rame! Thanks a lot Resonansi and team!
                              @endslot
                          @endcomponent
                          @component('components.custom.testi-card')
                              @slot('img')
                                  {{asset('images/testi/pak_yosep.jpeg')}}
                              @endslot
                              @slot('name')
                                Yosep Saputra
                              @endslot
                              @slot('jabatan')
                                Chief Marketing Officer Warisan Perdagangan Digital
                              @endslot
                              @slot('details')
                                  Sebagai startup  berkompetisi dengan platform  B2B dan B2C, diperlukan strategi untuk memahami pasar dan diterima masyarakat. Beruntung sekali kami menggunakan Resonansi, budget dan visi kami jadi tepat sasaran. Pertumbuhan bisnis kami mencapai momentum terbaik. Saya sangat merekomendasikan Resonansi untuk para startup untuk mencapai potensi maksimal bisnismu.
                              @endslot
                          @endcomponent
                          @component('components.custom.testi-card')
                              @slot('img')
                                  {{asset('images/testi/bu_vera.jpeg')}}
                              @endslot
                              @slot('name')
                                Vera Pannieragouw
                              @endslot
                              @slot('jabatan')
                                Head Operational Of Kopi Grontol
                              @endslot
                              @slot('details')
                                Saya sangat puas dengan pelayanan tim Resonansi. Semua bisnis F&B online saya dihandle oleh tim Resonansi,  dari social media, platform food delivery, media iklannya, sampai ke promo-promonya. Dari awal saya bangun F&B, sudah dihandle oleh tim Resonansi dengan pelayanan yang luar biasa sekali.
                              @endslot
                          @endcomponent
                            <!-- @component('components.custom.testi-card')
                                @slot('img')
                                    https://akcdn.detik.net.id/community/media/visual/2019/02/19/42393387-9c5c-4be4-97b8-49260708719e.jpeg?w=750&q=90
                                @endslot
                                @slot('name')
                                  Jane Doe, Marketing Manager of Kopi Grontol
                                @endslot
                                @slot('details')
                                    Terimakasih untuk para team Resonansi
                                    yang telah membantu dalam
                                    mengembangkan binis di perusahaan kami
                                @endslot
                            @endcomponent -->

                            <!-- @component('components.custom.testi-card')
                                @slot('img')
                                    https://akcdn.detik.net.id/community/media/visual/2019/02/19/42393387-9c5c-4be4-97b8-49260708719e.jpeg?w=750&q=90
                                @endslot
                                @slot('name')
                                  John Doe, Manager of Warung Makan 52
                                @endslot
                                @slot('details')
                                    Terimakasih untuk para team Resonansi
                                    yang telah membantu dalam
                                    mengembangkan binis di perusahaan kami
                                @endslot
                            @endcomponent

                            @component('components.custom.testi-card')
                                @slot('img')
                                    https://akcdn.detik.net.id/community/media/visual/2019/02/19/42393387-9c5c-4be4-97b8-49260708719e.jpeg?w=750&q=90
                                @endslot
                                @slot('name')
                                  Mr. Doe, Marketing Manager of Warisan Hayam Wuruk
                                @endslot
                                @slot('details')
                                    Terimakasih untuk para team Resonansi
                                    yang telah membantu dalam
                                    mengembangkan binis di perusahaan kami
                                @endslot
                            @endcomponent -->
                        </div>
                        <div class="swiper-button-next"></div>
                        <div class="swiper-button-prev"></div>
                        <div class="swiper-pagination"></div>
                    </div>
                </div>


                <div class="divider"></div>
                <div class="container" id="section-form">

                    <h2 class="nott title-part-white fw-bold mb-2 text-center">Berminat untuk Diskusi dengan <br> Account
                        Executive
                        Kami? </h2>
                    <p class="text-white font-primary mb-5  lead text-center">Yuk Diskusi Asik dengan Account Executive
                        Resonansi <br> supaya tambah ngerti!</p>
                    <div class="row">
                        <div class="col-md-6 img-mbl-form">
                            <!-- <img src="{{ asset('images/calendar.png') }}" alt="" class="img-form rounded"> -->
                            <iframe src="https://calendar.google.com/calendar/embed?src=uon0rocne2ndmlcp14vl2jl5v0%40group.calendar.google.com&ctz=Asia%2FJakarta" style="border: 0"  frameborder="0" scrolling="no" class="iframe-calendar"></iframe>
                        </div>
                        <div class="col-md-6 my-auto">
                            <div class="card bg-white shadow-lg border-0">
                                <div class="card-body p-4">
                                    <div>

                                        <div class="form-result"></div>

                                        <form class="row mb-0 form-services" id="form-enq" action="{{ route('meet-create') }}"
                                            method="POST" enctype="multipart/form-data">
                                            @csrf
                                            <div class="form-process"></div>

                                            <div class="col-12 form-group mb-2">
                                                <label>Name:</label>
                                                <input type="text" name="name" id="landing-enquiry-name"
                                                    class="form-control form-control-lg required" value="{{old('name')}}"
                                                    placeholder="Name" required>
                                                  <div style="color: red; font-size:11px" id="err-name">

                                                  </div>
                                            </div>
                                            <div class="col-12 form-group mb-2">
                                                <label>Email:</label>
                                                <input type="email" name="email" id="landing-enquiry-email"
                                                    class="form-control form-control-lg required" value="{{old('email')}}"
                                                    placeholder="user@company.com" required>
                                                    <div style="color: red; font-size:11px" id="err-email">

                                                    </div>
                                            </div>
                                            <div class="col-12 form-group mb-2">
                                                <label>Phone:</label><br>
                                                <div class="input-group input-group-lg">
                                                    <select class="form-select required" name="landing-enquiry-idd"
                                                        id="landing-enquiry-idd" style="max-width: 100px;">
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
                                                        class="form-control form-control-lg required" value="{{old('phone')}}"
                                                        placeholder="" required>
                                                </div>
                                                <div style="color: red; font-size:11px" id="err-phone">

                                                </div>
                                            </div>
                                            <!-- {{-- <div class="col-12 form-group mb-4">
                                            <label>Message:</label>
                                            <textarea name="landing-enquiry-additional-requirements"
                                                id="landing-enquiry-additional-requirements"
                                                class="form-control form-control-lg" cols="30" rows="5"
                                                placeholder="Please let us know how we can help you..."></textarea>
                                        </div> --}} -->

                                            <div class="col-12 form-group mb-2">
                                                <label>Nama Perusahaan</label>
                                                <input type="text" name="company" id="landing-enquiry-company"
                                                    class="form-control form-control-lg required" value="{{old('company')}}"
                                                    placeholder="Company Name" required>
                                                <div style="color: red; font-size:11px" id="err-company" >

                                                </div>
                                            </div>
                                            <div class="col-12 form-group mb-2">
                                                <label>Kota Asal</label>
                                                <input type="text" name="city" id="landing-enquiry-company"
                                                    class="form-control form-control-lg required" value=""
                                                    placeholder="Nama Kota" required>
                                                <div style="color: red; font-size:11px" id="err-city">

                                                </div>
                                            </div>
                                            <div class="col-12 form-group mb-2">
                                                <label>Paket</label>
                                                <select class="form-select form-control form-control-lg required"
                                                    name="landing_enquiry_paket" id="landing-enquiry-paket">
                                                    @for($i = 0; $i< $count; $i++)
                                                      @if($i == 0)
                                                          <option value="{{$data[$i]->value}}" selected>{{$data[$i]->name}}</option>
                                                      @else
                                                          <option value="{{$data[$i]->value}}">{{$data[$i]->name}}</option>
                                                      @endif
                                                    @endfor

                                                </select>

                                            </div>
                                            <div class="col-12 form-group mb-2">
                                                <label>Jadwal Meeting dengan Account Executive</label>
                                                <input type="date" name="date" id="landing-enquiry-date"
                                                    class="form-control form-control-lg required" value="{{old('date')}}"
                                                    placeholder="date" required>
                                                <div style="color: red; font-size:11px" id="err-date">

                                                </div>
                                            </div>
                                            <div class="col-12 form-group mb-2">
                                                <label>Jam Meeting dengan Account Executive</label>
                                                <input type="time" name="time" id="landing-enquiry-time"
                                                    class="form-control form-control-lg required" value="{{old('time')}}"
                                                    placeholder="time" required>
                                                <div style="color: red; font-size:11px" id="err-time">

                                                </div>
                                            </div>
                                            <div class="col-12 d-none">
                                                <input type="text" id="landing-enquiry-botcheck"
                                                    name="landing-enquiry-botcheck" value="" />

                                            </div>
                                            <div class="g-recaptcha" data-callback="recaptchaCallback" data-sitekey="6LdLM1UeAAAAANIPJEOY3Bo_7bysZ5pSdgMMkyc5"></div>

                                            <div class="col-12">
                                                <button disabled  name="" id="btn-sub"
                                                    class="btn w-100 text-white bg-color rounded-3 py-3 fw-semibold text-uppercase mt-2">Book
                                                    Now!</button>
                                            </div>

                                            <input type="hidden" name="prefix" value="landing-enquiry-">
                                        </form>
                                    </div>
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
                                    <input type="text" name="company" class="form-control" placeholder="Nama Perusahaan"
                                        required>
                                    <div class="form-error" id="error_company"></div>
                                    <input type="date" name="date" class="form-control" placeholder="Tanggal Bertemu"
                                        required>
                                    <div class="form-error" id="error_date"></div>
                                    <input type="time" name="time" class="form-control" placeholder="Jam Bertemu"
                                        required>
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
            </section>
            <div class="divider-sect"></div>


        </div>

    </section>
@endsection
@section('js')
    <script src="https://unpkg.com/swiper/swiper-bundle.min.js"></script>
    <script>
        var swiper = new Swiper(".mySwiper", {
            cssMode: true,
            loop: true,
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
                delay: 15000,
            },
        });
    </script>
    <script>
        var swiper = new Swiper(".swiperTestimoni", {
            cssMode: true,
            loop: true,
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
                delay: 15000,
            },
        });
    </script>
    <script>
        $('.btn-pricing').click(function() {
            $('html, body').animate({
                scrollTop: ($(".section-2").offset().top) - 20
            }, 1500);
        });
        $('.btn-order').click(function() {
            $('html, body').animate({
                scrollTop: ($("#section-form").offset().top) - 20
            }, 1500);
        });
        $('.btn-client').click(function() {
            $('html, body').animate({
                scrollTop: ($("#section-klien").offset().top) - 20
            }, 1500);
        });
    </script>

    <!-- <script>
        $('.form-services').on('submit', function(e){

          let errorEmail = false;
          let errorName = false;
          let errorPhone = false;
          let errorCompany = false;
          let errorDate = false;
          let errorTime = false;

          let email = $('input[name="email"]').val() ?? "";
          let name = $('input[name="name"]').val() ;
          let phone = $('input[name="phone"]').val();
          let company = $('input[name="company"]').val();
          let date = $('input[name="date"]').val();
          let time = $('input[name="time"]').val();
          var mailformat = /^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,3})+$/;

          if (!email.match(mailformat) ) {
            console.log("wrong email");
            errorEmail = true;
            $('#err-email').text('Email Tidak Valid');

          }else{
            $('#err-email').text('');
          }

          if (name.length < 2) {
            console.log("name empty");
            errorName = true;
            $('#err-name').text('Nama tidak valid');
          }else{
            $('#err-name').text('');
          }
          if (phone.length < 9 ) {
            console.log("phone error");
            errorPhone = true;
            $('#err-phone').text('Nomor Kamu Tidak Valid');
          }else{
            $('#err-phone').text('');
          }

          if (company.length< 3) {
            console.log("company error");
            errorCompany = true;
            $('#err-company').text('Nama Perusahaan Tidak Valid');
          }else{
            $('#err-company').text('');
          }

          if (date.length< 5) {
            console.log("date empty");
            errorDate = true;
            $('#err-date').text('Tanggal Bertemu Tidak valid');
          }else{
            $('#err-date').text('');
          }

          if (time.length< 4) {
            console.log("Time empty");
            errorTime = true;
            $('#err-time').text('Waktu Bertemu Tidak Valid');
          }else{
            $('#err-time').text('');
          }


          if(errorName || errorEmail || errorPhone ||errorCompany || errorDate || errorTime){
            console.log("ONE OF THEM IS EMPTY/WRONG");
            e.preventDefault();
          }else{

          }
        })

    </script> -->


@endsection
