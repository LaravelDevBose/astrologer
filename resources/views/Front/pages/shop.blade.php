@extends('Layouts.default')
@section('content')
<div class="container-fluid shopContainer px-0 overflow-hidden">
    <div class="row">
      <div class="col-12">
        <img src="{{ url('public/assets/images/shop1.jpg') }}" alt="" class="img-fluid" style="width: 100%;">
      </div>
    </div>

    <div class="container">
      <div class="row">
        <div class="col-12 collectionsCol ">
          <div class="card px-5 py-5">
            <p class="title-tag font-1">Hottest Collections</p>

            <div class="row">
                @foreach ($data['productCategories'] as $productCategory)
                <div class="col-lg-3 col-md-4 col-sm-6 col-12 item-col  my-2">
                    <div class="shop-item">
                      <div class="img-box mb-3">
                        <img src="{{ url('storage/app/public/productcategory/'.$productCategory->thumbImage) }}"
                          class="img-fluid" alt="">
                      </div>
                      <a href="" class="text-decoration-none text-black">{{ $productCategory->title ?? "N/A" }} <svg xmlns="http://www.w3.org/2000/svg"
                          width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="#000000" stroke-width="2"
                          stroke-linecap="round" stroke-linejoin="round">
                          <path d="M5 12h13M12 5l7 7-7 7" />
                        </svg> </a>
                    </div>
                  </div>
                @endforeach
            </div>
          </div>
        </div>


        <div class="col-12 my-5">
          <p class="text-center font-40-600 font-1" style="font-weight: 700;">Popular</p>
        </div>


        <div class="col-12">
          <div class="row">
            @foreach ($data['products'] as $product)
            <div class="col-lg-3 col-md-4 col-sm-6 col-12 item-col my-2">
                <a href="{{ route('product-detail',['id' => $product->id]) }}" class="popular-item">
                  <div class="img-box mb-3">
                    <img src="{{ url('storage/app/public/product/'.$product->thumbImages) }}" class="img-fluid img1" alt="">
                    {{-- <img src="assets/images/popular01.jpg" class="img-fluid img2" alt=""> --}}
  
                  </div>
                  <div class="para-box text-center">
                    <p class="my-0 product-title font-1">{{ $product->title ?? "N/A" }}</p>
                    <p class="my-0 product-price">{{ $product->price ?? "N/A" }}</p>
                  </div>
                </a>
              </div>
            @endforeach
            <div class="col-12 d-flex justify-content-center my-4">
              <a href="shopall.html">
                <button class="font-1 shopviewall-btn">View All</button>
              </a>
            </div>

          </div>
        </div>

      </div>
    </div>
  </div>

  <div class="container-fluid shopContainer2 px-0 overflow-hidden">
    <div class="row">
      <div class="container px-lg-auto px-4">
        <div class="row">
          <div class="col-lg-8 mx-auto my-5 text-center">
            <p class="font-24-700 font-1">Over 750,000 happy customers served and counting...</p>
            <p style="color: rgba(0, 0, 0, 0.75);">At Astrology Answers, our philosophy is simple: each of us possesses
              incredible talents and strengths – we just need a little help here and there to make our dreams a reality.
              And it’s this truth that guides us when we create and collect our products.</p>
            <p style="color:  rgba(0, 0, 0, 0.75);">We believe that no matter where you are on your journey, a new idea
              can elevate your quality of life.</p>
          </div>
        </div>
      </div>

    </div>

    <img src="assets/images/shop2.jpg" alt="" class="img-fluid" style="width: 100%;">

  </div>
@stop