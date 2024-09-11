@extends('Layouts.default')
@push('customCss')
    <script src="https://cdn.tailwindcss.com"></script>
@endpush
@section('content')

    <div class="w-11/12 mx-auto overflow-x-hidden">
        <!-- CONTENT -->
        <div class="content pt-20">
            <div class="flex flex-column items-center justify-center w-full">
                <h1 class="text-3xl md:text-5xl font-bold text-[#ccc] font-header">CHOOSE YOUR ZODIAC SIGN</h1>
                <div class="mt-20 lg:mt-24 grid md:grid-cols-2 lg:grid-cols-4 gap-x-12 gap-y-10 w-full" >
                    @foreach($zodics as $zodicName => $zodiac)
                        <a href="{{route('horescope',['name'=>$zodicName])}}?action=today" class="flex items-center justify-center zod-sign">
                            <img src="{{ asset('assets/zodiac_signs/'.$zodiac['images']) }}" alt="{{ $zodicName }}" />
                            <div class="text-start ms-4">
                                <h2 class="text-xl font-header ">{{ strtoupper($zodicName) }}</h2>
                                <p class=" font-header">{{ $zodiac['date'] }}</p>
                            </div>
                        </a>
                    @endforeach
                </div>
            </div>

            <div  class="p-10 mt-40 mb-20 rounded-xl w-11/12 mx-auto bg-gradient-custom-tb" >
                <h1 class=" font-bold text-xl md:text-4xl text-center font-header text-white">
                    Read Your Daily Horoscope Right Now!
                </h1>
                <div id="reqFormWrrapper" class="w-full">
                    <form method="POST" id="homeFrom">

                        <div class="grid md:grid-cols-2 gap-4 mt-10">
                            <div>
                                <label for="name" class=" text-white font-header">Name</label>
                                <input
                                        type="text"
                                        name="name"
                                        id="name"
                                        class="w-full p-3 rounded-lg text-white font-header"
                                        placeholder="Enter your name"
                                        aria-label="Name"
                                        required
                                />
                            </div>
                            <div>
                                <label for="email" class=" text-white font-header">Email</label>
                                <input
                                        type="email"
                                        name="email"
                                        id="email"
                                        class="w-full p-3 rounded-lg text-white font-header"
                                        placeholder="Enter your email"
                                        aria-label="Email"
                                        required
                                />
                            </div>
                            <div>
                                <label for="dob" class=" text-white font-header">Date of Birth</label>
                                <br />
                                <input
                                        type="date"
                                        name="birthdate"
                                        id="birthdate"
                                        class="w-full p-3 rounded-lg text-white font-header"
                                        aria-label="Date of Birth"
                                        required
                                />
                            </div>
                            <div>
                                <label for="gender" class=" text-white font-header">Gender</label>
                                <select
                                        name="gender"
                                        class="w-full p-3 rounded-lg text-white font-header"
                                        id="gender"
                                        aria-label="Gender"
                                >
                                    <option value="" selected disabled>Select</option>
                                    <option value="male">Male</option>
                                    <option value="female">Female</option>
                                </select>
                            </div>
                            <div>
                                <label for="country" class=" text-white font-header">Country of Birth</label>
                                <input
                                        type="text"
                                        name="country"
                                        id="country"
                                        class="w-full p-3 rounded-lg text-white font-header"
                                        placeholder="Enter your country of birth"
                                        aria-label="Country of Birth"
                                        required
                                />
                            </div>
                            <div>
                                <label for="city" class=" text-white font-header">City of Birth</label>
                                <input
                                        type="text"
                                        name="city"
                                        id="city"
                                        class="w-full p-3 rounded-lg text-white font-header"
                                        placeholder="Enter your city of birth"
                                        aria-label="City of Birth"
                                        required
                                />
                            </div>
                        </div>
                        <div class="flex justify-center w-full mt-10">
                            <button
                                    type="submit"
                                    class="mx-auto mt-4 py-3 px-16 rounded-full bg-blue-500  font-bold text-white font-header"
                                    style="background-color: #34c2ff"
                                    id="homeFromSubmit"
                            >
                                Get Horoscope
                            </button>
                        </div>
                    </form>
                </div>
                <div id="homeReqFormRes" style="width: 100%" class="d-none text-center py-4"></div>
            </div>
        </div>
        <!-- CONTENT -->
    </div>
    <div class="container my-lg-5 ">
        <div class="row mb-4">
            <div class="col-md-9">
                <!--Astrology-->
                <div class="box">
                    <p class="font-30-700 my-0 d-flex justify-content-between font-1 ">
                        <span class="font-30-700 font-1  my-0">Astrology</span>
                        <a href="{{url('Articles/Astrology')}}" class="font-18-700 my-0 text-decoration-none tx-prime inline-flex" >VIEW ALL
                            <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="#000" strokeWidth="2" strokeLinecap="round" strokeLinejoin="round">
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
                                        <a href="{{url('Articles').'/'.$artcle->slug}}" target="_blank" rel="noopener noreferrer" class="category-tag" style="color: #000000!important;">{{$artcle->categorytitle}}</a>
                                        <p class="font-25-700 font-1"><a href="{{url('Article').'/'.$artcle->slug}}">{{$artcle->title}}</a></p>
                                        <p class="font-20-400 tx-ep-7">{!!substr_replace($artcle->excerpt, "...", 200)!!}</p>

                                        <div class="detailBox d-flex">
                                            <div class="icon-box me-3">
                                                <i class="font-18-600 fa-solid fa-user"></i>
                                                <span><a href="http://" target="_blank" rel="noopener noreferrer" style="color: #000000!important;">{{$artcle->createdBy}}</a></span>
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


                <!--Tarot-->
                <div class="box border-top pt-lg-5 pt-3">
                    <p class="font-30-700 my-0 d-flex justify-content-between font-1 ">
                        <span class="font-30-700 font-1  my-0"> Tarot</span>
                        <a href="{{url('Articles/Tarot')}}" class="font-18-700 my-0 text-decoration-none tx-prime inline-flex">VIEW ALL
                            <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="#000000" strokeWidth="2" strokeLinecap="round" strokeLinejoin="round">
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

                                        <a href="{{url('Articles').'/'.$tarot->slug}}" target="_blank" rel="noopener noreferrer" class="category-tag" style="color: #000000!important;">{{$tarot->categorytitle}}</a>
                                        <p class="font-25-600 font-1 mb-0">
                                            <a href="{{url('Article').'/'.$tarot->slug}}">{{$tarot->title}}</a>
                                        </p>
                                        <div class="detailBox d-flex my-1">
                                            <div class="icon-box me-3">
                                                <i class="font-18-600 fa-solid fa-user"></i>
                                                <span><a href="http://" target="_blank" rel="noopener noreferrer" style="color: #000000!important;">{{$tarot->createdBy}}</a></span>
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
                    <p class="font-30-700 my-0 d-flex  justify-content-between font-1 ">
                        <span class="font-30-700 font-1  my-0"> Love & Relationships</span>
                        <a href="{{url('Articles/Love-&-Relationships')}}" class="font-18-700 my-0 text-decoration-none tx-prime inline-flex">VIEW ALL
                            <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="#000000" strokeWidth="2" strokeLinecap="round" strokeLinejoin="round">
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
                                        <a href="{{url('Articles').'/'.$love->slug}}" target="_blank" rel="noopener noreferrer" class="category-tag" style="color: #000000!important;">{{$love->categorytitle}}</a>
                                        <p class="font-25-600 font-1 mb-0"><a href="{{url('Article').'/'.$love->slug}}">{{$love->title}}</a></p>
                                        <div class="detailBox d-flex my-1">
                                            <div class="icon-box me-3">
                                                <i class="font-18-600 fa-solid fa-user"></i>
                                                <span><a href="http://" target="_blank" rel="noopener noreferrer" style="color: #000000!important;">{{$love->createdBy}}</a></span>
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
                        <a href="http://" target="_blank" rel="noopener noreferrer" class="category-tag mb-2" style="color: #000000!important;">ANGELS</a>
                        <p class="font-20-700 font-1">Read Your December 2023 Angel Card Reading</p>
                    </div>

                    <div class="listCard mt-3 mb-4">
                        <a href="http://" target="_blank" rel="noopener noreferrer" class="category-tag mb-2" style="color: #000000!important;">ANGELS</a>
                        <p class="font-20-700 font-1">Read Your December 2023 Angel Card Reading</p>
                    </div>

                    <div class="listCard mt-3 mb-4">
                        <a href="http://" target="_blank" rel="noopener noreferrer" class="category-tag mb-2" style="color: #000000!important;">ASTROLOGICAL FORECASTS</a>
                        <p class="font-20-700 font-1">The BEST Thing That Will Happen to You Before 2023 Ends, Based on Your Zodiac Sign</p>
                    </div>
                </div>
                @include('Front.includes.socialmedia')
            </div>
        </div>
    </div>

@stop

@push('script')
    <script>
        $("#homeFromSubmit").click(function(e) {
            e.preventDefault();
            let form = $('#homeFrom')[0];
            submitForm(form, 'reqFormWrrapper', 'homeReqFormRes', 'reqFormError');
            $('#homeFromSubmit').prop("disabled", true).html('<i class="fas fa-spinner fa-spin"></i>');
        });
        function submitForm(form, formWapperId, formResId, reqFormError) {
            let data = new FormData(form);
            $(`#${reqFormError}`).html('');
            $(`#${formResId}`).html('');
            $.ajax({
                url: "{{ route('submitHoroscopeForm') }}",
                type: "POST",
                data: data,
                dataType: "JSON",
                processData: false,
                contentType: false,
                success: function(response) {
                    console.log(response);
                    $(`#${formWapperId}`).addClass('d-none');
                    if (response.status === 200) {
                        $(`#${formResId}`).removeClass('d-none').addClass('d-block').html(`
                            <h3 class="text-success">${response.message}</h3>
                       `);
                    } else {
                        $(`#${formResId}`).removeClass('d-none').addClass('d-block').html(`
                            <h3 class="text-danger">Something Wrong. Reload and Try again.</h3>
                       `);
                        $('#homeFromSubmit').prop("disabled", false).html('Submit');
                        $('#floatingFormBtn').prop("disabled", false).html('Submit');
                    }
                },
                error: function(xhr, status, error) {
                    $('#homeFromSubmit').prop("disabled", false).html('Submit');
                    $('#floatingFormBtn').prop("disabled", false).html('Submit');
                    if (xhr.status === 422) {
                        $(`#${reqFormError}`).html(xhr.responseJSON?.message ?? 'Please fill all required fields');
                    } else {
                        $(`#${formWapperId}`).addClass('d-none');
                        $(`#${formResId}`).removeClass('d-none').addClass('d-block').html(`
                            <h3 class="text-danger">Something Wrong. Reload and Try again.</h3>
                       `);
                    }
                }

            });
        }
    </script>
@endpush