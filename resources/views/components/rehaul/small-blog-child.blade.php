<div class="col-lg-12 col-md-4 col-6">

    <a href="{{route('blogsDetailPageV2', ['slug'=> $slug])}}">
        <div class="blog-right-child" >
            <img src="{{$img}}" alt="" class="img-blog-detail rounded">
            <div class="div-info">
                <h5 class="info-title">{{$title}}</h5>
                <p class="span-detail">{{$date}}</p>
            </div>
        </div>
    </a>
</div>



