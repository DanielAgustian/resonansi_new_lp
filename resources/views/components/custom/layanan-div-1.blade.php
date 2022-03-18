<div class="col-lg-4 col-md-6  bottommargin-lg ">
    <div class=" d-flex flex-column justify-content-between h-100">
      <div class="feature-box media-box mx-3">
          <div class="fbox-icon d-flex justify-content-center align-items-center">
              <img src="{{ $pic }}" alt="" class="img-section-1-alt">
          </div>
          <div class="fbox-content">
              <h2 class="h4 fw-bold mb-2 text-center">{{ $title }}</h2>
              <div class=" fw-normal text-black-50 " >{!! $details !!}
              </div>
          </div>
      </div>
      <div class="d-flex justify-content-center mt-2">
          <a href="{{ route('servicePage') }}" class="text-center lead fw-bold">
              Selengkapnya >
          </a>
      </div>
    </div>



</div>
