@extends('layouts.main')

@section('title', 'Converse')

@section('banner')
<div id="carouselExampleIndicators" class="carousel slide" data-bs-ride="carousel">
    <div class="carousel-indicators">
      <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
      <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1" aria-label="Slide 2"></button>
      <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2" aria-label="Slide 3"></button>
    </div>
    <div class="carousel-inner">
      <div class="carousel-item active">
        <img src="{{asset('Image/banner1.jpg')}}" class="d-block w-100" alt="...">
      </div>
      <div class="carousel-item">
        <img src="{{asset('Image/banner2.jpg')}}" class="d-block w-100" alt="...">
      </div>
      <div class="carousel-item">
        <img src="{{asset('Image/banner3.jpg')}}" class="d-block w-100" alt="...">
      </div>
    </div>
    <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="prev">
      <span class="carousel-control-prev-icon" aria-hidden="true"></span>
      <span class="visually-hidden">Previous</span>
    </button>
    <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="next">
      <span class="carousel-control-next-icon" aria-hidden="true"></span>
      <span class="visually-hidden">Next</span>
    </button>
  </div>
@endsection

@section('product-sample')
<div class="row">
    <div class="col-sm-4">
        <div class="card" style="width: 18rem;">
            <img class="img-responsive" src="{{asset('Image/tempora.png')}}" class="card-img-top" alt="...">
            <div class="card-body">
                <img src="{{asset('Image/giay3.jpg')}}" class="card-img-top" alt="...">
                <div id="text-box-1280313690" class="text-box banner-layer x50 md-x50 lg-x50 y20 md-y20 lg-y20 res-text">
                    <div class="text dark">
                        <div class="text-inner text-center">
                            <a href="" target="_self" class="button primary lowercase hide-for-medium">
                                <span>Xem sản phẩm</span>
                            </a>
                        </div>
                    </div><!-- text-box-inner -->
                </div>
            </div>
        </div>
    </div>
    <div class="col-sm-4">
        <div class="card" style="width: 18rem;">
            <img class="img-responsive" src="{{asset('Image/laboret.png')}}" class="card-img-top" alt="...">
            <div class="card-body">
                <img src="{{asset('Image/giay3.jpg')}}" class="card-img-top" alt="...">
                <div id="text-box-1280313690" class="text-box banner-layer x50 md-x50 lg-x50 y20 md-y20 lg-y20 res-text">
                    <div class="text dark">
                        <div class="text-inner text-center">
                            <a href="" target="_self" class="button primary lowercase hide-for-medium">
                                <span>Xem sản phẩm</span>
                            </a>
                        </div>
                    </div><!-- text-box-inner -->
                </div>
            </div>
        </div>
    </div>
    <div class="col-sm-4">
        <div class="card" style="width: 18rem;">
            <img class="img-responsive" src="{{asset('Image/quisantem.png')}}" class="card-img-top" alt="...">
            <div class="card-body">
                <img src="{{asset('Image/giay3.jpg')}}" class="card-img-top" alt="...">
                <div id="text-box-1280313690" class="text-box banner-layer x50 md-x50 lg-x50 y20 md-y20 lg-y20 res-text">
                    <div class="text dark">
                        <div class="text-inner text-center">
                            <a href="" target="_self" class="button primary lowercase hide-for-medium">
                                <span>Xem sản phẩm</span>
                            </a>
                        </div>
                    </div><!-- text-box-inner -->
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
