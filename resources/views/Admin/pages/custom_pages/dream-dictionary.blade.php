        @extends('Layouts.admin')
        @section('content')
        
        
        <div class="page-content">
        <!--breadcrumb-->
        <div class="page-breadcrumb d-none d-sm-flex align-items-center mb-3">
        <div class="breadcrumb-title pe-3">Dream Dictionary</div>
        <div class="ps-3">
        <nav aria-label="breadcrumb">
        <ol class="breadcrumb mb-0 p-0">
        <li class="breadcrumb-item"><a href="javascript:;"><i class="bx bx-home-alt"></i></a>
        </li>
        <li class="breadcrumb-item active" aria-current="page">Dream Dictionary</li>
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
        
        <h5 class="mb-0 text-primary">Edit Dream Dictionary</h5>
        </div>
        <hr>
        <form class="row g-3" method="post" action="{{route('store.dream-dictionary')}}" enctype="multipart/form-data">
        @csrf
        
        
        <!--<div class="col-md-12">-->
        <!--<label for="heading" class="form-label">Heading</label>-->
        <!--<input type="text" id="heading" name="h1" value="{{$data->h1}}" class="form-control">-->
        <!--<input type="hidden" id="pagename" name="id" value="{{$data->id}}">-->
        
        <!--</div>-->
        
        
        <!--<div class="col-md-12">-->
        <!--<label for="subheading" class="form-label">Sub Heading</label>-->
        <!--<input type="text" id="subheading" name="h2" value="{{$data->h2}}" class="form-control">-->
        <!--</div>-->
        
       
        <!--<div class="col-md-12">-->
        <!--<div class="col-12">-->
        <!--<label for="description" class="form-label">Content </label>-->
        <!--<textarea class="form-control" id="mytextarea" rows="4" cols="50" value="{{old('content')}} name="contant" placeholder="content...">{{$data->contant}}</textarea>-->
        <!--</div>-->
        <!--</div>-->
        
        
        <!--<div class="col-md-12">-->
        <!--<label for="button_text" class="form-label">Button Text</label>-->
        <!--<input type="text" id="button_text" name="button_text" value="{{$data->button_text}}" class="form-control">-->
        <!--<div class="invalid-feedback">Please Enter Button Text.</div>-->
        <!--</div> -->
        
        
        <!--<div class="col-md-12">-->
        <!--<label for="button_url" class="form-label">Button Url</label>-->
        <!--<input type="text" id="button_url" name="button_url" value="{{$data->button_url}}" class="form-control">-->
        <!--<div class="invalid-feedback">Please Enter Button Url.</div>-->
        <!--</div> -->
        
        <!--<div class="col-md-12">-->
        <!--<div class="col-12">-->
        <!--<label for="description" class="form-label">Content 2 </label>-->
        <!--<textarea class="form-control" id="mytextarea2"  name="content2" placeholder="content2..." rows="4">{{$data->content2}}</textarea>-->
        <!--</div>-->
        <!--</div>-->
        <!--<br/>-->
        
        
         <div class="col-md-12">
        <label for="titleName" class="form-label">Heading2</label>
        <input type="text" id="heading" name="h2" value="{{$data->h2}}" class="form-control">
        <input type="hidden" name="id" value="{{$data->id}}">
        
        </div>
        
        <div class="col-md-12">
        <label for="titleName" class="form-label">Heading3</label>
        <input type="text" id="heading" name="h3" value="{{$data->h3}}" class="form-control">
       
        
        </div>
        
        
        
         <div class="col-md-12">
        <div class="col-12">
        <label for="description" class="form-label">Content </label>
        <textarea class="form-control" id="mytextarea" rows="4" cols="50"  name="contant" placeholder="content...">{{$data->contant}}</textarea>
        </div>
        </div>
        
        <div class="col-md-12">
        <label for="button_text" class="form-label">Button Text</label>
        <input type="text" id="button_text" name="button_text" value="{{$data->button_text}}" class="form-control">
        <div class="invalid-feedback">Please Enter Button Text.</div>
        </div> 
        
        <div class="col-md-12">
        <label for="button_url" class="form-label">Button Url</label>
        <input type="text" id="button_url" name="button_url" value="{{$data->button_url}}" class="form-control">
        <div class="invalid-feedback">Please Enter Button Url.</div>
        </div>  
        
        
         <div class="col-md-12">
        <div class="col-12">
        <label for="description" class="form-label">Content 2 </label>
        <textarea class="form-control" id="mytextarea2" name="content2" placeholder="content2..." rows="4">{{$data->content2}}</textarea>
        </div>
        </div>
        
        <!--<div class="col-md-12">-->
        <!--<label for="button_url" class="form-label">Button Url</label>-->
        <!--<input type="text" id="button_url" name="button_url" value="{{$data->button_url}}" class="form-control">-->
        <!--<div class="invalid-feedback">Please Enter Button Url.</div>-->
        <!--</div> -->
        
        
        
        <!--<div class="col-md-12">-->
        <!--<label for="button_text" class="form-label">Button Text</label>-->
        <!--<input type="text" id="button_text" name="button_text" value="{{$data->button_text}}" class="form-control">-->
        <!--<div class="invalid-feedback">Please Enter Button Text.</div>-->
        <!--</div> -->
        
         <div class="col-md-12">
        <label for="button_text" class="form-label">Button2 Text</label>
        <input type="text"  name="button2_text" value="{{$data->button2_text}}" class="form-control">
        <div class="invalid-feedback">Please Enter Button Text2.</div>
        </div> 
        
        
        <div class="col-md-12">
        <label for="button_url" class="form-label">Button2 Url</label>
        <input type="text"  name="button2_url" value="{{$data->button2_url}}" class="form-control">
        <div class="invalid-feedback">Please Enter Button Url.</div>
        </div> 
        
        <div class="col-md-12">
        <div class="col-12">
        <label for="description" class="form-label">Content 3 </label>
        <textarea class="form-control" id="mytextarea2" name="content3" placeholder="content3..." rows="4">{{$data->content3}}</textarea>
        </div>
        </div>
        
        
        <br/>
        
        <div class="col-md-12">
            
            
        
        <div class="col-md-12">
        <div class="col-12">
        <button type="submit" class="btn btn-primary px-5">Update Dream Dictionary</button>
        </div>
        </form>
        </div>
        </div>
        
        </div>
        </div>
        
        <!--end row-->
        </div>
        
        @stop