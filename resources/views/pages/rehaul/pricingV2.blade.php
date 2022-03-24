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
    <section id="page-title" class="bg-color page-title-dark py-6">

        <div class="container clearfix">
            <h1 class="nott">Pricing</h1>
            <span>Pelayanan Maksimal dengan Harga Minimal</span>
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="{{ route('homePageV2') }}">Home</a></li>
                <li class="breadcrumb-item"><a href="{{ route('pricingPageV2') }}">Pricing</a></li>
            </ol>
        </div>

    </section>
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
                <div class="container  mb-4 " style="padding: 0px 0 160px;">
                    <div class="card w-100 card-pricing shadow bg-white d-lg-block d-none">
                        <div class="card-body p-lg-4">

                            <div class="row no-gutters justify-content-center">
                                <div class="col-lg-4 col-md-6 pricing-border-right first-b">
                                    <h4 class="title-price fw-semibold text-center mb-3">Technology and Conversion
                                        Optimization</h4>
                                    <h2 class="price-val fw-bold text-center mb-0">Rp 5.000.000</h2>
                                    <div class="d-flex justify-content-center mt-2">
                                        <button class="btn btn-blue-dark btn-order"
                                            data-type="paket-technology-conversion-opt">Order Now!</button>
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
                                <div class="col-lg-4 col-md-6 pricing-border-right second-b">
                                    <h4 class="title-price fw-semibold text-center mb-3">Virtual Event</h4>
                                    <h2 class="price-val fw-bold text-center mb-0">Rp 7.500.000</h2>
                                    <div class="d-flex justify-content-center mt-2">
                                        <button class="btn btn-blue-dark btn-order" data-type="paket-virtual-event">Order
                                            Now!</button>
                                    </div>
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
                                <div class="col-lg-4 col-md-6 pricing-border-none">
                                    <h4 class="title-price fw-semibold text-center mb-3">Marketplace (Online Sales
                                        Strategy)</h4>
                                    <h2 class="price-val fw-bold text-center mb-0">Rp 10.000.000</h2>
                                    <div class="d-flex justify-content-center mt-2">
                                        <button class="btn btn-blue-dark btn-order" data-type="paket-marketplace">Order
                                            Now!</button>
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
                            </div>

                        </div>
                    </div>
                    <div class="row justify-content-center">
                        <div class="col-md-6 mb-5">
                            <div class="card card-mobile-price bg-white d-lg-none d-block">
                                <div class="card-body">
                                    <h4 class="title-price fw-semibold text-center mb-3">Technology and Conversion
                                        Optimization</h4>
                                    <h2 class="price-val fw-bold text-center mb-0">Rp 5.000.000</h2>
                                    <div class="d-flex justify-content-center mt-2">
                                        <button class="btn btn-blue-dark btn-order"
                                            data-type="paket-technology-conversion-opt">Order Now!</button>
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
                            </div>
                        </div>
                        <div class="col-md-6 mb-5">
                            <div class="card card-mobile-price bg-white d-lg-none d-block">
                                <div class="card-body">
                                    <h4 class="title-price fw-semibold text-center mb-3">Virtual Event</h4>
                                    <h2 class="price-val fw-bold text-center mb-0">Rp 7.500.000</h2>
                                    <div class="d-flex justify-content-center mt-2">
                                        <button class="btn btn-blue-dark btn-order" data-type="paket-virtual-event">Order
                                            Now!</button>
                                    </div>
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
                            </div>

                        </div>
                        <div class="col-md-6 mb-5">
                            <div class="card card-mobile-price bg-white d-lg-none d-block">
                                <div class="card-body">
                                    <h4 class="title-price fw-semibold text-center mb-3">Marketplace (Online Sales
                                        Strategy)</h4>
                                    <h2 class="price-val fw-bold text-center mb-0">Rp 10.000.000</h2>
                                    <div class="d-flex justify-content-center mt-2">
                                        <button class="btn btn-blue-dark btn-order" data-type="paket-marketplace">Order
                                            Now!</button>
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

        

    

        <div class="section section-form  pt-0 mb-0 bg-color mt-0"
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
