<!-- {{-- <div class="col-lg-3 col-md-4 col-6 mb-5">
    <div class="layanan card h-100 d-flex flex-column">
            <div class="header-card">
                <h4 class="title text-center mb-0">{{$title}}</h4>
            </div>
            <div class="body-card d-flex flex-column justify-content-between" >
                {!!$details!!}
                <div class="data">
                    <div class="d-flex justify-content-center">
                        <p class="blue-text">{{$harga}}</p>

                    </div>
                    <div class="d-flex justify-content-center">
                        <button class="btn btn-blue btn-order">
                            Order Now
                        </button>
                    </div>
                </div>
            </div>



    </div>
</div> --}} -->

<div class="col-lg-4 col-md-6 col-12 mb-5 pricing-table">
    <div class="card shadow h-100"
        style="background-image: url('{{ asset('images/pricing-bg.svg') }}'); background-position: 0 0; background-size: 100% 180px;">
        <div class="d-flex flex-column justify-content-between h-100">
            <div>
                <div class="" style="height:160px">
                  <h6 class="text-uppercase ls1 mb-2 text-white text-center">{!! $title !!}</h6>
                  <h3 class="ls0 fw-bold mb-5 text-white text-center">Start from <br> {{ $harga }}</h3>
                </div>


                    {{ $details }}


            </div>
            <button class="btn w-100 text-white bg-color  btn-order rounded-3 p-3 fw-semibold text-uppercase mt-4" data-type="{{$id}}"> Order Now</button>
        </div>


    </div>
</div>
