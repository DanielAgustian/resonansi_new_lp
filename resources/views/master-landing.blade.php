<!DOCTYPE html>
<html dir="ltr" lang="en-US">

<head>


    <title>Resonansi @yield('page')</title>
    <meta http-equiv="content-type" content="text/html; charset=utf-8" />
    @yield('meta_tag')
    <meta name="robots" content="index, follow" />
    <meta name="googlebot" content="index, follow" />
    <meta name="author" content="Resonansi" />
    <link rel="canonical" href="https://resonansi.co.id" />
    <link rel="shortcut icon" href="{{ asset('images/favicon/favicon.ico') }}">


    <!--begin::Fonts-->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    <!-- Stylesheets
 ============================================= -->
    <link href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700&display=swap" rel="stylesheet"
        type="text/css" />
    {{-- <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous"> --}}

    <link rel="stylesheet" href="{{ asset('asset/css/bootstrap.css') }}" type="text/css" />
    <link rel="stylesheet" href="{{ asset('asset/css/style.css') }}" type="text/css" />
    {{-- <link rel="stylesheet" href="{{ asset('asset/css/swiper.css') }}" type="text/css" /> --}}

    <link rel="stylesheet" href="{{ asset('asset/css/dark.css') }}" type="text/css" />
    {{-- <link rel="stylesheet" href="{{ asset('asset/css/font-icons.css') }}" type="text/css" /> --}}
    <link rel="stylesheet" href="{{ asset('asset/css/animate.css') }}" type="text/css" />
    <link rel="stylesheet" href="{{ asset('asset/css/magnific-popup.css') }}" type="text/css" />



    <!-- Movers Demo Specific Stylesheet -->
    <link rel="stylesheet" href="{{ asset('asset/css/colors.php?color=0F66DD') }}" type="text/css" />

    <link rel="stylesheet" href="{{ asset('asset/css/rehaul/fonts.css') }}" type="text/css" />
    <link rel="stylesheet" href="{{ asset('asset/css/rehaul/movers.css') }}" type="text/css" />
    <link rel="stylesheet" href="{{ asset('asset/css/rehaul/new-style.css') }}?v=1.0.8" type="text/css" />
    <link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/toastify-js/src/toastify.min.css">
    <!-- / -->
    @yield('css')

    {{-- <!-- DatePicker CSS -->
	<link rel="stylesheet" href="css/components/datepicker.css" type="text/css" /> --}}

    <meta name='viewport' content='initial-scale=1, viewport-fit=cover'>
    <script async src="https://www.googletagmanager.com/gtag/js?id=UA-220121536-1"></script>
    <script>
        window.dataLayer = window.dataLayer || [];

        function gtag() {
            dataLayer.push(arguments);
        }
        gtag('js', new Date());

        gtag('config', 'UA-220121536-1');
    </script>
    {{-- <script>
        ! function(f, b, e, v, n, t, s) {
            if (f.fbq) return;
            n = f.fbq = function() {
                n.callMethod ?
                    n.callMethod.apply(n, arguments) : n.queue.push(arguments)
            };
            if (!f._fbq) f._fbq = n;
            n.push = n;
            n.loaded = !0;
            n.version = '2.0';
            n.queue = [];
            t = b.createElement(e);
            t.async = !0;
            t.src = v;
            s = b.getElementsByTagName(e)[0];
            s.parentNode.insertBefore(t, s)
        }(window, document, 'script',
            'https://connect.facebook.net/en_US/fbevents.js');
        fbq('init', '472961517746793');
        fbq('track', 'PageView');
    </script> --}}
    <script>
        ! function(f, b, e, v, n, t, s) {
            if (f.fbq) return;
            n = f.fbq = function() {
                n.callMethod ?
                    n.callMethod.apply(n, arguments) : n.queue.push(arguments)
            };
            if (!f._fbq) f._fbq = n;
            n.push = n;
            n.loaded = !0;
            n.version = '2.0';
            n.queue = [];
            t = b.createElement(e);
            t.async = !0;
            t.src = v;
            s = b.getElementsByTagName(e)[0];
            s.parentNode.insertBefore(t, s)
        }(window, document, 'script',
            'https://connect.facebook.net/en_US/fbevents.js');
        fbq('init', '399592895383861');
        fbq('track', 'PageView');
    </script>
    <!-- Document Title
 ============================================= -->
    {{-- <title>Movers Demo | Canvas</title> --}}

</head>

<body class="stretched">
    <noscript><img height="1" width="1" style="display:none"
            src="https://www.facebook.com/tr?id=399592895383861&ev=PageView&noscript=1" /></noscript>
    <button class="btn-wa" data-toggle="tooltip" title="Kami siap membantu Anda">
        <i class="fab fa-whatsapp"></i>
    </button>
    <!-- Document Wrapper
 ============================================= -->
    <div id="wrapper" class="clearfix">

        @include('components.new.header')
        <!-- Slider
  ============================================= -->
        @yield('banner')

        <!-- Content
  ============================================= -->
        <!-- #content end -->
        @yield('content')
        <!-- #footer end -->
        @include('components.new.footer')
    </div><!-- #wrapper end -->

    <!-- Go To Top
 ============================================= -->
    {{-- <div id="gotoTop" class="icon-angle-up"></div> --}}

    <!-- JavaScripts
 ============================================= -->
    <script src="{{ asset('asset/js/jquery.js') }}"></script>
    <script src="{{ asset('asset/js/plugins.min.js') }}"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous">
    </script>
    <!-- Footer Scripts
 ============================================= -->
    <script src="{{ asset('asset/js/functions.js') }}?v=1.0.0"></script>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11.3.10/dist/sweetalert2.all.min.js"></script>


    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11.3.10/dist/sweetalert2.all.min.js"></script>
    <!-- <script type="text/javascript">
        $(function() {
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
    <script type="text/javascript">
        $('.btn-ask').on('click', function() {
            var y = Math.random();
            if (y < 0.5) {
                y = 0
            } else {
                y = 1
            }
            let wa = [6287784397649, 6287784397649]
            window.open(
                `https://wa.me/${wa[y]}?text=Halo%2C%20saya%20mau%20bertanya%20tentang%20Harga%20Paket%20Jasa%20Layanan%20di%20Resonansi`
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
            $(function() {
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
        $('.form-services').on('submit', function(e) {

            let errorEmail = false;
            let errorName = false;
            let errorPhone = false;
            let errorCompany = false;
            let errorDate = false;
            let errorTime = false;

            let email = $('input[name="email"]').val() ?? "";
            let name = $('input[name="name"]').val();
            let phone = $('input[name="phone"]').val();
            let company = $('input[name="company"]').val();
            let date = $('input[name="date"]').val();
            let time = $('input[name="time"]').val();
            var mailformat = /^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,3})+$/;

            if (!email.match(mailformat)) {
                console.log("wrong email");
                errorEmail = true;
                $('#err-email').text('Email Tidak Valid');

            } else {
                $('#err-email').text('');
            }

            if (name.length < 2) {
                console.log("name empty");
                errorName = true;
                $('#err-name').text('Nama tidak valid');
            } else {
                $('#err-name').text('');
            }
            if (phone.length < 9) {
                console.log("phone error");
                errorPhone = true;
                $('#err-phone').text('Nomor Kamu Tidak Valid');
            } else {
                $('#err-phone').text('');
            }

            if (company.length < 3) {
                console.log("company error");
                errorCompany = true;
                $('#err-company').text('Nama Perusahaan Tidak Valid');
            } else {
                $('#err-company').text('');
            }

            if (date.length < 5) {
                console.log("date empty");
                errorDate = true;
                $('#err-date').text('Tanggal Bertemu Tidak valid');
            } else {
                $('#err-date').text('');
            }

            if (time.length < 4) {
                console.log("Time empty");
                errorTime = true;
                $('#err-time').text('Waktu Bertemu Tidak Valid');
            } else {
                $('#err-time').text('');
            }


            if (errorName || errorEmail || errorPhone || errorCompany || errorDate || errorTime) {
                console.log("ONE OF THEM IS EMPTY/WRONG");
                e.preventDefault();
            }
        })
    </script>
    <script type="text/javascript">
        function recaptchaCallback() {
            $('#btn-sub').removeAttr('disabled');
        }
    </script>
    <script>
        $(document).ready(function() {
            $('[data-toggle="tooltip"]').tooltip();
        });
    </script>
    <script type="text/javascript" src="https://cdn.jsdelivr.net/npm/toastify-js"></script>

    @yield('js')
</body>

</html>
