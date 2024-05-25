@extends('Layouts.admin')
@section('content')


<div class="page-content">
	<!--breadcrumb-->
	<div class="page-breadcrumb d-none d-sm-flex align-items-center mb-3">
		<div class="breadcrumb-title pe-3">Zodiac</div>
		<div class="ps-3">
			<nav aria-label="breadcrumb">
				<ol class="breadcrumb mb-0 p-0">
					<li class="breadcrumb-item"><a href="javascript:;"><i class="bx bx-home-alt"></i></a>
					</li>
					<li class="breadcrumb-item active" aria-current="page">Horoscope</li>
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

						<h5 class="mb-0 text-primary">Add Horoscope</h5>
					</div>
					<hr>
					<form class="row g-3" method="post" action="{{route('Horoscope.store')}}" enctype="multipart/form-data">
						@csrf
						<div class="col-md-12">
							<label for="titleName" class="form-label">Title</label>
							<input type="text" id="titleName" name="title" value="{{old('title')}}" class="form-control">
							
						</div>

						<div class="col-12">
							<label for="contant" class="form-label">Contant</label>
							<textarea class="form-control" id="mytextarea"   name="contant" placeholder="Contant" rows="3">{{old('contant')}}</textarea>
						</div>

						<div class="col-md-4">
							<label for="titleName" class="form-label">Zodiac</label>
							<select class="form-select mb-3" name="zodiac_id" aria-label="Default select example">
								<option selected>Select Zodiac</option>
							    @foreach($zodiac as $datas)
								<option selected="@if(old('zodiac_id')==$datas->id) {{'selected'}}  @endif" value="{{$datas->id}}">{{$datas->Name}}</option>
							   @endforeach
							</select>
						</div>
						<div class="col-md-4">
						<label for="titleName" class="form-label">Horoscope Category</label>
							<select class="form-select mb-3" name="horoscopecate_id" aria-label="Default select example">
								<option selected>Select Category</option>
								@foreach($horoscopeCategory as $datas)
								<option selected="@if(old('horoscopecate_id ')==$datas->id) {{'selected'}}  @endif" value="{{$datas->id}}">{{$datas->title}}</option>
							   @endforeach
							</select>
						</div>
						<div class="col-md-4">
							<label for="titleName" class="form-label">Date</label>
							<input class="result form-control" type="text" id="date" name="horoscopeDate" value="{{old('horoscopeDate')}}" placeholder="Date Picker...">
						</div>
					
						<div class="col-md-12">
							<label for="titleName" class="form-label">Excerpt</label>
							<textarea class="form-control" name="excerpt">{{old('excerpt')}}</textarea>
							
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