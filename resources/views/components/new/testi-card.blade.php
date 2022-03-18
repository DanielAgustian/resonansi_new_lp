<div class="swiper-slide">
    {{-- <img src="{{ asset('images/emas.png') }}" alt="" class="img-slide"> --}}
    <div class="d-flex justify-content-center ">
        <div class="testi-box">
            <div class="limiter text-center">
                <div class="d-flex justify-content-center">
                    <img src="{{$img}}"
                    alt="" class="img-logo-testi text-center ">
                </div>
                <h3 class="text-white  testi-title text-center mb-1">{{$name}}</h3>
                <h4 class="text-white testi-jabatan">{{$jabatan}}</h4>
                <h1  style="color: white; font-size:30px;line-height: 20px " class="text-start mb-0">"</h1>
                <h5 class="text-white testi-details fw-normal text-center">
                    {!!$details!!}
                </h5>
                <h1  style="color: white; font-size:30px; line-height: 20px " class="text-end">"</h1>
    
            </div>
    
        </div>
    </div>
    
</div>
