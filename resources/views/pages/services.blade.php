@extends('master2')
@section('page')
    | Services
@endsection
@section('banner')
    <section id="slider" class="slider-element dark min-vh-25 min-vh-md-50 include-header py-5"
        style="background-image: url('{{ asset('images/bg-hero.svg') }}');">
        <div class="slider-inner">

            <div class="vertical-middle text-center">
                <div class="container">
                    <div class="row align-items-center justify-content-center">

                        <div class="col-lg-6 col-md-6">
                            <h2 class="display-3 fw-bold text-white mb-2">Services</h2>
                            <p class="lead mb-0 fw-normal">Layanan dari Kami untuk Anda</p>
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

            <div class="section mb-0 bg-transparent p-0">
                <div class="container clearfix services-page">
                    <div class="row">
                        <div class="col-lg-12 mb-5">
                            <h2 class="fw-bold h2 mb-4 text-center">Dipercaya  <span>Semua</span> Klien Kami</h2>
                            <p class="fw-normal mb-2 h6 text-muted text-center  ">Mengevolusi cara meningkatkan kualitas
                                brand anda.
                                Mengubah persepsi klien dan kustomer terhadap bisnis anda secara radikal.</p>

                            <div class="row my-5 justify-content-center">
                                @component('components.custom.services-card')
                                    @slot('type')
                                        technology
                                    @endslot
                                    @slot('id')
                                        service-technology
                                    @endslot
                                    @slot('pic')
                                        {{ asset('images/landing-page.png') }}

                                    @endslot
                                    @slot('title')
                                        Technology
                                    @endslot
                                    @slot('details')
                                      <!-- <p class=" fw-bold ">Software Warehouse</p>
                                      <ul style="margin-left:20px;">
                                        <li>Website</li>
                                        <li>Landing Page</li>
                                        <li>Mobile Application Department</li>
                                        <li>Augmented Reality</li>
                                        <li>Virtual Reality</li>
                                      </ul>
                                      <p class=" fw-bold">Software as a Service</p>
                                      <ul  style="margin-left:20px;">
                                        <li>AJAKIN (Software Referral Management System)</li>
                                        <li>NGERTIYO  (Software Gamification - Game Education Business)</li>
                                        <li>Optiskor (Balanced Scorecard System)</li>
                                        <li>DEST (Customer Relation Management)</li>
                                        <li>Ispy (Digital Voice Mapping - Digital Social Listening)</li>
                                        <li>Balanced Scorecard</li>
                                        <li>Zukses (Software performance & Collaboration Tools )</li>
                                        <li>Promolah (Software SME Home Delivery Service)</li>
                                        <li>MANTOOLS (Management Tools)</li>
                                        <li>INTEGREAT (Software Solusi Digital untuk Pengelolaan Investasi)</li>
                                      </ul>
                                      <p class=" fw-bold">Software As a Business</p> -->
                                      <!-- <p class=" fw-bold ">Software Warehouse</p> -->
                                      <ul style="margin-left:20px;margin-top:10px">
                                        <li>Company Profile Website</li>
                                        <li>Landing Page Campaign </li>

                                      </ul>
                                      <p class=" fw-bold ">Software as a Service</p>
                                      <ul style="margin-left:20px;margin-top:10px">
                                        <li>AJAKIN (Referral Software Management System)</li>
                                        <li>NGERTIYO  (Gamification Education Business)</li>
                                      </ul>
                                    @endslot

                                @endcomponent
                                @component('components.custom.services-card')
                                    @slot('type')
                                        digital-strategy
                                    @endslot
                                    @slot('id')
                                        service-digital-strategy
                                    @endslot
                                    @slot('pic')
                                        {{ asset('images/digital-marketing.png') }}

                                    @endslot
                                    @slot('title')
                                        Digital Strategy
                                    @endslot
                                    @slot('details')
                                    <p class=" fw-bold ">Social Media Marketing</p>
                                    <ul style="margin-left:20px;">
                                      <li>Campaign</li>
                                      <li>Matrix Plan</li>
                                      <li>Content Management</li>
                                      <!-- <li>Insight Reports</li> -->
                                      <li>Digital Branding</li>
                                      <!-- <li>Brand Positioning</li>
                                      <li>Brand Disruption</li>
                                      <li>Brand Personality</li> -->
                                      <li>Brand Logo</li>
                                      <!-- <li>naming & Logo</li> -->
                                      <!-- <li>Tagline/Slogan</li>
                                      <li>Brand Experience</li>
                                      <li>Brand Perception</li> -->
                                    </ul>

                                    <!-- <p class="fw-bold">Media Buying</p>
                                    <ul  style="margin-left:20px;">
                                      <li>Google Ads & Facebook Ads</li>
                                      <li>Media Streaming</li>


                                    </ul> -->
                                    <p class="fw-bold">Conversion Optimization</p>
                                    <ul  style="margin-left:20px;">
                                      <!-- <li>Marketing & Sales Funnel</li>
                                      <li>SEM (Search Engine Marketing)</li>
                                      <li>SEO (Search Engine Optimization)</li>
                                      <li>SEMO (Search Engine Marketing Optimization)</li>
                                      <li>KOL/Influencer Marketing</li> -->
                                      <li>Google Ads</li>
                                      <li>Facebook Ads</li>

                                      <li>Instagram Ads

                                       </li>
                                      <li>TikTok Ads </li>
                                      <li>Youtube Ads</li>
                                      <li>Email Marketing</li>
                                      <li>SEO (Search Engine Optimization)
                                      </li>
                                      <li>Influencer & KOL Management </li>
                                    </ul>
                                    <!-- <p class="fw-bold">Digital Option Management</p> -->
                                    @endslot
                                @endcomponent

                                @component('components.custom.services-card')
                                    @slot('type')
                                        marketplace-opt
                                    @endslot
                                    @slot('id')
                                        service-marketplace
                                    @endslot
                                    @slot('pic')

                                        {{ asset('images/opt.png') }}
                                    @endslot
                                    @slot('title')
                                        Marketplace Optimization
                                        <!-- Marketplace -->
                                    @endslot
                                    @slot('details')
                                    <!-- <p class="fw-bold">Online Sales Strategy</p>
                                    <ul  style="margin-left:20px;">

                                      <li>Marketplace Optimization</li>
                                      <li>Marketplace Ads Optimization</li>
                                      <li>Marketplace Live </li>
                                    </ul>
                                    <p class="fw-bold">Hyperlocal Enabler</p>
                                    <ul  style="margin-left:20px;">

                                      <li>Consolidated E-Commerce Dashboard</li>

                                    </ul> -->
                                    <ul  style="margin-left:20px;margin-top: 10px">

                                      <li>Shop & Ads Optimization</li>
                                      <li>Product Optimization</li>
                                      <li>Marketplace Live Interaction</li>
                                      <li>Marketplace Ads</li>
                                    </ul>
                                        <!-- <p>SEO atau Search Engine Optimization adalah sebuah teknik optimasi website yang bertujuan
                                            untuk bisa mendapatkan ranking teratas di mesin pencari Google. Dengan mendapatkan
                                            peringkat terbaik dari hasil mesin pencarian maka potensi untuk mendapatkan banyak
                                            traffic secara organik juga akan semakin besar.</p>
                                        {{-- <p>Adapun pencarian secara organik tersebut dilakukan oleh pengunjung atau user pada saat
                                            mereka memasukkan kata kunci pencarian (keyword) di kolom search engine Google. SEO
                                            sangat berfokus pada pencarian kata kunci secara organik dan berbeda dengan SEM yang
                                            berfokus pada media iklan yang disediakan oleh Google.</p> --}}
                                        <p>
                                            {{-- SEO bukan salah satu pilihan untuk mendatangkan traffic namun sudah menjadi kewajiban
                                            bagi pemilik bisnis ataupun website untuk menerapkan teknik SEO pada setiap websitenya. --}}
                                            Lalu apa saja manfaat SEO untuk website kamu:</p>
                                        <ol class="list-service">
                                            <li>Mendatangkan Organic Traffic </li>
                                            {{-- <p>Konten dapat muncul di hasil pencarian saja tidaklah cukup. Jika konten yang sudah
                                                dibuat ternyata muncul di halaman dua, tiga atau bahkan lebih, maka peluang untuk
                                                mendapatkan banyak traffic dari hasil pencarian akan semakin kecil. Oleh sebab itu
                                                konten kamu harus masuk di halaman pertama mesin pencarian Google agar bisa
                                                mendapatkan traffic organik yang banyak. </p> --}}
                                            <li>Membangun Brand Awareness</li>
                                            {{-- <p>Hampir kebanyakan orang selalu melakukan riset secara online sebelum melakukan
                                                pembelian. Hal ini tentu akan menuntut para pemilik bisnis untuk memiliki brand yang
                                                baik supaya bisa selalu ditemukan di internet. Salah satu cara untuk meningkatkan
                                                kualitas brand kamu adalah dengan menerapkan teknik SEO pada websitemu. Semakin
                                                sering website kamu muncul di hasil pencarian Google, maka akan semakin banyak pula
                                                peluang orang yang mengenal website dan brand kamu. </p> --}}
                                            <li>Website Lebih Mudah Ditemukan</li>
                                            {{-- <p>Website anda akan jadi lebih mudah di temukan pada mesin pencari dengan berbagai kata
                                                kunci. Anda dapat mendapatkan menjangkau audience lebih luas dengan menerapkan
                                                teknik SEO pada setiap kata kunci yang anda targetkan. Tentu saja kata kunci yang di
                                                targetkan harus sesuai dengan topik dari website anda.</p> --}}
                                            <li> Meningkatkan Kepercayaan Pelanggan</li>
                                            {{-- <p>Website yang berada di halaman pertama google dengan keyword tertentu akan membuat
                                                pelanggan lebih percaya terhadap website atau brand anda dibandingkan website yang
                                                tidak dapat ditemukan di mesin pencari.</p> --}}
                                            <li>Mendatangkan Leads Sehingga Meningkatkan Penjualan</li>
                                            {{-- <p>Website yang berada di halaman pertama dengan keyword yang sudah ditargetkan dengan
                                                sendirinya akan mendatangkan leads, sehingga semakin meningkatkan penjualan</p> --}}
                                            <li>Mendapatkan Leads Yang Berkualitas</li>
                                            {{-- <p>Hal ini karena orang yang mencari suatu produk di search engine merupakan orang-orang
                                                yang mempunyai interest dan kebutuhan, jadi ketika orang yang sedang mencari sesuatu
                                                melalui search engine kemudian masuk ke website kamu kemungkinan closing rate akan
                                                lebih tinggi dibanding orang yang melihat iklan melalui social media </p> --}}
                                        </ol> -->
                                    @endslot
                                @endcomponent
                                @component('components.custom.services-card')
                                    @slot('type')
                                        multimedia
                                    @endslot
                                    @slot('id')
                                        service-multimedia
                                    @endslot
                                    @slot('pic')

                                        {{ asset('images/content-creator.png') }}
                                    @endslot
                                    @slot('title')
                                        Multimedia
                                    @endslot
                                    @slot('details')
                                    <p class="fw-bold">Virtual</p>
                                    <ul  style="margin-left:20px;">

                                      <li>Virtual Event</li>
                                      <li>Live Streaming</li>
                                      <li>Webinar</li>

                                    </ul>
                                    <p class="fw-bold">Cross Platform Streaming</p>
                                    <ul  style="margin-left:20px;">
                                      <li>Interactive Website </li>
                                    </ul>
                                    <p class="fw-bold">Content Creator Management</p>
                                    <ul  style="margin-left:20px;">
                                      <li>TVC Production</li>
                                      <li>3D Animation</li>
                                      <li>Youtube</li>
                                    </ul>
                                        <!-- <p>Content Creator adalah seseorang yang memiliki tanggung jawab pada setiap informasi yang
                                            mereka sebarkan di media sosial.
                                            {{-- Berdasarkan definisi tersebut, content creator umumnya
                                            mempunyai target penonton atau audiensnya masing-masing.  --}}
                                        </p>
                                        {{-- <p>Pada umumnya, content creator akan menggunakan banyak sekali platform dalam menyebarkan
                                            konten yang sudah mereka produksi. Jadi selain social media Instagram, Youtube, Facebook
                                            atau TikTok, biasanya mereka juga menggunakan blog, infografik, dan juga sebuah ebook
                                            untuk bisa menyebarkan seluruh kontennya</p> --}}
                                        <p>Dengan keahlian yang dimiliki oleh seorang content creator, mereka mampu membantu kamu
                                            dalam menjalankan strategi pemasaran dengan baik.
                                        </p>
                                        <p>Terdapat beberapa alasan kenapa kamu memerlukan content creator untuk keperluan strategi
                                            pemasaran bisnismu, berikut ini adalah penjelasannya: </p>
                                        <ol class="list-service">
                                            <li>Memudahkan Membuat Konten Menarik</li>
                                            {{-- <p>Untuk menjalankan strategi content creator, maka kamu memerlukan konten yang menarik
                                                dan juga memiliki kualitas tinggi. Dengan adanya peran content creator, maka kamu
                                                bisa dengan mudah membuat konten yang menarik dan konsisten</p> --}}
                                            <li>Membangun Konsistensi Branding</li>
                                            {{-- <p>Seorang content creator bisa merealisasikan suatu strategi dalam wujud karya yang
                                                unik dan juga menarik dimata audiens. Misalnya saja dalam hal penggunaan font, warna
                                                dan juga tone yang tepat dan juga sesuai dengan brand image kamu.
                                                <br>
                                                Dari kreativitasnya itulah seorang content creator memiliki peran yang sangat
                                                penting dalam memproduksi dan mempertahankan branding yang dimiliki oleh suatu
                                                perusahaan.
                                            </p> --}}
                                            <li>Membantu Tampil Sebagai Expert</li>
                                            {{-- <p>Suatu konten yang bermanfaat dan relevan mampu membantu audiens mengenali bisnis kamu
                                                dan meningkatkan kepercayaan mereka pada brand kamu. Dalam hal ini, peran content
                                                creator akan sangat membantu kamu dalam memproduksi konten yang sesuai dengan
                                                kebutuhan dan juga keinginan pelanggan.</p> --}}
                                            <li>Mengelola Dan Membuat Strategi Konten</li>
                                            {{-- <p>Membuat suatu konten secara konsisten akan memerlukan suatu strategi dan juga
                                                perencanaan yang tepat. Kamu harus bisa mengetahui siapa saja target pasar kamu,
                                                kebutuhan mereka, dan kapan waktu yang tepat untuk mempublish konten tersebut.
                                                Content creator mampu membantu kamu dalam melakukan proses tersebut. Sehingga, kamu
                                                akan lebih mudah dalam mencapai tujuan pemasaran karena pembuatan konten akan
                                                semakin sesuai dengan perencanaan yang sudah dibuat.</p> --}}
                                            <li>Membantu Kontenmu Lebih Mudah Ditemukan </li>
                                            {{-- <p>Untuk bisa mencapai suatu tujuan marketing, maka kamu memerlukan beberapa strategi
                                                SEO, seperti menggunakan kata kunci, kualitas konten yang menarik dan unsur lainnya.
                                                Jadi, selain harus memproduksi konten yang menarik, kamu juga harus menerapkan
                                                optimasi SEO di dalam konten kamu.
                                            </p> --}}
                                        </ol> -->
                                    @endslot
                                @endcomponent
                                @component('components.custom.services-card')
                                    @slot('type')
                                        cloud-warehouse-software
                                    @endslot
                                    @slot('id')
                                        service-business
                                    @endslot
                                    @slot('pic')

                                        {{ asset('images/bussiness.png') }}
                                    @endslot
                                    @slot('title')
                                        Cloud Warehouse Software
                                    @endslot
                                    @slot('details')
                                    <!-- <p class="fw-bold">Network Brick and Click</p>
                                    <ul style="margin-left:20px;">
                                      <li>Warisan Platform</li>
                                    </ul>
                                    <p class="fw-bold">Community</p>
                                    <ul style="margin-left:20px;">
                                      <li>Kagumi</li>
                                    </ul>
                                    <p class="fw-bold">One Stop Order Management System</p>
                                    <ul  style="margin-left:20px;">
                                      <li>Gudangin Cloud Warehouse (Omnichannel & Fulfillment) </li>
                                      <li>Teratur Part of Puninar Logistic</li>
                                    </ul> -->
                                    <p class="fw-bold">Gudangin</p>
                                    <ul  style="margin-left:20px;margin-top: 10px">
                                      <li>Jasa Fulfillment </li>
                                      <li>Jasa Agregasi Chat</li>
                                    </ul>
                                        <!-- <p>Marketplace Ads Optimization adalah teknik optimasi berbayar yang dilakukan untuk sebuah
                                            toko pada marketplace tertentu agar supaya ketika calon pembeli mulai mengetikkan nama
                                            suatu produk yang mereka inginkan, maka produk jualan dari toko kamu yang akan muncul di
                                            urutan pencarian teratas. </p>
                                        <p>Cara kerjanya mirip dengan mesin pencari google, dimana pengguna perlu mengetikkan kata
                                            kunci atau keyword di kolom pencarian yang sesuai dengan dengan produk tertentu, maka
                                            sistem marketplace akan menampilkan sejumlah rekomendasi produk yang dicari calon
                                            pembeli sesuai kata kunci yang diketikkan.</p> -->
                                    @endslot
                                @endcomponent
                                <!-- {{-- <div class="col-md-9">
                                    <div class="feature-box fbox-plain">
                                        <div class="fbox-icon">
                                            <a href="#"><i class="icon-line2-support text-danger"></i></a>
                                        </div>
                                        <div class="fbox-content">
                                            <h3>Extensive Documentation</h3>
                                            <p>We have covered each &amp; everything in our Documentation including Videos
                                                &amp; Screenshots.</p>
                                        </div>
                                    </div>
                                </div> --}} -->
                            </div>
                        </div>
                        {{-- <div class="col-lg-1"></div> --}}

                        {{-- <div class="col-lg-5 d-flex align-items-end">
                            <div class="device-video-wrap">
                                <img src="demos/landing/images/iphone-hand.png" alt="Image">
                                <video poster="images/videos/deskwork.jpg" preload="auto" loop autoplay muted>
                                    <source src='demos/landing/images/form-video.mp4' type='video/mp4' />
                                </video>
                            </div>
                        </div> --}}
                    </div>
                </div>
            </div>

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

                                        <form class="row mb-0" id="landing-enquiry"
                                            action="{{ route('meet-create') }}" method="POST"
                                            enctype="multipart/form-data">
                                            @csrf
                                            <div class="form-process"></div>
                                            <div class="col-12 form-group mb-2">
                                                <label>Name:</label>
                                                <input type="text" name="name" id="landing-enquiry-name"
                                                    class="form-control form-control-lg required" value="{{old('name')}}"
                                                    placeholder="John Doe" required>
                                            </div>
                                            <div class="col-12 form-group mb-2">
                                                <label>Email:</label>
                                                <input type="email" name="email" id="landing-enquiry-email"
                                                    class="form-control form-control-lg required" value="{{old('email')}}"
                                                    placeholder="user@company.com" required>
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
                                                    class="form-control form-control-lg required" value="{{old('company')}}"
                                                    placeholder="Company Name" required>
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
                                                    name="landing-enquiry-paket" id="landing-enquiry-paket">
                                                    @for($i = 0; $i< $count; $i++)
                                                      @if($i == 0)
                                                          <option value="{{$data[$i]->value}}" selected>{{$data[$i]->name}}</option>
                                                      @else
                                                          <option value="{{$data[$i]->value}}">{{$data[$i]->name}}</option>
                                                      @endif
                                                    @endfor
                                                    <!-- <option value="landing-website">Landing Website</option>
                                                    <option value="social-media-marketing">Social Media Marketing</option>
                                                    <option value="search-engine-marketing">SEM/Search Engine Marketing
                                                    </option>
                                                    <option value="search-engine-optimization">SEO/Search Engine
                                                        Optimization</option>

                                                    <option value="content-creator">Content Creator</option>
                                                    <option value="marketplace-ads-optimization">Marketplace Ads
                                                        Optimization</option> -->

                                                </select>

                                            </div>
                                            <div class="col-12 form-group mb-2">
                                                <label>Jadwal Meeting dengan Account Executive</label>
                                                <input type="date" name="date" id="landing-enquiry-date"
                                                    class="form-control form-control-lg required" value="{{old('date')}}"
                                                    placeholder="dd/mm/yy" required>
                                            </div>
                                            <div class="col-12 form-group mb-2">
                                                <label>Jam Meeting dengan Account Executive</label>
                                                <input type="time" name="time" id="landing-enquiry-time"
                                                    class="form-control form-control-lg required" value="{{old('time')}}"
                                                    placeholder="HH:mm am/pm" required>
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
                $('#landing-enquiry-paket option[value="' + type + '"]').attr('selected', 'selected');
            }
        });
    </script>
@endsection
