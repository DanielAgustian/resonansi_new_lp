@extends('master-landing')
@section('page')
    | Home
@endsection
@section('css')
    <link rel="stylesheet" href="https://unpkg.com/swiper/swiper-bundle.min.css" />
    <style>
        .title-contact{
            font-size: 48px;
        }
        @media screen and (max-width: 996px){
            .title-contact{
                font-size: 42px;
            }
        }
        @media screen and (max-width: 450px){
            .title-contact{
                font-size: 36px;
            }
        }
    </style>
    <link rel="stylesheet" href="{{ asset('asset/css/rehaul/homepage.css') }}">
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
@endsection
@section('banner')
    <section id="page-title" class="bg-color page-title-dark py-6">

        <div class="container clearfix">
            <h1>Contact Us</h1>
            <span>Get In Touch</span>
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="#">Home</a></li>
                <li class="breadcrumb-item active" aria-current="page">Contact Us</li>
            </ol>
        </div>

    </section>
@endsection
@section('content')
    <section id="content">

        <div class="content-wrap pb-0">

            <div class="container mb-5">
                <div class="row justify-content-between">
                    <div class="col-lg-6  mb-5 mb-lg-0">
                        <div class="card shadow">
                            <div class="card-body">
                                <form class="row mb-0 form-contact" id="landing-enquiry"
                                    action="{{ route('makeContactUs') }}" method="post" enctype="multipart/form-data">
                                    @csrf
                                    <div class="form-process"></div>
                                    <div class="col-12 form-group mb-4">
                                        <label>Name:</label>
                                        <input type="text" name="name" id="landing-enquiry-name"
                                            class="form-control   required" value="" placeholder="John Doe" required>
                                        <div style="color: red; font-size:11px" id="err-name">

                                        </div>
                                    </div>
                                    <div class="col-12 form-group mb-4">
                                        <label>Email:</label>
                                        <input type="email" name="email" id="landing-enquiry-email"
                                            class="form-control   required" value="" placeholder="user@company.com"
                                            required>
                                        <div style="color: red; font-size:11px" id="err-email">

                                        </div>
                                    </div>
                                    <div class="col-12 form-group mb-4">
                                        <label>Phone:</label><br>
                                        <div class="input-group ">
                                            <select class="form-select required" name="phone_front" id="landing-enquiry-idd"
                                                style="max-width: 100px;">
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
                                                class="form-control   required" value="" placeholder="" required>

                                        </div>
                                        <div style="color: red; font-size:11px" id="err-phone">

                                        </div>
                                    </div>

                                    <div class="col-12 form-group mb-4">
                                        <label>Nama Perusahaan</label>
                                        <input type="text" name="company" id="landing-enquiry-company"
                                            class="form-control   required" value="" placeholder="Company Name" required>
                                        <div style="color: red; font-size:11px" id="err-company">

                                        </div>
                                    </div>
                                    <div class="col-12 form-group mb-2">
                                        <label>Kota Asal</label>
                                        <input type="text" name="city" id="landing-enquiry-company"
                                            class="form-control   required" value="" placeholder="Nama Kota" required>
                                        <div style="color: red; font-size:11px" id="err-city">

                                        </div>
                                    </div>
                                    <div class="col-12 form-group mb-4">
                                        <label>Message:</label>
                                        <textarea name="message" id="landing-enquiry-additional-requirements" class="form-control  " cols="30" rows="5"
                                            placeholder="Please let us know how we can help you..." required></textarea>
                                        <div style="color: red; font-size:11px" id="err-msg">

                                        </div>
                                    </div>
                                    <!-- {{-- <div class="col-12 form-group mb-4">
                                                <label>Paket</label>
                                                <select class="form-select form-control   required"
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
                                                    class="form-control   required" value=""
                                                    placeholder="date">
                                            </div>
                                            <div class="col-12 form-group mb-4">
                                                <label>Waktu</label>
                                                <input type="time" name="time" id="landing-enquiry-time"
                                                    class="form-control   required" value=""
                                                    placeholder="date">
                                            </div> --}} -->

                                    <div class="col-12 d-none">
                                        <input type="text" id="landing-enquiry-botcheck" name="landing-enquiry-botcheck"
                                            value="" />
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
                    <div class="col-lg-6 ps-lg-3">
                        <div class="d-flex flex-column">
                            <h1 class="span-bl title-contact">Resonansi</h1>
                            <p><i>Seperti sebuah garpu tala ketika bergetar,
                                    dapat memberikan getaran yang sama
                                    kepada garpu tala yang memiliki frekuensi yang sama.</i></p>
                            <h5 class="fw-bold">Office</h5>
                            <p>Ruko Crystal 8 no. 18 Lantai 3 <br>
                                Kel. Pakualam, Kec. Serpong Utara, <br>
                                Banten 15320</p>
                            <p><strong>Email: </strong> buvera@resonansi.co.id</p>
                            <iframe class="w-100 h-100 mt-3"
                                src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d3966.1919140211608!2d106.651433!3d-6.2384177!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e69fbf1aabef151%3A0xfc821b869de7efd2!2sResonansi%20by%20yokesen!5e0!3m2!1sen!2sid!4v1643784210197!5m2!1sen!2sid"
                                style="border:0; min-height: 300px" allowfullscreen="" loading="lazy"></iframe>
                        </div>

                    </div>
                </div>
            </div>

            <div class="clear"></div>


            <div class="section dark pt-0 mb-0 bg-color"
                style="background: url('demos/movers/images/bg-2.png') no-repeat center bottom / 100%; overflow: visible">
                <svg viewBox="0 0 1960 206.8" class="bg-white">
                    <path class="svg-themecolor" style="opacity:0.2;"
                        d="M0,142.8A2337.49,2337.49,0,0,1,297.5,56.3C569.33-3.53,783.89.22,849.5,2.3c215.78,6.86,382.12,45.39,503.25,73.45,158.87,36.8,283.09,79.13,458.75,54.55A816.49,816.49,0,0,0,1983,86.8v110H0Z" />
                    <path class="svg-themecolor" d="M.5,152.8s498-177,849-150,1031,238,1134,94v110H.5Z" />
                </svg>
                <div class="container">
                    <div class="row align-items-center justify-content-center center my-4">

                        <div class="col-sm-8">
                            <div class="heading-block border-bottom-0 mb-4">
                                <h2 class="fw-semibold ls0 nott mb-3" style="font-size: 44px; line-height: 1.3">Ingin Tahu Layanan Resonansi Ada Apa Saja?</h2>
                                <p>Klik tombol di bawah ini untuk melihat layanan Resonansi selengkapnya!</p>
                            </div>
                            <a href="demo-movers-contact.html"
                                class="button button-white button-light button-rounded fw-medium m-0 btn-bigger">Klik Disini!</a>
                        </div>

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
           $('#err-msg').text('Pesan Terlalu Pendek');
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
