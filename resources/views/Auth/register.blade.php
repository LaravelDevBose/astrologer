@extends('Auth.layouts')

@section('content')

<div class="loginContainer contanier-fluid">

<!-- <div id='stars'></div>
<div id='stars2'></div>
<div id='stars3'></div> -->
       <div class="container h-100">
           <div class="row h-100">
               <!-- <div class="col-md-8 col-12 text-col my-auto">
                   <p class="title-tag font-1">Members' Area</p>
                   <ul class="list-unstyled font-1 font-22-400">
                       <li class="my-2"><svg width="32px" height="32px" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg"><g id="SVGRepo_bgCarrier" stroke-width="0"></g><g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round" stroke="#CCCCCC" stroke-width="0.9120000000000001"></g><g id="SVGRepo_iconCarrier"> <g id="Interface / Check"> <path id="Vector" d="M6 12L10.2426 16.2426L18.727 7.75732" stroke="#d1589f" stroke-width="2.4" stroke-linecap="round" stroke-linejoin="round"></path> </g> </g></svg> Access to expert Psychic guidance</li>
                       <li class="my-2"><svg width="32px" height="32px" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg"><g id="SVGRepo_bgCarrier" stroke-width="0"></g><g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round" stroke="#CCCCCC" stroke-width="0.9120000000000001"></g><g id="SVGRepo_iconCarrier"> <g id="Interface / Check"> <path id="Vector" d="M6 12L10.2426 16.2426L18.727 7.75732" stroke="#d1589f" stroke-width="2.4" stroke-linecap="round" stroke-linejoin="round"></path> </g> </g></svg> Answers in times of uncertainty</li>
                       <li class="my-2"><svg width="32px" height="32px" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg"><g id="SVGRepo_bgCarrier" stroke-width="0"></g><g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round" stroke="#CCCCCC" stroke-width="0.9120000000000001"></g><g id="SVGRepo_iconCarrier"> <g id="Interface / Check"> <path id="Vector" d="M6 12L10.2426 16.2426L18.727 7.75732" stroke="#d1589f" stroke-width="2.4" stroke-linecap="round" stroke-linejoin="round"></path> </g> </g></svg> New Psychic Advisors added frequently</li>
                       <li class="my-2"><svg width="32px" height="32px" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg"><g id="SVGRepo_bgCarrier" stroke-width="0"></g><g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round" stroke="#CCCCCC" stroke-width="0.9120000000000001"></g><g id="SVGRepo_iconCarrier"> <g id="Interface / Check"> <path id="Vector" d="M6 12L10.2426 16.2426L18.727 7.75732" stroke="#d1589f" stroke-width="2.4" stroke-linecap="round" stroke-linejoin="round"></path> </g> </g></svg> FREE Daily and Weekly Horoscopes</li>
                       <li class="my-2"><svg width="32px" height="32px" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg"><g id="SVGRepo_bgCarrier" stroke-width="0"></g><g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round" stroke="#CCCCCC" stroke-width="0.9120000000000001"></g><g id="SVGRepo_iconCarrier"> <g id="Interface / Check"> <path id="Vector" d="M6 12L10.2426 16.2426L18.727 7.75732" stroke="#d1589f" stroke-width="2.4" stroke-linecap="round" stroke-linejoin="round"></path> </g> </g></svg> FREE Love and Career Horoscopes</li>
                   </ul>
               </div> -->
               <div class="col-md-4 col-12 form-col mx-auto my-auto">
               @if ($errors->any())
				<div class="alert alert-danger">
					<ul>
						@foreach ($errors->all() as $error)
						<li>{{ $error }}</li>
						@endforeach
					</ul>
				</div>
				@endif
                   <form action="{{ route('store') }}" method="post" id="signupForm">
                    @csrf
                       <p class="title-tag font-1">Sign up</p>
                       <div class="form-group mb-3">
                           <svg width="24px" height="24px" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg"><g id="SVGRepo_bgCarrier" stroke-width="0"></g><g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g><g id="SVGRepo_iconCarrier"> <circle cx="12" cy="6" r="4" fill="#ffffff"></circle> <path d="M20 17.5C20 19.9853 20 22 12 22C4 22 4 19.9853 4 17.5C4 15.0147 7.58172 13 12 13C16.4183 13 20 15.0147 20 17.5Z" fill="#ffffff"></path> </g></svg>
                           <input type="text" placeholder="First Name" name="name" value="{{ old('name') }}" class=""> 
                       </div>

                       <div class="form-group mb-3">
                           <svg width="24px" height="24px" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg"><g id="SVGRepo_bgCarrier" stroke-width="0"></g><g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g><g id="SVGRepo_iconCarrier"> <circle cx="12" cy="6" r="4" fill="#ffffff"></circle> <path d="M20 17.5C20 19.9853 20 22 12 22C4 22 4 19.9853 4 17.5C4 15.0147 7.58172 13 12 13C16.4183 13 20 15.0147 20 17.5Z" fill="#ffffff"></path> </g></svg>
                           <input type="text" placeholder="Last Name" name="lastname" value="{{ old('lastname') }}" class=""> 
                       </div>

                       <div class="form-group mb-3">
                           <svg fill="#ffffff" width="24px" height="24px" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg" stroke="#ffffff"><g id="SVGRepo_bgCarrier" stroke-width="0"></g><g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g><g id="SVGRepo_iconCarrier"><path d="M22,5V9L12,13,2,9V5A1,1,0,0,1,3,4H21A1,1,0,0,1,22,5ZM2,11.154V19a1,1,0,0,0,1,1H21a1,1,0,0,0,1-1V11.154l-10,4Z"></path></g></svg>
                           <input type="text" placeholder="Email Address" name="email" value="{{ old('email') }}" class=""> 
                       </div>

                       <div class="form-group mb-3">
                           <svg width="24px" height="24px" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg"><g id="SVGRepo_bgCarrier" stroke-width="0"></g><g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g><g id="SVGRepo_iconCarrier"> <path d="M16.5562 12.9062L16.1007 13.359C16.1007 13.359 15.0181 14.4355 12.0631 11.4972C9.10812 8.55901 10.1907 7.48257 10.1907 7.48257L10.4775 7.19738C11.1841 6.49484 11.2507 5.36691 10.6342 4.54348L9.37326 2.85908C8.61028 1.83992 7.13596 1.70529 6.26145 2.57483L4.69185 4.13552C4.25823 4.56668 3.96765 5.12559 4.00289 5.74561C4.09304 7.33182 4.81071 10.7447 8.81536 14.7266C13.0621 18.9492 17.0468 19.117 18.6763 18.9651C19.1917 18.9171 19.6399 18.6546 20.0011 18.2954L21.4217 16.883C22.3806 15.9295 22.1102 14.2949 20.8833 13.628L18.9728 12.5894C18.1672 12.1515 17.1858 12.2801 16.5562 12.9062Z" fill="#ffffff"></path> </g></svg>
                           <input type="text" placeholder="Phone No" name="phone" value="{{ old('phone') }}" class=""> 
                       </div>

                       <div class="form-group mb-3 d-flex ps-3">
                          <div class="ratio-box d-flex align-items-center me-3">
                           <input class="me-1" type="radio" name="gender" id="" checked>
                           <label for="" class="font-1">Male</label>
                          </div>
                          <div class="ratio-box d-flex align-items-center me-3">
                           <input class="me-1" type="radio" name="gender" id="">
                           <label for="" class="font-1">Female</label>
                          </div>
                          <div class="ratio-box d-flex align-items-center me-3">
                           <input class="me-1" type="radio" name="gender" id="">
                           <label for="" class="font-1">Other</label>
                          </div>
                       </div>


   
                       <div class="form-group mb-3">
                           <svg width="24px" height="24px" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg"><g id="SVGRepo_bgCarrier" stroke-width="0"></g><g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g><g id="SVGRepo_iconCarrier"> <path fill-rule="evenodd" clip-rule="evenodd" d="M5.25 10.0546V8C5.25 4.27208 8.27208 1.25 12 1.25C15.7279 1.25 18.75 4.27208 18.75 8V10.0546C19.8648 10.1379 20.5907 10.348 21.1213 10.8787C22 11.7574 22 13.1716 22 16C22 18.8284 22 20.2426 21.1213 21.1213C20.2426 22 18.8284 22 16 22H8C5.17157 22 3.75736 22 2.87868 21.1213C2 20.2426 2 18.8284 2 16C2 13.1716 2 11.7574 2.87868 10.8787C3.40931 10.348 4.13525 10.1379 5.25 10.0546ZM6.75 8C6.75 5.10051 9.10051 2.75 12 2.75C14.8995 2.75 17.25 5.10051 17.25 8V10.0036C16.867 10 16.4515 10 16 10H8C7.54849 10 7.13301 10 6.75 10.0036V8Z" fill="#ffffff"></path> </g></svg>
                           <input type="password" placeholder="Password" name="password" id="password" class=""> 
                       </div>
                       <div class="form-group mb-3">
                           <svg width="24px" height="24px" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg"><g id="SVGRepo_bgCarrier" stroke-width="0"></g><g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g><g id="SVGRepo_iconCarrier"> <path fill-rule="evenodd" clip-rule="evenodd" d="M5.25 10.0546V8C5.25 4.27208 8.27208 1.25 12 1.25C15.7279 1.25 18.75 4.27208 18.75 8V10.0546C19.8648 10.1379 20.5907 10.348 21.1213 10.8787C22 11.7574 22 13.1716 22 16C22 18.8284 22 20.2426 21.1213 21.1213C20.2426 22 18.8284 22 16 22H8C5.17157 22 3.75736 22 2.87868 21.1213C2 20.2426 2 18.8284 2 16C2 13.1716 2 11.7574 2.87868 10.8787C3.40931 10.348 4.13525 10.1379 5.25 10.0546ZM6.75 8C6.75 5.10051 9.10051 2.75 12 2.75C14.8995 2.75 17.25 5.10051 17.25 8V10.0036C16.867 10 16.4515 10 16 10H8C7.54849 10 7.13301 10 6.75 10.0036V8Z" fill="#ffffff"></path> </g></svg>
                           <input type="password" placeholder="Confirm Password" name="password_confirmation" id="confirmPassword" class=""> 
                           <p id="passwordError" style="color: rgb(233, 6, 6);"></p>
                       </div>
                       <div class="form-group mb-3 d-flex align-items-center">
                        <input type="checkbox" id="" class="me-2"> 
                          <label for=""  class="font-16-500 font-1">I read <a href="" class="font-16-500 text-center text-white text-decoration-none font-1">terms & condition</a></label>
                       </div>
                       <div class="form-group mb-3 text-center">
                           <input type="submit" class="mb-2" value="SIGN UP" onclick="validatePassword()"> 
                           
                       </div>

                       <div class="form-group mb-3 ">
                    
                           <a href="login.html" class="font-16-500 text-start text-white text-decoration-none font-1">Already have account? <span class="text-decoration-underline  font-18-400">Login</span></a>
                       </div>
   
                   </form>
               </div>
   
           </div>
       </div>
   </div>
@endsection