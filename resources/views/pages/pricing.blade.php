@extends('master2')
@section('page')
    | Pricing
@endsection
@section('banner')
    <section id="slider" class="slider-element dark min-vh-25 min-vh-md-50 include-header py-5"
        style="background-image: url('{{ asset('images/bg-hero.svg') }}');">
        <div class="slider-inner">

            <div class="vertical-middle text-center">
                <div class="container">
                    <div class="row align-items-center justify-content-center">

                        <div class="col-lg-6 col-md-6">
                            <h2 class="display-3 fw-bold text-white mb-2">Pricing</h2>
                            <p class="lead mb-0 fw-normal">Pelayanan Maksimal dengan Harga Minimal</p>
                        </div>

                    </div>
                </div>
            </div>

        </div>
        
    </section>
@endsection


@section('content')
    <section id="content">
        <div class="content-wrap">
            <div class="section pt-0 bg-transparent">
                <div class="container">
                    <div class="inner-pad"></div>
                    {{-- <div class="white-title mx-auto center mt-4 bottommargin heading-block" style="max-width: 640px;">
                    <h3 class="nott title-part-white text-center"></h3>
                    <p class="lead fw-normal font-primary mb-5"></p>
                </div> --}}
                    <div class="row mt-4">
                        <div class="col-lg-3 col-md-12">
                            <div class="heading-block border-bottom-0 bottommargin-sm">
                                <i class="icon-credit h1"></i>
                                <h2 class="nott  " style="font-size: 36px;">Layanan Apa Saja Yang Disediakan
                                    Resonansi?</h2>
                            </div>
                            <div class="fw-normal lead" style="color: rgb(71, 71, 71)">Terdapat beberapa paket layanan
                                yang dapat anda pilih untuk membantu website anda.</div>

                            <p class="text-black-50 mt-lg-6 mt-3  ">Selama periode 3 bulan, anda akan mendapatkan beberapa
                                keuntungan!
                                <!-- yang tertera pada <a href="#" class="text-black"><u>Terms and Conditions</u></a>. -->
                              </p>
                        </div>
                        <div class="col-lg-9 col-12">
                            <div class="row justify-content-around">
                              @component('components.custom.layanan-card')
                                  @slot('id')
                                      technology-conversion-opt
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

                                      <!-- <p class="list-data"><i class="fas fa-check-circle"></i> Campaign Tracking
                                      </p>
                                      <p class="list-data"><i class="fas fa-check-circle"></i> Online Support / Phone
                                      </p>
                                      <p class="list-data"><i class="fas fa-check-circle"></i> Monitoring and Maintenance
                                      </p>
                                      <p class="list-data"><i class="fas fa-check-circle"></i> Account Management and
                                          Optimization Weekly
                                      </p>
                                      <p class="list-data"><i class="fas fa-check-circle"></i> Report Weekly
                                      </p> -->
                                  @endslot
                                  @slot('harga')
                                      Rp 5.000.000
                                  @endslot
                              @endcomponent
                              @component('components.custom.layanan-card')
                                  @slot('id')
                                      virtual-event
                                  @endslot
                                  @slot('title')
                                      Virtual Event/ Webinar
                                      <br>
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
                                      <!-- <p class="list-data"><i class="fas fa-check-circle"></i> Up to 30 Keywords
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
                                      </p> -->
                                  @endslot
                                  @slot('harga')
                                      Rp 7.500.000
                                  @endslot
                              @endcomponent
                                @component('components.custom.layanan-card')
                                    @slot('id')
                                        marketplace
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





                                        <p class="list-data text-end" style="margin-top: 35px; opacity: 0.7; font-size: 12px" >* with minimum 3 month campaign agreement</p>
                                        <!-- <p class="list-data"><i class="fas fa-check-circle"></i> Campaign Tracking
                                        </p>
                                        <p class="list-data"><i class="fas fa-check-circle"></i> Online Support / Phone
                                        </p>
                                        <p class="list-data"><i class="fas fa-check-circle"></i> Monitoring and Maintenance
                                        </p>
                                        <p class="list-data"><i class="fas fa-check-circle"></i> Account Management and
                                            Optimization 1x a Month
                                        </p>
                                        <p class="list-data"><i class="fas fa-check-circle"></i> Report Once A Month
                                        </p> -->

                                    @endslot
                                    @slot('harga')
                                        Rp. 10.000.000
                                    @endslot
                                @endcomponent


                            </div>
                        </div>
                    </div>

                    <div class="inner-pad"></div>
                </div>
            </div>

            {{-- <div class="section dark parallax mb-3" data-bottom-top="background-color:rgb(61,128,228);" data-center-bottom="background-color:rgb(0,0,0);">
            <div class="container">
                <div class="row justify-content-center my-5">
                    <div class="col-md-7">
                        <h2 class="text-center text-white mb-5 fw-semibold">Frequently Asked Questions</h2>
                        <div class="toggle-wrap">
                            <div class="toggle">
                                <div class="toggle-header">
                                    <div class="toggle-icon">
                                        <i class="toggle-closed icon-angle-right1"></i>
                                        <i class="toggle-open icon-angle-down1"></i>
                                    </div>
                                    <div class="toggle-title">
                                        How do I become an author?
                                    </div>
                                </div>
                                <div class="toggle-content">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Assumenda, dolorum, vero ipsum molestiae minima odio quo voluptate illum excepturi quam cum voluptates doloribus quae nisi tempore necessitatibus dolores ducimus enim libero eaque explicabo suscipit animi at quaerat aliquid ex expedita perspiciatis? Saepe, aperiam, nam unde quas beatae vero vitae nulla.</div>
                            </div>

                            <div class="toggle">
                                <div class="toggle-header">
                                    <div class="toggle-icon">
                                        <i class="toggle-closed icon-angle-right1"></i>
                                        <i class="toggle-open icon-angle-down1"></i>
                                    </div>
                                    <div class="toggle-title">
                                        Helpful Resources for Authors
                                    </div>
                                </div>
                                <div class="toggle-content">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Assumenda, dolorum, vero ipsum molestiae minima odio quo voluptate illum excepturi quam cum voluptates doloribus quae nisi tempore necessitatibus dolores ducimus enim libero eaque explicabo suscipit animi at quaerat aliquid ex expedita perspiciatis? Saepe, aperiam, nam unde quas beatae vero vitae nulla.</div>
                            </div>

                            <div class="toggle">
                                <div class="toggle-header">
                                    <div class="toggle-icon">
                                        <i class="toggle-closed icon-angle-right1"></i>
                                        <i class="toggle-open icon-angle-down1"></i>
                                    </div>
                                    <div class="toggle-title">
                                        How much money can I make?
                                    </div>
                                </div>
                                <div class="toggle-content">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Assumenda, dolorum, vero ipsum molestiae minima odio quo voluptate illum excepturi quam cum voluptates doloribus quae nisi tempore necessitatibus dolores ducimus enim libero eaque explicabo suscipit animi at quaerat aliquid ex expedita perspiciatis? Saepe, aperiam, nam unde quas beatae vero vitae nulla.</div>
                            </div>

                            <div class="toggle">
                                <div class="toggle-header">
                                    <div class="toggle-icon">
                                        <i class="toggle-closed icon-angle-right1"></i>
                                        <i class="toggle-open icon-angle-down1"></i>
                                    </div>
                                    <div class="toggle-title">
                                        Can I offer my items for free on a promotional basis?
                                    </div>
                                </div>
                                <div class="toggle-content">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Assumenda, dolorum, vero ipsum molestiae minima odio quo voluptate illum excepturi quam cum voluptates doloribus quae nisi tempore necessitatibus dolores ducimus enim libero eaque explicabo suscipit animi at quaerat aliquid ex expedita perspiciatis? Saepe, aperiam, nam unde quas beatae vero vitae nulla.</div>
                            </div>

                            <div class="toggle">
                                <div class="toggle-header">
                                    <div class="toggle-icon">
                                        <i class="toggle-closed icon-angle-right1"></i>
                                        <i class="toggle-open icon-angle-down1"></i>
                                    </div>
                                    <div class="toggle-title">
                                        An Introduction to the Marketplaces for Authors
                                    </div>
                                </div>
                                <div class="toggle-content">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Assumenda, dolorum, vero ipsum molestiae minima odio quo voluptate illum excepturi quam cum voluptates doloribus quae nisi tempore necessitatibus dolores ducimus enim libero eaque explicabo suscipit animi at quaerat aliquid ex expedita perspiciatis? Saepe, aperiam, nam unde quas beatae vero vitae nulla.</div>
                            </div>
                        </div>
                        <h5 class="mt-4 text-center fw-normal text-white-50 mb-0">Didn't find what you were after? <a href="#" class="text-white"><u>Visit the FAQ Page</u></a></h5>
                    </div>
                </div>
            </div>
        </div> --}}
            <section class="section-form"
                style="background-image: linear-gradient(to bottom, #3D80E4 0%, #0a4bab 80%, #FFF 80%);">
                <div class="inner-pad"></div>




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
        </div>

    </section>
@endsection

@section('js')
    <script>
        $('.btn-order').click(function() {
            $('html, body').animate({
                scrollTop: ($("#section-form").offset().top) - 20
            }, 1500);

            if ($(this).data('type') !== undefined) {

                let type = $(this).data('type');
                $('#landing-enquiry-paket option:selected').removeAttr('selected');
                $('#landing-enquiry-paket option[value="paket-' + type + '"]').attr('selected', 'selected');
            }
        });
    </script>
@endsection
