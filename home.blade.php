@extends('Layouts.default')
@section('content')
<!---------------------------------icon cards------------------------------------------>

<div class="container my-5">
    <div class="row mb-4">
        <div class="col-12 text-center">
            <p class="font-35-700 font-1 my-0" style="background: linear-gradient(to right, #FA7936, #9900EB);">{{$data['pages']->h1}}</p>
            <p class="font-25-700 font-1 my-0 tx-tir" style="background: linear-gradient(to right, #FA7936, #9900EB);">{{$data['pages']->h2}}</p>
        </div>
    </div>

    <div class="row">
        @foreach($zodics as $zodicName => $zodiac)
        <div class="col-lg-3 col-md-4 col-sm-6 col-6 iconCol my-3">
            <a href="{{route('horescope',['name'=>$zodicName])}}" class="iconCard text-decoration-none">
                <img src=" {{ asset('/assets/images/') }}/{{ $zodiac['images'] }} " alt="">
                <ul class="list-unstyled my-auto">
                    <li class="font-20-700 tx-prime font-1">{{strtoupper($zodicName)}}</li>
                    <li class="font-16-500 font-1" style="color: #777;">Mar 21 - Apr 20</li>
                </ul>
            </a>
        </div>
        @endforeach
    </div>

</div>
<!---------------------------------icon cards------------------------------------------>



<!-----------------------blogcards cards------------------------------>

<div class="container my-lg-5">
    <div class="row mb-4">
        <div class="col-md-9">

            <!--Astrology-->
            <div class="box">
                <p class="font-30-700 my-0 d-flex justify-content-between font-1 "><span class="font-30-700 font-1  my-0">Astrology</span>
                    <a href="{{url('Articles/Astrology')}}" class="font-18-700 my-0 text-decoration-none tx-prime">VIEW ALL <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="#4d4d4d" strokeWidth="2" strokeLinecap="round" strokeLinejoin="round">
                            <path d="M5 12h13M12 5l7 7-7 7" />
                        </svg></a>
                </p>
                <p class="font-20-400 my-0">Explore the latest astrology news. Here is what is happening in the Universe this week.</p>

                <div class="row" id="horoscopeList">

                    @foreach($data['artcle'] as $artcle)
                    <div class="card-wrapper card-wrapperLoad">
                        <div class="homeblogCard my-3">

                            <div class="img-box">
                                <img src="{{asset('storage/horoscopecategory')}}/{{$artcle->thumbImage}}" class="img-fluid" alt="">
                            </div>
                            <div class="para-box">
                                <a href="{{url('Articles').'/'.$artcle->slug}}" target="_blank" rel="noopener noreferrer" class="category-tag">{{$artcle->categorytitle}}</a>
                                <p class="font-25-700 font-1"><a href="{{url('Article').'/'.$artcle->slug}}">{{$artcle->title}}</a></p>
                                <p class="font-20-400 tx-ep-7">{!!substr_replace($artcle->excerpt, "...", 200)!!}</p>

                                <div class="detailBox d-flex">
                                    <div class="icon-box me-3">
                                        <i class="font-18-600 fa-solid fa-user"></i>
                                        <span><a href="http://" target="_blank" rel="noopener noreferrer">{{$artcle->createdBy}}</a></span>
                                    </div>
                                    <div class="icon-box">
                                        <i class="font-18-600 fa-solid fa-calendar"></i>
                                        <span>{{date("F j, Y", strtotime($artcle->created_at))}}</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    @endforeach

                </div>




                <div class="btn-box w-100 d-flex justify-content-center my-5">
                    <div class="btn-wrapper" id="loadMoreBtn">
                        <span class="primary-btn">Load More</span>
                    </div>
                </div>
            </div>


            <!--Tarot-->
            <div class="box border-top pt-lg-5 pt-3">
                <p class="font-30-700 my-0 d-flex justify-content-between font-1 "><span class="font-30-700 font-1  my-0">
                        Tarot</span> <a href="{{url('Articles/Tarot')}}" class="font-18-700 my-0 text-decoration-none tx-prime">VIEW ALL <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="#4d4d4d" strokeWidth="2" strokeLinecap="round" strokeLinejoin="round">
                            <path d="M5 12h13M12 5l7 7-7 7" />
                        </svg></a> </p>

                <div class="row">
                    @foreach($data['tarot'] as $tarot)
                    <div class="col-sm-6">
                        <div class="homeblogCard my-3 d-block">
                            <div class="img-box w-100 mb-2">
                                <a href="{{url('Article').'/'.$tarot->slug}}"><img src="{{asset('storage/horoscopecategory')}}/{{$tarot->thumbImage}}" class="img-fluid" alt=""></a>
                            </div>
                            <div class="para-box px-0">

                                <a href="{{url('Articles').'/'.$tarot->slug}}" target="_blank" rel="noopener noreferrer" class="category-tag">{{$tarot->categorytitle}}</a>
                                <p class="font-25-600 font-1 mb-0"><a href="{{url('Article').'/'.$tarot->slug}}">{{$tarot->title}}</a></p>
                                <div class="detailBox d-flex my-1">
                                    <div class="icon-box me-3">
                                        <i class="font-18-600 fa-solid fa-user"></i>
                                        <span><a href="http://" target="_blank" rel="noopener noreferrer">{{$tarot->createdBy}}</a></span>
                                    </div>
                                    <div class="icon-box">
                                        <i class="font-18-600 fa-solid fa-calendar"></i>
                                        <span>{{date("F j, Y", strtotime($tarot->created_at))}}</span>
                                    </div>
                                </div>
                                <p class="font-20-400 tx-ep-7">{!!substr_replace($tarot->excerpt, "...", 200)!!}</p>


                            </div>
                        </div>
                    </div>
                    @endforeach

                </div>
            </div>


            <!--Love & Relationships-->
            <div class="box border-top pt-lg-5 pt-3">
                <p class="font-30-700 my-0 d-flex  justify-content-between font-1 "><span class="font-30-700 font-1  my-0">
                        Love & Relationships</span> <a href="{{url('Articles/Love-&-Relationships')}}" class="font-18-700 my-0 text-decoration-none tx-prime">VIEW ALL <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="#4d4d4d" strokeWidth="2" strokeLinecap="round" strokeLinejoin="round">
                            <path d="M5 12h13M12 5l7 7-7 7" />
                        </svg></a> </p>

                <div class="row">
                    @foreach($data['love'] as $love)
                    <div class="col-sm-6">
                        <div class="homeblogCard my-3 d-block">
                            <div class="img-box w-100 mb-2">
                                <a href="{{url('Article').'/'.$love->slug}}">
                                    <img src="{{asset('storage/horoscopecategory')}}/{{$love->thumbImage}}" class="img-fluid" alt=""></a>
                            </div>
                            <div class="para-box px-0">

                                <a href="{{url('Articles').'/'.$love->slug}}" target="_blank" rel="noopener noreferrer" class="category-tag">{{$love->categorytitle}}</a>
                                <p class="font-25-600 font-1 mb-0"><a href="{{url('Article').'/'.$love->slug}}">{{$love->title}}</a></p>
                                <div class="detailBox d-flex my-1">
                                    <div class="icon-box me-3">
                                        <i class="font-18-600 fa-solid fa-user"></i>
                                        <span><a href="http://" target="_blank" rel="noopener noreferrer">{{$love->createdBy}}</a></span>
                                    </div>
                                    <div class="icon-box">
                                        <i class="font-18-600 fa-solid fa-calendar"></i>
                                        <span>{{date("F j, Y", strtotime($love->created_at))}}</span>
                                    </div>
                                </div>
                                <p class="font-20-400 tx-ep-7">{!!substr_replace($love->excerpt, "...", 200)!!}</p>


                            </div>
                        </div>
                    </div>
                    @endforeach

                </div>
            </div>

        </div>

        <div class="col-md-3">
            <div class="trendingList">
                <p class="font-30-700 my-0">Trending</p>


                <div class="listCard mt-3 mb-4">
                    <a href="http://" target="_blank" rel="noopener noreferrer" class="category-tag mb-2">ANGELS</a>
                    <p class="font-20-700 font-1">Read Your December 2023 Angel Card Reading</p>
                </div>

                <div class="listCard mt-3 mb-4">
                    <a href="http://" target="_blank" rel="noopener noreferrer" class="category-tag mb-2">ANGELS</a>
                    <p class="font-20-700 font-1">Read Your December 2023 Angel Card Reading</p>
                </div>

                <div class="listCard mt-3 mb-4">
                    <a href="http://" target="_blank" rel="noopener noreferrer" class="category-tag mb-2">ASTROLOGICAL FORECASTS</a>
                    <p class="font-20-700 font-1">The BEST Thing That Will Happen to You Before 2023 Ends, Based on Your Zodiac Sign</p>
                </div>
            </div>
            @include('Front.includes.socialmedia')

        </div>
    </div>



</div>
<!---------------------------------blogcards cards------------------------------------------>

@stop