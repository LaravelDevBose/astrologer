@extends('Layouts.default')
@section('content')    <!---------------------------------articles start------------------------------------------>

<div class="container my-lg-2">
    <div class="row mb-4">
        <div class="col-md-8">
           <div class="box">
            <!-- <p class="font-45-700 text-black font-1 my-0"> {{ $data2->title}} </p>

            <p  class="font-20-400 tx-ep-4">{{ $data2->desecription}}</p>
            <p class="font-30-700 tx-ep-2 text-center">Click on Your Sign to View Your Daily Horoscope</p>
            <div class="row">
                @foreach($data['zordic'] as $zodiac)
                <div class="col-lg-3 col-md-4 col-sm-6 col-6 iconCol my-3">
                    <a href="{{url('horoscopes').'/'.$zodiac->slug.'-'.$data['HoroscopeCat']->slug.'-horoscope'}}" class="dailyiconCard text-center d-flex flex-column align-items-center text-decoration-none">
                        <img src="{{asset('/storage/zordiac')}}/{{$zodiac->Image}}" alt="">
                    <ul class="list-unstyled my-auto">
                        <li class="font-20-700 tx-prime font-1">{{$zodiac->Name}}</li>
                        <li class="font-16-500 font-1" style="color: #777;">Mar 21 - Apr 20</li>
                    </ul>
                    </a>
                </div>
                @endforeach

            </div> -->


            <div class="row">
                @foreach ($data['content'] as $category)

                    <div class="col-12">
                        <p  class="font-35-700  border-bottom">    {{ $category->title }}</p>
                        <p  class="font-20-400"> {!! $category->contant !!}</p>
                    </div>
                @endforeach


            </div>
           </div>


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
            <li class="font-23-600 my-3 d-flex"> <div class="me-2" style="width: 30px;"><i class="fa-brands fa-facebook-f" style="color: #3e83ec;"></i></div> <a href="#" class="font-1 text-decoration-none text-black">Facebook</a></li>
            <li class="font-23-600 my-3 d-flex"> <div class="me-2" style="width: 30px;"><i class="fa-brands fa-twitter" style="color:  #56cce6;"></i></div> <a href="#" class="font-1 text-decoration-none text-black">Twitter</a></li>
            <li class="font-23-600 my-3 d-flex"> <div class="me-2" style="width: 30px;"><i class="fa-brands fa-instagram" style="color: #8f59c8;"></i></div> <a href="#" class="font-1 text-decoration-none text-black">Instagram</a></li>
            <li class="font-23-600 my-3 d-flex"> <div class="me-2" style="width: 30px;"><i class="fa-brands fa-youtube" style="color: #ed4141;"></i></div> <a href="#" class="font-1 text-decoration-none text-black">YouTube</a></li>
           </ul>

          </div>

        </div>
    </div>



</div>

<!---------------------------------articles end------------------------------------------>



@stop
