@extends('master-landing')
@section('page')
    | Pricing
@endsection
@section('css')
    <link rel="stylesheet" href="https://unpkg.com/swiper/swiper-bundle.min.css" />
    {{-- <style>
        .banner-element {
            height: 110vh;
        }

    </style>
    <link rel="stylesheet" href="{{ asset('asset/css/rehaul/homepage.css') }}"> --}}
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
@endsection
@section('banner')
    <section id="page-title" class="bg-color page-title-dark py-6 position-relative">

        <div class="container clearfix">
            
            <h1 class="nott">Pricing</h1>
            <span>Pelayanan Maksimal dengan Harga Minimal</span>
            {{-- <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="{{ route('homePageV2') }}">Home</a></li>
                <li class="breadcrumb-item"><a href="{{ route('pricingPageV2') }}">Pricing</a></li>
            </ol> --}}
            <div style="height: 30px"></div>
        </div>
        <div class="svg-separator">
            <div>
                <svg preserveAspectRatio="xMidYMax meet" viewBox="0 0 1600 100" data-height="100">
                    <path style="opacity: 1;fill: rgba(255,255,255,0.75);"
                        d="M1040,56c0.5,0,1,0,1.6,0c-16.6-8.9-36.4-15.7-66.4-15.7c-56,0-76.8,23.7-106.9,41C881.1,89.3,895.6,96,920,96
                                                                                                                                                                      C979.5,96,980,56,1040,56z">
                    </path>
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
                    <path style="opacity: 1;fill: rgba(255,255,255,0.75);"
                        d="M-40,95.6c28.3,0,43.3-8.7,57.4-18C-9.6,60.8-31,40.2-83.2,40.2c-14.3,0-26.3,1.6-36.8,4.2V106h60V96L-40,95.6
                                                                                                                                                                      z">
                    </path>
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
                
            </div>
        </div>
    </section>
    <div class="bg-white" style="height: 90px"></div>
@endsection
@section('content')
    <section id="content">



        <div class="section p-0 dark mb-0"
            style="background: linear-gradient(to right, rgba(25,102,221,0.2), rgba(25,102,221,0.5)), url('{{ asset('images/rehaul/1.jpg') }}') no-repeat center center / cover; min-height: 400px; margin-top: 0px; margin-bottom: 0px">
            <div class="container">
                <h2 class="display-5  text-white text-center" style="margin-top: 100px">Berapa Harga Paket Layanan
                    <strong class="fw-bold">Jasa
                        Resonansi</strong>?

                </h2>
                <div class="container  mb-4 " style="padding: 0px 0 80px;">
                    <div class="card w-100 card-pricing shadow bg-white d-lg-block d-none">
                        <div class="card-body p-lg-4">

                            <div class="row no-gutters justify-content-center">
                                <div class="col-lg-4 col-md-6 pricing-border-right first-b">
                                  <div class="d-flex flex-column h-100 justify-content-between">
                                    <div class="">
                                      <div class="" style="min-height:60px">
                                        <h4 class="title-price fw-semibold text-center mb-3">Technology and Conversion
                                            Optimization</h4>
                                        <!-- <h2 class="price-val fw-bold text-center mb-0">Rp 5.000.000</h2> -->
                                        <!-- <div class="d-flex justify-content-center mt-2">
                                            <button class="btn btn-blue-dark btn-order"
                                                data-type="paket-technology-conversion-opt">Order Now!</button>
                                        </div> -->

                                      </div>
                                      <div class="mx-3 my-4">
                                          <div class="divider-vertical"></div>
                                      </div>
                                      <div class="d-flex flex-column  justify-content-center mx-3">
                                          <p class="pricing-item">
                                              <i class="fas fa-check-circle me-3 mt-1"></i>
                                              Landing Page Campaign
                                          </p>
                                          <p class="pricing-item">
                                              <i class="fas fa-check-circle me-3 mt-1"></i>
                                              Marketing and Sales Funnel (Digital Funneling)


                                          </p>
                                          <p class="pricing-item">
                                              <i class="fas fa-check-circle me-3 mt-1"></i>
                                              SEO (Search Engine Optimization)
                                          </p>
                                      </div>

                                    </div>
                                    <div class="d-flex justify-content-center mt-3 ">
                                        <button class="btn btn-blue-dark btn-ask btn-bigger "
                                            data-type="paket-technology-conversion-opt">Ask for Price</button>
                                    </div>
                                  </div>


                                </div>
                                <div class="col-lg-4 col-md-6 pricing-border-right second-b">
                                  <div class="flex-column d-flex justify-content-between h-100">
                                    <div class="">
                                      <div class="" style="min-height:60px">
                                        <h4 class="title-price fw-semibold text-center mb-3">Virtual Event</h4>
                                      </div>

                                      <!-- <h2 class="price-val fw-bold text-center mb-0">Rp 7.500.000</h2> -->
                                      <!-- <div class="d-flex justify-content-center mt-2">
                                          <button class="btn btn-blue-dark btn-order btn-bigger w-100"
                                              data-type="paket-virtual-event">Order Now!</button>
                                      </div> -->
                                      <div class="mx-3 my-4">
                                          <div class="divider-vertical"></div>
                                      </div>
                                      <div class="d-flex flex-column justify-content-center mx-3">
                                          <p class="pricing-item">
                                              <i class="fas fa-check-circle me-3 mt-1"></i>
                                              Virtual Event / Webinar

                                          </p>
                                          <p class="pricing-item mb-0">
                                              <i class="fas fa-check-circle me-3 mt-1"></i>
                                              Operate Streaming Activation

                                          </p>
                                          <ul class="list-item">
                                              <li>Zoom 3 hours
                                              </li>
                                              <li>Operator Assisted</li>
                                              <li>Smooth Presentation Software </li>
                                          </ul>
                                      </div>
                                    </div>
                                    <div class="d-flex justify-content-center mt-3">
                                        <button class="btn btn-blue-dark btn-ask btn-bigger "
                                            data-type="paket-virtual-event">Ask for Price</button>
                                    </div>
                                  </div>

                                </div>
                                <div class="col-lg-4 col-md-6 pricing-border-none">
                                  <div class="d-flex flex-column h-100 justify-content-between">
                                    <div class="">
                                      <div class="" style="min-height: 60px">
                                        <h4 class="title-price fw-semibold text-center mb-3">Marketplace (Online Sales
                                            Strategy)</h4>
                                        <!-- <h2 class="price-val fw-bold text-center mb-0">Rp 10.000.000</h2> -->
                                        <!-- <div class="d-flex justify-content-center mt-2">
                                            <button class="btn btn-blue-dark btn-order" data-type="paket-marketplace">Order
                                                Now!</button>
                                        </div> -->
                                      </div>
                                      <div class="mx-3 my-4">
                                          <div class="divider-vertical"></div>
                                      </div>
                                      <div class="d-flex flex-column justify-content-center mx-3">
                                          <p class="pricing-item mb-0">
                                              <i class="fas fa-check-circle me-3 mt-1"></i>
                                              Marketplace Optimization

                                          </p>
                                          <ul class="list-item">
                                              <li>Shop Optimization (max. 2 shops)
                                              </li>
                                              <li>Product Optimization</li>
                                              <li>Reporting and Insight (Weekly)</li>
                                          </ul>
                                          <p class="pricing-item mb-0">
                                              <i class="fas fa-check-circle me-3 mt-1"></i>
                                              Marketplace Ads Optimization



                                          </p>
                                          <ul class="list-item">
                                              <li>Ads Optimization (max. 2 shops)</li>
                                              <li>Keyword and Category Optimization</li>
                                              <li>Bonus Top Up Ads</li>
                                              <li>Reporting and Insight (Weekly)</li>
                                          </ul>
                                          <p class="pricing-item mb-0">
                                              <i class="fas fa-check-circle me-3 mt-1"></i>
                                              Marketplace Live



                                          </p>
                                          <ul class="list-item">
                                              <li>Shopee Live (5 times)</li>
                                              <li>Tokopedia Live (5 times)</li>
                                              <li>Live Duration 20 minutes</li>
                                              <li>1 Host per Session</li>
                                              <li>Reporting and Insight (Monthly)</li>

                                          </ul>
                                      </div>
                                    </div>
                                    <div class="d-flex justify-content-center mt-3">
                                        <button class="btn btn-blue-dark btn-ask btn-bigger" data-type="paket-marketplace">Ask for Price</button>
                                    </div>
                                  </div>



                                </div>
                            </div>

                        </div>
                    </div>
                    <div class="row justify-content-center">
                        <div class="col-md-6 mb-5">
                            <div class="card card-mobile-price bg-white d-lg-none d-block">
                                <div class="card-body">
                                    <h4 class="title-price fw-semibold text-center mb-3">Technology and Conversion
                                        Optimization</h4>
                                    {{-- <h2 class="price-val fw-bold text-center mb-0">Rp 5.000.000</h2> --}}
                                    
                                    <div class="mx-3 my-4">
                                        <div class="divider-vertical"></div>
                                    </div>
                                    <div class="d-flex flex-column  justify-content-center mx-3">
                                        <p class="pricing-item">
                                            <i class="fas fa-check-circle me-3 mt-1"></i>
                                            Landing Page Campaign
                                        </p>
                                        <p class="pricing-item">
                                            <i class="fas fa-check-circle me-3 mt-1"></i>
                                            Marketing and Sales Funnel (Digital Funneling)


                                        </p>
                                        <p class="pricing-item">
                                            <i class="fas fa-check-circle me-3 mt-1"></i>
                                            SEO (Search Engine Optimization)
                                        </p>
                                    </div>
                                    <div class="d-flex justify-content-center mt-2">
                                        <button class="btn btn-blue-dark btn-ask"
                                            data-type="paket-technology-conversion-opt">Order Now!</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6 mb-5">
                            <div class="card card-mobile-price bg-white d-lg-none d-block">
                                <div class="card-body">
                                    <h4 class="title-price fw-semibold text-center mb-3">Virtual Event</h4>
                                    {{-- <h2 class="price-val fw-bold text-center mb-0">Rp 7.500.000</h2> --}}
                                    
                                    <div class="mx-3 my-4">
                                        <div class="divider-vertical"></div>
                                    </div>
                                    <div class="d-flex flex-column justify-content-center mx-3">
                                        <p class="pricing-item">
                                            <i class="fas fa-check-circle me-3 mt-1"></i>
                                            Virtual Event / Webinar

                                        </p>
                                        <p class="pricing-item mb-0">
                                            <i class="fas fa-check-circle me-3 mt-1"></i>
                                            Operate Streaming Activation

                                        </p>
                                        <ul class="list-item">
                                            <li>Zoom 3 hours
                                            </li>
                                            <li>Operator Assisted</li>
                                            <li>Smooth Presentation Software </li>
                                        </ul>
                                    </div>
                                    <div class="d-flex justify-content-center mt-2">
                                        <button class="btn btn-blue-dark btn-order"
                                            data-type="paket-virtual-event">Order Now!</button>
                                    </div>
                                </div>
                            </div>

                        </div>
                        <div class="col-md-6 mb-5">
                            <div class="card card-mobile-price bg-white d-lg-none d-block">
                                <div class="card-body">
                                    <h4 class="title-price fw-semibold text-center mb-3">Marketplace (Online Sales
                                        Strategy)</h4>
                                    {{-- <h2 class="price-val fw-bold text-center mb-0">Rp 10.000.000</h2> --}}
                                    
                                    <div class="mx-3 my-4">
                                        <div class="divider-vertical"></div>
                                    </div>
                                    <div class="d-flex flex-column justify-content-center mx-3">
                                        <p class="pricing-item mb-0">
                                            <i class="fas fa-check-circle me-3 mt-1"></i>
                                            Marketplace Optimization

                                        </p>
                                        <ul class="list-item">
                                            <li>Shop Optimization (max. 2 shops)
                                            </li>
                                            <li>Product Optimization</li>
                                            <li>Reporting and Insight (Weekly)</li>
                                        </ul>
                                        <p class="pricing-item mb-0">
                                            <i class="fas fa-check-circle me-3 mt-1"></i>
                                            Marketplace Ads Optimization



                                        </p>
                                        <ul class="list-item">
                                            <li>Ads Optimization (max. 2 shops)</li>
                                            <li>Keyword and Category Optimization</li>
                                            <li>Bonus Top Up Ads</li>
                                            <li>Reporting and Insight (Weekly)</li>
                                        </ul>
                                        <p class="pricing-item mb-0">
                                            <i class="fas fa-check-circle me-3 mt-1"></i>
                                            Marketplace Live



                                        </p>
                                        <ul class="list-item">
                                            <li>Shopee Live (5 times)</li>
                                            <li>Tokopedia Live (5 times)</li>
                                            <li>Live Duration 20 minutes</li>
                                            <li>1 Host per Session</li>
                                            <li>Reporting and Insight (Monthly)</li>

                                        </ul>
                                    </div>
                                    <div class="d-flex justify-content-center mt-2">
                                        <button class="btn btn-blue-dark btn-order" data-type="paket-marketplace">Order
                                            Now!</button>
                                    </div>
                                </div>
                            </div>

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

        

    

        <div class="section section-form position-relative  pt-0 mb-0 bg-color mt-0"
            style="background: url('demos/movers/images/bg-2.png') no-repeat center bottom / 100%; overflow: visible">
            <svg viewBox="0 0 1960 206.8" class="bg-white position-absolute" style="top: -55px">
                <path class="svg-themecolor" style="opacity:0.2;"
                    d="M0,142.8A2337.49,2337.49,0,0,1,297.5,56.3C569.33-3.53,783.89.22,849.5,2.3c215.78,6.86,382.12,45.39,503.25,73.45,158.87,36.8,283.09,79.13,458.75,54.55A816.49,816.49,0,0,0,1983,86.8v110H0Z" />
                <path class="svg-themecolor" d="M.5,152.8s498-177,849-150,1031,238,1134,94v110H.5Z" />
            </svg>
            <div class="container">
                <div style="height: 30px"></div>
                <div class="d-flex justify-content-center align-items-center mt-4">
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

                                <form class="row mb-0 form-services" id="form-enq" action="{{ route('meet-create') }}"
                                    method="POST" enctype="multipart/form-data">
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
                                                class="form-control  required" value="{{ old('phone') }}" placeholder=""
                                                required>
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
                                            class="form-control  required" value="{{ old('date') }}" placeholder="date"
                                            required>
                                        <div style="color: red; font-size:11px" id="err-date">

                                        </div>
                                    </div>
                                    <div class="col-12 form-group mb-2">
                                        <label>Jam Meeting dengan Account Executive</label>
                                        <input type="time" name="time" id="landing-enquiry-time"
                                            class="form-control  required" value="{{ old('time') }}" placeholder="time"
                                            required>
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
    </section>
@endsection
@section('js')
    <script src="https://unpkg.com/swiper/swiper-bundle.min.js"></script>
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
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
