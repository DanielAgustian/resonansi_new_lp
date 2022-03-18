@extends('master2')
@section('page')
    | Digital Marketing
@endsection
@section('banner')
    <section id="slider" class="slider-element dark min-vh-100 include-header"
        style="background-image: url('{{ asset('images/bg-hero.svg') }}');">
        <div class="slider-inner flex-column">

            <div class="vertical-middle">
                <div class="container mb-3">
                    <div class="row align-items-lg-center g-0">

                        <div class="col-lg-6 col-md-6">
                            <div style="margin-right: 20px">
                                <h2 class="display-6 fw-bold text-white">Mengapa Bisnis Anda Perlu <br>Bergabung dengan
                                    Resonansi
                                </h2>
                                <p class="lead mb-4 fw-normal">Kami adalah perusahaan yang bergerak di bidang
                                    teknologi informasi dan digital strategi yang akan
                                    membantu meningkatkan penjualan produk dan brand
                                    anda, sehingga akan beresonansi bersama-sama
                                    dengan customer anda</p>
                                <div class="d-flex mt-7">
                                    <button class="btn btn-blue-bordered  btn-order bigger" style="margin-right: 15px">Order
                                        Now</button>

                                    <button class="btn btn-white-cus btn-pricing bigger">Pricing</button>
                                </div>
                            </div>


                        </div>

                        <div class="col-lg-1 col-0"></div>

                        <div class="col-lg-5 col-md-6 mt-md-0 mt-3">
                            <div class="slide-imgs">
                                {{-- <img src="{{asset('images/1-2.png')}}" alt="Image" class="card-img"> --}}
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
                    <h5 class="text-uppercase ls1 text-muted mb-3">Layanan Kami</h5>
                    <h3 class="nott mb-5">Jasa Layanan Apa Saja Yang Disediakan Oleh Resonansi?</h3>
                    <!-- {{-- <p class="lead fw-normal font-primary mb-5">Membantu Website Anda untuk Menjadi Nomor 1 di Google.
                        Meningkatkan jumlah pengunjung anda secara pasti. Meningkatkan efisiensi iklan anda.</p> --}} -->
                </div>
                <div class="features-items mx-auto" style="max-width: 1000px;">

                    <div class="row justify-content-center mt-7">

                        @component('components.custom.section-1-div')
                            @slot('order')
                              order-lg-1 order-1
                            @endslot
                            @slot('title')
                                Technology
                            @endslot


                            @slot('img')
                                {{ asset('images/landing-page.png') }}
                            @endslot

                            <!-- @slot('route1')
                                service-landing
                            @endslot
                            @slot('route2')
                                service-social-media
                            @endslot -->
                        @endcomponent
                        @component('components.custom.section-1-div')
                            @slot('order')
                              order-lg-2 order-3
                            @endslot
                            @slot('title')
                                Marketplace Optimization
                            @endslot


                            @slot('img')
                                {{ asset('images/opt.png') }}
                            @endslot

                            <!-- @slot('route1')
                                  service-seo
                            @endslot
                            @slot('route2')
                                  service-content
                            @endslot -->
                        @endcomponent
                        @component('components.custom.section-1-div')
                        @slot('order')
                          order-lg-3 order-5
                        @endslot
                            @slot('title')
                              Cloud Warehouse Software
                            @endslot
                            <!-- @slot('title2')

                            @endslot -->

                            @slot('img')
                              {{ asset('images/bussiness.png') }}
                            @endslot

                        @endcomponent
                        @component('components.custom.section-1-div-blue')

                            @slot('order')
                              order-lg-4  order-2
                            @endslot
                            @slot('title')
                                Digital Strategy
                            @endslot


                            @slot('img')
                                {{ asset('images/digital-marketing.png') }}
                            @endslot
                            <!-- @slot('route1')
                                service-landing
                            @endslot
                            @slot('route2')
                                service-social-media
                            @endslot -->
                        @endcomponent
                        @component('components.custom.section-1-div-blue')

                        @slot('order')
                          order-lg-5  order-4
                        @endslot
                            @slot('title')
                                Multimedia
                            @endslot


                            @slot('img')
                                {{ asset('images/content-creator.png') }}
                            @endslot


                        @endcomponent
                    </div>
                    <div class="d-flex justify-content-center mt-5">
                        <button class="btn btn-white-alt btn-order bigger">Order Now</button>
                    </div>
                </div>
            </div>
            <div class="clear"></div>
            <div class="divider-sect"></div>
            <section class="section-2" style="background-image: url('{{ asset('images/bg-hero.svg') }}');">
                <div class="container">
                    <div class="inner-pad"></div>
                    {{-- <div class="white-title mx-auto center mt-4 bottommargin heading-block" style="max-width: 640px;">
                        <h3 class="nott title-part-white text-center"></h3>
                        <p class="lead fw-normal font-primary mb-5"></p>
                    </div> --}}
                    <div class="row mt-4">
                        <div class="col-lg-12 ">
                            <div class="heading-block border-bottom-0 bottommargin-sm">
                                <i class="icon-credit h1"></i>
                                <h2 class="nott title-part-white text-center" style="font-size: 36px;">Layanan Apa Saja Yang
                                    Disediakan
                                    Resonansi?</h2>
                            </div>
                            <div class="fw-normal lead text-center" style="color: rgb(221, 221, 221)">Terdapat beberapa
                                paket
                                layanan
                                yang dapat anda pilih untuk membantu website anda.</div>

                            <p class="text-white-50 mt-lg-4 mt-3  text-center">Selama periode 2 bulan, anda akan mendapatkan
                                beberapa
                                keuntungan!
                                <!-- yang tertera pada <a href="#" class="text-white"><u>Terms and Conditions</u>
                                </a>. -->
                            </p>
                        </div>
                        <div class="col-lg-12 col-12">
                            <div class="row justify-content-around">

                                @component('components.custom.layanan-card-alt')
                                    @slot('id')
                                        2
                                    @endslot
                                    @slot('title')
                                        Technology and Conversion Optimization
                                    @endslot
                                    @slot('details')
                                    <p class="list-data"><i class="fas fa-check-circle"></i> Landing Page Campaign
                                    </p>
                                    <p class="list-data"><i class="fas fa-check-circle"></i> Marketing and Sales Funnel (Digital Funneling)
                                    </p>
                                    <p class="list-data"><i class="fas fa-check-circle"></i> SEO (Search Engine Optimization)
                                    </p>
                                    @endslot
                                    @slot('harga')
                                        Rp 5.000.000
                                    @endslot
                                @endcomponent
                                @component('components.custom.layanan-card-alt')
                                    @slot('id')
                                        3
                                    @endslot
                                    @slot('title')
                                        Virtual Event
                                    @endslot
                                    @slot('details')

                                    <p class="list-data" ><i class="fas fa-check-circle"></i> Virtual Event / Webinar
                                    </p>
                                    <p class="list-data"><i class="fas fa-check-circle"></i> Operate Streaming Activation
                                    </p>
                                    <ul>
                                      <li>Zoom 3 hours</li>
                                      <li>Operator Assisted</li>
                                      <li>Smooth Presentation Software</li>
                                    </ul>
                                    @endslot
                                    @slot('harga')
                                        Rp 7.500.000
                                    @endslot
                                @endcomponent
                                @component('components.custom.layanan-card-alt')
                                    @slot('id')
                                        1
                                    @endslot
                                    @slot('title')
                                        Marketplace (Online Sales Strategy)
                                    @endslot
                                    @slot('details')

                                    <p class="list-data"><i class="fas fa-check-circle"></i>Marketplace Optimization
                                    </p>
                                    <ul>
                                      <li>Shop Optimization (max. 2 shops)</li>
                                      <li>Product Optimization</li>
                                      <li>Reporting and Insight (Weekly)</li>
                                    </ul>
                                    <p class="list-data"><i class="fas fa-check-circle"></i> Marketplace Ads Optimization
                                    </p>
                                    <ul>
                                      <li>Ads Optimization (max. 2 shops)</li>
                                      <li>Keyword and Category Optimization</li>
                                      <li>Bonus Top Up Ads</li>
                                      <li>Reporting and Insight (Weekly)</li>
                                    </ul>
                                    <p class="list-data"><i class="fas fa-check-circle"></i> Marketplace Live
                                    </p>
                                    <ul>
                                      <li>Shopee Live (5 times)</li>
                                      <li>Tokopedia Live (5 times)</li>
                                      <li>Live Duration 20 minutes</li>
                                      <li>1 Host per Session</li>
                                      <li>Reporting and Insight (Monthly)</li>
                                      <!-- <li>KPI: Total Viewer 20.000 - 40.000</li>
                                      <li>Exclude Giveaway</li> -->
                                    </ul>
                                    <!-- <p class="list-data"><i class="fas fa-check-circle"></i>
                                    </p>
                                    <p class="list-data"><i class="fas fa-check-circle"></i> </p> -->



                                    <p class="list-data text-end" style="margin-top: 35px; opacity: 0.7; font-size: 12px" >* with minimum 3 month campaign agreement</p>
                                    @endslot
                                    @slot('harga')
                                        Rp 10.000.000
                                    @endslot
                                @endcomponent
                            </div>
                        </div>
                    </div>

                    <div class="inner-pad"></div>
                </div>
            </section>
            <div class="divider-sect"></div>
            <section class="section-3">
                {{-- <div class="container"> --}}
                <div class="blue-title mx-auto center mt-4 bottommargin heading-block" style="max-width: 640px;">
                    <h3 class="nott title-part text-center"><span>Siapa Saja Klien Kami?</span> </h3>
                    {{-- <p class="lead fw-normal font-primary mb-5 mt-3">Banyak klien sudah puas dengan servis kami. Apakah
                        anda akan menjadi salah satunya?</p> --}}

                </div>
                <div class="row align-items-stretch align-content-stretch g-0 topmargin">

                    {{-- <div class="col-md-6 order-md-2 mb-lg-0 mb-md-0 mb-3"
                        style="background: url('{{ asset('images/handphone.jpg') }}') center center / cover; min-height: 350px">
                    </div> --}}

                    <div class="col-md-12 col-12 bg-white dark order-md-1">
                        <div class="section-features container">
                            <div class="row justify-content-center mt-7">
                                <div class="col-lg-2 col-md-4 col-6">
                                    <img src="{{asset('images/klien/kopgron.png')}}?v=1.0.0.1"
                                        alt="" class="img-client shadow rounded">
                                    <h6 class="blue-text">Kopi Grontol</h6>
                                </div>
                                <div class="col-lg-2 col-md-4 col-6">
                                    <img src="{{asset('images/klien/sweet_monsta.png')}}?v=1.0.0.1"
                                        alt="" class="img-client shadow rounded">
                                    <h6 class="blue-text">Sweet Monsta</h6>
                                </div>
                                <div class="col-lg-2 col-md-4 col-6">
                                    <img src="{{asset('images/klien/warung_52.png')}}?v=1.0.0.1"
                                        alt="" class="img-client shadow rounded">
                                    <h6 class="blue-text">Warung Makan 52</h6>
                                </div>
                                <div class="col-lg-2 col-md-4 col-6">
                                    <img src=" {{asset('images/klien/WGM.png')}}?v=1.0.0.1"
                                        alt="" class="img-client shadow rounded">
                                    <h6 class="blue-text">Warisan Gajah Mada</h6>
                                </div>
                                <div class="col-lg-2 col-md-4 col-6">
                                    <img src="{{asset('images/klien/WHW2_1.png')}}?v=1.0.0.1"
                                        alt="" class="img-client shadow rounded">
                                    <h6 class="blue-text">Warisan Hayam Wuruk</h6>
                                </div>
                                <div class="col-lg-2 col-md-4 col-6">
                                    <img src="{{asset('images/klien/logo-warisan.png')}}?v=1.0.0.1"
                                        alt="" class="img-client shadow rounded p-1">
                                    <h6 class="blue-text">Warisan.co.id</h6>
                                </div>
                            </div>
                        </div>
                        <div class="d-flex justify-content-center mt-5">
                            <button class="btn btn-blue-bordered btn-order bigger">Order Now</button>
                        </div>
                        <div class="feature-pc"></div>
                    </div>

                </div>

                {{-- </div> --}}
            </section>
            {{-- <div class="divider-sect"></div> --}}
            {{-- <section class="section-4" style="background-image: url('{{ asset('images/bg-hero.svg') }}');">

            </section> --}}

            <section class="section-form"
                style="background-image: linear-gradient(to bottom, #3D80E4 0%, #0a4bab 80%, #FFF 80%);">
                <div class="inner-pad"></div>

                <div class="container">
                    <!-- {{-- <div class="white-title mx-auto center mt-4 bottommargin heading-block" style="max-width: 640px;">
                        <h3 class="nott title-part-white text-center">Apa Kata Mereka Tentang Resonansi?</h3>
                        <p class="lead fw-normal font-primary mb-5"></p>
                    </div> --}} -->
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
                        </div>
                        <div class="swiper-button-next"></div>
                        <div class="swiper-button-prev"></div>
                        <div class="swiper-pagination"></div>
                    </div>
                </div>


                <div class="divider"></div>
                <div class="container" id="section-form">

                    <h2 class="nott title-part-white fw-bold mb-2 text-center">Berminat untuk Diskusi dengan <br>
                        Account
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
                                    <!-- <div class="form-widget" data-loader="button" data-alert-type="inline"> -->

                                        <div class="form-result"></div>

                                        <form class="row mb-0 form-services" id="form-enq" action="{{ route('meet-create') }}"
                                            method="POST" enctype="multipart/form-data">
                                            @csrf
                                            <div class="form-process"></div>
                                            <div class="col-12 form-group mb-2">
                                                <label>Name:</label>
                                                <input type="text" name="name" id="landing-enquiry-name"
                                                    class="form-control form-control-lg required" value="{{old('name')}}"
                                                    placeholder="John Doe" required>
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
                                                <div style="color: red; font-size:11px" id="err-company">

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
                                            <input type="hidden" name="ref" value="{{$ref}}">
                                            <input type="hidden" name="so" value="{{$so}}">
                                            <input type="hidden" name="campaign" value="{{$campaign}}">
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
                delay: 10000,
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

            if ($(this).data('type') !== undefined) {

                let type = $(this).data('type');
                $('#landing-enquiry-paket option:selected').removeAttr('selected');
                $('#landing-enquiry-paket option[value="paket-'+type+'"]').attr('selected', 'selected');
            }
        });
        $('.btn-client').click(function() {
            $('html, body').animate({
                scrollTop: ($(".section-3").offset().top) - 20
            }, 1500);
        });
    </script>
@endsection
