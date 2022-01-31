{{-- <div class="col-lg-4 col-md-6  bottommargin-lg">
    <div class="feature-box media-box mx-3">
        <div class="fbox-icon d-flex justify-content-center align-items-center">
            <img src="{{$pic}}" alt="" class="img-section-1-alt">
        </div>
        <div class="fbox-content">
            <h2 class="h4 fw-bold mb-4 text-center">{{$title}}</h2>
            <div class="lead fw-normal text-black-50 text-justify" style="text-align: justify;"> </div>
        </div>
    </div>
</div> --}}


<div class="col-lg-12 col-md-12" id="{{$id}}">
    <div class="feature-box custom-icon fbox-plain" >
        <div class="d-flex justify-content-center">
            <div class="fbox-icon">
                <img src="{{$pic}}" alt="" class="">
            </div>
        </div>
        
        <div class="fbox-content">
            <h3>{{$title}}</h3>
            <div class="detail-service">
                {{$details}}
            </div>
            
        </div>
    </div>
    <div class="line line-sm"></div>
</div>