@extends('Auth.layouts')

@section('content')

    <div class="loginContainer contanier-fluid">

    <!-- <div id='stars'></div>
    <div id='stars2'></div>
    <div id='stars3'></div> -->
        <div class="container h-100">
            <div class="row h-100">
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
                        <form action="{{ route('authenticate') }}" method="post">
                        @csrf
                            <p class="title-tag font-1">Login</p>
                            <div class="form-group mb-3">
                                <svg width="24px" height="24px" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg"><g id="SVGRepo_bgCarrier" stroke-width="0"></g><g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g><g id="SVGRepo_iconCarrier"> <circle cx="12" cy="6" r="4" fill="#ffffff"></circle> <path d="M20 17.5C20 19.9853 20 22 12 22C4 22 4 19.9853 4 17.5C4 15.0147 7.58172 13 12 13C16.4183 13 20 15.0147 20 17.5Z" fill="#ffffff"></path> </g></svg>
                                <input type="text" placeholder="Email Address"  name="email" class=""> 
                            </div>
        
                            <div class="form-group mb-3">
                                <svg width="24px" height="24px" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg"><g id="SVGRepo_bgCarrier" stroke-width="0"></g><g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g><g id="SVGRepo_iconCarrier"> <path fill-rule="evenodd" clip-rule="evenodd" d="M5.25 10.0546V8C5.25 4.27208 8.27208 1.25 12 1.25C15.7279 1.25 18.75 4.27208 18.75 8V10.0546C19.8648 10.1379 20.5907 10.348 21.1213 10.8787C22 11.7574 22 13.1716 22 16C22 18.8284 22 20.2426 21.1213 21.1213C20.2426 22 18.8284 22 16 22H8C5.17157 22 3.75736 22 2.87868 21.1213C2 20.2426 2 18.8284 2 16C2 13.1716 2 11.7574 2.87868 10.8787C3.40931 10.348 4.13525 10.1379 5.25 10.0546ZM6.75 8C6.75 5.10051 9.10051 2.75 12 2.75C14.8995 2.75 17.25 5.10051 17.25 8V10.0036C16.867 10 16.4515 10 16 10H8C7.54849 10 7.13301 10 6.75 10.0036V8Z" fill="#ffffff"></path> </g></svg>
                                <input type="password" placeholder="Password"  name="password" class=""> 
                            </div>
                            <div class="form-group mb-3 text-center">
                                <input type="submit" class="mb-2" value="LOGIN"> 
                                <a href="#" class="font-16-500 text-center text-white text-decoration-none font-1">Forget your Password?</a>
                            </div>

                        <div class="form-group mb-3 text-center">
                            <p>OR</p>
                            <a href="{{route('register')}}" class="font-16-500 text-center text-white text-decoration-none font-1">Don't have account? <span class="text-decoration-underline font-18-400">Sign up</span></a>
                        </div>
    
                    </form>
                </div>
    
            </div>
        </div>
    </div>
@endsection