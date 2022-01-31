@extends('master2')

@section('banner')
<section id="slider" class="slider-element dark min-vh-25 min-vh-md-50 include-header py-5" style="background-image: url('{{ asset('images/bg-hero.svg') }}');">
    <div class="slider-inner">

        <div class="vertical-middle text-center">
            <div class="container">
                <div class="row align-items-center justify-content-center">

                    <div class="col-lg-6 col-md-6">
                        <h2 class="display-3 fw-bold text-white mb-2">About Us</h2>
                        <p class="lead mb-0 fw-normal">Teknologi Terbaik untuk Meningkatkan Kualtas Website Anda</p>
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
        <div class="container ">

            <div class="row mt-5 col-mb-30">
                <div class="col-md-5 text-center">
                    <h3 class="nott mb-5 display-4 fw-bold font-primary">What is Resonansi?</h3>
                    <img src="{{asset('images/logo-resonansi.png')}}" alt="Logo" class="logo-about">
                </div>

                <div class="col-md-7">
                    <h3 class="lead fw-normal">Professionally scale superior vortals and proactive relationships. Progressively network multidisciplinary supply chains vis-a-vis standardized leadership skills. Assertively maximize efficient mindshare via cross-media technologies. Dynamically create viral products for innovative metrics. Continually.</h3>
                    {{-- <div class="line my-5 border-width-5 border-f5"></div> --}}

                    <h3 class="lead fw-normal">Seamlessly redefine client-focused customer service with extensive infomediaries. Monotonectally brand unique expertise after diverse imperatives. Intrinsicly formulate client-based solutions without excellent imperatives. Globally empower go forward paradigms before effective relationships. Professionally.</h3>
                    {{-- <div class="line my-5 border-width-5 border-f5"></div> --}}

                </div>
            </div>

        </div>
        <div class="section my-5">
            <div class="container">
                <div class="row">
                    <div class="col-12 d-flex align-items-lg-center text-center flex-row">
                        <div class="col"><h3 class="mb-0">Clients:</h3></div>
                        <div class="col"><img src=" https://sribu-sg.s3.amazonaws.com/assets/media/contest_detail/2015/11/logo-ukm-indonesia-5645b0ccca6bcb3c1400000c/8fefabc2e6.png" alt="Clients"></div>
                        <div class="col"><img src=" https://sribu-sg.s3.amazonaws.com/assets/media/contest_detail/2015/11/logo-ukm-indonesia-5645b0ccca6bcb3c1400000c/8fefabc2e6.png" alt="Clients"></div>
                        <div class="col"><img src=" https://sribu-sg.s3.amazonaws.com/assets/media/contest_detail/2015/11/logo-ukm-indonesia-5645b0ccca6bcb3c1400000c/8fefabc2e6.png" alt="Clients"></div>
                        <div class="col"><img src=" https://sribu-sg.s3.amazonaws.com/assets/media/contest_detail/2015/11/logo-ukm-indonesia-5645b0ccca6bcb3c1400000c/8fefabc2e6.png" alt="Clients"></div>
                    </div>
                </div>
            </div>
        </div>
        
        <div class="container topmargin-lg bottommargin-lg">
            <div class="mx-auto text-center mt-4 bottommargin heading-block" style="max-width: 640px;">
                <h5 class="text-uppercase ls1 text-muted mb-3">Filosofi Resonansi</h5>
                <h2 class="nott mb-4">Teknologi Terbaik untuk Website Anda</h2>
                <p class="lead fw-normal font-primary mb-5"></p>
            </div>

            <div class="features-items mx-auto" style="max-width: 1000px;">
                <div class="row justify-content-around">
                    <div class="col-md-5 bottommargin-lg">
                        <div class="feature-box media-box">
                            <div class="fbox-icon">
                                <i class="icon-line2-pointer text-primary"></i>
                            </div>
                            <div class="fbox-content">
                                <h2 class="h4 fw-bold mb-4">Melakukan 100% untuk Anda</h2>
                                <div class="lead fw-normal text-black-50">Appropriately reconceptualize timely convergence through resource maximizing collaboration and idea-sharing. Globally coordinate cross-platform products via interoperable models.</div>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-5 bottommargin-lg">
                        <div class="feature-box media-box">
                            <div class="fbox-icon">
                                <i class="icon-line2-credit-card text-danger"></i>
                            </div>
                            <div class="fbox-content">
                                <h2 class="h4 fw-bold mb-4">Tidak meminta bayaran lebih</h2>
                                <div class="lead fw-normal text-black-50"> Rapidiously actualize wireless benefits before resource-leveling quality vectors. Dramatically innovate progressive convergence without tactical schemas. Competently unleash distributed users whereas.</div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row justify-content-around">
                    <div class="col-md-5 bottommargin-lg">
                        <div class="feature-box media-box">
                            <div class="fbox-icon">
                                <i class="icon-line2-shield text-warning"></i>
                            </div>
                            <div class="fbox-content">
                                <h2 class="h4 fw-bold mb-4">Terpercaya dan Merahasiakan</h2>
                                <div class="lead fw-normal text-black-50">Appropriately redefine market positioning leadership skills whereas client-based "outside the box" thinking. Monotonectally engage next-generation leadership skills without one-to-one testing procedures.</div>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-5 bottommargin-lg">
                        <div class="feature-box media-box">
                            <div class="fbox-icon">
                                <i class="icon-line2-notebook text-info"></i>
                            </div>
                            <div class="fbox-content">
                                <h2 class="h4 fw-bold mb-4">Tidak Ada yang Mustahil</h2>
                                <div class="lead fw-normal text-black-50">Compellingly evisculate impactful e-services for extensible resources. Interactively grow timely e-commerce rather than optimal expertise. Uniquely optimize impactful experiences rather than cooperative.</div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>

        
        <div class="clear"></div>
        

        <div class="clear"></div>

        

        <div class="section mb-0 bg-color dotted-bg" style="background-image: linear-gradient(to bottom, #3D80E4 0%, #0a4bab 50%, #FFF 50%);">

            <div class="container clearfix">
                <div class="row mx-auto justify-content-center shadow-lg py-5 my-5 text-center rounded-3 bg-white" style="max-width: 940px; ">
                    <div class="col-md-8">
                        <div class="card border-0 bg-transparent">
                            <div class="card-body">
                                <h3 class="display-4 fw-bold">Yuk Bergabung dengan Kami!</h3>
                                <p class="text-black-50">Bergabung dengan kami untuk meningkatkan kualitas website anda!</p>
                                <a href="{{route('homepage2')}}#section-form" class="btn btn-lg btn-dark" >Klik Disini!</a>
                                {{-- <a href="#" class="btn btn-lg btn-dark ms-2"><i class="icon-google-play me-2"></i>Play Store</a> --}}
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>

</section>
@endsection

@section('js')
    
@endsection