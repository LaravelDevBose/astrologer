        @extends('Layouts.default')
        @section('content')

         <link rel="stylesheet" href="{{asset('astrology_calendar/css/astrology_calendar.css')}}">
         <link rel="stylesheet" href="{{asset('astrology_calendar/css/button.css')}}">

        <main class="wrapes">
        <div class="container">
        <div class="row">
        <div class="col-lg-8 col-md-8 col-sm-12">
        <div class="wrap-2">
        <div class="container">
        <h1 class="mt-4">
        {{ Request::segment(2) }} <?=date('Y')?> Astrology Calendar
        </h1>

        <p>{!! $calendar->content !!}</p>


        <div class="zodiac-section my-5">
        <a href="#transits-section">
        <h2>
        Read Your In-depth Astrological Transits for the Month!
        </h2>
        </a>
        </div>

<div class="row">
    <div class="col-6 prev">
        @if($previousMonth)
            <img class="d-block m-auto prev-svg" src="{{ asset('public/assets/astrology_calendar/img/previous.svg') }}" alt="">
            <a href="{{ url('/astrology-calendar/' . $previousMonth) }}">Previous</a>
        @endif
    </div>
    <div class="col-6 next">
        @if($nextMonth)
            <img class="d-block m-auto next-svg" src="{{ asset('public/assets/astrology_calendar/img/next.svg') }}" alt="">
            <a href="{{ url('/astrology-calendar/' . $nextMonth) }}">Next</a>
        @endif
    </div>
</div>

        </div>
        </div>

        <div class="wrap-3 my-4">
        <div class="container">
        <div class="row">
        @if($calendar->favorable_major_transit == '1')
        <div class="col-lg-6 col-md-6">
        <div class="path">
        <p class="path-1">

        </p>
        <p>
        Favorable Major Transit
        </p>
        </div>
        </div>
        @endif

        @if($calendar->new_zodiac_season == '1')
        <div class="col-lg-6 col-md-6">
        <div class="path">
        <p class="path-2">

        </p>
        <p>
        New Zodiac Season
        </p>
        </div>
        </div>
        @endif

        @if($calendar->retrograde == '1')
        <div class="col-lg-6 col-md-6">
        <div class="path">
        <p class="path-3">

        </p>
        <p>
        Retrograde
        </p>
        </div>
        </div>
        @endif

        @if($calendar->moon_events == '1')
        <div class="col-lg-6 col-md-6">
        <div class="path">
        <p class="path-4">

        </p>
        <p>
        Moon Events
        </p>
        </div>
        </div>
        @endif

        </div>
        </div>
        </div>

        <div class="wrap-4" id="transits-section">
        <div class="container">
        <h2 class="mt-5">
        {{ Request::segment(2) }} <?=date('Y')?>  Astrological Transits
        </h2>
        <hr>

        @php
        $count = 01;
        @endphp
        @if(count($calendar->months))
        @foreach($calendar->months as $month)
        <div class="row mt-3">
        <div class="col-lg-2 col-md-2 col-sm-12">
        <span>
        {{$count}}
        </span>
        </div>
        <div class=" col-lg-10 col-md-10 col-sm-12">
        {!! $month->month_content !!}
        </div>


        </div>
        @php
        $count++;
        @endphp
        @endforeach
        @endif

        </div>
        </div>

        <div class="wrap-5">
        <div class="zodiac-section my-5">
        <a href="{{ route('horoscope.reading') }}" class="">
        <h2 class="">
        Sign up to receive your daily horoscope right to your inbox
        </h2>
        </a>
        </div>
        </div>

        <div class="wrap-6">
        <div class="container button">
        <h2>Get Your Free Horoscopes Here</h2><hr>
        <div class="row">
        <div class="col-lg-3 col-md-6 col-sm-6 mb-2 ">
        <div class="first">
        <img src="{{asset('astrology_calendar/img/setting.svg')}}" alt="">
        <a href="#">Daily</a>
        </div>
        </div>
        <div class="col-lg-3 col-md-6 col-sm-6 mb-2">
        <div class="second">
        <img src="{{asset('astrology_calendar/img/love.svg')}}" alt="">
        <a href="#">love</a>
        </div>
        </div>
        <div class="col-lg-3 col-md-6 col-sm-6 mb-2">
        <div class="third">
        <img src="{{asset('astrology_calendar/img/suitcase.svg')}}" alt="">
        <a href="#">career</a>
        </div>
        </div>
        <div class="col-lg-3 col-md-6 col-sm-6 mb-2">
        <div class="fourth">
        <img src="{{asset('astrology_calendar/img/money.svg')}}" alt="">
        <a href="#">Money</a>
        </div>
        </div>
        <div class="col-lg-3 col-md-6 mb-2 col-sm-6 mb-2">
        <div class="fifth">
        <img src="{{asset('astrology_calendar/img/health.svg')}}" alt="">
        <a href="#">Health</a>
        </div>
        </div>
        <div class="col-lg-3 col-md-6 col-sm-6 mb-2">
        <div class="sixth">
        <img src="{{asset('astrology_calendar/img/heart.svg')}}" alt="">
        <a href="#">sex</a>
        </div>
        </div>
        <div class="col-lg-3 col-md-6 col-sm-6 mb-2 ">
        <div class="seven">
        <img src="{{asset('astrology_calendar/img/video.svg')}}" alt="">
        <a href="#"> video</a>
        </div>
        </div>
        <div class="col-lg-3 col-md-6 col-sm-6 mb-2">
        <div class="eight">
        <a href="#"> chinese</a>
        </div>
        </div>
        <div class="col-lg-3 col-md-6 col-sm-6 mb-2">
        <div class="nine">
        <img src="{{asset('astrology_calendar/img/weekly.svg')}}" alt="">
        <a href="#"> weekly</a>
        </div>
        </div>
        <div class="col-lg-3 col-md-6 col-sm-6 mb-2">
        <div class="tenth">
        <!-- <img src="img/monthy.svg" alt=""> -->
        <a href="#"> Monthly</a>
        </div>
        </div>
        <div class="col-lg-5 col-md-6 col-sm-6 mb-2">
        <div class="eleven">
        <img src="" alt="">
        <a href="#"> weekly forecast</a>
        </div>
        </div>

        </div>
        </div>
        </div>
        <hr>

        <div class="wrap-7 mb-3 mt-3">
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

        <script>
        $(document).ready(function() {
        // Smooth scrolling when clicking on a link with a hash
        $('a[href^="#"]').on('click', function(event) {
        event.preventDefault();

        var target = $(this.hash);
        if (target.length) {
        $('html, body').animate({
        scrollTop: target.offset().top
        }, 1000); // 1000 milliseconds (1 second) for the scroll animation
        }
        });
        });
        </script>


        @stop

