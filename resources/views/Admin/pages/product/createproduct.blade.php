@extends('Layouts.admin')
@section('content')


<div class="page-content">
	<!--breadcrumb-->
	<div class="page-breadcrumb d-none d-sm-flex align-items-center mb-3">
		<div class="breadcrumb-title pe-3">Product</div>
		<div class="ps-3">
			<nav aria-label="breadcrumb">
				<ol class="breadcrumb mb-0 p-0">
					<li class="breadcrumb-item"><a href="javascript:;"><i class="bx bx-home-alt"></i></a>
					</li>
					<li class="breadcrumb-item active" aria-current="page">Product</li>
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

						<h5 class="mb-0 text-primary">Add Product</h5>
					</div>
					<hr>
					<form class="row g-3" method="post" action="{{route('Product.store')}}" enctype="multipart/form-data">
						@csrf
						<div class="col-md-12">
							<label for="titleName" class="form-label">Product Name</label>
							<input type="text" id="titleName" name="title" value="{{old('title')}}" class="form-control">
						</div>

						<div class="col-md-12">
							<select class="form-select mb-3" name="category_id" aria-label="Default select example">
								<option selected>Select Category</option>
								@foreach($productcategory as $datas)
								<option selected="@if(old('category_id ')==$datas->id) {{'selected'}}  @endif" value="{{$datas->id}}">{{$datas->title}}</option>
								@endforeach
							</select>
						</div>

						<div class="col-12">
							<label for="contant" class="form-label">Description</label>
							<textarea class="form-control" id="mytextarea" name="description" placeholder="Contant" rows="3">{{old('description')}}</textarea>
						</div>

						<div class="col-md-12">
							<label for="titleName" class="form-label">Regular Price</label>
							<input type="text" id="titleName" name="regulareprice" value="{{old('regulareprice')}}" class="form-control">
						</div>

						<div class="col-md-12">
							<label for="titleName" class="form-label">Sale Price</label>
							<input type="text" id="titleName" name="price" value="{{old('price')}}" class="form-control">
						</div>

						<div class="col-12">
							<label for="contant" class="form-label">Short Description</label>
							<textarea class="form-control" id="mytextarea" name="shortdecription" placeholder="Short Description" rows="3">{{old('shortdecription')}}</textarea>
						</div>


						<div class="col-md-12">
							<label for="inputLastName" class="form-label">Product Image</label>
							<input class="form-control" type="file" name="thumbImage" id="formFile">
						</div>


						<div class="col-12">
							<label for="contant" class="form-label">Stock</label>
							<input type="text" id="titleName" name="stock" value="{{old('stock')}}" class="form-control">
						</div>

						<div class="col-12">
							<label for="contant" class="form-label">Size</label>
							<input type="text" id="titleName" name="size" value="{{old('size')}}" class="form-control">
						</div>
						<div class="col-12">
							<label for="contant" class="form-label">Color</label>
							<input type="text" id="titleName" name="color" value="{{old('color')}}" class="form-control">
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