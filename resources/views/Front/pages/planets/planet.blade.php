        @extends('Layouts.default')
        @section('content')
        
        <main class="wrapes mt-3">
        <div class="container">
        <div class="row">
        <div class="col-lg-8 col-md-8 col-sm-12">
        <div class="wrap-2">
        <div class="container">
        <h1>{{$planetsData->heading}}</h1>
        
        <div class="banner my-5" style="background:url('storage/app/<?= $planetsData->image ?>');height: 150px;">
        <div class="w-75 m-auto py-3">
        <h2 class="text-center text-white" style="line-height:48px">
        {{$planetsData->title}}
        </h2>
        </div>
        </div>
        </div>
        </div> 
        <div class="wrap-3">
        <div class="container">
        {!! $planetsData->content !!}
        </div>
        </div>
        
        <div class="wrap-4">
        <div class="container">
        <div class="row">
            
        @if(count($planetsNameData))
        @foreach($planetsNameData as $planet)
        <div class="col-lg-3 col-md-4 col-sm-4 col-6">
        @if($planet->image)
        <picture>
        <img class="img-fluid" src="{{url('storage/app/public/uploads/planet_images/'.$planet->image)}}" alt="" loading="lazy">
        </picture>
        @else
        <picture>
        <img class="img-fluid" src="https://www.astrologyanswers.com/wp-content/uploads/2022/03/the_sun.png.webp" alt="" loading="lazy">
        </picture>
        @endif
        
        <p class="text-center">
        <strong>
        <a class="text-uppercase" href="{{url('planet-details/'.$planet->id)}}">{{ucfirst($planet->title)}}</a>
        </strong>
        </p>
        </div>
        @endforeach
        @endif

        </div>
        </div>
        </div>
        
        <div class="wrap-5">
        <div class="container">
        {!! $planetsData->bottom_content !!}
        </div>
        </div>
        
        <!--articles-->
        <div class="wrap-6 mb-3 mt-2">
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
        </main>
        
        @stop
        
