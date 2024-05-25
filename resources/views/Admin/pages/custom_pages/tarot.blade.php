        @extends('Layouts.admin')
        @section('content')
        
       
        
        <div class="page-content">
        <!--breadcrumb-->
        <div class="page-breadcrumb d-none d-sm-flex align-items-center mb-3">
        <div class="breadcrumb-title pe-3">Tarot</div>
        <div class="ps-3">
        <nav aria-label="breadcrumb">
        <ol class="breadcrumb mb-0 p-0">
        <li class="breadcrumb-item"><a href="javascript:;"><i class="bx bx-home-alt"></i></a>
        </li>
        <li class="breadcrumb-item active" aria-current="page">Tarot</li>
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
        
        <h5 class="mb-0 text-primary">Edit Tarot</h5>
        </div>
        <hr>
        <form class="row g-3" method="post" action="{{route('tarot.update')}}" enctype="multipart/form-data">
        @csrf
        
        <div class="col-md-12 mt-2">
        <label for="Banner2" class="form-label">Top Banner</label>
        <input class="form-control" type="file" name="image" id="formFile"value="{{$data->image}}">
         <!-- In your Blade view -->
        <img src="{{ asset('storage/app/public/uploads/tarot_images/' . $data->image) }}" alt="Image" class="mt-1">

        </div>
        
        <div class="col-md-12">
        <label for="Heading1" class="form-label">Heading1</label>
        <input type="text" id="h1" name="h1" value="{{$data->h1}}" class="form-control">
        
        <div class="col-md-12">
        <label for="Heading2" class="form-label">Heading2</label>
        <input type="text" id="h2" name="h2" value="{{$data->h2}}" class="form-control">
        
        </div>
        
        <div class="col-md-12">
        <div class="col-12">
        <label for="mytextarea" class="form-label">Content1 </label>
        <textarea class="form-control" id="mytextarea" rows="4" cols="50"  name="content_1" placeholder="content1...">{{$data->content_1}}</textarea>
        </div>
        </div>
        
        
        <div class="col-md-12">
        <label for="Heading2" class="form-label">Button1</label>
        <input type="text" id="h2" name="button_1_text" value="{{$data->button_1_text}}" class="form-control">
        
        </div>
        <div class="col-md-12">
        <label for="Heading2" class="form-label">Button1Url</label>
        <input type="text" id="h2" name="button_1_url" value="{{$data->button_1_url}}" class="form-control">
        
        </div>
        
        <div class="col-md-12">
        <div class="col-12">
        <label for="mytextarea" class="form-label">Content2 </label>
        <textarea class="form-control" id="mytextarea" rows="4" cols="50"  name="content_2" placeholder="content2...">{{$data->content_2}}</textarea>
        </div>
        </div>
        
         <div class="col-md-12">
        <label for="Heading2" class="form-label">Button2</label>
        <input type="text" id="h2" name="button_2_text" value="{{$data->button_2_text}}" class="form-control">
        
        </div>
        <div class="col-md-12">
        <label for="Heading2" class="form-label">Button2Url</label>
        <input type="text" id="h2" name="button_2_url" value="{{$data->button_2_url}}" class="form-control">
        
        </div>
        
        
        <div class="col-md-12">
        <div class="col-12">
        <label for="mytextarea" class="form-label">Content3 </label>
        <textarea class="form-control" id="mytextarea" rows="4" cols="50"  name="content_3" placeholder="content3...">{{$data->content_3}}</textarea>
        </div>
        </div>
        
         <div class="col-md-12">
        <label for="button_3_text" class="form-label">Button3</label>
        <input type="text" id="h2" name="button_3_text" value="{{$data->button_3_text}}" class="form-control">
        
        </div>
        <div class="col-md-12">
        <label for="button_3_url" class="form-label">Button3Url</label>
        <input type="text" id="h2" name="button_3_url" value="{{$data->button_3_url}}" class="form-control">
        
        </div>
        
         <div class="col-md-12">
        <div class="col-12">
        <label for="mytextarea" class="form-label">Content4 </label>
        <textarea class="form-control" id="mytextarea" rows="4" cols="50"  name="content_4" placeholder="content4...">{{$data->content_4}}</textarea>
        </div>
        </div>
        
         <div class="col-md-12">
        <label for="button_4_text" class="form-label">Button4</label>
        <input type="text" id="h2" name="button_4_text" value="{{$data->button_4_text}}" class="form-control">
        
        </div>
        <div class="col-md-12">
        <label for="button_4_url" class="form-label">Button4Url</label>
        <input type="text" id="h2" name="button_4_url" value="{{$data->button_4_url}}" class="form-control">
        
        </div>
        
        <div class="col-md-12">
        <div class="col-12">
        <label for="mytextarea" class="form-label">Content5 </label>
        <textarea class="form-control" id="mytextarea" rows="4" cols="50"  name="content_5" placeholder="content5...">{{$data->content_5}}</textarea>
        </div>
        </div>
        
         <div class="col-md-12">
        <label for="button_5_text" class="form-label">Button5</label>
        <input type="text" id="h2" name="button_5_text" value="{{$data->button_5_text}}" class="form-control">
        
        </div>
        <div class="col-md-12">
        <label for="button_5_url" class="form-label">Button5Url</label>
        <input type="text" id="button_5_url" name="button_5_url" value="{{$data->button_5_url}}" class="form-control">
        
        </div>
        
        
        
        <input type="hidden" name="id" value="{{$data->id}}">
        
        
     

        
       
        
       
        
        <br/>
        <button type="submit" class="btn btn-primary px-5">Update Tarot</button>
      
        </div>
        
        </div>
        </div>
        
        <!--end row-->
        </div>
        
        @stop