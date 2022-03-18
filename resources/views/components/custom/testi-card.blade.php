<div class="swiper-slide">
    {{-- <img src="{{ asset('images/emas.png') }}" alt="" class="img-slide"> --}}
    <div class="testi-box">
        <div class="limiter text-center">
            <div class="d-flex justify-content-center">
                <img src="{{$img}}"
                alt="" class="img-logo-testi text-center ">
            </div>
            <h3 class="testi-details text-center mb-1">{{$name}}</h3>
            <h4 class="testi-details">{{$jabatan}}</h4>
            <h1  style="color: white; font-size:30px;line-height: 20px " class="text-start mb-0">"</h1>
            <h4 class="testi-details text-center">
                {!!$details!!}
            </h4>
            <h1  style="color: white; font-size:30px; line-height: 20px " class="text-end">"</h1>

        </div>

    </div>
</div>
