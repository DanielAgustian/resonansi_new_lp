<div class="col-lg-4 col-md-7 col-12 mb-5 pricing-table">
    <div class="card shadow h-100 mx-4"
        style="background-image: url('{{ asset('images/pricing-bg.svg') }}'); background-position: 0 0; background-size: 100% 180px;">
        <div class="d-flex flex-column justify-content-between h-100">
            <div>
              <div class="" style="height: 160px">
                <h5 class="text-uppercase ls1 mb-2 text-white text-center">{!! $title !!}</h5>
                <h3 class="ls0 fw-bold  text-white text-center"> {!! $harga !!}</h3>
              </div>

                {{-- <p class="mb-5 text-black-50">Phosfluorescently negotiate alternative human capital with fully tested leadership skills. Quickly enable.</p> --}}
                {{-- <ul class="list-new mt-4"> --}}
                  <div >
                    {{ $details }}
                  </div>

                    {{-- <li><i class="icon-check-circle color"></i>7 Days Free Trail</li>
            <li><i class="icon-check-circle color"></i>App-In-Purchase</li>
            <li><i class="icon-check-circle color"></i>100% Safe &amp; Secure</li>
            <li><i class="icon-check-circle color"></i>Liecenced Company</li>
            <li><i class="icon-check-circle color"></i>No Hidden Charges</li> --}}
                {{-- </ul> --}}
            </div>
            <button class="btn w-100 text-white bg-color  btn-order rounded-3 p-3 fw-semibold text-uppercase mt-4" data-type="{{$id}}">Order Now</button>
        </div>


    </div>
</div>
