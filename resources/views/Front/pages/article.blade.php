@extends('Layouts.default')
@section('content')

    <!----------------articles start-------------------->
    <div class="kd-content" style="margin-top: 10rem; z-index: 1">
        <div class="container my-lg-2 text-white">
            <div class="row mb-4">
                <div class="col-md-8">
                    <!--Astrology-->
                    @if(!empty($data['artcle']))
                    <div class="box">
                        <p class="font-30-700 my-0 d-flex justify-content-between font-1 ">
                            <span class="font-30-700 font-1  my-0">Astrology</span>
                            <a href="{{url('Articles/Astrology')}}" class="font-18-700 my-0 text-decoration-none tx-prime" >VIEW ALL
                                <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="#FFFFFF" strokeWidth="2" strokeLinecap="round" strokeLinejoin="round">
                                    <path d="M5 12h13M12 5l7 7-7 7" />
                                </svg>
                            </a>
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
                                            <a href="{{url('Articles').'/'.$artcle->slug}}" target="_blank" rel="noopener noreferrer" class="category-tag" style="color: #ffffff!important;">{{$artcle->categorytitle}}</a>
                                            <p class="font-25-700 font-1"><a href="{{url('Article').'/'.$artcle->slug}}">{{$artcle->title}}</a></p>
                                            <p class="font-20-400 tx-ep-7">{!!substr_replace($artcle->excerpt, "...", 200)!!}</p>

                                            <div class="detailBox d-flex">
                                                <div class="icon-box me-3">
                                                    <i class="font-18-600 fa-solid fa-user"></i>
                                                    <span><a href="http://" target="_blank" rel="noopener noreferrer" style="color: #ffffff!important;">{{$artcle->createdBy}}</a></span>
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
                            <!-- <div class="btn-wrapper" id="loadMoreBtn">
                                <span class="primary-btn">Load More</span>
                            </div> -->
                        </div>
                    </div>
                    @endif

                    <!--Tarot-->
                    @if(!empty($data['tarot']))
                    <div class="box border-top pt-lg-5 pt-3">
                        <p class="font-30-700 my-0 d-flex justify-content-between font-1 ">
                            <span class="font-30-700 font-1  my-0"> Tarot</span>
                            <a href="{{url('Articles/Tarot')}}" class="font-18-700 my-0 text-decoration-none tx-prime">VIEW ALL
                                <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="#ffffff" strokeWidth="2" strokeLinecap="round" strokeLinejoin="round">
                                    <path d="M5 12h13M12 5l7 7-7 7" />
                                </svg>
                            </a>
                        </p>

                        <div class="row">
                            @foreach($data['tarot'] as $tarot)
                                <div class="col-sm-6">
                                    <div class="homeblogCard my-3 d-block">
                                        <div class="img-box w-100 mb-2">
                                            <a href="{{url('Article').'/'.$tarot->slug}}"><img src="{{asset('storage/horoscopecategory')}}/{{$tarot->thumbImage}}" class="img-fluid" alt=""></a>
                                        </div>
                                        <div class="para-box px-0">

                                            <a href="{{url('Articles').'/'.$tarot->slug}}" target="_blank" rel="noopener noreferrer" class="category-tag" style="color: #ffffff!important;">{{$tarot->categorytitle}}</a>
                                            <p class="font-25-600 font-1 mb-0">
                                                <a href="{{url('Article').'/'.$tarot->slug}}">{{$tarot->title}}</a>
                                            </p>
                                            <div class="detailBox d-flex my-1">
                                                <div class="icon-box me-3">
                                                    <i class="font-18-600 fa-solid fa-user"></i>
                                                    <span><a href="http://" target="_blank" rel="noopener noreferrer" style="color: #ffffff!important;">{{$tarot->createdBy}}</a></span>
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
                    @endif

                    @if(!empty($data['love']))
                    <!--Love & Relationships-->
                    <div class="box border-top pt-lg-5 pt-3">
                        <p class="font-30-700 my-0 d-flex  justify-content-between font-1 ">
                            <span class="font-30-700 font-1  my-0"> Love & Relationships</span>
                            <a href="{{url('Articles/Love-&-Relationships')}}" class="font-18-700 my-0 text-decoration-none tx-prime">VIEW ALL
                                <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="#ffffff" strokeWidth="2" strokeLinecap="round" strokeLinejoin="round">
                                    <path d="M5 12h13M12 5l7 7-7 7" />
                                </svg>
                            </a>
                        </p>

                        <div class="row">
                            @foreach($data['love'] as $love)
                                <div class="col-sm-6">
                                    <div class="homeblogCard my-3 d-block">
                                        <div class="img-box w-100 mb-2">
                                            <a href="{{url('Article').'/'.$love->slug}}">
                                                <img src="{{asset('storage/horoscopecategory')}}/{{$love->thumbImage}}" class="img-fluid" alt=""></a>
                                        </div>
                                        <div class="para-box px-0">
                                            <a href="{{url('Articles').'/'.$love->slug}}" target="_blank" rel="noopener noreferrer" class="category-tag" style="color: #ffffff!important;">{{$love->categorytitle}}</a>
                                            <p class="font-25-600 font-1 mb-0"><a href="{{url('Article').'/'.$love->slug}}">{{$love->title}}</a></p>
                                            <div class="detailBox d-flex my-1">
                                                <div class="icon-box me-3">
                                                    <i class="font-18-600 fa-solid fa-user"></i>
                                                    <span><a href="http://" target="_blank" rel="noopener noreferrer" style="color: #ffffff!important;">{{$love->createdBy}}</a></span>
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
                    @endif

                    @if(!empty($data['article']))
                    <div class="box">
                        <p class="font-45-700 text-black font-1 my-0"> Articles </p>
                        <div class="row">

                            @foreach($data['article'] as $article)
                                <div class="homeblogCard articlesCard my-3">
                                    <div class="img-box">
                                        <img src="{{asset('storage/horoscopecategory')}}/{{$article->thumbImage}}" class="img-fluid" alt="">
                                    </div>
                                    <div class="para-box">
                                        <a href="{{url('Article').'/'.$article->slug}}" target="_blank" rel="noopener noreferrer" class="category-tag text-white">{{$article->categorytitle}}</a>
                                        <p class="font-25-700 font-1">{{$article->title}}</p>
                                        <p class="font-20-400 tx-ep-4">{!!$article->excerpt!!}</p>

                                        <a href="{{url('Article').'/'.$article->slug}}" class="text-decoration-none tx-prime font-18-400">Read Full Article »</a>
                                    </div>
                                </div>
                            @endforeach

                            <div class="btn-box w-100 d-flex justify-content-center my-5">
                                <div class="btn-wrapper" id="loadMoreBtn">
                                    <span class="primary-btn">Load More</span>
                                </div>
                            </div>
                        </div>
                    </div>
                    @endif

                    <div class="box border-top pt-lg-5 pt-3">
                        <div class="row">
                            <div class="col-sm-6">
                                <div class="homeblogCard my-3 d-block">
                                    <div class="img-box w-100 mb-2">
                                        <img src="https://www.astrologyanswers.com/wp-content/uploads/2023/12/weekly-tarot-6-768x768.png.webp" class="img-fluid" alt="">
                                    </div>
                                    <div class="para-box px-0">

                                        <p class="font-25-700 font-1 mb-0">Read Your December 2023 Angel Card Reading</p>
                                        <p class="font-20-400 tx-ep-3">As we draw the curtains on another year, December brings a significant homecoming marked by astrological shifts that will reshape our outlook. Transitioning from Sagittarius to Capricorn season, we move into a new level of faith, joy, and gratitude. Capricorn season encourages us to address challenges in practical ways.</p>
                                        <a href="readarticle.html" class="text-decoration-none tx-prime font-18-400">Read Full Article »</a>
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-6">

                                <div class="homeblogCard my-3 d-block">
                                    <div class="img-box w-100 mb-2">
                                        <img src="https://www.astrologyanswers.com/wp-content/uploads/2023/11/tarot-weekly.png.webp" class="img-fluid" alt="">
                                    </div>
                                    <div class="para-box px-0">

                                        <p class="font-25-700 font-1 mb-0">Read Your December 2023 Angel Card Reading</p>
                                        <p class="font-20-400 tx-ep-3">As we draw the curtains on another year, December brings a significant homecoming marked by astrological shifts that will reshape our outlook. Transitioning from Sagittarius to Capricorn season, we move into a new level of faith, joy, and gratitude. Capricorn season encourages us to address challenges in practical ways.</p>
                                        <a href="readarticle.html" class="text-decoration-none tx-prime font-18-400">Read Full Article »</a>
                                    </div>
                                </div>
                            </div>

                            <div class="col-sm-6">
                                <div class="homeblogCard my-3 d-block">
                                    <div class="img-box w-100 mb-2">
                                        <img src="https://www.astrologyanswers.com/wp-content/uploads/2023/11/weekly-tarotscope-6-1.png.webp" class="img-fluid" alt="">
                                    </div>
                                    <div class="para-box px-0">
                                        <p class="font-25-700 font-1 mb-0">Read Your December 2023 Angel Card Reading</p>
                                        <p class="font-20-400 tx-ep-3">As we draw the curtains on another year, December brings a significant homecoming marked by astrological shifts that will reshape our outlook. Transitioning from Sagittarius to Capricorn season, we move into a new level of faith, joy, and gratitude. Capricorn season encourages us to address challenges in practical ways.</p>
                                        <a href="readarticle.html" class="text-decoration-none tx-prime font-18-400">Read Full Article »</a>
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-6">

                                <div class="homeblogCard my-3 d-block">
                                    <div class="img-box w-100 mb-2">
                                        <img src="https://www.astrologyanswers.com/wp-content/uploads/2023/11/ace-swords-1.png.webp" class="img-fluid" alt="">
                                    </div>
                                    <div class="para-box px-0">
                                        <p class="font-25-700 font-1 mb-0">Read Your December 2023 Angel Card Reading</p>
                                        <p class="font-20-400 tx-ep-3">As we draw the curtains on another year, December brings a significant homecoming marked by astrological shifts that will reshape our outlook. Transitioning from Sagittarius to Capricorn season, we move into a new level of faith, joy, and gratitude. Capricorn season encourages us to address challenges in practical ways.</p>
                                        <a href="readarticle.html" class="text-decoration-none tx-prime font-18-400">Read Full Article »</a>
                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>

                </div>

                <div class="col-md-4 py-3">
                    <div class="trendingList">
                        <p class="font-30-600 font-1 my-0">Editor's Picks</p>

                        <ul class="list-unstyled">
                            <a href="#" class="text-decoration-none d-flex mb-lg-5 mb-2">
                                <div class="img-box me-3">
                                    <img src="https://www.astrologyanswers.com/wp-content/uploads/2022/08/ultimate-guide-controversial-mercury-retrograde-850x850-astrologyanswers-768x768.jpg.webp" class="rounded-1" style="height: 80px; width: 80px;" alt="">
                                </div>
                                <p class="font-18-700 font-1 tx-prime" style="line-height: 25px;">Your Ultimate Guide to Controversial Mercury Retrograde</p>
                            </a>

                            <a href="#" class="text-decoration-none d-flex mb-lg-5 mb-2">
                                <div class="img-box me-3">
                                    <img src="https://www.astrologyanswers.com/wp-content/uploads/2022/08/ultimate-guide-controversial-mercury-retrograde-850x850-astrologyanswers-768x768.jpg.webp" class="rounded-1" style="height: 80px; width: 80px;" alt="">
                                </div>
                                <p class="font-18-700 font-1 tx-prime" style="line-height: 25px;">Your Ultimate Guide to Controversial Mercury Retrograde</p>
                            </a>

                            <a href="#" class="text-decoration-none d-flex mb-lg-5 mb-2">
                                <div class="img-box me-3">
                                    <img src="https://www.astrologyanswers.com/wp-content/uploads/2022/08/ultimate-guide-controversial-mercury-retrograde-850x850-astrologyanswers-768x768.jpg.webp" class="rounded-1" style="height: 80px; width: 80px;" alt="">
                                </div>
                                <p class="font-18-700 font-1 tx-prime" style="line-height: 25px;">Your Ultimate Guide to Controversial Mercury Retrograde</p>
                            </a>
                        </ul>

                    </div>
                    <div class="socialList mt-4">
                        <p class="font-30-700 my-0 border-bottom">Stay Connected</p>
                        <ul class="list-unstyled">
                            <li class="font-23-600 my-3 d-flex"> <div class="me-2" style="width: 30px;"><i class="fa-brands fa-facebook-f" style="color: #3e83ec;"></i></div> <a href="#" class="font-1 text-decoration-none text-white">Facebook</a></li>
                            <li class="font-23-600 my-3 d-flex"> <div class="me-2" style="width: 30px;"><i class="fa-brands fa-twitter" style="color:  #56cce6;"></i></div> <a href="#" class="font-1 text-decoration-none text-white">Twitter</a></li>
                            <li class="font-23-600 my-3 d-flex"> <div class="me-2" style="width: 30px;"><i class="fa-brands fa-instagram" style="color: #8f59c8;"></i></div> <a href="#" class="font-1 text-decoration-none text-white">Instagram</a></li>
                            <li class="font-23-600 my-3 d-flex"> <div class="me-2" style="width: 30px;"><i class="fa-brands fa-youtube" style="color: #ed4141;"></i></div> <a href="#" class="font-1 text-decoration-none text-white">YouTube</a></li>
                        </ul>

                    </div>

                </div>
            </div>
        </div>
    </div>
    <!----------------articles end------------------------->

@stop
