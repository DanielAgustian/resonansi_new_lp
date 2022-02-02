@extends('master2')

@section('banner')
<section id="slider" class="slider-element dark min-vh-25 min-vh-md-50 include-header py-5"  style="background-image: url('{{ asset('images/bg-hero.svg') }}');">
    <div class="slider-inner">

        <div class="vertical-middle text-center">
            <div class="container">
                <div class="row align-items-center justify-content-center">

                    <div class="col-lg-6 col-md-6">
                        <h2 class="display-3 fw-bold text-white mb-2">Pricing</h2>
                        <p class="lead mb-0 fw-normal">Pelayanan Terbaik dengan Harga Sesuai Kantong</p>
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

                        <p class="text-black-50 mt-lg-6 mt-3  ">Selama periode 2 bulan, anda akan mendapatkan beberapa
                            keuntungan
                            yang tertera pada <a href="#" class="text-black"><u>Terms and Conditions</u></a>.</p>
                    </div>
                    <div class="col-lg-9 col-12">
                        <div class="row justify-content-around">
                            @component('components.custom.layanan-card')
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
                            @component('components.custom.layanan-card')
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
                            @component('components.custom.layanan-card')
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
        </div>

        <div class="section dark parallax mb-3" data-bottom-top="background-color:rgb(61,128,228);" data-center-bottom="background-color:rgb(0,0,0);">
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
        </div>
    </div>

</section>
@endsection

@section('js')
    
@endsection