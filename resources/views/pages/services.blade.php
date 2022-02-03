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
                            <h2 class="fw-bold h2 mb-4 text-center">Dipercaya lebih dari <span>100</span> klien</h2>
                            <p class="fw-normal mb-2 h6 text-muted text-center  ">Mengevolusi cara meningkatkan kualitas
                                website anda.
                                Mengubah persepsi klien dan kustomer terhadap website anda secara radikal.</p>

                            <div class="row my-5 justify-content-center">
                                @component('components.custom.services-card')
                                    @slot('type')
                                        landing-website
                                    @endslot
                                    @slot('id')
                                        service-landing
                                    @endslot
                                    @slot('pic')
                                        {{ asset('images/landing-page.png') }}

                                    @endslot
                                    @slot('title')
                                        Landing Page Website
                                    @endslot
                                    @slot('details')
                                        <p>Landing Page merupakan sebuah halaman yang dirancang khusus untuk mengarahkan user ke
                                            arah
                                            yang dinginkan secara spesifik, Misalnya: halaman penawaran atau halaman khusus produk.
                                            Jadi dapat disimpulkan landing page adalah sebuah halaman khusus yang menjadi tujuan
                                            user
                                            dan berisi informasi lebih detail dan spesifik tentang suatu produk, layanan, penawaran,
                                            dan
                                            sebagainya, untuk keperluan marketing atau campaign tertentu.</p>
                                        <p>Berikut beberapa manfaat landing yang perlu kamu ketahui:</p>


                                        <ol class="list-service">
                                            <li>Sebagai Sarana Promosi</li>
                                            <p>Manfaat pertama dari landing page adalah sebagai sarana promosi.
                                                Dengan sebuah landing page, kamu bisa memasukkan informasi singkat dengan tulisan
                                                yang besar terkait promosi yang sedang kamu jalankan.
                                                Kamu mungkin sedang memiliki berbagai jenis promosi. Namun, kamu hanya perlu
                                                menonjolkan salah satunya dalam sebuah landing page saja.
                                            </p>
                                            <li>Meningkatkan Conversion Rate</li>
                                            <p>Selain sebagai sarana promosi, landing page juga berfungsi untuk meningkatkan
                                                conversion rate. Dengan demikian, pengunjung tidak hanya hadir ke situsmu, tetapi
                                                bisa lebih dari itu, pengunjung juga melakukan sebuah aksi yang kamu inginkan,
                                                seperti berlangganan newsletter atau membeli produk-produkmu.
                                            </p>
                                            <li>Mendapat data leads</li>
                                            <p>Manfaat dari sebuah landing page berikutnya adalah mendapat data leads. Memang, ini
                                                tergantung dari dengan jenis landing page yang kamu buat. Namun, umumnya landing
                                                page akan meminta informasi pengunjung, seperti nama, email, dan nomor telepon.
                                                Setidaknya, kamu sudah memiliki informasi dasar tentang siapa saja pengunjungmu
                                                untuk selanjutnya bisa melakukan analisis lebih jauh.

                                            </p>
                                        </ol>
                                    @endslot

                                @endcomponent
                                @component('components.custom.services-card')
                                    @slot('type')
                                        social-media-marketing
                                    @endslot
                                    @slot('id')
                                        service-social-media
                                    @endslot
                                    @slot('pic')
                                        {{ asset('images/social-media.png') }}

                                    @endslot
                                    @slot('title')
                                        Social Media Marketing
                                    @endslot
                                    @slot('details')
                                        <p>Sosial media marketing adalah bentuk pemasaran digital yang menggunakan media sosial dan
                                            situs web jaringan untuk mempromosikan suatu produk atau jasa layanan dari organisasi
                                            maupun perusahaan melalui cara berbayar dan organik.


                                        </p>
                                        <p> Pemasaran melalui social media melibatkan aktivitas seperti membangun kehadiran di
                                            jejaring social, menyebarkan kesadaran dan tingkat kepercayaan sebuah merek, melibatkan
                                            prospek dan pelanggan melalui konten, mengarahkan lalu lintas kunjungan ke situs
                                            website, dan sebagainya. Pemasaran melalui social media melibatkan aktivitas seperti
                                            membangun kehadiran di jejaring social, menyebarkan kesadaran dan tingkat kepercayaan
                                            sebuah merek, melibatkan prospek dan pelanggan melalui konten, mengarahkan lalu lintas
                                            kunjungan ke situs website, dan sebagainya.
                                        </p>
                                        <p>Marketer social media menggunakan platform media sosial untuk bisa menemukan dan
                                            menjangkau pelanggan maupun calon pelanggan, dimana secara tidak langsung akan
                                            mempromosikan produk dan jasa layanan serta melibatkan audiens untuk meningkatkan
                                            konversi dan ROI.</p>
                                        <p>Beberapa platform social media marketing yang paling sering digunakan seperti :
                                            Facebook, Instagram, Linkedin, TikTok, Youtube, Twitter, dan lain sebagainya.
                                        </p>
                                        <p>Dalam sebuah penelitian menyebutkan bahwa lebih dari 3,2 miliar orang di dunia saat ini
                                            telah menggunakan media sosial. Angka ini menjadi fakta menarik, sekaligus bukti bahwa
                                            media sosial memang digandrungi oleh masyarakat.</p>
                                        <p>Dengan media sosial, proses marketing yang dilakukan akan jadi jauh lebih menyenangkan.
                                            Berikut beberapa keuntungan yang bisa menjadi alasan mengapa social media marketing itu
                                            penting:</p>
                                        <ol class="list-service">
                                            <li>Meningkatkan Brand Awareness</li>
                                            <p>Sebuah produk akan semakin diakui keberadaannya ketika diunggah di media sosial
                                                secara terus-menerus. Hal ini terjadi karena perlahan-lahan masyarakat akan mulai
                                                menaruh perhatian terhadap produk tersebut.
                                                <br>
                                                Awalnya masyarakat mungkin hanya ingin melihat-lihat produk atau jasa yang kamu
                                                tawarkan untuk sementara waktu. Namun, jika terus diunggah di media sosial, sebuah
                                                produk akan mulai dianggap ada dan akan selalu diingat oleh masyarakat, karena media
                                                sosial jadi sebuah platform yang terus dikonsumsi setiap hari oleh orang-orang di
                                                segala penjuru dunia.
                                            </p>
                                            <li>Mendapatkan Feedback Produk Dan Strategi Pemasaran</li>
                                            <p>Hal ini merupakan tahap lanjutan dari efek social media marketing. Setelah diakui
                                                keberadaannya, sebuah produk akan mulai jadi topik pembicaraan yang hangat. Kamu pun
                                                bisa melihat langsung bagaimana customer berinteraksi dengan konten di media
                                                sosialmu, misalnya dengan memberikan like dan mulai mengikuti akun sosial mediamu.
                                                <br>
                                                Ditambah lagi, media sosial juga menawarkan fitur komentar. Hal ini memungkinkan
                                                masyarakat untuk memberikan pendapatnya soal produk yang kamu tawarkan atau cara
                                                kamu memasarkan produkmu dengan berbagai penjelasan.
                                                <br>
                                                Bagi perusahaan, hal ini bisa dijadikan alat untuk mengukur kelebihan dan kekurangan
                                                dari sebuah produk atau strategi marketing yang dipilih.
                                            </p>
                                            <li>Mempelajari Kompetitor</li>
                                            <p>Mempelajari kompetitor jadi lebih mudah dengan social media marketing. Pasalnya,
                                                social media marketing sekarang banyak digunakan oleh perusahaan untuk memasarkan
                                                produk-produknya.
                                                Dengan aktif di media sosial, strategi yang dilakukan oleh kompetitor bisa jadi
                                                bahan pembelajaranmu</p>
                                        </ol>
                                    @endslot
                                @endcomponent
                                @component('components.custom.services-card')
                                    @slot('type')
                                        search-engine-marketing
                                    @endslot
                                    @slot('id')
                                        service-sem
                                    @endslot
                                    @slot('pic')

                                        {{ asset('images/digital-marketing.png') }}
                                    @endslot
                                    @slot('title')
                                        SEM (Search Engine Marketing)
                                    @endslot
                                    @slot('details')
                                        <p> SEM atau Search Engine Marketing adalah sebuah aktivitas marketing menggunakan iklan
                                            berbayar yang akan muncul pada mesin pencarian atau search engine seperti Google.

                                        </p>
                                        <p>Berbeda dengan SEO yang mendatangkan pengunjung ke website secara organik, SEM merupakan
                                            salah satu cara berbayar untuk mendatangkan traffic kunjungan ke suatu website. SEM atau
                                            Search Engine Marketing adalah satu dari sekian banyak metode di dalam internet
                                            marketing. SEM jika digunakan dengan baik dan benar, dapat membantu bisnis berkembang
                                            pesat di era digital yang semakin hari semakin kompetitif.</p>
                                        <p>Menggunakan search engine marketing sebagai sarana marketing di dunia online dengan cara
                                            yang benar dan tepat akan sangat membantu suatu bisnis untuk lebih berkembang, berikut
                                            beberapa manfaatnya:
                                        </p>
                                        <ol class="list-service">
                                            <li>Targeted Marketing. </li>
                                            <p>Keuntungan terbesar dalam menggunakan SEM adalah memberikan peluang kepada seorang
                                                marketer untuk langsung menyampaikan iklan yang mereka inginkan kepada audiens yang
                                                mereka tetapkan sendiri. </p>
                                            <li>Cepat Mendapatkan Hasilnya</li>
                                            <p>Proses membuat dan memasang iklan pada Google Ads pun tergolong sangat cepat, dan
                                                hasilnya bisa langsung dilihat setelah iklan kamu tayang. SEM unggul dalam hal
                                                kecepatan jika dibandingkan dengan metode SEO yang memakan waktu berbulan-bulan
                                                untuk membuahkan hasil optimalnya.
                                                Metode ini sangatlah cocok bagi Anda yang baru memiliki website dan menginginkan
                                                hasil dalam waktu singkat. </p>
                                            <li>Dapat Menyesuaikan Dengan Budget Yang Ada. </li>
                                            <p>Keunggulan search engine marketing lainnya adalah kamu dapat memasang budget sesuai
                                                dengan kemampuan dan keinginanmu sendiri. Saat budget yang kamu punya sudah habis,
                                                maka iklan akan berhenti secara otomatis. </p>
                                        </ol>
                                    @endslot
                                @endcomponent
                                @component('components.custom.services-card')
                                    @slot('type')
                                        search-engine-optimization
                                    @endslot
                                    @slot('id')
                                        service-seo
                                    @endslot
                                    @slot('pic')

                                        {{ asset('images/seo.png') }}
                                    @endslot
                                    @slot('title')
                                        SEO (Search Engine Optimization)
                                    @endslot
                                    @slot('details')
                                        <p>SEO atau Search Engine Optimization adalah sebuah teknik optimasi website yang bertujuan
                                            untuk bisa mendapatkan ranking teratas di mesin pencari Google. Dengan mendapatkan
                                            peringkat terbaik dari hasil mesin pencarian maka potensi untuk mendapatkan banyak
                                            traffic secara organik juga akan semakin besar.</p>
                                        <p>Adapun pencarian secara organik tersebut dilakukan oleh pengunjung atau user pada saat
                                            mereka memasukkan kata kunci pencarian (keyword) di kolom search engine Google. SEO
                                            sangat berfokus pada pencarian kata kunci secara organik dan berbeda dengan SEM yang
                                            berfokus pada media iklan yang disediakan oleh Google.</p>
                                        <p>SEO bukan salah satu pilihan untuk mendatangkan traffic namun sudah menjadi kewajiban
                                            bagi pemilik bisnis ataupun website untuk menerapkan teknik SEO pada setiap websitenya.
                                            Lalu apa saja manfaat SEO untuk website kamu:</p>
                                        <ol class="list-service">
                                            <li>Mendatangkan Organic Traffic </li>
                                            <p>Konten dapat muncul di hasil pencarian saja tidaklah cukup. Jika konten yang sudah
                                                dibuat ternyata muncul di halaman dua, tiga atau bahkan lebih, maka peluang untuk
                                                mendapatkan banyak traffic dari hasil pencarian akan semakin kecil. Oleh sebab itu
                                                konten kamu harus masuk di halaman pertama mesin pencarian Google agar bisa
                                                mendapatkan traffic organik yang banyak. </p>
                                            <li>Membangun Brand Awareness</li>
                                            <p>Hampir kebanyakan orang selalu melakukan riset secara online sebelum melakukan
                                                pembelian. Hal ini tentu akan menuntut para pemilik bisnis untuk memiliki brand yang
                                                baik supaya bisa selalu ditemukan di internet. Salah satu cara untuk meningkatkan
                                                kualitas brand kamu adalah dengan menerapkan teknik SEO pada websitemu. Semakin
                                                sering website kamu muncul di hasil pencarian Google, maka akan semakin banyak pula
                                                peluang orang yang mengenal website dan brand kamu. </p>
                                            <li>Website Lebih Mudah Ditemukan</li>
                                            <p>Website anda akan jadi lebih mudah di temukan pada mesin pencari dengan berbagai kata
                                                kunci. Anda dapat mendapatkan menjangkau audience lebih luas dengan menerapkan
                                                teknik SEO pada setiap kata kunci yang anda targetkan. Tentu saja kata kunci yang di
                                                targetkan harus sesuai dengan topik dari website anda.</p>
                                            <li> Meningkatkan Kepercayaan Pelanggan</li>
                                            <p>Website yang berada di halaman pertama google dengan keyword tertentu akan membuat
                                                pelanggan lebih percaya terhadap website atau brand anda dibandingkan website yang
                                                tidak dapat ditemukan di mesin pencari.</p>
                                            <li>Mendatangkan Leads Sehingga Meningkatkan Penjualan</li>
                                            <p>Website yang berada di halaman pertama dengan keyword yang sudah ditargetkan dengan
                                                sendirinya akan mendatangkan leads, sehingga semakin meningkatkan penjualan</p>
                                            <li>Mendapatkan Leads Yang Berkualitas</li>
                                            <p>Hal ini karena orang yang mencari suatu produk di search engine merupakan orang-orang
                                                yang mempunyai interest dan kebutuhan, jadi ketika orang yang sedang mencari sesuatu
                                                melalui search engine kemudian masuk ke website kamu kemungkinan closing rate akan
                                                lebih tinggi dibanding orang yang melihat iklan melalui social media </p>
                                        </ol>
                                    @endslot
                                @endcomponent
                                @component('components.custom.services-card')
                                    @slot('type')
                                        content-creator
                                    @endslot
                                    @slot('id')
                                        service-content
                                    @endslot
                                    @slot('pic')

                                        {{ asset('images/content-creator.png') }}
                                    @endslot
                                    @slot('title')
                                        Content Creator
                                    @endslot
                                    @slot('details')
                                        <p>Content Creator adalah seseorang yang memiliki tanggung jawab pada setiap informasi yang
                                            mereka sebarkan di media sosial. Berdasarkan definisi tersebut, content creator umumnya
                                            mempunyai target penonton atau audiensnya masing-masing. </p>
                                        <p>Pada umumnya, content creator akan menggunakan banyak sekali platform dalam menyebarkan
                                            konten yang sudah mereka produksi. Jadi selain social media Instagram, Youtube, Facebook
                                            atau TikTok, biasanya mereka juga menggunakan blog, infografik, dan juga sebuah ebook
                                            untuk bisa menyebarkan seluruh kontennya</p>
                                        <p>Dengan keahlian yang dimiliki oleh seorang content creator, mereka mampu membantu kamu
                                            dalam menjalankan strategi pemasaran dengan baik. Karena, konten yang berkualitas dan
                                            juga tepat sasaran akan lebih mudah untuk memasarkan suatu produk barang maupun jasa.
                                        </p>
                                        <p>Terdapat beberapa alasan kenapa kamu memerlukan content creator untuk keperluan strategi
                                            pemasaran bisnismu, berikut ini adalah penjelasannya: </p>
                                        <ol class="list-service">
                                            <li>Memudahkan Membuat Konten Menarik</li>
                                            <p>Untuk menjalankan strategi content creator, maka kamu memerlukan konten yang menarik
                                                dan juga memiliki kualitas tinggi. Dengan adanya peran content creator, maka kamu
                                                bisa dengan mudah membuat konten yang menarik dan konsisten</p>
                                            <li>Membangun Konsistensi Branding</li>
                                            <p>Seorang content creator bisa merealisasikan suatu strategi dalam wujud karya yang
                                                unik dan juga menarik dimata audiens. Misalnya saja dalam hal penggunaan font, warna
                                                dan juga tone yang tepat dan juga sesuai dengan brand image kamu.
                                                <br>
                                                Dari kreativitasnya itulah seorang content creator memiliki peran yang sangat
                                                penting dalam memproduksi dan mempertahankan branding yang dimiliki oleh suatu
                                                perusahaan.
                                            </p>
                                            <li>Membantu Tampil Sebagai Expert</li>
                                            <p>Suatu konten yang bermanfaat dan relevan mampu membantu audiens mengenali bisnis kamu
                                                dan meningkatkan kepercayaan mereka pada brand kamu. Dalam hal ini, peran content
                                                creator akan sangat membantu kamu dalam memproduksi konten yang sesuai dengan
                                                kebutuhan dan juga keinginan pelanggan.</p>
                                            <li>Mengelola Dan Membuat Strategi Konten</li>
                                            <p>Membuat suatu konten secara konsisten akan memerlukan suatu strategi dan juga
                                                perencanaan yang tepat. Kamu harus bisa mengetahui siapa saja target pasar kamu,
                                                kebutuhan mereka, dan kapan waktu yang tepat untuk mempublish konten tersebut.
                                                Content creator mampu membantu kamu dalam melakukan proses tersebut. Sehingga, kamu
                                                akan lebih mudah dalam mencapai tujuan pemasaran karena pembuatan konten akan
                                                semakin sesuai dengan perencanaan yang sudah dibuat.</p>
                                            <li>Membantu Kontenmu Lebih Mudah Ditemukan </li>
                                            <p>Untuk bisa mencapai suatu tujuan marketing, maka kamu memerlukan beberapa strategi
                                                SEO, seperti menggunakan kata kunci, kualitas konten yang menarik dan unsur lainnya.
                                                Jadi, selain harus memproduksi konten yang menarik, kamu juga harus menerapkan
                                                optimasi SEO di dalam konten kamu.
                                            </p>
                                        </ol>
                                    @endslot
                                @endcomponent
                                @component('components.custom.services-card')
                                    @slot('type')
                                        marketplace-ads-optimization
                                    @endslot
                                    @slot('id')
                                        service-opt
                                    @endslot
                                    @slot('pic')

                                        {{ asset('images/opt.png') }}
                                    @endslot
                                    @slot('title')
                                        Marketplace Ads Optimization
                                    @endslot
                                    @slot('details')
                                        <p>Marketplace Ads Optimization adalah teknik optimasi berbayar yang dilakukan untuk sebuah
                                            toko pada marketplace tertentu agar supaya ketika calon pembeli mulai mengetikkan nama
                                            suatu produk yang mereka inginkan, maka produk jualan dari toko kamu yang akan muncul di
                                            urutan pencarian teratas. </p>
                                        <p>Cara kerjanya mirip dengan mesin pencari google, dimana pengguna perlu mengetikkan kata
                                            kunci atau keyword di kolom pencarian yang sesuai dengan dengan produk tertentu, maka
                                            sistem marketplace akan menampilkan sejumlah rekomendasi produk yang dicari calon
                                            pembeli sesuai kata kunci yang diketikkan.</p>
                                    @endslot
                                @endcomponent
                                {{-- <div class="col-md-9">
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
                                </div> --}}
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
                            <img src="{{ asset('images/calendar.png') }}" alt="" class="img-form rounded">
                        </div>
                        <div class="col-md-6 my-auto">
                            <div class="card bg-white shadow-lg border-0">
                                <div class="card-body p-4">
                                    <div>

                                        <div class="form-result"></div>

                                        <form class="row mb-0" id="landing-enquiry"
                                            action="{{ route('meet-create') }}" method="POST"
                                            enctype="multipart/form-data">
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
                                                    placeholder="Company Name">
                                            </div>
                                            <div class="col-12 form-group mb-2">
                                                <label>Paket</label>
                                                <select class="form-select form-control form-control-lg required"
                                                    name="landing-enquiry-paket" id="landing-enquiry-paket">
                                                    <option value="paket-1" selected>Paket 1</option>
                                                    <option value="paket-2">Paket 2</option>
                                                    <option value="paket-3">Paket 3</option>
                                                    <option value="landing-website">Landing Website</option>
                                                    <option value="social-media-marketing">Social Media Marketing</option>
                                                    <option value="search-engine-marketing">SEM/Search Engine Marketing
                                                    </option>
                                                    <option value="search-engine-optimization">SEO/Search Engine
                                                        Optimization</option>

                                                    <option value="content-creator">Content Creator</option>
                                                    <option value="marketplace-ads-optimization">Marketplace Ads
                                                        Optimization</option>

                                                </select>

                                            </div>
                                            <div class="col-12 form-group mb-2">
                                                <label>Tanggal</label>
                                                <input type="date" name="date" id="landing-enquiry-date"
                                                    class="form-control form-control-lg required" value=""
                                                    placeholder="dd/mm/yy">
                                            </div>
                                            <div class="col-12 form-group mb-2">
                                                <label>Waktu</label>
                                                <input type="time" name="time" id="landing-enquiry-time"
                                                    class="form-control form-control-lg required" value=""
                                                    placeholder="HH:mm am/pm">
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
