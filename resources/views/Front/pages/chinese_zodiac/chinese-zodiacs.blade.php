    @extends('Layouts.default')
    @section('content')
    
    <style>
    .wrap-2 img {
    width: 100%!important;
    }
    </style>
    
    <div class="container">
    <div class="row">
    <div class="col-lg-8 col-md-12 ">
    <h1 class="py-2">The {{ Request::segment(2)}} Of The Chinese Zodiac</h1>
    <div class="wrap-1  ">
    <div class="row zordic" style="background-image: url('{{ asset('public/assets/zordic_sign_css/img/chinese-zodiac-love.jpg') }}');">
    <div class="col-lg-3 col-md-3">
    <picture>
    @if($chinese_zordics_data->chinese_zodiac_icon)
    <img class="mt-5" src="{{ asset('storage/app/public/uploads/chinese_zodiac_icons/' . $chinese_zordics_data->chinese_zodiac_icon) }}" alt="" style="width:130px;height:100px">
    @else
    <img class="mt-5" src="https://www.astrologyanswers.com/wp-content/uploads/2022/02/aries.png.webp" alt=""> 
    @endif
   
    </picture>
    </div>
    <div class="col-lg-7 col-md-7 my-5">
    <div class="row">
    <div class="col-4">
    <div class="text-right"><span class="fw-bold">Year  :</span>  </div>
    </div>
    <div class="col-8 p-0">
    <span class=""><?=date('M d Y',strtotime($chinese_zordics_data->year))?></span></div><hr>
    </div>
    <div class="row">
    <div class="col-4 ">
    <div class="text-right"><span class="fw-bold">Element :</span>  </div>
    </div>
    <div class="col-8 p-0">
    <span class="yellow-span">{{$chinese_zordics_data->element}}</span></div><hr>
    </div>
    <div class="row">
    <div class="col-4 ">
    <div class="text-right"><span class="fw-bold">Yin or Yang :</span> : </div>
    </div>
    <div class="col-8 p-0">
    <span class="yellow-span" >{{$chinese_zordics_data->yin_or_yang}}</span></div><hr>
    </div>
    <div class="row">
    <div class="col-4 ">
    <div class="text-right"><span class="fw-bold">Lucky Colours :</span>  </div>
    </div>
    <div class="col-8 p-0">
    <span class="yellow-span"  >{{$chinese_zordics_data->luckycolours}}</span></div><hr>
    </div>
    <div class="row">
    <div class="col-4 ">
    <div class="text-right"><span class="fw-bold">Lucky Numbers :</span>  </div>
    </div>
    <div class="col-8 p-0">
    <span class="yellow-span" >{{$chinese_zordics_data->luckynumbers}}</span></div><hr>
    </div>
    <div class="row">
    <div class="col-4 ">
    <div class="text-right"><span class="fw-bold">Crystal :</span>  </div>
    </div>
    <div class="col-8 p-0">
    <span >{{$chinese_zordics_data->crystal}}</span></div><hr>
    </div>
    <div class="row">
    <div class="col-4 ">
    <div class="text-right"><span class="fw-bold">Flower :</span>  </div>
    </div>
    <div class="col-8 p-0">
    <span> {{$chinese_zordics_data->flower}}</span></div><hr>
    </div>
    <div class="row">
    <div class="col-4 ">
    <div class="text-right"><span class="fw-bold">Characteristics :</span>  </div>
    </div>
    <div class="col-8 p-0">
    <span >{{$chinese_zordics_data->characteristic}}</span></div>
    </div>
    </div>
    
    </div>
    </div>
    <div class="wrap-2">
    <div class="container elementor-widget-wraper">
    <h2 class="mt-5 pb-1">
    {{$chinese_zordics_data->title}}
    </h2><hr>
    
    <p class="py-2"> {!! $chinese_zordics_data->content	 !!}</p>
    </div>
    
    
    
    
    
    
    
    
    <div class="wrap-9 mb-3">
    <div class="row">
    @if(count($footer_articles))
    @foreach($footer_articles as $article)
        <div class="col-lg-6 col-md-6 col-sm-6">
            <img class="figure" src="{{ $article->thumbImage != '' ? asset("storage/app/public/horoscopecategory/{$article->thumbImage}") : 'https://www.astrologyanswers.com/wp-content/uploads/2023/11/mercury-cap-300x300.png.webp' }}" alt="" data-src="https://www.astrologyanswers.com/wp-content/uploads/2022/08/how-to-make-the-most-of-the-new-moon-in-capricorn-850x850-astrologyanswers-300x300.jpg.webp" data-ll-status="loaded">
            
            <h3 class="elementor-post__title mt-5">
                <a href="{{url('Article/'.$article->slug)}}">{{ $article->title }}</a>
            </h3>
            
            <p>{{ strip_tags(substr($article->contant, 0, 160)) }}...</p>
            
            <a class="elementor-post__read-more" href="{{url('Article/'.$article->slug)}}" aria-label="Read more about THIS New Moon is About to Bring You Financial Security & Heightened Ambition" tabindex="-1">
                Read Full Article »
            </a>
        </div>
    @endforeach
    @endif


    </div>
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
              <img src="{{ $article->thumbImage != '' ? asset("storage/app/public/horoscopecategory/{$article->thumbImage}") : 'https://www.astrologyanswers.com/wp-content/uploads/2023/11/mercury-cap-300x300.png.webp' }}" alt="" data-src="https://www.astrologyanswers.com/wp-content/uploads/2022/08/how-to-make-the-most-of-the-new-moon-in-capricorn-850x850-astrologyanswers-300x300.jpg.webp" class="rounded-1" style="height: 80px; width: 80px;" alt="">
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
    
    
    </div>
    </div>
    
    @stop
