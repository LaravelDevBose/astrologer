@extends('Layouts.default')
@section('content')
<!---------------------------------articles start------------------------------------------>

<div class="container my-lg-2">
    <div class="row mb-4">
        <div class="col-md-8">
            <div class="box">
                <div class="horoscopesBox d-flex align-items-center justify-content-between my-4">
                    <p class="font-45-700 text-black font-1 my-0" style="line-height: 55px;"> Aries Daily Horoscope </p>
                    <img src="https://www.astrologyanswers.com/wp-content/uploads/2022/02/aries.png.webp" alt="">

                </div>

                <div class="row">
                    <div class="col-12">
                        <div class="horoscopesNavigation mb-3">
                            <a href="javascript:void(0)" class="button font-1"  id="yesterday">
                                <div class="title d-flex align-items-center">Yesterday </div>
                            </a>
                            <a href="javascript:void(0)" class="button font-1 active" id="today">
                                <div class="title d-flex align-items-center">Today </div>
                            </a>
                            <a href="javascript:void(0)" class="button font-1" id="tomorrow">
                                <div class="title d-flex align-items-center" >Tomorrow </div>
                            </a>
                            <a href="javascript:void(0)" class="button font-1">
                                <div class="title d-flex align-items-center">2024 </div>
                            </a>
                        </div>
                        @if($data['Horoscope']['yesterday'])
                        <p class="font-20-400 yesterday none"> {{$data['Horoscope']['yesterday']->contant}}</p>
                        @endif
                        @if($data['Horoscope']['today'])
                        <p class="font-20-400 today"> {!! $data['Horoscope']['today']->contant !!}</p>
                        @endif
                        @if($data['Horoscope']['tomorrow'])
                        <p class="font-20-400 tomorrow none"> {{$data['Horoscope']['tomorrow']->contant}}</p>
                        @endif
                    </div>

                    <div class="col-12">
                        @if($data['Horoscoperecommended']['yesterday'])
                        @foreach($data['Horoscoperecommended']['yesterday'] as $Horo)
                        <div class="getYourHoroscopeCard yesterday">
                            <div class="icon-box" style="background-image: url('{{asset('/public/assets/images/getHoroscope.png')}}');">
                                <svg fill="#ffffff" width="64px" height="64px" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg" stroke="#ffffff">
                                    <g id="SVGRepo_bgCarrier" stroke-width="0"></g>
                                    <g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g>
                                    <g id="SVGRepo_iconCarrier">
                                        <path d="M20.808,11.079C19.829,16.132,12,20.5,12,20.5s-7.829-4.368-8.808-9.421C2.227,6.1,5.066,3.5,8,3.5a4.444,4.444,0,0,1,4,2,4.444,4.444,0,0,1,4-2C18.934,3.5,21.773,6.1,20.808,11.079Z"></path>
                                    </g>
                                </svg>
                                <p class="text-white font-25-600"> {{$Horo->title}} Horoscope</p>
                            </div>
                            <div class="para-box">
                            <p class="font-20-400 tx-ep-5">  {!! htmlspecialchars($Horo->contant) !!}  </p>
                                <div class="btn-box">
                                    <a href="{{url('horoscopes').'/'.$data['Horoscoperecommended']['zodiacslug'].'-'.$Horo->cateslug.'-horoscope'}}" class="text-decoration-none">
                                        <div class="btn-wrapper">
                                            <span class="primary-btn">
                                                GET YOUR HOROSCOPE</span>
                                        </div>
                                    </a>
                                </div>
                            </div>
                        </div>
                        @endforeach
                        @endif
                        @if($data['Horoscoperecommended']['today'])
                        @foreach($data['Horoscoperecommended']['today'] as $Horo)
                        <div class="getYourHoroscopeCard today">
                            <div class="icon-box" style="background-image: url('{{asset('/public/assets/images/getHoroscope.png')}}');">
                                <svg fill="#ffffff" width="64px" height="64px" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg" stroke="#ffffff">
                                    <g id="SVGRepo_bgCarrier" stroke-width="0"></g>
                                    <g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g>
                                    <g id="SVGRepo_iconCarrier">
                                        <path d="M20.808,11.079C19.829,16.132,12,20.5,12,20.5s-7.829-4.368-8.808-9.421C2.227,6.1,5.066,3.5,8,3.5a4.444,4.444,0,0,1,4,2,4.444,4.444,0,0,1,4-2C18.934,3.5,21.773,6.1,20.808,11.079Z"></path>
                                    </g>
                                </svg>
                                <p class="text-white font-25-600"> {{$Horo->title}} Horoscope</p>
                            </div>
                            <div class="para-box">
                                <p class="font-20-400 tx-ep-5">  {!! $Horo->excerpt !!}  </p>


                                <div class="btn-box">
                                    <a href="{{url('horoscopes').'/'.$data['Horoscoperecommended']['zodiacslug'].'-'.$Horo->cateslug.'-horoscope'}}" class="text-decoration-none">
                                        <div class="btn-wrapper">
                                            <span class="primary-btn">
                                                GET YOUR HOROSCOPE</span>
                                        </div>
                                    </a>
                                </div>
                            </div>
                        </div>
                        @endforeach
                        @endif
                        @if($data['Horoscoperecommended']['tomorrow'])
                        @foreach($data['Horoscoperecommended']['tomorrow'] as $Horo)
                        <div class="getYourHoroscopeCard tomorrow">
                            <div class="icon-box" style="background-image: url('{{asset('/public/assets/images/getHoroscope.png')}}');">
                                <svg fill="#ffffff" width="64px" height="64px" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg" stroke="#ffffff">
                                    <g id="SVGRepo_bgCarrier" stroke-width="0"></g>
                                    <g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g>
                                    <g id="SVGRepo_iconCarrier">
                                        <path d="M20.808,11.079C19.829,16.132,12,20.5,12,20.5s-7.829-4.368-8.808-9.421C2.227,6.1,5.066,3.5,8,3.5a4.444,4.444,0,0,1,4,2,4.444,4.444,0,0,1,4-2C18.934,3.5,21.773,6.1,20.808,11.079Z"></path>
                                    </g>
                                </svg>
                                <p class="text-white font-25-600"> {{$Horo->title}} Horoscope</p>
                            </div>
                            <div class="para-box">
                            <p class="font-20-400 tx-ep-5">  {!! htmlspecialchars($Horo->contant) !!}  </p>


                                <div class="btn-box">
                                    <a href="{{url('horoscopes').'/'.$data['Horoscoperecommended']['zodiacslug'].'-'.$Horo->cateslug.'-horoscope'}}" class="text-decoration-none">
                                        <div class="btn-wrapper">
                                            <span class="primary-btn">
                                                GET YOUR HOROSCOPE</span>
                                        </div>
                                    </a>
                                </div>
                            </div>
                        </div>
                        @endforeach
                        @endif


                        <div class="btn-box">
                            <a href="#" class="text-decoration-none">
                                <div class="btn-wrapper">
                                    <span class="primary-btn">
                                        SIGN UP TO RECEIVE YOUR DAILY HOROSCOPE RIGHT TO YOUR INBOX</span>
                                </div>
                            </a>
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
                    <li class="font-23-600 my-3 d-flex">
                        <div class="me-2" style="width: 30px;"><i class="fa-brands fa-facebook-f" style="color: #3e83ec;"></i></div> <a href="{{asset('/storage/app/public')}}/{{$data['header']->facebooklink}}" class="font-1 text-decoration-none text-black">Facebook</a>
                    </li>
                    <li class="font-23-600 my-3 d-flex">
                        <div class="me-2" style="width: 30px;"><i class="fa-brands fa-twitter" style="color:  #56cce6;"></i></div> <a href="{{asset('/storage/app/public')}}/{{$data['header']->instagram}}" class="font-1 text-decoration-none text-black">Twitter</a>
                    </li>
                    <li class="font-23-600 my-3 d-flex">
                        <div class="me-2" style="width: 30px;"><i class="fa-brands fa-instagram" style="color: #8f59c8;"></i></div> <a href="{{asset('/storage/app/public')}}/{{$data['header']->instagram}}" class="font-1 text-decoration-none text-black">Instagram</a>
                    </li>
                    <li class="font-23-600 my-3 d-flex">
                        <div class="me-2" style="width: 30px;"><i class="fa-brands fa-youtube" style="color: #ed4141;"></i></div> <a href="{{asset('/storage/app/public')}}/{{$data['header']->youtube}}" class="font-1 text-decoration-none text-black">YouTube</a>
                    </li>
                </ul>

            </div>

        </div>
    </div>



</div>

<!---------------------------------articles end------------------------------------------>
@foreach($data['HoroscopereCategories'] as $HoroscopereCategories)
      <a href="{{url('horoscopes').'/'.$data['Horoscoperecommended']['zodiacslug'].'-'.$HoroscopereCategories->slug.'-horoscope'}}"> |{{$HoroscopereCategories->title.' Horoscope '}}</a>
@endforeach

@stop
