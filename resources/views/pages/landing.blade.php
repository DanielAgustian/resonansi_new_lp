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

                        {{-- <div class="col-lg-1 col-0"></div> --}}

                        <div class="col-lg-6 col-md-6 mt-md-0 mt-3">
                            {{-- <div class="slide-imgs">
                            <img src="demos/landing/images/hero/1-2.png" alt="Image" class="card-img">
                            <img src="demos/landing/images/hero/1-1.png" alt="Image" class="iphone-img">
                        </div> --}}
                            <div class="swiper mySwiper ">
                                <div class="swiper-wrapper">
                                    <div class="swiper-slide">
                                        {{-- <img src="{{ asset('images/emas.png') }}" alt="" class="img-slide"> --}}
                                        <div class="d-flex align-items-center h-100">
                                            <img src="{{asset('images/soc-med-banner.png')}}"
                                                alt="" class="img-banner">

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
                    {{-- <p class="lead fw-normal font-primary mb-5">Membantu Website Anda untuk Menjadi Nomor 1 di Google.
                        Meningkatkan jumlah pengunjung anda secara pasti. Meningkatkan efisiensi iklan anda.</p> --}}
                </div>
                <div class="features-items mx-auto" style="max-width: 1000px;">

                    <div class="row mt-7">

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
                            @slot('route1')
                                service-landing
                            @endslot
                            @slot('route2')
                                service-social-media
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
                            @slot('route1')
                                service-sem
                            @endslot
                            @slot('route2')
                                service-seo
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
                                {{ asset('images/opt.png') }}
                            @endslot
                            @slot('route1')
                                service-content
                            @endslot
                            @slot('route2')
                                service-opt
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

                            <p class="text-white-50 mt-lg-6 mt-3  text-center">Selama periode 2 bulan, anda akan mendapatkan
                                beberapa
                                keuntungan
                                yang tertera pada <a href="#" class="text-white"><u>Terms and Conditions</u></a>.
                            </p>
                        </div>
                        <div class="col-lg-12 col-12">
                            <div class="row justify-content-around">
                                @component('components.custom.layanan-card-alt')
                                    @slot('id')
                                        1
                                    @endslot
                                    @slot('title')
                                        Paket A
                                    @endslot
                                    @slot('details')

                                        <p class="list-data"><i class="fas fa-check-circle"></i> Google Search
                                        </p>
                                        <p class="list-data"><i class="fas fa-check-circle"></i> Up to 15 Keywords
                                        </p>
                                        <p class="list-data"><i class="fas fa-check-circle"></i> Up to 5 Professional Ads
                                        </p>
                                        <p class="list-data"><i class="fas fa-check-circle"></i> Campaign Tracking
                                        </p>
                                        <p class="list-data"><i class="fas fa-check-circle"></i> Online Support / Phone
                                        </p>
                                        <p class="list-data"><i class="fas fa-check-circle"></i> Monitoring and Maintenance
                                        </p>
                                        <p class="list-data"><i class="fas fa-check-circle"></i> Account Management and
                                            Optimization 1x a Month
                                        </p>
                                        <p class="list-data"><i class="fas fa-check-circle"></i> Report Once A Month
                                        </p>

                                    @endslot
                                    @slot('harga')
                                        Rp 100.000,00
                                    @endslot
                                @endcomponent
                                @component('components.custom.layanan-card-alt')
                                    @slot('id')
                                        2
                                    @endslot
                                    @slot('title')
                                        Paket B
                                    @endslot
                                    @slot('details')
                                        <p class="list-data"><i class="fas fa-check-circle"></i> Google Search
                                        </p>
                                        <p class="list-data"><i class="fas fa-check-circle"></i> Up to 45 Keywords
                                        </p>
                                        <p class="list-data"><i class="fas fa-check-circle"></i> Up to 25 Professional Ads
                                        </p>
                                        <p class="list-data"><i class="fas fa-check-circle"></i> Campaign Tracking
                                        </p>
                                        <p class="list-data"><i class="fas fa-check-circle"></i> Online Support / Phone
                                        </p>
                                        <p class="list-data"><i class="fas fa-check-circle"></i> Monitoring and Maintenance
                                        </p>
                                        <p class="list-data"><i class="fas fa-check-circle"></i> Account Management and
                                            Optimization Weekly
                                        </p>
                                        <p class="list-data"><i class="fas fa-check-circle"></i> Report Weekly
                                        </p>
                                    @endslot
                                    @slot('harga')
                                        Rp 100.000,00
                                    @endslot
                                @endcomponent
                                @component('components.custom.layanan-card-alt')
                                    @slot('id')
                                        3
                                    @endslot
                                    @slot('title')
                                        Paket C
                                    @endslot
                                    @slot('details')

                                        <p class="list-data"><i class="fas fa-check-circle"></i> Google Search
                                        </p>
                                        <p class="list-data"><i class="fas fa-check-circle"></i> Up to 30 Keywords
                                        </p>
                                        <p class="list-data"><i class="fas fa-check-circle"></i> Up to 15 Professional Ads
                                        </p>
                                        <p class="list-data"><i class="fas fa-check-circle"></i> Campaign Tracking
                                        </p>
                                        <p class="list-data"><i class="fas fa-check-circle"></i> Online Support / Phone
                                        </p>
                                        <p class="list-data"><i class="fas fa-check-circle"></i> Monitoring and Maintenance
                                        </p>
                                        <p class="list-data"><i class="fas fa-check-circle"></i> Account Management and
                                            Optimization Weekly
                                        </p>
                                        <p class="list-data"><i class="fas fa-check-circle"></i> Report Bi-Weekly
                                        </p>
                                    @endslot
                                    @slot('harga')
                                        Rp 100.000,00
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
                                <div class="col-lg-3 col-md-4 col-6">
                                    <img src=" https://sribu-sg.s3.amazonaws.com/assets/media/contest_detail/2015/11/logo-ukm-indonesia-5645b0ccca6bcb3c1400000c/8fefabc2e6.png"
                                        alt="" class="img-client shadow rounded">
                                    <h6 class="blue-text">Cv. Blabla</h6>
                                </div>
                                <div class="col-lg-3 col-md-4 col-6">
                                    <img src=" https://sribu-sg.s3.amazonaws.com/assets/media/contest_detail/2015/11/logo-ukm-indonesia-5645b0ccca6bcb3c1400000c/8fefabc2e6.png"
                                        alt="" class="img-client shadow rounded">
                                    <h6 class="blue-text">Cv. Blabla</h6>
                                </div>
                                <div class="col-lg-3 col-md-4 col-6">
                                    <img src=" https://sribu-sg.s3.amazonaws.com/assets/media/contest_detail/2015/11/logo-ukm-indonesia-5645b0ccca6bcb3c1400000c/8fefabc2e6.png"
                                        alt="" class="img-client shadow rounded">
                                    <h6 class="blue-text">Cv. Blabla</h6>
                                </div>
                                <div class="col-lg-3 col-md-4 col-6">
                                    <img src=" https://sribu-sg.s3.amazonaws.com/assets/media/contest_detail/2015/11/logo-ukm-indonesia-5645b0ccca6bcb3c1400000c/8fefabc2e6.png"
                                        alt="" class="img-client shadow rounded">
                                    <h6 class="blue-text">Cv. Blabla</h6>
                                </div>
                                <div class="col-lg-3 col-md-4 col-6">
                                    <img src=" https://sribu-sg.s3.amazonaws.com/assets/media/contest_detail/2015/11/logo-ukm-indonesia-5645b0ccca6bcb3c1400000c/8fefabc2e6.png"
                                        alt="" class="img-client shadow rounded">
                                    <h6 class="blue-text">Cv. Blabla</h6>
                                </div>
                                <div class="col-lg-3 col-md-4 col-6">
                                    <img src=" https://sribu-sg.s3.amazonaws.com/assets/media/contest_detail/2015/11/logo-ukm-indonesia-5645b0ccca6bcb3c1400000c/8fefabc2e6.png"
                                        alt="" class="img-client shadow rounded">
                                    <h6 class="blue-text">Cv. Blabla</h6>
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
                    {{-- <div class="white-title mx-auto center mt-4 bottommargin heading-block" style="max-width: 640px;">
                        <h3 class="nott title-part-white text-center">Apa Kata Mereka Tentang Resonansi?</h3>
                        <p class="lead fw-normal font-primary mb-5"></p>
                    </div> --}}
                    <div class="mt-4"></div>
                    <div class="swiper swiperTestimoni">
                        <div class="swiper-wrapper">


                            @component('components.custom.testi-card')
                                @slot('img')
                                    https://akcdn.detik.net.id/community/media/visual/2019/02/19/42393387-9c5c-4be4-97b8-49260708719e.jpeg?w=750&q=90
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
                                @slot('details')
                                    Terimakasih untuk para team Resonansi
                                    yang telah membantu dalam
                                    mengembangkan binis di perusahaan kami
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
                            <img src="{{ asset('images/calendar.png') }}" alt="" class="img-form rounded">
                        </div>
                        <div class="col-md-6 my-auto">
                            <div class="card bg-white shadow-lg border-0">
                                <div class="card-body p-4">
                                    <div class="form-widget" data-loader="button" data-alert-type="inline">

                                        <div class="form-result"></div>

                                        <form class="row mb-0" id="landing-enquiry" action="include/form.php"
                                            method="post" enctype="multipart/form-data">
                                            <div class="form-process"></div>
                                            <div class="col-12 form-group mb-2">
                                                <label>Name:</label>
                                                <input type="text" name="name" id="landing-enquiry-name"
                                                    class="form-control form-control-lg required" value=""
                                                    placeholder="John Doe">
                                            </div>
                                            <div class="col-12 form-group mb-2">
                                                <label>Email:</label>
                                                <input type="email" name="email" id="landing-enquiry-email"
                                                    class="form-control form-control-lg required" value=""
                                                    placeholder="user@company.com">
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
                                                        class="form-control form-control-lg required" value=""
                                                        placeholder="">
                                                </div>
                                            </div>
                                            {{-- <div class="col-12 form-group mb-4">
                                                <label>Message:</label>
                                                <textarea name="landing-enquiry-additional-requirements" id="landing-enquiry-additional-requirements" class="form-control form-control-lg" cols="30" rows="5" placeholder="Please let us know how we can help you..."></textarea>
                                            </div> --}}
                                            <div class="col-12 form-group mb-2">
                                                <label>Nama Perusahaan</label>
                                                <input type="text" name="company" id="landing-enquiry-company"
                                                    class="form-control form-control-lg required" value=""
                                                    placeholder="date">
                                            </div>
                                            <div class="col-12 form-group mb-2">
                                                <label>Paket</label>
                                                <select class="form-select form-control form-control-lg required"
                                                    name="landing-enquiry-paket" id="landing-enquiry-paket">
                                                    <option value="paket-1" selected>Paket 1</option>
                                                    <option value="paket-2">Paket 2</option>
                                                    <option value="paket-3">Paket 3</option>

                                                </select>

                                            </div>
                                            <div class="col-12 form-group mb-2">
                                                <label>Tanggal</label>
                                                <input type="date" name="date" id="landing-enquiry-date"
                                                    class="form-control form-control-lg required" value=""
                                                    placeholder="date">
                                            </div>
                                            <div class="col-12 form-group mb-2">
                                                <label>Waktu</label>
                                                <input type="time" name="time" id="landing-enquiry-time"
                                                    class="form-control form-control-lg required" value=""
                                                    placeholder="date">
                                            </div>
                                            <div class="col-12 d-none">
                                                <input type="text" id="landing-enquiry-botcheck"
                                                    name="landing-enquiry-botcheck" value="" />
                                            </div>
                                            <div class="col-12">
                                                <button type="submit" name="landing-enquiry-submit"
                                                    class="btn w-100 text-white bg-color rounded-3 py-3 fw-semibold text-uppercase mt-2">Book
                                                    Now!</button>
                                            </div>

                                            <input type="hidden" name="prefix" value="landing-enquiry-">
                                        </form>
                                    </div>
                                </div>
                            </div>
                            {{-- <div class="card">
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
                            </div> --}}

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
