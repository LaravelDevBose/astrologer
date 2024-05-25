@extends('Layouts.admin')
@section('content')


<div class="page-content">
	<!--breadcrumb-->
	<div class="page-breadcrumb d-none d-sm-flex align-items-center mb-3">
		<div class="breadcrumb-title pe-3">Site Settings</div>
		<div class="ps-3">
			<nav aria-label="breadcrumb">
				<ol class="breadcrumb mb-0 p-0">
					<li class="breadcrumb-item"><a href="javascript:;"><i class="bx bx-home-alt"></i></a>
					</li>
					<li class="breadcrumb-item active" aria-current="page">Site Settings</li>
				</ol>
			</nav>
		</div>

	</div>
	<!--end breadcrumb-->
	<div class="row">

		<div class="mx-auto">

			<div class="card border-top border-0 border-4 border-primary cardForm">
				@if($errors->any())
				<div class="alert alert-danger">
					<ul>
						@foreach ($errors->all() as $error)
						<li>{{ $error }}</li>
						@endforeach
					</ul>
				</div>
				@endif
				<div class="card-body p-5">
					<div class="card-title d-flex align-items-center">

						<h5 class="mb-0 text-primary">Site Settings</h5>
					</div>
					<hr>
					<form class="row g-3" method="post" action="{{route('settings.update')}}" enctype="multipart/form-data">
						@csrf
						
						<div class="col-4">
							<label for="contant" class="form-label">Website Logo</label>
							<input class="form-control" type="file" name="websiteLogo" id="formFile">
						</div>

						
						<div class="col-4">
							<label for="contant" class="form-label">Mobile Logo</label>
							<input class="form-control" type="file" name="mobileLogo" id="formFile">
						</div>

						<div class="col-4">
							<label for="contant" class="form-label">Fevicon</label>
							<input class="form-control" type="file" name="feviconLogo" id="formFile">
						</div>


						<div class="col-md-12">
							<label for="titleName" class="form-label">Site Title</label>
							<input type="text" id="titleName" name="title" value="{{$data->title}}" class="form-control">
							
						</div>
                
						<div class="col-12">
							<h4>Social media links</h4>
						</div>
						<div class="col-3">
							<label for="contant" class="form-label">facebook Link</label>
							<input class="form-control" type="text" name="facebooklink" value="{{$data->facebooklink}}" id="formFile">
						</div>

						<div class="col-3">
							<label for="contant" class="form-label">Instagram</label>
							<input class="form-control" type="text" name="instagram" value="{{$data->instagram}}" id="formFile">
						</div>

						<div class="col-3">
							<label for="contant" class="form-label">Youtube</label>
							<input class="form-control" type="text" name="youtube" value="{{$data->youtube}}"  id="formFile">
						</div>

						<div class="col-3">
							<label for="contant" class="form-label">Twitter</label>
							<input class="form-control" type="text" name="twitter" value="{{$data->twitter}}" id="formFile">
						</div>

						<div class="col-3">
							<label for="contant" class="form-label">Pinterest</label>
							<input class="form-control" type="text" name="pinterest" value="{{$data->pinterest}}" id="formFile">
						</div>

						<div class="col-3">
							<label for="contant" class="form-label">Tiktok</label>
							<input class="form-control" type="text" name="tiktok" value="{{$data->tiktok}}" id="formFile">
						</div>

						<!-- <div class="col-12">
							<label for="contant" class="form-label">Google Search Console</label>
							<input class="form-control" type="text" name="googlesearchconsole" id="formFile">
						</div> -->


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