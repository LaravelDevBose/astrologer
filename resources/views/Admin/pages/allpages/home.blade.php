@extends('Layouts.admin')
@section('content')


<div class="page-content">
	<!--breadcrumb-->
	<div class="page-breadcrumb d-none d-sm-flex align-items-center mb-3">
		<div class="breadcrumb-title pe-3">Home Page</div>
		<div class="ps-3">
			<nav aria-label="breadcrumb">
				<ol class="breadcrumb mb-0 p-0">
					<li class="breadcrumb-item"><a href="javascript:;"><i class="bx bx-home-alt"></i></a>
					</li>
					<li class="breadcrumb-item active" aria-current="page">Home Page</li>
				</ol>
			</nav>
		</div>

	</div>
	<!--end breadcrumb-->
	<div class="row">

		<div class="mx-auto">

			<div class="card border-top border-0 border-4 border-primary">
				@if ($errors->any())
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

						<h5 class="mb-0 text-primary">Edit</h5>
					</div>
					<hr>
					<form class="row g-3" method="post" action="{{route('home.edit')}}" enctype="multipart/form-data">
						@csrf
						<div class="col-md-12">
							<label for="titleName" class="form-label">Heading</label>
							<input type="text" id="h1" name="h1" value="{{$data->h1}}" class="form-control">
							<input type="hidden" id="id" name="id" value="{{$data->id}}" class="form-control">
						</div>
						<div class="col-12">
							<label for="description" class="form-label">Heading 2</label>
							<input type="text" id="h2" name="h2" value="{{$data->h2}}" class="form-control">						</div>

						<div class="col-12">
							<button type="submit" class="btn btn-primary px-5">Update</button>
						</div>
					</form>
				</div>
			</div>

		</div>
	</div>

	<!--end row-->
</div>
@stop