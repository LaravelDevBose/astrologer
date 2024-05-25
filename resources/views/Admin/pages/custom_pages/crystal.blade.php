        @extends('Layouts.admin')
        @section('content')
        
       
        
        <div class="page-content">
        <!--breadcrumb-->
        <div class="page-breadcrumb d-none d-sm-flex align-items-center mb-3">
        <div class="breadcrumb-title pe-3">Dream</div>
        <div class="ps-3">
        <nav aria-label="breadcrumb">
        <ol class="breadcrumb mb-0 p-0">
        <li class="breadcrumb-item"><a href="javascript:;"><i class="bx bx-home-alt"></i></a>
        </li>
        <li class="breadcrumb-item active" aria-current="page">Divination</li>
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
        
        <h5 class="mb-0 text-primary">Add Crystals</h5>
        </div>
        <hr>
        <form class="row g-3" method="post" action="{{route('crystals.store')}}" enctype="multipart/form-data">
        @csrf
        
        <div class="col-md-12">
        <label for="titleName" class="form-label">Heading2</label>
        <input type="text" id="heading" name="h2" value="{{$data->h2}}" class="form-control">
        
        
        </div>
        <input type="hidden" name="id" value="{{$data->id}}">
        
        <div class="col-md-12 mt-2">
        <label for="Banner2" class="form-label">Top Banner</label>
        <input class="form-control" type="file" name="image" id="formFile"value="{{$data->image}}">
        </div>
        
        <div class="col-md-12">
        <div class="col-12">
        <label for="description" class="form-label">Content </label>
        <textarea class="form-control" id="mytextarea" rows="4" cols="50"  name="contant" placeholder="content...">{{$data->contant}}</textarea>
        </div>
        </div>
        
         <div class="col-md-12">
        <label for="titleName" class="form-label">Video URL</label>
        <input type="text" id="heading" name="video_url" value="{{$data->video_url}}" class="form-control">
        <input type="hidden" name="id" value="{{$data->id}}">
        
        </div>
        
        
        
        <div class="col-md-12">
        <div class="col-12">
        <label for="description" class="form-label">Content 2 </label>
        <textarea class="form-control" id="mytextarea2" name="content2" placeholder="content2..." rows="4">{{$data->content2}}</textarea>
        </div>
        </div>
        
        <!--<div class="col-md-12">-->
        <!--<label for="titleName" class="form-label">Title</label>-->
        <!--<input type="text" id="heading" name="heading" value="{{$data->h1}}" class="form-control">-->
        <!--<input type="hidden" id="pagename" name="pagename" value="{{ Request::segment(2) }}">-->
        
        <!--</div>-->
        <!--<input type="hidden" id="id" name="id" value="{{$data->id}}" class="form-control">-->
        <!--<div class="col-md-12">-->
        <!--<label for="inputLastName" class="form-label">Top Image</label>-->
        <!--<input class="form-control" type="file" name="Image" id="formFile">-->
        <!--</div>-->
        
        
        <!--<div class="col-md-12">-->
        <!--<div class="col-12">-->
        <!--<label for="description" class="form-label">Content </label>-->
        <!--<textarea class="form-control" id="mytextarea" rows="4" cols="50" name="content" placeholder="content...">{!! $data->contant !!}</textarea>-->
        <!--</div>-->
        <!--</div>-->
        
        
        
        <br/>
        <button type="submit" class="btn btn-primary px-5">Add Crystal</button>
        
        <!--<div class="col-md-12">-->
        <!--<div class="col-12">-->
        <!--<button type="submit" class="btn btn-primary px-5">Add Crystal</button>-->
        <!--</div>-->
        <!--</form>-->
        <!--</div>-->
        </div>
        
        </div>
        </div>
        
        <!--end row-->
        </div>
        
        @stop