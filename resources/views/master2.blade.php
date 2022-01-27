<!DOCTYPE html>
<html dir="ltr" lang="en-US">
<head>
	<title>Resonansi Landing Page</title>
	<meta http-equiv="content-type" content="text/html; charset=utf-8" />
	<meta name="author" content="Yokesen Teknologi Indonesia" />
	<link rel="shortcut icon" href="{{asset('images/favicon/favicon.ico')}}">

	<!--begin::Fonts-->
	<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700" />
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
	<!-- Stylesheets
	============================================= -->
	<link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700|Roboto:300,400,500,900&display=swap" rel="stylesheet" type="text/css" />
	<link rel="stylesheet" href="{{ asset('asset/css/bootstrap.css') }}" type="text/css" />
    <link rel="stylesheet" href="{{ asset('asset/css/style.css') }}" type="text/css" />
    <link rel="stylesheet" href="{{ asset('asset/css/swiper.css') }}" type="text/css" />

	<link rel="stylesheet" href="{{asset('asset/css/dark.css')}}" type="text/css" />
	{{-- <link rel="stylesheet" href="{{asset('asset/css/font-icons.css')}}" type="text/css" /> --}}
	<link rel="stylesheet" href="{{asset('asset/css/animate.css')}}" type="text/css" />
	<link rel="stylesheet" href="{{asset('asset/css/magnific-popup.css')}}" type="text/css" />

	<!-- Landing Demo Specific Stylesheet -->
	<link rel="stylesheet" href="{{asset('asset/css/custom/landing.css')}}" type="text/css" />
	<link rel="stylesheet" href="{{asset('asset/css/custom/fonts.css')}}" type="text/css" />

	<link rel="stylesheet" href="{{asset('asset/css/custom/custom-style.css')	}}?v=1.0.2" type="text/css">
	<meta name="viewport" content="width=device-width, initial-scale=1" />
	
	<link rel="stylesheet" href="{{asset('asset/css/colors.php?color=3D80E4')}}" type="text/css" />
	<link rel="stylesheet" href="https://unpkg.com/swiper/swiper-bundle.min.css" />

	<!-- Document Title
	============================================= -->
	


</head>

<body class="stretched">

	<!-- Document Wrapper
	============================================= -->
	<div id="wrapper" class="clearfix">

		<!-- Header
		============================================= -->
		<header id="header" class="transparent-header full-header dark no-sticky" data-responsive-class="not-dark">
			<div id="header-wrap">
				<div class="container">
					<div class="header-row">

						<!-- Logo
						============================================= -->
						<div id="logo" class="border-end-0">
							<a href="demo-landing.html" class="standard-logo" data-dark-logo="{{asset('images/logo-resonansi-putih.png')}}"><img src="{{asset('images/logo-resonansi-putih.png')}}" alt="Canvas Logo"></a>
							<a href="demo-landing.html" class="retina-logo" data-dark-logo="{{asset('images/logo-resonansi.png')}}"><img src="{{asset('images/logo-resonansi.png')}}" alt="Canvas Logo"></a>
						</div><!-- #logo end -->

						<div id="primary-menu-trigger " class="{{set_none_navbar('landing')}}">
							<svg class="svg-trigger" viewBox="0 0 100 100"><path d="m 30,33 h 40 c 3.722839,0 7.5,3.126468 7.5,8.578427 0,5.451959 -2.727029,8.421573 -7.5,8.421573 h -20"></path><path d="m 30,50 h 40"></path><path d="m 70,67 h -40 c 0,0 -7.5,-0.802118 -7.5,-8.365747 0,-7.563629 7.5,-8.634253 7.5,-8.634253 h 20"></path></svg>
						</div>

						<!-- Primary Navigation
						============================================= -->
						<nav class="primary-menu not-dark with-arrows">

							<ul class="me-0 border-0 menu-container {{set_none_navbar('landing')}}">
								
								<li class="menu-item"><a class="menu-link" href="demo-landing-about.html"><div>About Us</div></a></li>
								<li class="menu-item"><a class="menu-link" href="demo-landing-about.html"><div>Services</div></a></li>
								<li class="menu-item"><a class="menu-link" href="demo-landing-about.html"><div>Blogs</div></a></li>
								<li class="menu-item"><a class="menu-link" href="demo-landing-pricing.html"><div>Pricing</div></a></li>
								<li class="menu-item"><a class="menu-link" href="demo-landing-contact.html"><div>Contact</div></a></li>
							</ul>

						</nav><!-- #primary-menu end -->

					</div>
				</div>
			</div>
			<div class="header-wrap-clone"></div>
		</header><!-- #header end -->
		<div class="btn-wa">
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

		
			<div class="container {{set_none_navbar('landing')}}">
				<div class="footer-widgets-wrap pt-3 pb-1">

					<div class="row mx-auto">

						<div class="col-md-8">
							<div class="row">
								<div class="col-md-4 col-6">
									<div class="widget widget_links">

										<h4 class="ls0 ls0">Pages</h4>

										<ul>
											<li><a href="#">About Us</a></li>
											<li><a href="#">Our Services</a></li>
											<li><a href="#">Blog</a></li>
											<li><a href="#">Pricing</a></li>
											<li><a href="#">Contact Us</a></li>
										</ul>

									</div>
								</div>
								
							</div>
							
							
						</div>

						<div class="col-md-4 mt-4 mt-md-0">
							<div class="widget">

								<h4 class="ls0 ls0 text-center mb-2">Resonansi by Yokesen</h4>

								<article class="entry">
									<div class="entry-image mb-3">
										<a href="{{route('homepage2')}}"><img src="{{asset('images/logo-resonansi-putih.png')}}" alt="Resonansi"></a>
									</div>
									<div class="entry-title title-xs">
										<h5 class="mb-2 text-center fw-light"><a href="demos/news/news-single.html">Elevate Your Brand, Change Your Dream</a></h5>
									</div>
									
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
							Copyrights &copy; 2022 All Rights Reserved by <a href="https://yokesen.com" style="color: gold">Yokesen Teknologi Indonesia</a> .<br>
	
						</div>

						
					</div>

				</div>
			</div>

		</footer><!-- #footer end -->

	</div><!-- #wrapper end -->

	<!-- Go To Top
	============================================= -->
	{{-- <div id="gotoTop" class="icon-angle-up"></div> --}}

	<!-- JavaScripts
	============================================= -->
	<script src="{{asset('asset/js/jquery.js')}}"></script>
	<script src="{{asset('asset/js/plugins.min.js')}}"></script>

	<!-- Footer Scripts
	============================================= -->
	<script src="{{asset('asset/js/functions.js')}}"></script>

	<script>
		jQuery(window).on( 'pluginCarouselReady', function(){
			setTimeout( function(){
				$('.owl-stage').after('<div class="owl-stage-outer-bg"></div>');
			}, 1000 );
		});
	</script>
	@yield('js')
</body>
</html>