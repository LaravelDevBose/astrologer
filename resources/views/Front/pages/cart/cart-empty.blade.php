@extends('layouts.default')
@section('content')


    <div class="container">
        <div class="row">
            <div class="col-12 d-flex justify-content-center flex-column align-items-center mt-5 mb-3">
                <p class="tittle-tag  font-40-600 text-black font-1 my-2">Your cart is empty</p>

                <a href="{{ url('/shop') }}">
                    <button class="font-1 shopviewall-btn">Continue Shopping</button>
                  </a>

            </div>

        </div>
    </div>
    <div class="container-fluid shopContainer bg-sec">

        <div class="container">
          <div class="row">

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
@stop