@extends('Layouts.default')
@section('content')

<div class="container shopproductContainer py-5">
    <div class="row">
        <div class="col-lg-6 img-col">
            <div class="product-left mb-5 mb-lg-0">
                <div class="swiper-container product-slider mb-3">
                    <div class="swiper-wrapper">
                        <div class="swiper-slide">
                            <img src="https://au.pandora.net/dw/image/v2/BKNF_PRD/on/demandware.static/-/Sites-pandora-master-catalog/default/dw5d5b26f3/productimages/singlepackshot/562731C00_RGB.jpg?sw=900&sh=900&sm=fit&sfrm=png&bgcolor=F5F5F5" alt="..."  class="img-fluid">
                        </div>
                        <div class="swiper-slide">
                            <img src="https://cfs3.monicavinader.com/images/pdp-full/14315339-gp-bl-stch-non-f1.jpg" alt="..." class="img-fluid">
                        </div>
                        <div class="swiper-slide">
                            <img src="https://au.pandora.net/dw/image/v2/BKNF_PRD/on/demandware.static/-/Sites-pandora-master-catalog/default/dw5d5b26f3/productimages/singlepackshot/562731C00_RGB.jpg?sw=900&sh=900&sm=fit&sfrm=png&bgcolor=F5F5F5" alt="..."  class="img-fluid">
                        </div>
                    </div>
                    <div class="swiper-button-next"></div>
                    <div class="swiper-button-prev"></div>
                </div>
                
                <div class="swiper-container product-thumbs">
                    <div class="swiper-wrapper">
                        <div class="swiper-slide">
                            <img src="https://au.pandora.net/dw/image/v2/BKNF_PRD/on/demandware.static/-/Sites-pandora-master-catalog/default/dw5d5b26f3/productimages/singlepackshot/562731C00_RGB.jpg?sw=900&sh=900&sm=fit&sfrm=png&bgcolor=F5F5F5" alt="..." class="img-fluid">
                        </div>
                        <div class="swiper-slide">
                            <img src="https://cfs3.monicavinader.com/images/pdp-full/14315339-gp-bl-stch-non-f1.jpg" alt="..." class="img-fluid">
                        </div>
                        <div class="swiper-slide">
                            <img src="https://au.pandora.net/dw/image/v2/BKNF_PRD/on/demandware.static/-/Sites-pandora-master-catalog/default/dw5d5b26f3/productimages/singlepackshot/562731C00_RGB.jpg?sw=900&sh=900&sm=fit&sfrm=png&bgcolor=F5F5F5" alt="..." class="img-fluid">
                        </div>
                    
                    
                    </div>
                </div>
            
        </div>
        </div>
        <div class="col-lg-5 m-auto description-col">
            <small class="category-tag">ASTROLOGY ANSWERS</small>
            <p class="tittle-tag text-black font-1 my-2">{{ $product->title ?? "N/A" }}</p>
            <p class="my-0 product-price">{{ $product->price ?? "N/A" }}</p>

            <p style="color : rgba(0, 0, 0, 0.75)">Pay in 4 interest-free installments for orders over <strong>$50.00</strong> with <svg height="16px" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" class="shop-pay-logo" viewBox="0 0 341 81" fill="none">
                <path fill-rule="evenodd" clip-rule="evenodd" d="M227.297 0C220.448 0 214.896 5.47237 214.896 12.2229V67.8125C214.896 74.563 220.448 80.0354 227.297 80.0354H328.357C335.206 80.0354 340.758 74.563 340.758 67.8125V12.2229C340.758 5.47237 335.206 0 328.357 0H227.297ZM244.999 55.8917V41.8012H253.993C262.21 41.8012 266.579 37.2604 266.579 30.379C266.579 23.4976 262.21 19.3782 253.993 19.3782H239.205V55.8917H244.999ZM244.999 24.8084H252.663C257.982 24.8084 260.595 26.9617 260.595 30.5663C260.595 34.1708 258.077 36.3242 252.9 36.3242H244.999V24.8084ZM276.795 56.6407C281.212 56.6407 284.109 54.7214 285.439 51.4445C285.819 55.0959 288.052 56.9684 292.896 55.7044L292.944 51.819C290.996 52.0063 290.616 51.3041 290.616 49.2912V39.7415C290.616 34.124 286.864 30.8003 279.93 30.8003C273.09 30.8003 269.148 34.1708 269.148 39.8819H274.468C274.468 37.1668 276.415 35.5284 279.835 35.5284C283.444 35.5284 285.107 37.0732 285.059 39.7415V40.9586L278.932 41.614C272.045 42.3629 268.246 44.9376 268.246 49.4316C268.246 53.1298 270.905 56.6407 276.795 56.6407ZM277.982 52.4276C274.99 52.4276 273.803 50.836 273.803 49.2443C273.803 47.091 276.273 46.1079 281.117 45.5462L284.917 45.1249C284.679 49.2443 281.877 52.4276 277.982 52.4276ZM310.537 57.7174C308.115 63.5221 304.22 65.2541 298.141 65.2541H295.528V60.4793H298.331C301.655 60.4793 303.27 59.4494 305.028 56.5002L294.246 31.5493H300.23L307.925 49.7593L314.764 31.5493H320.606L310.537 57.7174Z" fill="rgb(90, 49, 244)"></path>
                <path d="M29.5136 35.1798C21.5797 33.4835 18.0451 32.8197 18.0451 29.8064C18.0451 26.9722 20.4371 25.5604 25.221 25.5604C29.4282 25.5604 32.5036 27.3726 34.7674 30.9232C34.9382 31.1972 35.2906 31.292 35.5789 31.1445L44.506 26.6983C44.8263 26.5402 44.9438 26.1399 44.7623 25.8343C41.0569 19.5022 34.2121 16.0358 25.1996 16.0358C13.3574 16.0358 6 21.7885 6 30.9338C6 40.648 14.9591 43.1029 22.9038 44.7992C30.8484 46.4955 34.3936 47.1592 34.3936 50.1725C34.3936 53.1858 31.8095 54.6082 26.6518 54.6082C21.8893 54.6082 18.3548 52.4589 16.2191 48.2866C16.059 47.981 15.6852 47.8546 15.3756 48.0127L6.46985 52.364C6.16017 52.5221 6.03203 52.8908 6.19221 53.2069C9.72673 60.2134 16.9773 64.1538 26.6625 64.1538C38.996 64.1538 46.4494 58.496 46.4494 49.0663C46.4494 39.6365 37.4476 36.8972 29.5136 35.2009V35.1798Z" fill="rgb(90, 49, 244)"></path>
                <path d="M77.3525 16.0358C72.291 16.0358 67.8168 17.8059 64.6026 20.9561C64.3997 21.1458 64.0687 21.0088 64.0687 20.7349V0.621625C64.0687 0.273937 63.791 0 63.4387 0H52.2692C51.9168 0 51.6391 0.273937 51.6391 0.621625V63.0476C51.6391 63.3952 51.9168 63.6692 52.2692 63.6692H63.4387C63.791 63.6692 64.0687 63.3952 64.0687 63.0476V35.6644C64.0687 30.3754 68.1798 26.319 73.7219 26.319C79.2639 26.319 83.279 30.2911 83.279 35.6644V63.0476C83.279 63.3952 83.5566 63.6692 83.909 63.6692H95.0785C95.4309 63.6692 95.7085 63.3952 95.7085 63.0476V35.6644C95.7085 24.1591 88.0628 16.0464 77.3525 16.0464V16.0358Z" fill="rgb(90, 49, 244)"></path>
                <path d="M118.389 14.2552C112.324 14.2552 106.622 16.0779 102.542 18.7224C102.265 18.9016 102.169 19.2703 102.34 19.5548L107.262 27.8466C107.444 28.1416 107.828 28.247 108.127 28.0679C111.224 26.2241 114.769 25.2653 118.389 25.2864C128.138 25.2864 135.303 32.0716 135.303 41.0377C135.303 48.6763 129.569 54.3342 122.297 54.3342C116.371 54.3342 112.26 50.9311 112.26 46.1266C112.26 43.3767 113.445 41.122 116.531 39.5311C116.851 39.3625 116.969 38.9727 116.777 38.6671L112.132 30.9126C111.982 30.6598 111.662 30.5439 111.373 30.6492C105.148 32.925 100.78 38.4037 100.78 45.7579C100.78 56.8839 109.761 65.1863 122.287 65.1863C136.916 65.1863 147.434 55.1876 147.434 40.8481C147.434 25.476 135.197 14.2446 118.368 14.2446L118.389 14.2552Z" fill="rgb(90, 49, 244)"></path>
                <path d="M180.098 15.9515C174.449 15.9515 169.409 18.006 165.725 21.6304C165.522 21.8306 165.191 21.6831 165.191 21.4092V17.0473C165.191 16.6996 164.914 16.4256 164.561 16.4256H153.68C153.328 16.4256 153.05 16.6996 153.05 17.0473V79.3784C153.05 79.7261 153.328 80 153.68 80H164.849C165.202 80 165.48 79.7261 165.48 79.3784V58.9385C165.48 58.6645 165.811 58.5276 166.013 58.7067C169.687 62.0782 174.545 64.0485 180.109 64.0485C193.211 64.0485 203.43 53.5862 203.43 39.9947C203.43 26.4032 193.2 15.941 180.109 15.941L180.098 15.9515ZM177.995 53.4914C170.541 53.4914 164.892 47.6439 164.892 39.9104C164.892 32.177 170.53 26.3295 177.995 26.3295C185.459 26.3295 191.086 32.0822 191.086 39.9104C191.086 47.7387 185.533 53.4914 177.984 53.4914H177.995Z" fill="rgb(90, 49, 244)"></path>
              </svg> <a href="http://" target="_blank" rel="noopener noreferrer" class="text-black"  type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal">Learn more</a></p>
            <div class="qty-box">
                <small class="qty-title">Quantity</small>
                <div class="btn-grp">
                    <button id="decrease-quantity">-</button>
                    <input type="text" class="text-center" id="cart-quantity" value="1" >
                    <input type="hidden" name="product_id" id="product_id" value="{{$product->id}}">
                    <button id="increase-quantity">+</button>
                </div>
            </div>
            <div class="action-box">
              
           
                    <button class="mt-3 font-1 addtocart" type="submit">Add to cart</button>
                    <button class="my-2 font-1 buynow">buy with <svg height="16px" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" class="shop-pay-logo" viewBox="0 0 341 81" fill="none">
                        <path fill-rule="evenodd" clip-rule="evenodd" d="M227.297 0C220.448 0 214.896 5.47237 214.896 12.2229V67.8125C214.896 74.563 220.448 80.0354 227.297 80.0354H328.357C335.206 80.0354 340.758 74.563 340.758 67.8125V12.2229C340.758 5.47237 335.206 0 328.357 0H227.297ZM244.999 55.8917V41.8012H253.993C262.21 41.8012 266.579 37.2604 266.579 30.379C266.579 23.4976 262.21 19.3782 253.993 19.3782H239.205V55.8917H244.999ZM244.999 24.8084H252.663C257.982 24.8084 260.595 26.9617 260.595 30.5663C260.595 34.1708 258.077 36.3242 252.9 36.3242H244.999V24.8084ZM276.795 56.6407C281.212 56.6407 284.109 54.7214 285.439 51.4445C285.819 55.0959 288.052 56.9684 292.896 55.7044L292.944 51.819C290.996 52.0063 290.616 51.3041 290.616 49.2912V39.7415C290.616 34.124 286.864 30.8003 279.93 30.8003C273.09 30.8003 269.148 34.1708 269.148 39.8819H274.468C274.468 37.1668 276.415 35.5284 279.835 35.5284C283.444 35.5284 285.107 37.0732 285.059 39.7415V40.9586L278.932 41.614C272.045 42.3629 268.246 44.9376 268.246 49.4316C268.246 53.1298 270.905 56.6407 276.795 56.6407ZM277.982 52.4276C274.99 52.4276 273.803 50.836 273.803 49.2443C273.803 47.091 276.273 46.1079 281.117 45.5462L284.917 45.1249C284.679 49.2443 281.877 52.4276 277.982 52.4276ZM310.537 57.7174C308.115 63.5221 304.22 65.2541 298.141 65.2541H295.528V60.4793H298.331C301.655 60.4793 303.27 59.4494 305.028 56.5002L294.246 31.5493H300.23L307.925 49.7593L314.764 31.5493H320.606L310.537 57.7174Z" fill="white"></path>
                        <path d="M29.5136 35.1798C21.5797 33.4835 18.0451 32.8197 18.0451 29.8064C18.0451 26.9722 20.4371 25.5604 25.221 25.5604C29.4282 25.5604 32.5036 27.3726 34.7674 30.9232C34.9382 31.1972 35.2906 31.292 35.5789 31.1445L44.506 26.6983C44.8263 26.5402 44.9438 26.1399 44.7623 25.8343C41.0569 19.5022 34.2121 16.0358 25.1996 16.0358C13.3574 16.0358 6 21.7885 6 30.9338C6 40.648 14.9591 43.1029 22.9038 44.7992C30.8484 46.4955 34.3936 47.1592 34.3936 50.1725C34.3936 53.1858 31.8095 54.6082 26.6518 54.6082C21.8893 54.6082 18.3548 52.4589 16.2191 48.2866C16.059 47.981 15.6852 47.8546 15.3756 48.0127L6.46985 52.364C6.16017 52.5221 6.03203 52.8908 6.19221 53.2069C9.72673 60.2134 16.9773 64.1538 26.6625 64.1538C38.996 64.1538 46.4494 58.496 46.4494 49.0663C46.4494 39.6365 37.4476 36.8972 29.5136 35.2009V35.1798Z" fill="white"></path>
                        <path d="M77.3525 16.0358C72.291 16.0358 67.8168 17.8059 64.6026 20.9561C64.3997 21.1458 64.0687 21.0088 64.0687 20.7349V0.621625C64.0687 0.273937 63.791 0 63.4387 0H52.2692C51.9168 0 51.6391 0.273937 51.6391 0.621625V63.0476C51.6391 63.3952 51.9168 63.6692 52.2692 63.6692H63.4387C63.791 63.6692 64.0687 63.3952 64.0687 63.0476V35.6644C64.0687 30.3754 68.1798 26.319 73.7219 26.319C79.2639 26.319 83.279 30.2911 83.279 35.6644V63.0476C83.279 63.3952 83.5566 63.6692 83.909 63.6692H95.0785C95.4309 63.6692 95.7085 63.3952 95.7085 63.0476V35.6644C95.7085 24.1591 88.0628 16.0464 77.3525 16.0464V16.0358Z" fill="white"></path>
                        <path d="M118.389 14.2552C112.324 14.2552 106.622 16.0779 102.542 18.7224C102.265 18.9016 102.169 19.2703 102.34 19.5548L107.262 27.8466C107.444 28.1416 107.828 28.247 108.127 28.0679C111.224 26.2241 114.769 25.2653 118.389 25.2864C128.138 25.2864 135.303 32.0716 135.303 41.0377C135.303 48.6763 129.569 54.3342 122.297 54.3342C116.371 54.3342 112.26 50.9311 112.26 46.1266C112.26 43.3767 113.445 41.122 116.531 39.5311C116.851 39.3625 116.969 38.9727 116.777 38.6671L112.132 30.9126C111.982 30.6598 111.662 30.5439 111.373 30.6492C105.148 32.925 100.78 38.4037 100.78 45.7579C100.78 56.8839 109.761 65.1863 122.287 65.1863C136.916 65.1863 147.434 55.1876 147.434 40.8481C147.434 25.476 135.197 14.2446 118.368 14.2446L118.389 14.2552Z" fill="white"></path>
                        <path d="M180.098 15.9515C174.449 15.9515 169.409 18.006 165.725 21.6304C165.522 21.8306 165.191 21.6831 165.191 21.4092V17.0473C165.191 16.6996 164.914 16.4256 164.561 16.4256H153.68C153.328 16.4256 153.05 16.6996 153.05 17.0473V79.3784C153.05 79.7261 153.328 80 153.68 80H164.849C165.202 80 165.48 79.7261 165.48 79.3784V58.9385C165.48 58.6645 165.811 58.5276 166.013 58.7067C169.687 62.0782 174.545 64.0485 180.109 64.0485C193.211 64.0485 203.43 53.5862 203.43 39.9947C203.43 26.4032 193.2 15.941 180.109 15.941L180.098 15.9515ZM177.995 53.4914C170.541 53.4914 164.892 47.6439 164.892 39.9104C164.892 32.177 170.53 26.3295 177.995 26.3295C185.459 26.3295 191.086 32.0822 191.086 39.9104C191.086 47.7387 185.533 53.4914 177.984 53.4914H177.995Z" fill="white"></path>
                      </svg></button>
                    <div class="text-center"><small class="text-center mx-auto font-12-400 text-decoration-underline">More payment options</small></div>
            </div>

            <p>{!! $product->description ?? "N/A" !!}</p>
        </div>

    </div>
</div>




<div class="container-fluid faqContainer" style="background-color: #f2e9f7;">
<div class="container">
    <div class="row">
        <div class="col-sm-8 mx-auto py-5">
            <p class="text-center font-1 font-24-700">FAQ's</p>
            <div class="accordion" id="accordionPanelsStayOpenExample">
                <div class="accordion-item mb-3">
                  <h2 class="accordion-header">
                    <button class="accordion-button font-1 collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#panelsStayOpen-collapseOne" aria-expanded="true" aria-controls="panelsStayOpen-collapseOne">
                        <svg class="me-2" xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="#000000" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><polyline points="9 11 12 14 22 4"></polyline><path d="M21 12v7a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2V5a2 2 0 0 1 2-2h11"></path></svg> Refund Policy
                    </button>
                  </h2>
                  <div id="panelsStayOpen-collapseOne" class="accordion-collapse collapse ">
                    <div class="accordion-body">
                     Lorem ipsum dolor sit amet consectetur adipisicing elit. Tempore odio, distinctio cumque ducimus quaerat odit provident accusamus delectus molestias, exercitationem quasi magnam sint molestiae, facilis ab. Quos dignissimos laboriosam doloribus eius tempore velit consequuntur odit corrupti illum, et accusantium eaque numquam nesciunt possimus ipsam nemo qui, similique porro ullam consectetur.
                    </div>
                  </div>
                </div>
                <div class="accordion-item mb-3">
                  <h2 class="accordion-header">
                    <button class="accordion-button font-1 collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#panelsStayOpen-collapseTwo" aria-expanded="false" aria-controls="panelsStayOpen-collapseTwo">
                        <svg class="me-2" xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="#000000" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><polyline points="9 11 12 14 22 4"></polyline><path d="M21 12v7a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2V5a2 2 0 0 1 2-2h11"></path></svg>  Having issues with your products?
                    </button>
                  </h2>
                  <div id="panelsStayOpen-collapseTwo" class="accordion-collapse collapse">
                    <div class="accordion-body">
                        Lorem, ipsum dolor sit amet consectetur adipisicing elit. Facilis sit suscipit, reiciendis maxime repellat, corrupti fuga quibusdam vero nulla officia voluptatibus. Molestiae optio fugit esse ipsa sequi eos possimus, dolor in corrupti delectus ut sapiente quia quae totam accusantium rem saepe quaerat soluta voluptates harum, assumenda sed officia reprehenderit. Fugit?
                    </div>
                  </div>
                </div>

              </div>
        </div>
    </div>
</div>
</div>
<div class="container-fluid shopContainer ">

<div class="container">
  <div class="row">





  <div class="col-12 py-5">
    <div class="row">
    <p class="title-tag font-1 font-30-700">You may also like</p>
      @foreach ($products as $product)
      <div class="col-lg-3 col-md-4 col-sm-6 col-12 item-col my-2">
        <a href="" class="popular-item">
            <div class="img-box mb-3" >
                <img src="{{ url('storage/product/'.$product->thumbImages) }}"  class="img-fluid img1" alt="">
                {{-- <img src="assets/images/popular01.jpg" class="img-fluid img2" alt=""> --}}

            </div>
           <div class="para-box text-center">
            <p class="my-0 product-title font-1">{{ $product->title ?? "N/A" }}</p>
            <p class="my-0 product-price">{{ $product->price ?? "N/A" }}</p>
           </div>
        </a>
      </div>
      @endforeach
    </div>
  </div>

  </div>
</div>



</div>
<script src="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/2.1.2/sweetalert.min.js" integrity="sha512-AA1Bzp5Q0K1KanKKmvN/4d3IRKVlv9PYgwFPvm32nPO6QS8yH1HO7LbgB1pgiOxPtfeg5zEn2ba64MUcqJx6CA==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.1/jquery.min.js" integrity="sha512-v2CJ7UaYy4JwqLDIrZUI/4hqeoQieOmAZNXBeQyjo21dadnwR+8ZaIJVT8EE2iyI61OV8e6M8PP2/4hpQINQ/g==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
<script type="text/javascript">
    $(document).ready(function() {
        $('#increase-quantity').on('click', function() {
            let currentValue = parseInt($('#cart-quantity').val());
            $('#cart-quantity').val(currentValue + 1);
        });

        $('#decrease-quantity').on('click', function() {
            let currentValue = parseInt($('#cart-quantity').val());
            if (currentValue > 1) {
                $('#cart-quantity').val(currentValue - 1);
            }
        });
    });

</script>
<script type="text/javascript">
$(document).ready(function() {
  $('.addtocart').click(function(e) {
    e.preventDefault();
    let token = "{{ csrf_token() }}"; 
    let product_id = $('#product_id').val();
    let cart_quantity = $('#cart-quantity').val();

    if (product_id === '') {
      swal('Warning!', 'Please select a product.', 'warning');
      return;
    }

    $.ajax({
      type: 'POST',
      url: "{{ url('addToCart') }}",
      data: {
        _token: token,
        product_id: product_id,
        cart_quantity: cart_quantity,
      },
      success: function(data) {
        swal("Successfully added.", "", "success").then(function() {
          location.reload();
        });
      },
      error: function(xhr, status, error) {
        console.log('Error: ' + error);
        swal('Error!', 'An error occurred while processing your request.', 'error');
      }
    });
  });
});
</script>
@stop