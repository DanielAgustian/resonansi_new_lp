@extends('master-landing')
@section('page')
    | {{$string}}
@endsection
@section('banner')
    {{-- <section id="slider" class="slider-element dark min-vh-25 min-vh-md-50 include-header py-5"
        style="background-image: url('{{ asset('images/bg-hero.svg') }}');">
        <div class="slider-inner">

            <div class="vertical-middle text-center">
                <div class="container">
                    <div class="row align-items-center justify-content-center">

                        <div class="col-lg-12 col-md-12">
                            <h2 class="display-3 fw-bold text-white  mb-2">Pricing</h2>
                            <p class="lead mb-0 fw-normal">Pelayanan Maksimal dengan Harga Minimal</p>
                        </div>

                    </div>
                </div>
            </div>

        </div>
    </section> --}}
@endsection


@section('content')
    <section id="content">
        <div class="section p-0 dark mb-0"
            style="background: linear-gradient(to right, rgba(25,102,221,0.2), rgba(25,102,221,0.5)), url('{{ asset('images/rehaul/1.jpg') }}') no-repeat center center / cover; min-height: 400px; margin-top: 0px; margin-bottom: 0px">
            <div class="container">
                <h2 class="display-5  text-white text-center" style="margin-top: 100px">
                    <strong class="fw-bold">Coming Soon</strong>

                </h2>

            </div>
            <div class="clear"></div>
            {{-- <svg class="svg-curve" viewBox="0 0 1463 188.03">
                <path style="fill:#FFF;" d="M-.5,288.5s297-175,792-97,599,52,671,25v143H-.5Z"
                    transform="translate(0 -171.47)" />
            </svg> --}}



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
