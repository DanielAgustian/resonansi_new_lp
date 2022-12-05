<!DOCTYPE html>
<html dir="ltr" lang="en-US">

<head>
    <title>Resonansi @yield('page')</title>
    <meta http-equiv="content-type" content="text/html; charset=utf-8" />
    <meta name="author" content="Yokesen Teknologi Indonesia" />
    <link rel="shortcut icon" href="{{ asset('images/favicon/favicon.ico') }}">


    <!--begin::Fonts-->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    <!-- Stylesheets
 ============================================= -->
    <link
        href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700|Roboto:300,400,500,900&display=swap"
        rel="stylesheet" type="text/css" />
    <link rel="stylesheet" href="{{ asset('asset/css/bootstrap.css') }}" type="text/css" />
    <link rel="stylesheet" href="{{ asset('asset/css/style.css') }}" type="text/css" />
    <link rel="stylesheet" href="{{ asset('asset/css/swiper.css') }}" type="text/css" />

    <link rel="stylesheet" href="{{ asset('asset/css/dark.css') }}" type="text/css" />
    {{-- <link rel="stylesheet" href="{{asset('asset/css/font-icons.css')}}" type="text/css" /> --}}
    <link rel="stylesheet" href="{{ asset('asset/css/animate.css') }}" type="text/css" />
    <link rel="stylesheet" href="{{ asset('asset/css/magnific-popup.css') }}" type="text/css" />

    <!-- Landing Demo Specific Stylesheet -->
    <link rel="stylesheet" href="{{ asset('asset/css/custom/landing.css') }}" type="text/css" />
    <link rel="stylesheet" href="{{ asset('asset/css/custom/fonts.css') }}" type="text/css" />

    <link rel="stylesheet" href="{{ asset('asset/css/custom/custom-style.css') }}?v=1.0.5.8" type="text/css">
    <meta name="viewport" content="width=device-width, initial-scale=1" />

    <link rel="stylesheet" href="{{ asset('asset/css/colors.php?color=3D80E4') }}" type="text/css" />
    <link rel="stylesheet" href="https://unpkg.com/swiper/swiper-bundle.min.css" />
    @yield('css')
    <!-- Document Title
 ============================================= -->
     <script async src="https://www.googletagmanager.com/gtag/js?id=UA-220121536-1"></script>
      <script>
          window.dataLayer = window.dataLayer || [];
          function gtag(){dataLayer.push(arguments);}
          gtag('js', new Date());

          gtag('config', 'UA-220121536-1');
      </script>
     <script>
        !function(f,b,e,v,n,t,s)
        {if(f.fbq)return;n=f.fbq=function(){n.callMethod?
        n.callMethod.apply(n,arguments):n.queue.push(arguments)};
        if(!f._fbq)f._fbq=n;n.push=n;n.loaded=!0;n.version='2.0';
        n.queue=[];t=b.createElement(e);t.async=!0;
        t.src=v;s=b.getElementsByTagName(e)[0];
        s.parentNode.insertBefore(t,s)}(window, document,'script',
        'https://connect.facebook.net/en_US/fbevents.js');
        fbq('init', '472961517746793');
        fbq('track', 'PageView');


    </script>


</head>

<body class="stretched">
  <noscript><img height="1" width="1" style="display:none"
      src="https://www.facebook.com/tr?id=472961517746793&ev=PageView&noscript=1"/></noscript>
    <!-- Document Wrapper
 ============================================= -->
    <div id="wrapper" class="clearfix">

        <!-- Header
  ============================================= -->
        <header id="header" class="transparent-header full-header  sticky"
            >
            <div id="header-wrap">
                <div class="container">
                    <div class="header-row">

                        <!-- Logo
      ============================================= -->
                        <div id="logo" class="border-end-0">
                            <a href="{{ route('homepage2') }}" class="standard-logo"
                                data-dark-logo="{{ asset('images/logo-resonansi.png') }}"><img
                                    src="{{ asset('images/logo-resonansi-putih.png') }}" alt="Canvas Logo"></a>
                            <a href="{{ route('homepage2') }}" class="retina-logo"
                                data-dark-logo="{{ asset('images/logo-resonansi.png') }}"><img
                                    src="{{ asset('images/logo-resonansi-putih.png') }}" alt="Canvas Logo" class="d-lg-flex d-none">
                                    <img src="{{asset('images/logo-resonansi.png')}}" alt="Resonansi" class="d-lg-none d-flex">

                                  </a>

                        </div><!-- #logo end -->

                        <div id="primary-menu-trigger" class="{{ set_none_navbar('landing') }} primary-menu-trigger">
                            <svg class="svg-trigger" viewBox="0 0 100 100">
                                <path
                                    d="m 30,33 h 40 c 3.722839,0 7.5,3.126468 7.5,8.578427 0,5.451959 -2.727029,8.421573 -7.5,8.421573 h -20">
                                </path>
                                <path d="m 30,50 h 40"></path>
                                <path
                                    d="m 70,67 h -40 c 0,0 -7.5,-0.802118 -7.5,-8.365747 0,-7.563629 7.5,-8.634253 7.5,-8.634253 h 20">
                                </path>
                            </svg>
                        </div>

                        <!-- Primary Navigation
      ============================================= -->
                        <nav class="primary-menu not-dark with-arrows">

                            <ul class="me-0 border-0 menu-container {{ set_none_navbar('landing') }} {{set_none_navbar('marketplacePage')}} {{set_none_navbar('socmedPage')}} {{set_none_navbar('conversionPage')}} {{set_none_navbar('landingPPage')}} {{set_none_navbar('warehousePage')}}">

                                <li class="menu-item"><a class="menu-link" href="{{ route('aboutPage') }}">
                                        <div>About Us</div>
                                    </a></li>
                                <li class="menu-item"><a class="menu-link" href="{{ route('servicePage') }}">
                                        <div>Services</div>
                                    </a></li>

                                <li class="menu-item"><a class="menu-link" href="{{ route('pricingPage') }}">
                                        <div>Pricing</div>
                                    </a></li>
                                <li class="menu-item"><a class="menu-link" href="{{ route('blogsPage') }}">
                                        <div>Blog</div>
                                    </a></li>
                                <li class="menu-item"><a class="menu-link" href="{{ route('karirPage') }}">
                                        <div>Career</div>
                                    </a></li>
                                <li class="menu-item"><a class="menu-link" href="{{ route('contactPage') }}">
                                        <div>Contact</div>
                                    </a></li>
                                <li class="menu-item dropdown mb-lg-0 mb-1">
                                    <select name="language" class="form-control">
                                        <option value="id">ID <img
                                                src="https://upload.wikimedia.org/wikipedia/commons/9/9f/Flag_of_Indonesia.svg"
                                                alt="" style="width: 40px; height: 25px"></option>
                                        <option value="en">EN <img
                                                src="https://upload.wikimedia.org/wikipedia/en/a/ae/Flag_of_the_United_Kingdom.svg"
                                                alt="" style="width: 40px; height: 25px"></option>
                                    </select>
                                </li>
                            </ul>

                        </nav><!-- #primary-menu end -->

                    </div>
                </div>
            </div>
            {{-- <div class="header-wrap-clone" style="height: 100px"></div> --}}
        </header><!-- #header end -->
        <div class="btn-wa" data-toggle="tooltip" title="Kami siap membantu Anda">
            <i class="fab fa-whatsapp"></i>
        </div>
        <div class="btn-wa" data-toggle="tooltip" title="Kami siap membantu Anda">
            <i class="fab fa-whatsapp"></i>
        </div>
        <!-- Slider
  ============================================= -->
        @yield('banner')
        <!-- #slider end -->

        <!-- Content
  ============================================= -->
        @yield('content')
        <!-- #content end -->

        <!-- Footer
  ============================================= -->
        <footer id="footer" class="bg-color dark border-0">


            <div class="container {{ set_none_navbar('landing') }}">
                <div class="footer-widgets-wrap pt-3 pb-1">

                    <div class="row mx-auto">

                        <div class="col-md-8">
                            <div class="row">
                                <div class="col-md-4 ">
                                    <div class="widget widget_links">

                                        <h4 class="ls0 ls0">Pages</h4>

                                        <ul>
                                            <li><a href="{{ route('aboutPage') }}">About Us</a></li>
                                            <li><a href="{{ route('servicePage') }}">Our Services</a></li>
                                            <li><a href="{{ route('blogsPage') }}">Blog</a></li>

                                        </ul>

                                    </div>
                                </div>
                                <div class="col-md-4 ">
                                    <div class="widget widget_links">

                                        <h4 class="ls0 ls0 no-pages"> </h4>

                                        <ul>

                                            <li><a href="{{ route('pricingPage') }}">Pricing</a></li>
                                            <li><a href="{{ route('contactPage') }}">Contact Us</a></li>
                                            <li><a href="{{route('karirPage')}}" >Career</a> </li>
                                        </ul>

                                    </div>
                                </div>
                            </div>


                        </div>
                        {{-- <div class="col-md-4">
							<h4 class="ls0 ls0 text-center mb-2">Resonansi by Yokesen</h4>

						</div> --}}
                        <div class="col-md-4 mt-4 mt-md-0">
                            <div class="widget">

                                <h4 class="ls0 ls0 text-center mb-4 nott">Resonansi from Yokesen</h4>

                                <article class="entry">
                                    {{-- <div class="entry-image mb-3">
										<a href="{{route('homepage2')}}"><img src="{{asset('images/logo-resonansi-putih.png')}}" alt="Resonansi"></a>
									</div> --}}
                                    <p class="text-center">Ruko Crystal 8 no. 18 Lantai 3
                                        <br>Kel. Pakualam, Kec. Serpong Utara,
                                        <br>Banten 15320
                                    </p>
                                    {{-- <div class="entry-title title-xs">
										<h5 class="mb-2 text-center fw-light"><a href="demos/news/news-single.html">Elevate Your Brand, Change Your Dream</a></h5>
									</div> --}}

                                </article>
                            </div>
                        </div>

                    </div>

                </div>
            </div>
            <div id="copyrights" class="bg-color dark py-2">
                <div class="container">

                    <div class="row">
                        <div class="col-md-6 text-center text-md-start text-white">
                            Copyrights &copy; 2022 All Rights Reserved by <a href="https://yokesen.com"
                                style="color: gold">Yokesen Teknologi Indonesia</a> .<br>

                        </div>


                    </div>

                </div>
            </div>

        </footer><!-- #footer end -->
        <div class="data-blok">

        </div>
    </div><!-- #wrapper end -->

    <!-- Go To Top
 ============================================= -->
    {{-- <div id="gotoTop" class="icon-angle-up"></div> --}}

    <!-- JavaScripts
 ============================================= -->
    <script src="{{ asset('asset/js/jquery.js') }}"></script>
    <script src="{{ asset('asset/js/plugins.min.js') }}"></script>

    <!-- Footer Scripts
 ============================================= -->
    <script src="{{ asset('asset/js/functions.js') }}?v=1.0.0"></script>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11.3.10/dist/sweetalert2.all.min.js"></script>
    <!-- <script type="text/javascript">

      $(function(){
        console.log("Begin");

        $.ajax({
            type: "GET",
            url: "{{ route('getFutureEvent') }}",

            success: function(result) {
                console.log("Success");

            },
            error: function(xhr) {
                //Do Something to handle error
                console.log(xhr.responseText);


            }
        });
      });
    </script> -->
    <script>
        jQuery(window).on('pluginCarouselReady', function() {
            setTimeout(function() {
                $('.owl-stage').after('<div class="owl-stage-outer-bg"></div>');
            }, 1000);
        });
    </script>
    <script>
        $(document).ready(function() {
            $('[data-toggle="tooltip"]').tooltip();
        });
    </script>
    <script>
        $('.btn-wa').on('click', function() {
            var y = Math.random();
            if (y < 0.5) {
                y = 0
            } else {
                y = 1
            }
            let wa = [6287784397649, 6287784397649]
            window.open(
                `https://wa.me/${wa[y]}?text=Halo%2C%20aku%20mau%20bertanya%20tentang%20Layanan%20di%20Resonansi`
            )
        })
    </script>
    @if (Session::has('successMsg'))
        <script>
            console.log('success');
            Swal.fire(
                'Success!',
                'Account executive kami akan menghubungi Anda maksimal satu hari sebelum jadwal diskusi, terima kasih!',
                'success'
            );
        </script>
        <script type="text/javascript">

          $(function(){
            console.log("Begin");

            $.ajax({
                type: "GET",
                url: "{{ route('getFutureEvent') }}",

                success: function(result) {
                    console.log("Success");
                    // alert("Success");
                },
                error: function(xhr) {
                    //Do Something to handle error
                    console.log(xhr.responseText);


                }
            });
          });
        </script>
    @endif

    @if (Session::has('fullBooked'))
        <script>

            Swal.fire(
                'Gagal',
                'Jadwal sudah penuh pada hari tersebut! Silahkan pilih hari dan jam lain!',
                'error'
            );
        </script>
    @endif
    @if (Session::has('errorBeforeDate'))
        <script>

            Swal.fire(
                'Gagal',
                'Kamu tidak bisa memilih jadwal diskusi sebelum hari ini!',
                'error'
            );
        </script>
    @endif
    @if (Session::has('holidayError'))
        <script>

            Swal.fire(
                'Gagal',
                'Account Executive tidak menerima jadwal diskusi pada hari Sabtu dan Minggu.',
                'error'
            );
        </script>
    @endif
    @if (Session::has('fullBookedjam'))
        <script>

            Swal.fire(
                'Gagal',
                'Jadwal sudah terisi pada jam tersebut! Silahkan pilih jam lain!',
                'error'
            );
        </script>
    @endif
    @if (Session::has('errorCapcha'))
        <script>

            Swal.fire(
                'Gagal',
                'Capcha kamu kosong!',
                'error'
            );
        </script>
    @endif
    <script src="https://www.google.com/recaptcha/api.js" async defer></script>
    <script>
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
          }
        })

    </script>
    <script type="text/javascript">
        function recaptchaCallback(){
            $('#btn-sub').removeAttr('disabled');
        }
    </script>
    @yield('js')
</body>

</html>
