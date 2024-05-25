        @extends('Layouts.admin')
        @section('content')
        
       
        
        <div class="page-content">
        <!--breadcrumb-->
        <div class="page-breadcrumb d-none d-sm-flex align-items-center mb-3">
        <div class="breadcrumb-title pe-3">3-Card Tarot</div>
        <div class="ps-3">
        <nav aria-label="breadcrumb">
        <ol class="breadcrumb mb-0 p-0">
        <li class="breadcrumb-item"><a href="javascript:;"><i class="bx bx-home-alt"></i></a>
        </li>
        <li class="breadcrumb-item active" aria-current="page">3-Card Tarot</li>
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
        
        @if(session('success'))
        <div class="alert alert-success">
        {{ session('success') }}
        </div>
        @endif
        
        <div class="card-body p-5">
        <div class="card-title d-flex align-items-center">
        
        <h5 class="mb-0 text-primary">Edit Free 3-card-reading</h5>
        </div>
        <hr>
        <form class="row g-3" method="post" action="{{route('free-3-card-reading.update')}}" enctype="multipart/form-data">
        @csrf
        
        <div class="col-md-12">
        <label for="heading" class="form-label">Heading</label>
        <input type="text" id="heading" name="heading" value="{{$data->heading}}" class="form-control">
        </div>
        
         <div class="col-md-12">
        <div class="col-12">
        <label for="mytextarea" class="form-label">Content </label>
        <textarea class="form-control" id="mytextarea" rows="4" cols="50"  name="content" placeholder="content...">{{$data->content}}</textarea>
        </div>
        </div>
        
        <div class="col-md-12 mt-2">
        <label for="Banner2" class="form-label">Image</label>
        <input class="form-control" type="file" name="image" id="formFile"value="{{$data->image}}">
         <!-- In your Blade view -->
        <img src="{{ asset('storage/app/public/uploads/free3_card_images/' . $data->image) }}" alt="Image" class="mt-1">

        </div>
        
        <div class="col-md-12">
        <div class="col-12">
        <label for="mytextarea" class="form-label">Content2 </label>
        <textarea class="form-control" id="mytextarea" rows="4" cols="50"  name="content2" placeholder="content...">{{$data->content2}}</textarea>
        </div>
        </div>
        
        <input type="hidden" name="id" value="{{$data->id}}">
        
        <br/>
        <button type="submit" class="btn btn-primary px-5">Update</button>
      
        </div>
        
        </div>
        </div>
        
        <!--end row-->
        </div>
        
        @stop