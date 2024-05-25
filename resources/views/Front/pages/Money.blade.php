@extends('Layouts.default')
@section('content')


    <div class="container my-lg-2">
        <div class="row mb-4">
            <div class="col-md-8">
                <!--section 1-->
               <div class="box">
                <p class="font-45-700 text-black font-1 my-0" style="line-height: 55px;"> {{$pagedata->h2}}</p>
                <h3 style="font-weight: 600;margin-top: 10px;font-size: 30px;border-bottom: 2px solid grey;">{{$pagedata->h2}}</h3>
                
                <div class="row mt-2">
                 <div class="para-box">
                   <p>{!! $pagedata->contant !!}</p>
                 </div>
                </div>
                
                <div class="cus_btn" style="text-align: center;margin: 10px 0px;">
                    
                <!--<a href="{{$pagedata->button_url}}">-->
                <!--<button style="padding: 12px 20px;border-radius: 15px;background-color: #5a4491;border: 0px;color: white;">-->
                
                <!-- {!! $pagedata->button_text !!}   -->
                 
                <!--</button>-->
                <!--</a>-->
                </div>
                
                 <div class="row mt-2">
                 <div class="para-box mt-4">
                   <p>{!! $pagedata->content2 !!}</p>
                 </div>
                </div>

               </div>
              
 <img src="{{ url('/storage/app/app/images/'.$pagedata->image) }}" width="300" height="200" alt="No Image">


              <div class="box d-flex flex-column justify-content-center">

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
                    <div class="col-sm-6">
                        <div class="homeblogCard my-3 d-block">
                            <div class="img-box w-100 mb-2"  style="max-height: 250px;">
                               
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
                        <div class="img-box w-100 mb-2"  style="max-height: 250px;">
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
                        <div class="img-box w-100 mb-2"  style="max-height: 250px;">
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
                    <div class="img-box w-100 mb-2"  style="max-height: 250px;">
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
@stop