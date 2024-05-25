
@extends('Layouts.default')
@section('content')
<style>
    .none {
        display: none;
    }
</style>
{{-- @dd($day); --}}

<div class="container my-lg-2">
    <div class="row mb-4">
        <div class="col-md-8">
            <div class="box">
                <div class="horoscopesBox d-flex align-items-center justify-content-between my-4">
                    <p class="font-45-700 text-black font-1 my-0" style="line-height: 55px;"> {{$data['zodic_info']['zodic_name']}} Daily Horoscope </p>
                    <img src="{{ asset($data['zodic_info']['image']) }}" alt="">

                </div>
                <div class="row">
                    <div class="col-12">
                        <div class="horoscopesNavigation mb-3">
                            <a href="{{route('horescope',['name'=>$data['zodic_info']['zodic_name']])}}?action=yesterday" class="button font-1 @if($day == 'yesterday')active @endif" id="yesterday">
                                <div class="title d-flex align-items-center">Yesterday </div>
                            </a>
                            <a href="{{route('horescope',['name'=>$data['zodic_info']['zodic_name']])}}?action=today" class="button font-1 @if($day == 'today')active @endif" id="today">
                                <div class="title d-flex align-items-center">Today </div>
                            </a>
                            <a href="{{route('horescope',['name'=>$data['zodic_info']['zodic_name']])}}?action=tomorrow" class="button font-1 @if($day == 'tomorrow')active @endif" id="tomorrow">
                                <div class="title d-flex align-items-center" >Tomorrow </div>
                            </a>
                            <a href="{{route('horescope',['name'=>$data['zodic_info']['zodic_name']])}}?action=2024" class="button font-1 @if($day == '2024')active @endif" id="2024">
                                <div class="title d-flex align-items-center" >2024 </div>
                            </a>
                        </div>
                        <div class="zodicContent">
                            @if(isset($data['Horoscope']['today']) && $day == 'today')
                                <p class="font-20-400 today"> <b>{{ date('M d,Y',strtotime($data['Horoscope']['today']->prediction_date)) }} - </b> {!! $data['Horoscope']['today']->data->prediction->profession !!}</p>
                            @elseif (isset($data['Horoscope']['yesterday']) && $day == 'yesterday')
                                <p class="font-20-400 yesterday"> <b>{{ date('M d,Y',strtotime($data['Horoscope']['yesterday']->prediction_date)) }} - </b> {{$data['Horoscope']['yesterday']->data->prediction->profession}}</p>
                            @elseif (isset($data['Horoscope']['tomorrow']) && $day == 'tomorrow')
                                <p class="font-20-400 tomorrow"> <b>{{ date('M d,Y',strtotime($data['Horoscope']['tomorrow']->prediction_date)) }} - </b> {{$data['Horoscope']['tomorrow']->data->prediction->profession}}</p>
                            @endif
                        </div>
                        <div class="zodicRecomandedContent">
                            @if (isset($data['Horoscope']['today']) && $day == 'today')
                                <div class="getYourHoroscopeCard">
                                    <div class="icon-box" style="background-image: url('{{asset('/assets/images/getHoroscope.png')}}');">
                                        <svg fill="#ffffff" width="64px" height="64px" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg" stroke="#ffffff">
                                            <g id="SVGRepo_bgCarrier" stroke-width="0"></g>
                                            <g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g>
                                            <g id="SVGRepo_iconCarrier">
                                                <path d="M20.808,11.079C19.829,16.132,12,20.5,12,20.5s-7.829-4.368-8.808-9.421C2.227,6.1,5.066,3.5,8,3.5a4.444,4.444,0,0,1,4,2,4.444,4.444,0,0,1,4-2C18.934,3.5,21.773,6.1,20.808,11.079Z"></path>
                                            </g>
                                        </svg>
                                        <p class="text-white font-25-600"> Love Horoscope</p>
                                    </div>
                                    <div class="para-box">
                                    <p class="font-20-400 tx-ep-5"> <b>{{ date('M d,Y',strtotime($data['Horoscope']['today']->prediction_date)) }} - </b>  {!! htmlspecialchars($data['Horoscope']['today']->data->prediction->emotions) !!}  </p>
                                        <div class="btn-box">
                                            <a href="javascript:void(0)" class="text-decoration-none">
                                                <div class="btn-wrapper">
                                                    <span class="primary-btn">
                                                        GET YOUR HOROSCOPE</span>
                                                </div>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                                <div class="getYourHoroscopeCard">
                                    <div class="icon-box" style="background-image: url('{{asset('/assets/images/getHoroscope.png')}}');">
                                      <svg fill="#ffffff" width="50px" height="50px" viewBox="0 0 512 512" xmlns="http://www.w3.org/2000/svg">
                                           <g id="SVGRepo_bgCarrier" stroke-width="0"></g>
                                                <g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g>
                                                <g id="SVGRepo_iconCarrier">
                                           <path d="M128 480h256V80c0-26.5-21.5-48-48-48H176c-26.5 0-48 21.5-48 48v400zm64-384h128v32H192V96zm320 80v256c0 26.5-21.5 48-48 48h-48V128h48c26.5 0 48 21.5 48 48zM96 480H48c-26.5 0-48-21.5-48-48V176c0-26.5 21.5-48 48-48h48v352z">
                                           </path>
                                            </g>
                                      </svg>
                                    <p class="text-white font-25-600"> Career Horoscope</p>
                                    </div>
                                    <div class="para-box">
                                        <p class="font-20-400 tx-ep-5"> <b>{{ date('M d,Y',strtotime($data['Horoscope']['today']->prediction_date)) }} - </b>  {!! $data['Horoscope']['today']->data->prediction->profession !!}  </p>
                                        <div class="btn-box">
                                            <a href="javascript:void(0)" class="text-decoration-none">
                                                <div class="btn-wrapper">
                                                    <span class="primary-btn">
                                                        GET YOUR HOROSCOPE</span>
                                                </div>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                                <div class="getYourHoroscopeCard">
                                    <div class="icon-box" style="background-image: url('{{asset('/assets/images/getHoroscope.png')}}');">
                                       <svg fill="#ffffff" width="50px" height="50px" viewBox="0 0 512 512" xmlns="http://www.w3.org/2000/svg">
                                       <g id="SVGRepo_bgCarrier" stroke-width="0"></g>
                                            <g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g>
                                            <g id="SVGRepo_iconCarrier">
                                      <path d="M464 128h-80V80c0-26.5-21.5-48-48-48H176c-26.5 0-48 21.5-48 48v48H48c-26.5 0-48 21.5-48 48v288c0 26.5 21.5 48 48 48h416c26.5 0 48-21.5 48-48V176c0-26.5-21.5-48-48-48zM192 96h128v32H192V96zm160 248c0 4.4-3.6 8-8 8h-56v56c0 4.4-3.6 8-8 8h-48c-4.4 0-8-3.6-8-8v-56h-56c-4.4 0-8-3.6-8-8v-48c0-4.4 3.6-8 8-8h56v-56c0-4.4 3.6-8 8-8h48c4.4 0 8 3.6 8 8v56h56c4.4 0 8 3.6 8 8v48z"></path>
                                        </g>
                                  </svg>
                                        <p class="text-white font-25-600"> Health Horoscope</p>
                                    </div>
                                    <div class="para-box">
                                        <p class="font-20-400 tx-ep-5"> <b>{{ date('M d,Y',strtotime($data['Horoscope']['today']->prediction_date)) }} - </b> {!! $data['Horoscope']['today']->data->prediction->health !!}  </p>
                                        <div class="btn-box">
                                            <a href="javascript:void(0)" class="text-decoration-none">
                                                <div class="btn-wrapper">
                                                    <span class="primary-btn">
                                                        GET YOUR HOROSCOPE</span>
                                                </div>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                                <div class="getYourHoroscopeCard">
                                    <div class="icon-box" style="background-image: url('{{asset('/assets/images/getHoroscope.png')}}');">
                                            <svg fill="#ffffff" height="64px" width="64px" version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="0 0 375 375" xml:space="preserve"><g id="SVGRepo_bgCarrier" stroke-width="0">
                                                </g>
                                                <g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round">
                                                </g>
                                                <g id="SVGRepo_iconCarrier"> <g id="XMLID_863_">
                                            <path id="XMLID_864_" d="M70,165c0,57.897,47.103,105,105,105s105-47.103,105-105S232.897,60,175,60S70,107.103,70,165z M160.432,180h29.137c-1.908,32.549-9.728,52.49-14.568,58.639C170.16,232.49,162.34,212.549,160.432,180z M160.432,150 c1.908-32.549,9.728-52.49,14.568-58.639c4.84,6.149,12.66,26.09,14.568,58.639H160.432z M138.615,99.448 c-4.584,14.754-7.281,32.366-8.228,50.552H101.51C105.939,128.267,119.803,109.932,138.615,99.448z M101.51,180h28.878 c0.946,18.186,3.643,35.798,8.228,50.552C119.803,220.068,105.939,201.733,101.51,180z M211.385,230.552 c4.584-14.754,7.281-32.366,8.228-50.552h28.878C244.062,201.733,230.198,220.068,211.385,230.552z M248.491,150h-28.878 c-0.946-18.186-3.643-35.798-8.228-50.552C230.198,109.932,244.062,128.267,248.491,150z"></path> <path id="XMLID_872_" d="M175,300c-74.439,0-135-60.561-135-135s60.56-135,135-135c8.284,0,15-6.716,15-15s-6.716-15-15-15 C84.019,0,10,74.019,10,165s74.019,165,165,165c8.284,0,15-6.716,15-15S183.284,300,175,300z"></path> <path id="XMLID_873_" d="M349.999,309.994l-39.716,0.002c-0.004,0-0.008,0-0.013,0L253.493,310l-10.63-17.717 c-4.262-7.104-13.477-9.408-20.58-5.145c-7.104,4.262-9.407,13.476-5.145,20.58l15,25c2.711,4.519,7.594,7.283,12.863,7.283 l32.384-0.002l-8.776,10.242c-5.39,6.291-4.66,15.76,1.631,21.15c2.829,2.424,6.299,3.61,9.753,3.61 c4.228,0,8.431-1.778,11.397-5.241l25.503-29.764l33.108-0.002c8.284,0,14.999-6.717,14.999-15.001 C365,316.709,358.283,309.994,349.999,309.994z">
                                            </path>
                                            </g>
                                            </g>
                                            </svg>
                                        <p class="text-white font-25-600"> Travel Horoscope</p>
                                    </div>
                                    <div class="para-box">
                                        <p class="font-20-400 tx-ep-5"> <b>{{ date('M d,Y',strtotime($data['Horoscope']['today']->prediction_date)) }} - </b> {!! $data['Horoscope']['today']->data->prediction->travel !!}  </p>
                                        <div class="btn-box">
                                            <a href="javascript:void(0)" class="text-decoration-none">
                                                <div class="btn-wrapper">
                                                    <span class="primary-btn">
                                                        GET YOUR HOROSCOPE</span>
                                                </div>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            @elseif (isset($data['Horoscope']['yesterday']) && $day == 'yesterday')
                                <div class="yesterday-zodic">
                                    <div class="getYourHoroscopeCard">
                                        <div class="icon-box" style="background-image: url('{{asset('/assets/images/getHoroscope.png')}}');">
                                            <svg fill="#ffffff" width="64px" height="64px" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg" stroke="#ffffff">
                                                <g id="SVGRepo_bgCarrier" stroke-width="0"></g>
                                                <g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g>
                                                <g id="SVGRepo_iconCarrier">
                                                    <path d="M20.808,11.079C19.829,16.132,12,20.5,12,20.5s-7.829-4.368-8.808-9.421C2.227,6.1,5.066,3.5,8,3.5a4.444,4.444,0,0,1,4,2,4.444,4.444,0,0,1,4-2C18.934,3.5,21.773,6.1,20.808,11.079Z"></path>
                                                </g>
                                            </svg>
                                            <p class="text-white font-25-600"> Love Horoscope</p>
                                        </div>
                                        <div class="para-box">
                                        <p class="font-20-400 tx-ep-5"> <b>{{ date('M d,Y',strtotime($data['Horoscope']['yesterday']->prediction_date)) }} - </b>  {!! htmlspecialchars($data['Horoscope']['yesterday']->data->prediction->emotions) !!}  </p>
                                            <div class="btn-box">
                                                <a href="javascript:void(0)" class="text-decoration-none">
                                                    <div class="btn-wrapper">
                                                        <span class="primary-btn">
                                                            GET YOUR HOROSCOPE</span>
                                                    </div>
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="getYourHoroscopeCard">
                                        <div class="icon-box" style="background-image: url('{{asset('/assets/images/getHoroscope.png')}}');">
                                            <svg fill="#ffffff" width="50px" height="50px" viewBox="0 0 512 512" xmlns="http://www.w3.org/2000/svg">
                                           <g id="SVGRepo_bgCarrier" stroke-width="0"></g>
                                                <g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g>
                                                <g id="SVGRepo_iconCarrier">
                                           <path d="M128 480h256V80c0-26.5-21.5-48-48-48H176c-26.5 0-48 21.5-48 48v400zm64-384h128v32H192V96zm320 80v256c0 26.5-21.5 48-48 48h-48V128h48c26.5 0 48 21.5 48 48zM96 480H48c-26.5 0-48-21.5-48-48V176c0-26.5 21.5-48 48-48h48v352z">
                                           </path>
                                            </g>
                                      </svg>
                                            <p class="text-white font-25-600"> Career Horoscope</p>
                                        </div>
                                        <div class="para-box">
                                            <p class="font-20-400 tx-ep-5"> <b>{{ date('M d,Y',strtotime($data['Horoscope']['yesterday']->prediction_date)) }} - </b>  {!! $data['Horoscope']['yesterday']->data->prediction->profession !!}  </p>
                                            <div class="btn-box">
                                                <a href="javascript:void(0)" class="text-decoration-none">
                                                    <div class="btn-wrapper">
                                                        <span class="primary-btn">
                                                            GET YOUR HOROSCOPE</span>
                                                    </div>
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="getYourHoroscopeCard">
                                        <div class="icon-box" style="background-image: url('{{asset('/assets/images/getHoroscope.png')}}');">
                                            <svg fill="#ffffff" width="50px" height="50px" viewBox="0 0 512 512" xmlns="http://www.w3.org/2000/svg">
                                       <g id="SVGRepo_bgCarrier" stroke-width="0"></g>
                                            <g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g>
                                            <g id="SVGRepo_iconCarrier">
                                      <path d="M464 128h-80V80c0-26.5-21.5-48-48-48H176c-26.5 0-48 21.5-48 48v48H48c-26.5 0-48 21.5-48 48v288c0 26.5 21.5 48 48 48h416c26.5 0 48-21.5 48-48V176c0-26.5-21.5-48-48-48zM192 96h128v32H192V96zm160 248c0 4.4-3.6 8-8 8h-56v56c0 4.4-3.6 8-8 8h-48c-4.4 0-8-3.6-8-8v-56h-56c-4.4 0-8-3.6-8-8v-48c0-4.4 3.6-8 8-8h56v-56c0-4.4 3.6-8 8-8h48c4.4 0 8 3.6 8 8v56h56c4.4 0 8 3.6 8 8v48z"></path>
                                        </g>
                                  </svg>
                                            <p class="text-white font-25-600"> Health Horoscope</p>
                                        </div>
                                        <div class="para-box">
                                            <p class="font-20-400 tx-ep-5"> <b>{{ date('M d,Y',strtotime($data['Horoscope']['yesterday']->prediction_date)) }} - </b> {!! $data['Horoscope']['yesterday']->data->prediction->health !!}  </p>
                                            <div class="btn-box">
                                                <a href="javascript:void(0)" class="text-decoration-none">
                                                    <div class="btn-wrapper">
                                                        <span class="primary-btn">
                                                            GET YOUR HOROSCOPE</span>
                                                    </div>
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="getYourHoroscopeCard">
                                        <div class="icon-box" style="background-image: url('{{asset('/assets/images/getHoroscope.png')}}');">
                                             <svg fill="#ffffff" height="64px" width="64px" version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="0 0 375 375" xml:space="preserve"><g id="SVGRepo_bgCarrier" stroke-width="0">
                                                </g>
                                                <g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round">
                                                </g>
                                                <g id="SVGRepo_iconCarrier"> <g id="XMLID_863_">
                                            <path id="XMLID_864_" d="M70,165c0,57.897,47.103,105,105,105s105-47.103,105-105S232.897,60,175,60S70,107.103,70,165z M160.432,180h29.137c-1.908,32.549-9.728,52.49-14.568,58.639C170.16,232.49,162.34,212.549,160.432,180z M160.432,150 c1.908-32.549,9.728-52.49,14.568-58.639c4.84,6.149,12.66,26.09,14.568,58.639H160.432z M138.615,99.448 c-4.584,14.754-7.281,32.366-8.228,50.552H101.51C105.939,128.267,119.803,109.932,138.615,99.448z M101.51,180h28.878 c0.946,18.186,3.643,35.798,8.228,50.552C119.803,220.068,105.939,201.733,101.51,180z M211.385,230.552 c4.584-14.754,7.281-32.366,8.228-50.552h28.878C244.062,201.733,230.198,220.068,211.385,230.552z M248.491,150h-28.878 c-0.946-18.186-3.643-35.798-8.228-50.552C230.198,109.932,244.062,128.267,248.491,150z"></path> <path id="XMLID_872_" d="M175,300c-74.439,0-135-60.561-135-135s60.56-135,135-135c8.284,0,15-6.716,15-15s-6.716-15-15-15 C84.019,0,10,74.019,10,165s74.019,165,165,165c8.284,0,15-6.716,15-15S183.284,300,175,300z"></path> <path id="XMLID_873_" d="M349.999,309.994l-39.716,0.002c-0.004,0-0.008,0-0.013,0L253.493,310l-10.63-17.717 c-4.262-7.104-13.477-9.408-20.58-5.145c-7.104,4.262-9.407,13.476-5.145,20.58l15,25c2.711,4.519,7.594,7.283,12.863,7.283 l32.384-0.002l-8.776,10.242c-5.39,6.291-4.66,15.76,1.631,21.15c2.829,2.424,6.299,3.61,9.753,3.61 c4.228,0,8.431-1.778,11.397-5.241l25.503-29.764l33.108-0.002c8.284,0,14.999-6.717,14.999-15.001 C365,316.709,358.283,309.994,349.999,309.994z">
                                            </path>
                                            </g>
                                            </g>
                                            </svg>
                                            <p class="text-white font-25-600"> Travel Horoscope</p>
                                        </div>
                                        <div class="para-box">
                                            <p class="font-20-400 tx-ep-5"> <b>{{ date('M d,Y',strtotime($data['Horoscope']['yesterday']->prediction_date)) }} - </b> {!! $data['Horoscope']['yesterday']->data->prediction->travel !!}  </p>
                                            <div class="btn-box">
                                                <a href="javascript:void(0)" class="text-decoration-none">
                                                    <div class="btn-wrapper">
                                                        <span class="primary-btn">
                                                            GET YOUR HOROSCOPE</span>
                                                    </div>
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                @elseif(isset($data['Horoscope']['tomorrow']) && $day == 'tomorrow')
                                    <div class="tomorrow-zodic">
                                        <div class="getYourHoroscopeCard">
                                            <div class="icon-box" style="background-image: url('{{asset('/assets/images/getHoroscope.png')}}');">
                                                <svg fill="#ffffff" width="64px" height="64px" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg" stroke="#ffffff">
                                                    <g id="SVGRepo_bgCarrier" stroke-width="0"></g>
                                                    <g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g>
                                                    <g id="SVGRepo_iconCarrier">
                                                        <path d="M20.808,11.079C19.829,16.132,12,20.5,12,20.5s-7.829-4.368-8.808-9.421C2.227,6.1,5.066,3.5,8,3.5a4.444,4.444,0,0,1,4,2,4.444,4.444,0,0,1,4-2C18.934,3.5,21.773,6.1,20.808,11.079Z"></path>
                                                    </g>
                                                </svg>
                                                <p class="text-white font-25-600"> Love Horoscope</p>
                                            </div>
                                            <div class="para-box">
                                            <p class="font-20-400 tx-ep-5"> <b>{{ date('M d,Y',strtotime($data['Horoscope']['tomorrow']->prediction_date)) }} - </b>  {!! htmlspecialchars($data['Horoscope']['tomorrow']->data->prediction->emotions) !!}  </p>
                                                <div class="btn-box">
                                                    <a href="javascript:void(0)" class="text-decoration-none">
                                                        <div class="btn-wrapper">
                                                            <span class="primary-btn">
                                                                GET YOUR HOROSCOPE</span>
                                                        </div>
                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="getYourHoroscopeCard">
                                            <div class="icon-box" style="background-image: url('{{asset('/assets/images/getHoroscope.png')}}');">
                                                <svg fill="#ffffff" width="50px" height="50px" viewBox="0 0 512 512" xmlns="http://www.w3.org/2000/svg">
                                            <g id="SVGRepo_bgCarrier" stroke-width="0"></g>
                                                    <g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g>
                                                    <g id="SVGRepo_iconCarrier">
                                            <path d="M128 480h256V80c0-26.5-21.5-48-48-48H176c-26.5 0-48 21.5-48 48v400zm64-384h128v32H192V96zm320 80v256c0 26.5-21.5 48-48 48h-48V128h48c26.5 0 48 21.5 48 48zM96 480H48c-26.5 0-48-21.5-48-48V176c0-26.5 21.5-48 48-48h48v352z">
                                            </path>
                                                </g>
                                        </svg>
                                                <p class="text-white font-25-600"> Career Horoscope</p>
                                            </div>
                                            <div class="para-box">
                                                <p class="font-20-400 tx-ep-5"> <b>{{ date('M d,Y',strtotime($data['Horoscope']['tomorrow']->prediction_date)) }} - </b>  {!! $data['Horoscope']['tomorrow']->data->prediction->profession !!}  </p>
                                                <div class="btn-box">
                                                    <a href="javascript:void(0)" class="text-decoration-none">
                                                        <div class="btn-wrapper">
                                                            <span class="primary-btn">
                                                                GET YOUR HOROSCOPE</span>
                                                        </div>
                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="getYourHoroscopeCard">
                                            <div class="icon-box" style="background-image: url('{{asset('/assets/images/getHoroscope.png')}}');">
                                                <svg fill="#ffffff" width="50px" height="50px" viewBox="0 0 512 512" xmlns="http://www.w3.org/2000/svg">
                                        <g id="SVGRepo_bgCarrier" stroke-width="0"></g>
                                                <g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g>
                                                <g id="SVGRepo_iconCarrier">
                                        <path d="M464 128h-80V80c0-26.5-21.5-48-48-48H176c-26.5 0-48 21.5-48 48v48H48c-26.5 0-48 21.5-48 48v288c0 26.5 21.5 48 48 48h416c26.5 0 48-21.5 48-48V176c0-26.5-21.5-48-48-48zM192 96h128v32H192V96zm160 248c0 4.4-3.6 8-8 8h-56v56c0 4.4-3.6 8-8 8h-48c-4.4 0-8-3.6-8-8v-56h-56c-4.4 0-8-3.6-8-8v-48c0-4.4 3.6-8 8-8h56v-56c0-4.4 3.6-8 8-8h48c4.4 0 8 3.6 8 8v56h56c4.4 0 8 3.6 8 8v48z"></path>
                                            </g>
                                    </svg>
                                                <p class="text-white font-25-600"> Health Horoscope</p>
                                            </div>
                                            <div class="para-box">
                                                <p class="font-20-400 tx-ep-5"> <b>{{ date('M d,Y',strtotime($data['Horoscope']['tomorrow']->prediction_date)) }} - </b> {!! $data['Horoscope']['tomorrow']->data->prediction->health !!}  </p>
                                                <div class="btn-box">
                                                    <a href="javascript:void(0)" class="text-decoration-none">
                                                        <div class="btn-wrapper">
                                                            <span class="primary-btn">
                                                                GET YOUR HOROSCOPE</span>
                                                        </div>
                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="getYourHoroscopeCard">
                                            <div class="icon-box" style="background-image: url('{{asset('/assets/images/getHoroscope.png')}}');">
                                                <svg fill="#ffffff" height="64px" width="64px" version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="0 0 375 375" xml:space="preserve"><g id="SVGRepo_bgCarrier" stroke-width="0">
                                                    </g>
                                                    <g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round">
                                                    </g>
                                                    <g id="SVGRepo_iconCarrier"> <g id="XMLID_863_">
                                                <path id="XMLID_864_" d="M70,165c0,57.897,47.103,105,105,105s105-47.103,105-105S232.897,60,175,60S70,107.103,70,165z M160.432,180h29.137c-1.908,32.549-9.728,52.49-14.568,58.639C170.16,232.49,162.34,212.549,160.432,180z M160.432,150 c1.908-32.549,9.728-52.49,14.568-58.639c4.84,6.149,12.66,26.09,14.568,58.639H160.432z M138.615,99.448 c-4.584,14.754-7.281,32.366-8.228,50.552H101.51C105.939,128.267,119.803,109.932,138.615,99.448z M101.51,180h28.878 c0.946,18.186,3.643,35.798,8.228,50.552C119.803,220.068,105.939,201.733,101.51,180z M211.385,230.552 c4.584-14.754,7.281-32.366,8.228-50.552h28.878C244.062,201.733,230.198,220.068,211.385,230.552z M248.491,150h-28.878 c-0.946-18.186-3.643-35.798-8.228-50.552C230.198,109.932,244.062,128.267,248.491,150z"></path> <path id="XMLID_872_" d="M175,300c-74.439,0-135-60.561-135-135s60.56-135,135-135c8.284,0,15-6.716,15-15s-6.716-15-15-15 C84.019,0,10,74.019,10,165s74.019,165,165,165c8.284,0,15-6.716,15-15S183.284,300,175,300z"></path> <path id="XMLID_873_" d="M349.999,309.994l-39.716,0.002c-0.004,0-0.008,0-0.013,0L253.493,310l-10.63-17.717 c-4.262-7.104-13.477-9.408-20.58-5.145c-7.104,4.262-9.407,13.476-5.145,20.58l15,25c2.711,4.519,7.594,7.283,12.863,7.283 l32.384-0.002l-8.776,10.242c-5.39,6.291-4.66,15.76,1.631,21.15c2.829,2.424,6.299,3.61,9.753,3.61 c4.228,0,8.431-1.778,11.397-5.241l25.503-29.764l33.108-0.002c8.284,0,14.999-6.717,14.999-15.001 C365,316.709,358.283,309.994,349.999,309.994z">
                                                </path>
                                                </g>
                                                </g>
                                                </svg>
                                                <p class="text-white font-25-600"> Travel Horoscope</p>
                                            </div>
                                            <div class="para-box">
                                                <p class="font-20-400 tx-ep-5"> <b>{{ date('M d,Y',strtotime($data['Horoscope']['tomorrow']->prediction_date)) }} - </b> {!! $data['Horoscope']['tomorrow']->data->prediction->travel !!}  </p>
                                                <div class="btn-box">
                                                    <a href="javascript:void(0)" class="text-decoration-none">
                                                        <div class="btn-wrapper">
                                                            <span class="primary-btn">
                                                                GET YOUR HOROSCOPE</span>
                                                        </div>
                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                @endif
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
                        <div class="me-2" style="width: 30px;"><i class="fa-brands fa-facebook-f" style="color: #3e83ec;"></i></div> <a href="{{$data['header']->facebooklink}}" class="font-1 text-decoration-none text-black">Facebook</a>
                    </li>
                    <li class="font-23-600 my-3 d-flex">
                        <div class="me-2" style="width: 30px;"><i class="fa-brands fa-twitter" style="color:  #56cce6;"></i></div> <a href="{{$data['header']->instagram}}" class="font-1 text-decoration-none text-black">Twitter</a>
                    </li>
                    <li class="font-23-600 my-3 d-flex">
                        <div class="me-2" style="width: 30px;"><i class="fa-brands fa-instagram" style="color: #8f59c8;"></i></div> <a href="{{$data['header']->instagram}}" class="font-1 text-decoration-none text-black">Instagram</a>
                    </li>
                    <li class="font-23-600 my-3 d-flex">
                        <div class="me-2" style="width: 30px;"><i class="fa-brands fa-youtube" style="color: #ed4141;"></i></div> <a href="{{$data['header']->youtube}}" class="font-1 text-decoration-none text-black">YouTube</a>
                    </li>
                </ul>

            </div>

        </div>
    </div>
</div>
@endsection

@section('script')
<script>

    $(document).on('click','.button ',function(e){
        alert('here');
        var id = $(this).attr('id');
        var ActiveElement = $('.button.active').attr('id');

        console.log(id,'id');
        console.log(ActiveElement,'ActiveElement');

        $('.zodicContent').html('');
        $('.zodicRecomandedContent').html('');

        var html = $('.'+id+'-backup').html();

        var zodicRecomandedContent = $('.'+id+'-zodic-recomanded-backup').html();

        $('.'+id).removeClass('none');
        $('#'+id).addClass('active');
        $('#'+id).addClass('font-1');

        $('.'+ActiveElement).addClass('none');
        $('#'+ActiveElement).removeClass('active');
        $('#'+ActiveElement).removeClass('font-1');

        $('.zodicContent').html("<p class='font-20-400'>"+html+'</p>');
        $('.zodicRecomandedContent').html(zodicRecomandedContent);
    });

</script>
@endsection
