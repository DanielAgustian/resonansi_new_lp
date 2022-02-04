@extends('master2')
@section('page')
    | Contact Us
@endsection
@section('banner')
    <section id="slider" class="slider-element dark min-vh-25 min-vh-md-50 include-header py-5"
        style="background-image: url('{{ asset('images/bg-hero.svg') }}');">
        <div class="slider-inner">

            <div class="vertical-middle text-center">
                <div class="container">
                    <div class="row align-items-center justify-content-center">

                        <div class="col-lg-6 col-md-6">
                            <h2 class="display-3 fw-bold text-white mb-2">Contact Us</h2>
                            <p class="lead mb-0 fw-normal">Penasaran? Hubungi Kami!</p>
                        </div>

                    </div>
                </div>
            </div>

        </div>
    </section><!-- #slider end -->

@endsection

@section('content')
    <section id="content">
        <div class="content-wrap">

            <div class="section bg-transparent mt-0">
                <div class="container">
                    <div class="row justify-content-between col-mb-50">
                        <div class="col-lg-5">
                            <div class="text-nowrap dotted-bg dotted-bg-dark">
                                <h2 class="nott mb-3 display-3 fw-bold">Resonansi</h2>
                                <p class="fw-normal text-black-50">Seperti sebuah garpu tala ketika bergetar, <br> dapat
                                    memberikan getaran yang sama <br> kepada garpu tala yang memiliki frekuensi yang sama.</p>
                            </div>

                            <div class="clear"></div>

                            <div class="my-5">
                                <address>
                                    <strong>Office:</strong><br>
                                    Ruko Crystal Lane 8 no. 18 Lt. 3<br>
                                    Kel. Pakualam, Kec. Serpong Utara,<br>
                                    Banten 15320


                                </address>
                                <abbr title="Phone Number"><strong>Phone:</strong></abbr> (+62) 88290592631<br>
                                <abbr title="Email Address"><strong>Email:</strong></abbr> contact@resonansi.co.id
                            </div>

                            <div class="d-flex mt-4">
                                {{-- <a href="#" class="social-icon si-colored si-facebook" title="Facebook">
                                    <i class="icon-facebook"></i>
                                    <i class="icon-facebook"></i>
                                </a>

                                <a href="#" class="social-icon si-colored si-instagram" title="Instagram">
                                    <i class="icon-instagram"></i>
                                    <i class="icon-instagram"></i>
                                </a>

                                <a href="#" class="social-icon si-colored si-twitter" title="Twitter">
                                    <i class="icon-twitter"></i>
                                    <i class="icon-twitter"></i>
                                </a>

                                <a href="#" class="social-icon si-colored si-appstore" title="Apple">
                                    <i class="icon-apple"></i>
                                    <i class="icon-apple"></i>
                                </a>

                                <a href="#" class="social-icon si-colored si-android" title="Android">
                                    <i class="icon-android"></i>
                                    <i class="icon-android"></i>
                                </a> --}}

                            </div>
                        </div>
                        <div class="col-lg-7">
                            {{-- <img src="https://source.unsplash.com/wawEfYdpkag" alt="Office Image"> --}}
                            <iframe class="map-contact-us"
                                src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d3966.1919140211608!2d106.651433!3d-6.2384177!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e69fbf1aabef151%3A0xfc821b869de7efd2!2sResonansi%20by%20yokesen!5e0!3m2!1sen!2sid!4v1643784210197!5m2!1sen!2sid"
                                style="border:0;" allowfullscreen="" loading="lazy"></iframe>
                        </div>
                    </div>
                </div>
            </div>

            <section class="section-form"
                style="background-image: linear-gradient(to bottom, #3D80E4 0%, #0a4bab 80%, #FFF 80%);">
                <div class="inner-pad"></div>




                <div class="container" id="section-form">

                    <h2 class="nott title-part-white fw-bold mb-2 text-center">Berminat untuk Diskusi dengan <br>

                        Kami? </h2>
                    <p class="text-white font-primary mb-5  lead text-center">Yuk Tanya Ke Kami dengan Form Berikut!</p>
                    <div class="row justify-content-center">
                        {{-- <div class="col-md-6 img-mbl-form">
                            <img src="{{ asset('images/calendar.png') }}" alt="" class="img-form rounded">
                        </div> --}}
                        <div class="col-md-8 my-auto">
                            <div class="card bg-white shadow-lg border-0">
                                <div class="card-body p-md-5 p-4">
                                    <div >

                                        <div class="form-result"></div>

                                        <form class="row mb-0 form-contact" id="landing-enquiry" action="{{route('makeContactUs')}}"
                                            method="post" enctype="multipart/form-data">
                                            @csrf
                                            <div class="form-process"></div>
                                            <div class="col-12 form-group mb-4">
                                                <label>Name:</label>
                                                <input type="text" name="name" id="landing-enquiry-name"
                                                    class="form-control form-control-lg required" value=""
                                                    placeholder="John Doe" required>
                                                    <div style="color: red; font-size:11px" id="err-name">

                                                    </div>
                                            </div>
                                            <div class="col-12 form-group mb-4">
                                                <label>Email:</label>
                                                <input type="email" name="email" id="landing-enquiry-email"
                                                    class="form-control form-control-lg required" value=""
                                                    placeholder="user@company.com" required>
                                                    <div style="color: red; font-size:11px" id="err-email">

                                                    </div>
                                            </div>
                                            <div class="col-12 form-group mb-4">
                                                <label>Phone:</label><br>
                                                <div class="input-group input-group-lg">
                                                    <select class="form-select required" name="phone_front"
                                                        id="landing-enquiry-idd" style="max-width: 100px;">
                                                        <!-- {{-- <option value="+1">+1</option>
                                                        <option value="+44">+44</option>
                                                        <option value="+66">+66</option> --}} -->
                                                        <option value="+62" selected>+62</option>
                                                        <!-- {{-- <option value="+61">+61</option>
                                                        <option value="+852">+852</option>
                                                        <option value="+65">+61</option>
                                                        <option value="+33">+61</option>
                                                        <option value="+49">+49</option> --}} -->
                                                    </select>
                                                    <input type="number" name="phone" id="landing-enquiry-phone"
                                                        class="form-control form-control-lg required" value=""
                                                        placeholder="" required>

                                                </div>
                                                <div style="color: red; font-size:11px" id="err-phone">

                                                </div>
                                            </div>

                                            <div class="col-12 form-group mb-4">
                                                <label>Nama Perusahaan</label>
                                                <input type="text" name="company" id="landing-enquiry-company"
                                                    class="form-control form-control-lg required" value=""
                                                    placeholder="Company Name" required>
                                                    <div style="color: red; font-size:11px" id="err-company">

                                                    </div>
                                            </div>
                                            <div class="col-12 form-group mb-4">
                                                <label>Message:</label>
                                                <textarea name="message"
                                                    id="landing-enquiry-additional-requirements"
                                                    class="form-control form-control-lg" cols="30" rows="5"
                                                    placeholder="Please let us know how we can help you..." required></textarea>
                                                    <div style="color: red; font-size:11px" id="err-msg">

                                                    </div>
                                            </div>
                                            <!-- {{-- <div class="col-12 form-group mb-4">
                                                <label>Paket</label>
                                                <select class="form-select form-control form-control-lg required"
                                                    name="landing-enquiry-paket" id="landing-enquiry-paket">
                                                    <option value="paket-1" selected>Paket 1</option>
                                                    <option value="paket-2">Paket 2</option>
                                                    <option value="paket-3">Paket 3</option>
                                                    <option value="landing-website">Landing Website</option>
                                                    <option value="social-media-marketing">Social Media Marketing</option>
                                                    <option value="search-engine-marketing">SEM/Search Engine Marketing</option>
                                                    <option value="search-engine-optimization">SEO/Search Engine Optimization</option>

                                                    <option value="content-creator">Content Creator</option>
                                                    <option value="marketplace-ads-optimization">Marketplace Ads Optimization</option>

                                                </select>

                                            </div> --}} -->
                                            <!-- {{-- <div class="col-12 form-group mb-4">
                                                <label>Tanggal</label>
                                                <input type="date" name="date" id="landing-enquiry-date"
                                                    class="form-control form-control-lg required" value=""
                                                    placeholder="date">
                                            </div>
                                            <div class="col-12 form-group mb-4">
                                                <label>Waktu</label>
                                                <input type="time" name="time" id="landing-enquiry-time"
                                                    class="form-control form-control-lg required" value=""
                                                    placeholder="date">
                                            </div> --}} -->

                                            <div class="col-12 d-none">
                                                <input type="text" id="landing-enquiry-botcheck"
                                                    name="landing-enquiry-botcheck" value="" />
                                            </div>
                                            <div class="col-12">
                                                <button type="submit" name="landing-enquiry-submit"
                                                    class="btn w-100 text-white bg-color rounded-3 py-3 fw-semibold text-uppercase mt-2">Message
                                                    Now</button>
                                            </div>

                                            {{-- <input type="hidden" name="prefix" value="landing-enquiry-"> --}}
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
  @if(Session::has('successContact'))
    <script type="text/javascript">
    Swal.fire(
        'Success!',
        'Pesan telah terkirim!',
        'success'
    );
    </script>
  @endif
  <script>
      $('.form-contact').on('submit', function(e){

        let errorEmail = false;
        let errorName = false;
        let errorPhone = false;
        let errorCompany = false;
        let errorMsg = false;

        let email = $('input[name="email"]').val() ?? "";
        let name = $('input[name="name"]').val() ;
        let phone = $('input[name="phone"]').val();
        let company = $('input[name="company"]').val();
        let message = $('textarea[name="message"]').val();

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

        if (message.length< 3) {
          console.log("date empty");
          errorDate = true;
          $('#err-msg').text('Tanggal Bertemu Tidak valid');
        }else{
          $('#err-msg').text('');
        }




        if(errorName || errorEmail || errorPhone ||errorCompany || errorMsg){
          console.log("ONE OF THEM IS EMPTY/WRONG");
          e.preventDefault();
        }
      })

  </script>
@endsection
