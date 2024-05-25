@extends('Layouts.admin')
@section('content')


<div class="page-content">
	<!--breadcrumb-->
	<div class="page-breadcrumb d-none d-sm-flex align-items-center mb-3">
		<div class="breadcrumb-title pe-3">Contributor</div>
		<div class="ps-3">
			<nav aria-label="breadcrumb">
				<ol class="breadcrumb mb-0 p-0">
					<li class="breadcrumb-item"><a href="javascript:;"><i class="bx bx-home-alt"></i></a>
					</li>
					<li class="breadcrumb-item active" aria-current="page">Contributor</li>
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

						<h5 class="mb-0 text-primary">Add Contributor</h5>
					</div>
					<hr>
					<form class="row g-3" method="post" action="{{route('contributor.store')}}" enctype="multipart/form-data">
						@csrf
						<div class="col-md-12">
							<label for="titleName" class="form-label">Name</label>
							<input type="text" id="name" name="name" value="{{old('name')}}" class="form-control">
							<div class="invalid-feedback">Please Enter Title.</div>
						</div>
						<div class="col-12">
							<label for="description" class="form-label">Position</label>
							<input type="text" id="position" name="position" value="{{old('position')}}" class="form-control">
						</div>
						<div class="col-md-12">
							<label for="inputLastName" class="form-label">Profile Picture</label>
							<input class="form-control" type="file" name="profilepic" id="formFile">
						</div>

						<div class="col-12">
							<button type="submit" class="btn btn-primary px-5">Add</button>
						</div>
					</form>
				</div>
			</div>

		</div>
	</div>

	<!--end row-->
</div>

@stop