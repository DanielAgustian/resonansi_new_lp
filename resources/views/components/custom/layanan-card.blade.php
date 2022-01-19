<div class="col-lg-3 col-md-4 col-6 mb-5">
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
</div>