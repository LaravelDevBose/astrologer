        @extends('Layouts.admin')
        @section('content')
        
       
        
        <div class="page-content">
        <!--breadcrumb-->
        <div class="page-breadcrumb d-none d-sm-flex align-items-center mb-3">
        <div class="breadcrumb-title pe-3">3_card_tarot_love_reading</div>
        <div class="ps-3">
        <nav aria-label="breadcrumb">
        <ol class="breadcrumb mb-0 p-0">
        <li class="breadcrumb-item"><a href="javascript:;"><i class="bx bx-home-alt"></i></a>
        </li>
        <li class="breadcrumb-item active" aria-current="page">3_card_tarot_love_reading</li>
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
        
        <h5 class="mb-0 text-primary">Edit 3_card_tarot_love_reading</h5>
        </div>
        <hr>
        <form class="row g-3" method="post" action="{{route('3_card_tarot_love_reading.update')}}" enctype="multipart/form-data">
        @csrf
        
        <div class="col-md-12">
        <label for="Heading1" class="form-label">Heading</label>
        <input type="text" id="heading" name="heading" value="{{$data->heading}}" class="form-control">
        </div>
        
        <div class="col-md-12">
        <div class="col-12">
        <label for="mytextarea" class="form-label">Content </label>
        <textarea class="form-control" id="mytextarea" rows="4" cols="50"  name="content" placeholder="content...">{{$data->content}}</textarea>
        </div>
        </div>
        
      
        
         <div class="col-md-12">
        <label for="button_text" class="form-label">Buttontext</label>
        <input type="text" id="h2" name="button_text" value="{{$data->button_text}}" class="form-control">
        
        </div>
        <div class="col-md-12">
        <label for="button_url" class="form-label">ButtonUrl</label>
        <input type="text" id="button_url" name="button_url" value="{{$data->button_url}}" class="form-control">
        
        </div>
        
        <div class="col-md-12">
        <div class="col-12">
        <label for="mytextarea" class="form-label">Content2 </label>
        <textarea class="form-control" id="mytextarea" rows="4" cols="50"  name="content_2" placeholder="content2...">{{$data->content_2}}</textarea>
        </div>
        </div>
        
        <div class="col-md-12">
        <label for="Heading2" class="form-label">Button2text</label>
        <input type="text" id="button_2_text" name="button_2_text" value="{{$data->button_2_text}}" class="form-control">
        
        </div>
        <div class="col-md-12">
        <label for="Heading2" class="form-label">Button2Url</label>
        <input type="text" id="button_2_url" name="button_2_url" value="{{$data->button_2_url}}" class="form-control">
        
        </div>
       
        <div class="col-md-12">
        <div class="col-12">
        <label for="mytextarea" class="form-label">Content3 </label>
        <textarea class="form-control" id="mytextarea" rows="4" cols="50"  name="content_3" placeholder="content3...">{{$data->content_3}}</textarea>
        </div>
        </div>
        
         
        
        <input type="hidden" name="id" value="{{$data->id}}">
        
        <br/>
        <button type="submit" class="btn btn-primary px-5">Update 3_card_tarot_love_reading</button>
      
        </div>
        
        </div>
        </div>
        
        <!--end row-->
        </div>
        
        @stop