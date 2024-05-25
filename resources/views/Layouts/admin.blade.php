<!doctype html>
<html lang="en">

   @include('Admin.includes.head')

<body>
    <!--wrapper-->
	<div class="wrapper">
     @include('Admin.includes.top_header')
 @include('Admin.includes.header')
      
       <div class="page-wrapper">
           @yield('content')
        </div>
	<!--start overlay-->
    <div class="overlay toggle-icon"></div>
		<!--end overlay-->
		<!--Start Back To Top Button--> <a href="javaScript:;" class="back-to-top"><i class='bx bxs-up-arrow-alt'></i></a>
		<!--End Back To Top Button-->
		<footer class="page-footer">
			<p class="mb-0">Copyright © 2021. All right reserved.</p>
		</footer>
	</div>
	<!--end wrapper-->

  @include('Admin.includes.footer')
</body>

</html>
