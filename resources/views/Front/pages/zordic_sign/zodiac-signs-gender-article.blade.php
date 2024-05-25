    @extends('Layouts.default')
    @section('content')  
    
    <link rel="stylesheet" href="{{asset('/public/assets/zordic_sign_css/css/zordiac-sign-article.css')}}">
    
    <style>
    .box img{
    width:100%!important;
    }
    </style>
    <!------------------articles start----------------------------->
    
    <div class="container my-lg-2">
    <div class="row mb-4">
    <div class="col-md-8">
    <div class="box">{!! $zordicarticle->content !!}</div>
    
    
    <div class="box pt-lg-5 pt-3">
    
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
    
    <!---------------------articles end-------------------------->
    
    @stop