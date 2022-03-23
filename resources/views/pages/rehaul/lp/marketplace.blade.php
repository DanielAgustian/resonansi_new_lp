@extends('master-landing')

@section('page')
    | Marketplace Optimization
@endsection

@section('css')
    <link rel="stylesheet" href="https://unpkg.com/swiper/swiper-bundle.min.css" />
@endsection

@section('banner')
    <section id="slider" class="slider-element bg-color banner-element"
        style=" padding: 20px 0; background: url('demos/movers/images/bg-2.png') no-repeat center center / 100% 100%;">

        <div class="container mt-4" style="z-index: 2">
            {{-- <div class="center">
                <h2 class="text-white h2 fw-semibold mb-2">Welcome to the Canvas Packers and Movers.</h2>
                <p class="text-white-50">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Excepturi,
                    aperiam.</p>
            </div> --}}
            <div class="d-flex flex-column justify-content-center">

                <div class="row topmargin justify-content-between align-items-center">
                    <div class="col-lg-6 order-lg-1 order-2 mt-lg-0 mt-4">


                        <h2 class="text-white fw-bold mb-3">Punya Online Shop tapi penjualan tidak meningkat? <br>
                            Mau naikin omset tapi tidak paham sistem di marketplace?
                        </h2>
                        <p class="text-white fw-normal mb-0">“Resonansi akan menjawab masalahmu dan bantu kamu untuk
                            meningkatkan penjualan produk dengan strategi yang tepat melalui layanan Marketplace
                            Optimization.”

                        </p>
                        <div class="d-flex align-items-center justify-content-lg-start justify-content-center mt-5">
                            <button class="btn btn-blue mr-4 me-4 btn-bigger btn-klien">Our Client</button>
                            <button class="btn btn-white btn-bigger btn-order" data-type="paket-marketplace">Order
                                Now!</button>
                        </div>

                    </div>
                    <div class="col-lg-6  order-lg-2 order-1  flex-wrap justify-content-center">
                        <div class="swiper swiperBanner">
                            <div class="swiper-wrapper">
                                <div class="swiper-slide">
                                    <img src="{{ asset('images/rehaul/marketplace-optimization.png') }}" alt=""
                                        class="w-100 banner-img">

                                </div>
                                <div class="swiper-slide">
                                    <img src="{{ asset('images/landing-service/marketplace-opt-ill.png') }}" alt=""
                                        class="w-100 banner-img">

                                </div>


                            </div>
                            <div class="swiper-button-next"></div>
                            <div class="swiper-button-prev"></div>
                            <div class="swiper-pagination"></div>
                        </div>
                    </div>
                </div>
            </div>

        </div>

        <div class="svg-separator">
            <div>
                <svg preserveAspectRatio="xMidYMax meet" viewBox="0 0 1600 100" data-height="100">
                    <path style="opacity: 1;fill: rgba(255,255,255,0.75);" d="M1040,56c0.5,0,1,0,1.6,0c-16.6-8.9-36.4-15.7-66.4-15.7c-56,0-76.8,23.7-106.9,41C881.1,89.3,895.6,96,920,96
                                                                      C979.5,96,980,56,1040,56z"></path>
                    <path style="opacity: 1;fill: rgba(255,255,255,0.75);"
                        d="M1699.8,96l0,10H1946l-0.3-6.9c0,0,0,0-88,0s-88.6-58.8-176.5-58.8c-51.4,0-73,20.1-99.6,36.8 c14.5,9.6,29.6,18.9,58.4,18.9C1699.8,96,1699.8,96,1699.8,96z">
                    </path>
                    <path style="opacity: 1;fill: rgba(255,255,255,0.75);"
                        d="M1400,96c19.5,0,32.7-4.3,43.7-10c-35.2-17.3-54.1-45.7-115.5-45.7c-32.3,0-52.8,7.9-70.2,17.8 c6.4-1.3,13.6-2.1,22-2.1C1340.1,56,1340.3,96,1400,96z">
                    </path>
                    <path style="opacity: 1;fill: rgba(255,255,255,0.75);"
                        d="M320,56c6.6,0,12.4,0.5,17.7,1.3c-17-9.6-37.3-17-68.5-17c-60.4,0-79.5,27.8-114,45.2 c11.2,6,24.6,10.5,44.8,10.5C260,96,259.9,56,320,56z">
                    </path>
                    <path style="opacity: 1;fill: rgba(255,255,255,0.75);"
                        d="M680,96c23.7,0,38.1-6.3,50.5-13.9C699.6,64.8,679,40.3,622.2,40.3c-30,0-49.8,6.8-66.3,15.8 c1.3,0,2.7-0.1,4.1-0.1C619.7,56,620.2,96,680,96z">
                    </path>
                    <path style="opacity: 1;fill: rgba(255,255,255,0.75);" d="M-40,95.6c28.3,0,43.3-8.7,57.4-18C-9.6,60.8-31,40.2-83.2,40.2c-14.3,0-26.3,1.6-36.8,4.2V106h60V96L-40,95.6
                                                                      z"></path>
                    <path style="opacity: 1;fill: rgba(255,255,255,0.3);;"
                        d="M504,73.4c-2.6-0.8-5.7-1.4-9.6-1.4c-19.4,0-19.6,13-39,13c-19.4,0-19.5-13-39-13c-14,0-18,6.7-26.3,10.4 C402.4,89.9,416.7,96,440,96C472.5,96,487.5,84.2,504,73.4z">
                    </path>
                    <path style="opacity: 1;fill: rgba(255,255,255,0.3);;"
                        d="M1205.4,85c-0.2,0-0.4,0-0.6,0c-19.5,0-19.5-13-39-13s-19.4,12.9-39,12.9c0,0-5.9,0-12.3,0.1 c11.4,6.3,24.9,11,45.5,11C1180.6,96,1194.1,91.2,1205.4,85z">
                    </path>
                    <path style="opacity: 1;fill: rgba(255,255,255,0.3);;"
                        d="M1447.4,83.9c-2.4,0.7-5.2,1.1-8.6,1.1c-19.3,0-19.6-13-39-13s-19.6,13-39,13c-3,0-5.5-0.3-7.7-0.8 c11.6,6.6,25.4,11.8,46.9,11.8C1421.8,96,1435.7,90.7,1447.4,83.9z">
                    </path>
                    <path style="opacity: 1;fill: rgba(255,255,255,0.3);;"
                        d="M985.8,72c-17.6,0.8-18.3,13-37,13c-19.4,0-19.5-13-39-13c-18.2,0-19.6,11.4-35.5,12.8 c11.4,6.3,25,11.2,45.7,11.2C953.7,96,968.5,83.2,985.8,72z">
                    </path>
                    <path style="opacity: 1;fill: rgba(255,255,255,0.3);;"
                        d="M743.8,73.5c-10.3,3.4-13.6,11.5-29,11.5c-19.4,0-19.5-13-39-13s-19.5,13-39,13c-0.9,0-1.7,0-2.5-0.1 c11.4,6.3,25,11.1,45.7,11.1C712.4,96,727.3,84.2,743.8,73.5z">
                    </path>
                    <path style="opacity: 1;fill: rgba(255,255,255,0.3);;"
                        d="M265.5,72.3c-1.5-0.2-3.2-0.3-5.1-0.3c-19.4,0-19.6,13-39,13c-19.4,0-19.6-13-39-13 c-15.9,0-18.9,8.7-30.1,11.9C164.1,90.6,178,96,200,96C233.7,96,248.4,83.4,265.5,72.3z">
                    </path>
                    <path style="opacity: 1;fill: rgba(255,255,255,0.3);;"
                        d="M1692.3,96V85c0,0,0,0-19.5,0s-19.6-13-39-13s-19.6,13-39,13c-0.1,0-0.2,0-0.4,0c11.4,6.2,24.9,11,45.6,11 C1669.9,96,1684.8,96,1692.3,96z">
                    </path>
                    <path style="opacity: 1;fill: rgba(255,255,255,0.3);;"
                        d="M25.5,72C6,72,6.1,84.9-13.5,84.9L-20,85v8.9C0.7,90.1,12.6,80.6,25.9,72C25.8,72,25.7,72,25.5,72z">
                    </path>
                    <path style="fill: rgb(255, 255, 255);"
                        d="M-40,95.6C20.3,95.6,20.1,56,80,56s60,40,120,40s59.9-40,120-40s60.3,40,120,40s60.3-40,120-40s60.2,40,120,40s60.1-40,120-40s60.5,40,120,40s60-40,120-40s60.4,40,120,40s59.9-40,120-40s60.3,40,120,40s60.2-40,120-40s60.2,40,120,40s59.8,0,59.8,0l0.2,143H-60V96L-40,95.6z">
                    </path>
                </svg>
                <div class="bg-white" style="height: 150px"></div>
            </div>
        </div>

    </section>
@endsection

@section('content')
    <section id="content">

        <div class="content-wrap pb-0">

            <div class="container clearfix">

                <div class="row justify-content-center mb-5">
                    <div class="col-lg-8 center">
                        <div class="heading-block">
                            <h3 class="nott mb-3 fw-semibold ls0">Layanan <span class="span-bl">Marketplace
                                    Optimization</span> Yang Ditawarkan Oleh Resonansi</h3>
                            {{-- <span class="text-black-50">Lorem ipsum dolor sit amet, consectetur adipisicing elit.
                                Voluptate corporis, facilis assumenda optio consequuntur amet iure, quidem animi nam
                                inventore!</span> --}}
                        </div>
                    </div>

                    <div class="col-lg-9 col-md-11">
                        <div class="row align-items-center">
                            <div class="col-sm-6 ">
                                <img src="{{ asset('images/rehaul/shops-optimization.png') }}" alt="Image 1"
                                    class="img-layanan">
                            </div>
                            <div class="col-sm-6">
                                <h3 class="text-center text-sm-start">Shops and Ads Optimization</h3>
                                <p class="mb-2 text-center text-sm-start">Optimasi tampilan dan atribut toko di marketplace
                                    serta penggunaan tools ads atau Iklan di marketplace dengan efektif dan maksimal.
                                </p>
                                {{-- <div class="d-flex justify-content-center justify-content-sm-start">
                                    <a target="_blank" href="https://icons8.com"
                                        class="color btn btn-sm p-0 btn-link"><u>Selengkapnya</u> <i
                                            class="icon-line-arrow-right"></i></a>
                                </div> --}}

                            </div>
                        </div>
                        <div class="row align-items-center mt-5">
                            <div class="col-sm-6 mb-4 mb-sm-0 order-sm-1 order-2">
                                <h3 class="text-center text-sm-start">Product Optimization</h3>
                                <p class="mb-2 text-center text-sm-start">Optimasi pada berbagai elemen yang terdapat pada
                                    SKU atau produk di marketplace untuk meningkatkan performa penjualan.
                                </p>

                            </div>
                            <div class="col-sm-6 order-sm-2 order-1">
                                <img src="{{ asset('images/rehaul/product-opt.png') }}" alt="Image 1"
                                    class="img-layanan">
                            </div>
                        </div>
                        <div class="row align-items-center mt-5">
                            <div class="col-sm-6">
                                <img src="{{ asset('images/rehaul/mktp-live.png') }}" alt="Image 1"
                                    class="img-layanan">
                            </div>
                            <div class="col-sm-6">
                                <h3 class="text-center text-sm-start">Marketplace Live Interaction</h3>
                                <p class="mb-2 text-center text-sm-start">Aktivasi pada fitur Live di Marketplace untuk
                                    membangun sistem penjualan yang menarik dan interaktif.</p>

                            </div>
                        </div>
                    </div>
                </div>

            </div>

            <div class="clear"></div>

            <div class="section p-0 dark mb-0"
                style="background: linear-gradient(to right, rgba(25,102,221,0.2), rgba(25,102,221,0.5)), url('{{ asset('images/rehaul/1.jpg') }}') no-repeat center center / cover; min-height: 400px">
                <div class="container">
                    <div class="row justify-content-between  mb-4 bottommargin" style="padding: 100px 0 160px;">
                        <div class="col-lg-5 col-md-6 offset-lg-1 pt-lg-0 pt-3">
                            {{-- <a href="https://www.youtube.com/watch?v=P3Huse9K6Xs" data-lightbox="iframe"
                                class="play-video ms-3"><i class="icon-play"></i></a> --}}
                            <h2 class="display-5  text-white">Berapa Harga Untuk Jasa Layanan <strong
                                    class="fw-bold">Optimasi Marketplace</strong> ?
                            </h2>
                        </div>
                        <div class="col-lg-5 col-md-6 mb-0 mb-md-5">
                            {{-- <p class="mb-5">Lorem ipsum dolor sit amet, consectetur adipisicing elit.
                                Incidunt distinctio dolor nemo quasi cum. A ipsam tempora voluptatem officiis!
                                Accusantium!</p> --}}
                            <h3 class="mb-2 text-white">Start From Rp 10.000.000</h3>
                            <div class="row">
                                <ul class="col-lg-8 col-md-10 col-12 iconlist">
                                    <li class="my-2"><i class="icon-line-circle-check fw-light"></i>
                                        <span class="ps-2 fw-bold">Marketplace Optimization</span>
                                        <ul class="little-list">

                                            <li>Shop Optimization (max. 2 shops)</li>
                                            <li>Product Optimization</li>
                                            <li>Reporting and Insight (Weekly) </li>

                                        </ul>
                                    </li>
                                    <li class="my-2"><i class="icon-line-circle-check fw-light"></i>
                                        <span class="ps-2 fw-bold"> Marketplace Ads Optimization

                                        </span>
                                        <ul class="little-list">




                                            <li>Ads Optimization (max. 2 shops)</li>
                                            <li>Keyword and Category Optimization</li>
                                            <li>Bonus Top Up Ads</li>
                                            <li>Reporting and Insight (Weekly)</li>

                                        </ul>
                                    </li>
                                    <li class="my-2"><i class="icon-line-circle-check fw-light"></i>
                                        <span class="ps-2 fw-bold">Marketplace Live</span>
                                        <ul class="little-list">

                                            <li>Shopee Live (5 times)</li>
                                            <li>Tokopedia Live (5 times)</li>
                                            <li>Live Duration 20 minutes</li>
                                            <li>1 Host per Session</li>
                                            <li>Reporting and Insight (Monthly)</li>

                                        </ul>
                                    </li>

                                </ul>

                            </div>
                        </div>
                        <div class="col-lg-12 center">
                            <div class="d-flex justify-content-center align-items-center">
                                <button href="" class="button  button-primary fw-medium m-0 btn-order"
                                    data-type="paket-marketplace">Order Now</button>
                            </div>
                        </div>
                    </div>

                </div>
                <div class="clear"></div>
                <svg class="svg-curve" viewBox="0 0 1463 188.03">
                    <path style="fill:#FFF;" d="M-.5,288.5s297-175,792-97,599,52,671,25v143H-.5Z"
                        transform="translate(0 -171.47)" />
                </svg>
            </div>
            <div class=""></div>
            <div class="section section-features section-klien bg-transparent mt-0 p-0 clearfix">
                <div class="container clearfix">
                    <h2 class="center">Siapa Saja Pengguna Jasa Kami?</h2>
                    <div class="row justify-content-between col-mb-50 col-mb-lg-80">
                        <div class="col-lg-2 col-md-4 col-6">
                            <div class="feature-box media-box mb-2">
                                <img src="{{ asset('images/klien/kopgron.png') }}?v=1.0.0.1" alt=""
                                    class="w-100">
                                <div class="fbox-content">
                                    <h3 class="nott fw-semibold text-center">Kopi Grontol</h3>

                                </div>
                            </div>
                        </div>
                        <div class="col-lg-2 col-md-4 col-6">
                            <div class="feature-box media-box mb-2">
                                <img src="{{ asset('images/klien/mowilex.png') }}?v=1.0.0.1" alt=""
                                    class="w-100">
                                <div class="fbox-content mt-1">
                                    <h3 class="nott fw-semibold text-center">Mowilex</h3>

                                </div>
                            </div>


                        </div>
                        <div class="col-lg-2 col-md-4 col-6">
                            <div class="feature-box media-box mb-2">
                                <img src="{{ asset('images/klien/yutensil.png') }}?v=1.0.0.1" alt=""
                                    class="w-100">
                                <div class="fbox-content mt-1">
                                    <h3 class="nott fw-semibold text-center">Yutensil</h3>

                                </div>
                            </div>


                        </div>
                        <div class="col-lg-2 col-md-4 col-6">
                            <div class="feature-box media-box mb-2">
                                <img src="{{ asset('images/klien/twg-2.png') }}?v=1.0.0.1" alt=""
                                    class="w-100">
                                <div class="fbox-content mt-1">
                                    <h3 class="nott fw-semibold text-center">TWG</h3>

                                </div>
                            </div>


                        </div>
                        <div class="col-lg-2 col-md-4 col-6">
                            <div class="feature-box media-box mb-2">
                                <img src="{{ asset('images/klien/warung_52.png') }}?v=1.0.0.1" alt=""
                                    class="w-100">
                                <div class="fbox-content mt-1">
                                    <h3 class="nott fw-semibold text-center">Warung Makan 52</h3>

                                </div>
                            </div>


                        </div>
                        <div class="col-lg-2 col-md-4 col-6">
                            <div class="feature-box media-box mb-2">
                                <img src="{{ asset('images/klien/WGM.png') }}?v=1.0.0.1" alt="" class="w-100">
                                <div class="fbox-content mt-1">
                                    <h3 class="nott fw-semibold text-center">Warisan Gajah Mada</h3>

                                </div>
                            </div>

                        </div>
                        <div class="col-lg-2 col-md-4 col-6">
                            <div class="feature-box media-box mb-2">
                                <img src="{{ asset('images/klien/WHW2_1.png') }}?v=1.0.0.1" alt=""
                                    class="w-100">
                                <div class="fbox-content mt-1">
                                    <h3 class="nott fw-semibold text-center">Warisan Hayam Wuruk</h3>

                                </div>
                            </div>

                        </div>
                        <div class="col-lg-2 col-md-4 col-6">
                            <div class="feature-box media-box mb-2">
                                <img src="{{ asset('images/klien/logo-warisan.png') }}?v=1.0.0.1" alt=""
                                    class="w-100">
                                <div class="fbox-content mt-1">
                                    <h3 class="nott fw-semibold text-center">Warisan.co.id</h3>

                                </div>
                            </div>

                        </div>
                    </div>
                </div>
            </div>



            <div class="clear"></div>

            <div class="section section-gradient m-0">
                <div class="svg-separator top rotate">
                    <div>
                        <svg preserveAspectRatio="xMidYMax meet" class="svg-separator sep3" viewBox="0 0 1600 100">
                            <path style="opacity: 1;fill: #FFF;"
                                d="M-40,71.627C20.307,71.627,20.058,32,80,32s60.003,40,120,40s59.948-40,120-40s60.313,40,120,40s60.258-40,120-40s60.202,40,120,40s60.147-40,120-40s60.513,40,120,40s60.036-40,120-40c59.964,0,60.402,40,120,40s59.925-40,120-40s60.291,40,120,40s60.235-40,120-40s60.18,40,120,40s59.82,0,59.82,0l0.18,26H-60V72L-40,71.627z">
                            </path>
                            <path class="svg-themecolor" style="opacity: 0.1;"
                                d="M-40,83.627C20.307,83.627,20.058,44,80,44s60.003,40,120,40s59.948-40,120-40s60.313,40,120,40s60.258-40,120-40s60.202,40,120,40s60.147-40,120-40s60.513,40,120,40s60.036-40,120-40c59.964,0,60.402,40,120,40s59.925-40,120-40s60.291,40,120,40s60.235-40,120-40s60.18,40,120,40s59.82,0,59.82,0l0.18,14H-60V84L-40,83.627z">
                            </path>
                            <path style="fill: #FFF;"
                                d="M-40,95.627C20.307,95.627,20.058,56,80,56s60.003,40,120,40s59.948-40,120-40s60.313,40,120,40s60.258-40,120-40s60.202,40,120,40s60.147-40,120-40s60.513,40,120,40s60.036-40,120-40c59.964,0,60.402,40,120,40s59.925-40,120-40s60.291,40,120,40s60.235-40,120-40s60.18,40,120,40s59.82,0,59.82,0l0.18,138H-60V96L-40,95.627z">
                            </path>
                        </svg>
                    </div>
                </div>
                <div class="container">
                    <div class="mx-auto" style="max-width: 1200px; padding: 120px 0 50px;">
                        <div class="d-flex justify-content-center align-items-center mb-4 dark">
                            <h3 class="mb-0">Testimoni Pengguna</h3>

                        </div>
                        {{-- <div class="row row-eq-height justify-content-center">
                            <div class="col-md-6">
                                <div class="bg-white shadow-sm d-flex justify-content-center flex-column rounded">
                                    <div class="testimonial bg-transparent shadow-none border-0 p-0">
                                        <div class="d-flex flex-row mb-4 align-items-center">
                                            <div class="testi-image">
                                                <a href="#"><img src="demos/pet/images/testimonials/1.jpg"
                                                        alt="Customer Testimonails"></a>
                                            </div>
                                            <h4 class="ms-1 mb-0">John Dow</h4>
                                        </div>
                                        <div class="testi-content ps-4">
                                            <p>Assertively leverage existing integrated communities after turnkey
                                                quality vectors. Assertively coordinate sustainable quality vectors
                                                and pandemic markets. Assertively leverage existing integrated
                                                communities.</p>
                                            <div class="testi-meta ls1 mt-3"> Fig Nelson</div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6 mt-3 mt-md-0">
                                <div class="bg-white shadow-sm d-flex justify-content-center flex-column mb-3 rounded p-5">
                                    <div class="testimonial small bg-transparent shadow-none border-0 p-0">
                                        <div class="d-flex flex-row mb-4 align-items-center">
                                            <h4 class="ms-1 mb-0">John Dow</h4>
                                        </div>
                                        <div class="testi-content ps-3">
                                            <p>Incidunt deleniti blanditiis quas aperiam recusandae consequatur
                                                ullam quibusdam cum libero illo rerum repellendus!</p>
                                            <div class="testi-meta ls1"> Fig Nelson</div>
                                        </div>
                                    </div>
                                </div>
                                <div class="bg-white shadow-sm d-flex justify-content-center flex-column rounded p-5">
                                    <div class="testimonial small bg-transparent shadow-none border-0 p-0">
                                        <div class="d-flex flex-row mb-4 align-items-center">
                                            <h4 class="ms-1 mb-0">John Dow</h4>
                                        </div>
                                        <div class="testi-content ps-3">
                                            <p>Incidunt deleniti blanditiis quas aperiam recusandae consequatur
                                                ullam quibusdam cum libero illo rerum repellendus!</p>
                                            <div class="testi-meta ls1"> Fig Nelson</div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div> --}}
                        <div class="swiper swiperTestimoni">
                            <div class="swiper-wrapper">


                                @component('components.new.testi-card')
                                    @slot('img')
                                        {{ asset('images/testi/shinta.jpeg') }}
                                    @endslot
                                    @slot('name')
                                        Shinta
                                    @endslot
                                    @slot('jabatan')
                                        Jr. Manager Operational Warisan Perdagangan Nusantara
                                    @endslot
                                    @slot('details')
                                        Semenjak dibantu Resonansi, toko-toko ku kebanjiran followers & pengunjung, customer yang
                                        checkout juga nambah pesat! Pokoknya toko aku tambah rame! Thanks a lot Resonansi and team!
                                    @endslot
                                @endcomponent
                                @component('components.new.testi-card')
                                    @slot('img')
                                        {{ asset('images/testi/pak_yosep.jpeg') }}
                                    @endslot
                                    @slot('name')
                                        Yosep Saputra
                                    @endslot
                                    @slot('jabatan')
                                        Chief Marketing Officer Warisan Perdagangan Digital
                                    @endslot
                                    @slot('details')
                                        Sebagai startup berkompetisi dengan platform B2B dan B2C, diperlukan strategi untuk memahami
                                        pasar dan diterima masyarakat. Beruntung sekali kami menggunakan Resonansi, budget dan visi
                                        kami jadi tepat sasaran. Pertumbuhan bisnis kami mencapai momentum terbaik. Saya sangat
                                        merekomendasikan Resonansi untuk para startup untuk mencapai potensi maksimal bisnismu.
                                    @endslot
                                @endcomponent
                                @component('components.new.testi-card')
                                    @slot('img')
                                        {{ asset('images/testi/bu_vera.jpeg') }}
                                    @endslot
                                    @slot('name')
                                        Vera Pannieragouw
                                    @endslot
                                    @slot('jabatan')
                                        Head Operational Of Kopi Grontol
                                    @endslot
                                    @slot('details')
                                        Saya sangat puas dengan pelayanan tim Resonansi. Semua bisnis F&B online saya dihandle oleh
                                        tim Resonansi, dari social media, platform food delivery, media iklannya, sampai ke
                                        promo-promonya. Dari awal saya bangun F&B, sudah dihandle oleh tim Resonansi dengan
                                        pelayanan yang luar biasa sekali.
                                    @endslot
                                @endcomponent
                            </div>
                            <div class="swiper-button-next"></div>
                            <div class="swiper-button-prev"></div>
                            <div class="swiper-pagination"></div>
                        </div>
                        {{-- <div class="grid-bg d-none d-md-block">
                            <img src="demos/movers/images/dot-grid.svg" alt="Dot Image">
                        </div> --}}
                    </div>
                </div>
            </div>



            <div class="section section-form  pt-0 mb-0 bg-color"
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

                                    <form class="row mb-0 form-services" id="form-enq"
                                        action="{{ route('meet-create') }}" method="POST" enctype="multipart/form-data">
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
                                                    class="form-control  required" value="{{ old('phone') }}"
                                                    placeholder="" required>
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
                                                class="form-control  required" value="{{ old('date') }}"
                                                placeholder="date" required>
                                            <div style="color: red; font-size:11px" id="err-date">

                                            </div>
                                        </div>
                                        <div class="col-12 form-group mb-2">
                                            <label>Jam Meeting dengan Account Executive</label>
                                            <input type="time" name="time" id="landing-enquiry-time"
                                                class="form-control  required" value="{{ old('time') }}"
                                                placeholder="time" required>
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
        </div>
    </section>
@endsection

@section('js')
    <script src="https://unpkg.com/swiper/swiper-bundle.min.js"></script>

    <script>
        var swiper = new Swiper(".swiperBanner", {

            loop: true,
            pagination: {
                el: ".swiper-pagination",
                clickable: false,
            },
            navigation: {
                nextEl: ".swiper-button-next",
                prevEl: ".swiper-button-prev",
            },
            autoplay: {
                delay: 15000,
                disableOnInteraction: false,
            },
        });
    </script>
    <script>
        var swiper = new Swiper(".swiperTestimoni", {

            loop: true,
            navigation: {
                nextEl: ".swiper-button-next",
                prevEl: ".swiper-button-prev",
            },
            pagination: {
                el: ".swiper-pagination",
            },
            mousewheel: false,
            keyboard: false,
            autoplay: {
                delay: 10000,
            },
        });
    </script>
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
