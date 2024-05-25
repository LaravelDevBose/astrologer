@extends('Layouts.default')
@section('content')
<!---------------------------------articles start------------------------------------------>

<div class="container my-lg-2">
  <div class="row mb-4">
    <div class="col-md-8">
      <div class="box">
        <p class="font-45-700 text-black font-1 my-0" style="line-height: 55px;"> {{$data['article']->title}}</p>
        <ul class="list-unstyled mt-4">
          <li class="font-20-400 text-secondary"> <i> {{$data['article']->createdBy}}</i> </li>
          <li class="font-20-400 text-secondary"> <i>{{date("F j, Y", strtotime($data['article']->created_at))}}</i> </li>
        </ul>
        <div class="row">
          <div class="img-box">
            <img src="{{asset('storage/horoscopecategory')}}/{{$data['article']->thumbImage}}" class="img-fluid rounded-2" alt="" style="width:100%">
          </div>

          <div class="para-box mt-4">
          {!!$data['article']->contant!!}
          </div>
        </div>

        <div class="aurthorBox p-4 rounded-4" style="background-color: #f3f4f6;">
          <p class="font-25-700 font-1">About The Author</p>
          <p class="font-24-700 font-1 my-4">{{$data['article']->createdBy}}</p>
          <p class="font-17-400">Rhiannon Liselle is a nomadic Sagittarius with a passion for writing and trying to help others grow. She’s studied astrology for about 10 years, and has been writing about metaphysical, spiritual, and esoteric subjects for 3 years. Rhiannon lives in the mountains of Colorado, and loves drinking coffee and spending time with her coloring books.</p>
        </div>
      </div>

      <div class="box d-flex flex-column justify-content-center">
        <p class="font-25-700 font-1 text-center mx-auto my-3 w-80">Did You Enjoy This Article?
          Please Share It With Your Friends!</p>

        <div class="social  mx-auto">
          <ul class="list-unstyled d-flex justify-content-md-center justify-content-evenly flex-wrap">
            <li class="mb-2"><a href="http://" target="_blank" rel="noopener noreferrer" class="text-decoration-none">
                <div class="share-box overflow-hidden d-flex rounded-1 text-white" style="background-color: #3a5795;">
                  <div class="icon d-flex justify-content-center align-items-center" style="height: 45px; width: 45px; background-color: #3b5998;"><svg width="20px" height="20px" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                      <g id="SVGRepo_bgCarrier" stroke-width="0"></g>
                      <g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g>
                      <g id="SVGRepo_iconCarrier">
                        <path d="M20 12.05C19.9813 10.5255 19.5273 9.03809 18.6915 7.76295C17.8557 6.48781 16.673 5.47804 15.2826 4.85257C13.8921 4.2271 12.3519 4.01198 10.8433 4.23253C9.33473 4.45309 7.92057 5.10013 6.7674 6.09748C5.61422 7.09482 4.77005 8.40092 4.3343 9.86195C3.89856 11.323 3.88938 12.8781 4.30786 14.3442C4.72634 15.8103 5.55504 17.1262 6.69637 18.1371C7.83769 19.148 9.24412 19.8117 10.75 20.05V14.38H8.75001V12.05H10.75V10.28C10.7037 9.86846 10.7483 9.45175 10.8807 9.05931C11.0131 8.66687 11.23 8.30827 11.5161 8.00882C11.8022 7.70936 12.1505 7.47635 12.5365 7.32624C12.9225 7.17612 13.3368 7.11255 13.75 7.14003C14.3498 7.14824 14.9482 7.20173 15.54 7.30003V9.30003H14.54C14.3676 9.27828 14.1924 9.29556 14.0276 9.35059C13.8627 9.40562 13.7123 9.49699 13.5875 9.61795C13.4627 9.73891 13.3667 9.88637 13.3066 10.0494C13.2464 10.2125 13.2237 10.387 13.24 10.56V12.07H15.46L15.1 14.4H13.25V20C15.1399 19.7011 16.8601 18.7347 18.0985 17.2761C19.3369 15.8175 20.0115 13.9634 20 12.05Z" fill="#ffffff"></path>
                      </g>
                    </svg></div>
                  <div class="title  px-3 my-auto font-14-700">Facebook</div>
                </div>
              </a>
            </li>

            <li class="mb-2">
              <a href="http://" target="_blank" rel="noopener noreferrer" class="text-decoration-none">
                <div class="share-box overflow-hidden d-flex rounded-1 text-white" style="background-color: #1c9cea;">
                  <div class="icon d-flex justify-content-center align-items-center" style="height: 45px; width: 45px; background-color: #1da1f2;"><svg width="20px" height="20px" viewBox="0 -2 20 20" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" fill="#000000">
                      <g id="SVGRepo_bgCarrier" stroke-width="0"></g>
                      <g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g>
                      <g id="SVGRepo_iconCarrier">
                        <title>twitter [#154]</title>
                        <desc>Created with Sketch.</desc>
                        <defs> </defs>
                        <g id="Page-1" stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                          <g id="Dribbble-Light-Preview" transform="translate(-60.000000, -7521.000000)" fill="#ffffff">
                            <g id="icons" transform="translate(56.000000, 160.000000)">
                              <path d="M10.29,7377 C17.837,7377 21.965,7370.84365 21.965,7365.50546 C21.965,7365.33021 21.965,7365.15595 21.953,7364.98267 C22.756,7364.41163 23.449,7363.70276 24,7362.8915 C23.252,7363.21837 22.457,7363.433 21.644,7363.52751 C22.5,7363.02244 23.141,7362.2289 23.448,7361.2926 C22.642,7361.76321 21.761,7362.095 20.842,7362.27321 C19.288,7360.64674 16.689,7360.56798 15.036,7362.09796 C13.971,7363.08447 13.518,7364.55538 13.849,7365.95835 C10.55,7365.79492 7.476,7364.261 5.392,7361.73762 C4.303,7363.58363 4.86,7365.94457 6.663,7367.12996 C6.01,7367.11125 5.371,7366.93797 4.8,7366.62489 L4.8,7366.67608 C4.801,7368.5989 6.178,7370.2549 8.092,7370.63591 C7.488,7370.79836 6.854,7370.82199 6.24,7370.70483 C6.777,7372.35099 8.318,7373.47829 10.073,7373.51078 C8.62,7374.63513 6.825,7375.24554 4.977,7375.24358 C4.651,7375.24259 4.325,7375.22388 4,7375.18549 C5.877,7376.37088 8.06,7377 10.29,7376.99705" id="twitter-[#154]"> </path>
                            </g>
                          </g>
                        </g>
                      </g>
                    </svg></div>
                  <div class="title  px-3 my-auto font-14-700">Twitter</div>
                </div>
              </a>
            </li>

            <li class="mb-2">
              <a href="http://" target="_blank" rel="noopener noreferrer" class="text-decoration-none">
                <div class="share-box overflow-hidden d-flex rounded-1 text-white" style="background-color: #ab081a;">
                  <div class="icon d-flex justify-content-center align-items-center" style="height: 45px; width: 45px; background-color: #bd081c;"><svg width="20px" height="20px" viewBox="0 0 20 20" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" fill="#000000">
                      <g id="SVGRepo_bgCarrier" stroke-width="0"></g>
                      <g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g>
                      <g id="SVGRepo_iconCarrier">
                        <title>pinterest [#180]</title>
                        <desc>Created with Sketch.</desc>
                        <defs> </defs>
                        <g id="Page-1" stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                          <g id="Dribbble-Light-Preview" transform="translate(-220.000000, -7399.000000)" fill="#ffffff">
                            <g id="icons" transform="translate(56.000000, 160.000000)">
                              <path d="M173.876,7239 C168.399,7239 164,7243.43481 164,7248.95866 C164,7253.05869 166.407,7256.48916 169.893,7258.07936 C169.893,7256.21186 169.88,7256.45286 171.303,7250.38046 C170.521,7248.80236 171.129,7246.19673 172.88,7246.19673 C175.31,7246.19673 173.659,7249.79964 173.378,7251.2174 C173.129,7252.30544 173.959,7253.14238 174.955,7253.14238 C176.864,7253.14238 178.108,7250.71524 178.108,7247.87063 C178.108,7245.69456 176.615,7244.10437 174.042,7244.10437 C169.467,7244.10437 168.307,7249.19966 169.893,7250.79893 C170.292,7251.40294 169.893,7251.43118 169.893,7252.22174 C169.616,7253.05768 167.403,7251.84259 167.403,7248.70757 C167.403,7245.86195 169.727,7242.51518 174.457,7242.51518 C178.191,7242.51518 180.681,7245.27609 180.681,7248.2054 C180.681,7252.13805 178.523,7254.98366 175.37,7254.98366 C174.291,7254.98366 173.295,7254.3978 172.963,7253.72824 C172.36,7256.07371 172.238,7257.26258 171.303,7258.58153 C172.216,7258.83261 173.129,7259 174.125,7259 C179.602,7259 184,7254.56519 184,7249.04235 C183.752,7243.43481 179.353,7239 173.876,7239" id="pinterest-[#180]"> </path>
                            </g>
                          </g>
                        </g>
                      </g>
                    </svg></div>
                  <div class="title  px-3 my-auto font-14-700">Pinterest</div>
                </div>
              </a>
            </li>

            <li class="mb-2">
              <a href="http://" target="_blank" rel="noopener noreferrer" class="text-decoration-none">
                <div class="share-box overflow-hidden d-flex rounded-1 text-white" style="background-color: #0077b5;">
                  <div class="icon d-flex justify-content-center align-items-center" style="height: 45px; width: 45px; background-color: #0076b3;"><svg fill="white" width="20px" height="20px" viewBox="0 0 32 32" version="1.1" xmlns="http://www.w3.org/2000/svg">
                      <g id="SVGRepo_bgCarrier" stroke-width="0"></g>
                      <g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g>
                      <g id="SVGRepo_iconCarrier">
                        <title>linkedin</title>
                        <path d="M28.778 1.004h-25.56c-0.008-0-0.017-0-0.027-0-1.199 0-2.172 0.964-2.186 2.159v25.672c0.014 1.196 0.987 2.161 2.186 2.161 0.010 0 0.019-0 0.029-0h25.555c0.008 0 0.018 0 0.028 0 1.2 0 2.175-0.963 2.194-2.159l0-0.002v-25.67c-0.019-1.197-0.994-2.161-2.195-2.161-0.010 0-0.019 0-0.029 0h0.001zM9.9 26.562h-4.454v-14.311h4.454zM7.674 10.293c-1.425 0-2.579-1.155-2.579-2.579s1.155-2.579 2.579-2.579c1.424 0 2.579 1.154 2.579 2.578v0c0 0.001 0 0.002 0 0.004 0 1.423-1.154 2.577-2.577 2.577-0.001 0-0.002 0-0.003 0h0zM26.556 26.562h-4.441v-6.959c0-1.66-0.034-3.795-2.314-3.795-2.316 0-2.669 1.806-2.669 3.673v7.082h-4.441v-14.311h4.266v1.951h0.058c0.828-1.395 2.326-2.315 4.039-2.315 0.061 0 0.121 0.001 0.181 0.003l-0.009-0c4.5 0 5.332 2.962 5.332 6.817v7.855z"></path>
                      </g>
                    </svg></div>
                  <div class="title  px-3 my-auto font-14-700">LinkedIn</div>
                </div>
              </a>
            </li>

            <li class="mb-2">
              <a href="http://" target="_blank" rel="noopener noreferrer" class="text-decoration-none">
                <div class="share-box overflow-hidden d-flex rounded-1 text-white" style="background-color: #dd3f32;">
                  <div class="icon d-flex justify-content-center align-items-center" style="height: 45px; width: 45px; background-color: #ea4335;"><svg height="20px" width="20px" version="1.1" id="_x32_" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="0 0 512 512" xml:space="preserve" fill="#000000">
                      <g id="SVGRepo_bgCarrier" stroke-width="0"></g>
                      <g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g>
                      <g id="SVGRepo_iconCarrier">
                        <style type="text/css">
                          .st0 {
                            fill: #ffffff;
                          }
                        </style>
                        <g>
                          <path class="st0" d="M440.917,67.925H71.083C31.827,67.925,0,99.752,0,139.008v233.984c0,39.256,31.827,71.083,71.083,71.083 h369.834c39.255,0,71.083-31.827,71.083-71.083V139.008C512,99.752,480.172,67.925,440.917,67.925z M178.166,321.72l-99.54,84.92 c-7.021,5.992-17.576,5.159-23.567-1.869c-5.992-7.021-5.159-17.576,1.87-23.567l99.54-84.92c7.02-5.992,17.574-5.159,23.566,1.87 C186.027,305.174,185.194,315.729,178.166,321.72z M256,289.436c-13.314-0.033-26.22-4.457-36.31-13.183l0.008,0.008l-0.032-0.024 c0.008,0.008,0.017,0.008,0.024,0.016L66.962,143.694c-6.98-6.058-7.723-16.612-1.674-23.583c6.057-6.98,16.612-7.723,23.582-1.674 l152.771,132.592c3.265,2.906,8.645,5.004,14.359,4.971c5.706,0.017,10.995-2.024,14.44-5.028l0.074-0.065l152.615-132.469 c6.971-6.049,17.526-5.306,23.583,1.674c6.048,6.97,5.306,17.525-1.674,23.583l-152.77,132.599 C282.211,284.929,269.322,289.419,256,289.436z M456.948,404.771c-5.992,7.028-16.547,7.861-23.566,1.869l-99.54-84.92 c-7.028-5.992-7.861-16.546-1.869-23.566c5.991-7.029,16.546-7.861,23.566-1.87l99.54,84.92 C462.107,387.195,462.94,397.75,456.948,404.771z"></path>
                        </g>
                      </g>
                    </svg></div>
                  <div class="title  px-3 my-auto font-14-700">Email</div>
                </div>
              </a>
            </li>

          </ul>
        </div>



        <div class="article-navigation-btn">
          <div class="nav-btn nav-btn-prev my-auto ">
            <a href="" class="d-flex flex-column justify-content-center">
              <div class="text-white font-1">Previous Article</div>
              <div class="font-14-400 tx-ep-1">Weekly Astrology Forecast: December 11th – 17th, 2023</div>
            </a>
          </div>
          <div class="nav-btn nav-btn-next border-0">

          </div>
        </div>
      </div>


      <div class="box pt-lg-5 pt-3">

        <div class="row">
        @foreach($data['previousearticle'] as $article)
          <div class="col-sm-6">
            <div class="homeblogCard my-3 d-block">
              <div class="img-box w-100 mb-2" style="max-height: 250px;">
                <img src="{{asset('storage/horoscopecategory')}}/{{$article->thumbImage}}" class="img-fluid" alt="">
              </div>
              <div class="para-box px-0">

                <p class="font-25-700 font-1 mb-0">
                <a href="{{url('Article').'/'.$article->slug}}">{{$article->title}}</a>
                </p>
                <p class="font-20-400 tx-ep-3">{!!$article->excerpt!!}</p>
                <a href="{{url('Article').'/'.$article->slug}}" class="text-decoration-none tx-prime font-18-400">Read Full Article »</a>


              </div>
            </div>
          </div>
         @endforeach

        </div>
      </div>

    </div>

    <div class="col-md-4 py-3">
      <div class="trendingList">
        <p class="font-30-600 font-1 my-0">Editor's Picks</p>

        <ul class="list-unstyled">
          @if(count($editor_picks_articles))
          @foreach($editor_picks_articles as $article)
          <a href="{{url('Article/'.$article->slug)}}" class="text-decoration-none d-flex mb-lg-5 mb-2">
            <div class="img-box me-3">
              <img src="{{ $article->thumbImage != '' ? asset("storage/horoscopecategory/{$article->thumbImage}") : 'https://www.astrologyanswers.com/wp-content/uploads/2023/11/mercury-cap-300x300.png.webp' }}" alt="" data-src="https://www.astrologyanswers.com/wp-content/uploads/2022/08/how-to-make-the-most-of-the-new-moon-in-capricorn-850x850-astrologyanswers-300x300.jpg.webp" class="rounded-1" style="height: 80px; width: 80px;" alt="">
            </div>
            <p class="font-18-700 font-1 tx-prime" style="line-height: 25px;">{{ $article->title }}</p>
          </a>
            @endforeach
            @endif

        </ul>

      </div>
      @include('Front.includes.socialmedia')

    </div>
  </div>



</div>

<!---------------------------------articles end------------------------------------------>
@stop
