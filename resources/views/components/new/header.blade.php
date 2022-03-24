  <!-- Header
  ============================================= -->
  <header id="header" class="dark header-size-sm" data-sticky-shrink="false">
      {{-- <div class="container">
          <div class="header-row">

              <!-- Logo
     ============================================= -->
              <div id="logo" class="ms-auto ms-md-0">
                  <a href="index.html" class="standard-logo" data-dark-logo="images/logo-dark.png"><img
                          class="mx-auto" src="images/logo.png" alt="Canvas Logo"></a>
                  <a href="index.html" class="retina-logo" data-dark-logo="images/logo-dark@2x.png"><img
                          class="mx-auto" src="images/logo@2x.png" alt="Canvas Logo"></a>
              </div><!-- #logo end -->

              <ul class="header-extras d-none d-sm-flex mx-auto mx-md-0 mb-4 mb-md-0">
                  <li>
                      <i class="i-plain icon-call m-0"></i>
                      <div class="he-text fw-normal text-white-50">
                          Call Us:
                          <span><a href="tel:+111-22-33-44" class="text-white fw-medium">+111 22-33-44</a></span>
                      </div>
                  </li>
                  <li>
                      <i class="i-plain icon-line2-envelope m-0"></i>
                      <div class="he-text fw-normal text-white-50">
                          Email Us:
                          <span><a href="mailto:info@canvas.com" target="_top"
                                  class="text-white fw-medium">info@canvas.com</a></span>
                      </div>
                  </li>
              </ul>

          </div>
      </div> --}}

      <div id="header-wrap">
          <div class="container">
              <div class="header-row justify-content-between  flex-lg-row ">
                  <div id="logo" class="border-end-0">
                      <a href="{{ route('homepage2') }}" class="standard-logo"
                          data-dark-logo="{{ asset('images/logo-resonansi-putih-v2.png') }}"><img
                              src="{{ asset('images/logo-resonansi-putih-v2.png') }}" alt="Canvas Logo"></a>
                      <a href="{{ route('homepage2') }}" class="retina-logo "><img
                              src="{{ asset('images/logo-resonansi-putih-v2.png') }}" alt="Canvas Logo"
                              class="d-lg-flex d-none">
                          <img src="{{ asset('images/logo-resonansi-putih-v2.png') }}" alt="Resonansi"
                              class="d-lg-none d-flex">

                      </a>

                  </div>
                  <div class="header-misc">


                      <div id="top-search" class="header-misc-icon">
                          <a href="#" id="top-search-trigger"><i class="icon-line-search"></i><i
                                  class="icon-line-cross"></i></a>
                      </div><!-- #top-search end -->


                      {{-- <div class="header-buttons d-none d-sm-inline-block">
                        <a href="#slider" data-scrollto="#slider" data-offset="-80"
                            class="button button-rounded button-white button-light button-small m-0">Get a Quote</a>
                    </div> --}}

                  </div>

                  <div id="primary-menu-trigger" class="{{set_none_list()}}">
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
                  <nav class="primary-menu with-arrows not-dark {{set_none_list()}}">

                      <ul class="menu-container ">
                          <li class="menu-item "><a class="menu-link" href="">
                                  <div>About Us</div>
                              </a></li>
                          <li class="menu-item"><a class="menu-link" href="">
                                  <div>Services</div>
                              </a></li>

                          <li class="menu-item {{set_active_navbar('pricingPageV2')}}"><a class="menu-link" href="{{ route('pricingPageV2') }}">
                                  <div>Pricing</div>
                              </a></li>
                          <li class="menu-item"><a class="menu-link" href="">
                                  <div>Blog</div>
                              </a></li>
                          <li class="menu-item"><a class="menu-link" href="">
                                  <div>Career</div>
                              </a></li>
                        <li class="menu-item {{set_active_navbar('contactUsV2')}}"><a class="menu-link" href="{{ route('contactUsV2') }}">
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

                  {{-- <form class="top-search-form" action="search.html" method="get">
                      <input type="text" name="q" class="form-control" value="" placeholder="Type &amp; Hit Enter.."
                          autocomplete="off">
                  </form> --}}

              </div>
          </div>
      </div>
      <div class="header-wrap-clone"></div>
  </header><!-- #header end -->
