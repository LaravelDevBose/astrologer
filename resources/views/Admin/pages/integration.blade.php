@extends('Layouts.admin')
@section('content')


<div class="page-content">
	<!--breadcrumb-->
	<div class="page-breadcrumb d-none d-sm-flex align-items-center mb-3">
		<div class="breadcrumb-title pe-3">Integration Settings</div>
		<div class="ps-3">
			<nav aria-label="breadcrumb">
				<ol class="breadcrumb mb-0 p-0">
					<li class="breadcrumb-item"><a href="javascript:;"><i class="bx bx-home-alt"></i></a>
					</li>
					<li class="breadcrumb-item active" aria-current="page">Integration Settings</li>
				</ol>
			</nav>
		</div>

	</div>
	<!--end breadcrumb-->
	<div class="row">

		<div class="mx-auto">

			<div class="card border-top border-0 border-4 border-primary cardForm">
				
				<div class="card-body p-5">
					<div class="card-title d-flex align-items-center">

						<h5 class="mb-0 text-primary">Integration Settings</h5>
					</div>
					<hr>
					<form class="row g-3" method="post" action="{{route('integration.update')}}" enctype="multipart/form-data">
						@csrf
						
						<div class="col-12">
							<label for="contant" class="form-label">Google Search console</label>
							<input class="form-control" type="text" name="googlesearchconsole" value="{{$data->googlesearchconsole}}" id="formFile">
						</div>

						<div class="col-12">
							<label for="contant" class="form-label">Bing Search console</label>
							<input class="form-control" type="text" value="{{$data->bingsearch}}" name="bingsearch" id="formFile">
						</div>

						<div class="col-12">
							<label for="contant" class="form-label">Yandesk Search console</label>
							<input class="form-control" type="text" name="yandesk"  value="{{$data->yandesk}}" id="formFile">
						</div>
						
						<div class="col-3">
							<label for="contant" class="form-label">Generate sitemap</label>
							<a class="btn btn-primary px-5" href="{{route('sitemap.xml')}}">Generate</a>
						</div>


						<div class="col-12">
							<button type="submit" class="btn btn-primary px-5">Save Settings</button>
						</div>
					</form>
				</div>
			</div>

		</div>
	</div>

	<!--end row-->
</div>

@stop