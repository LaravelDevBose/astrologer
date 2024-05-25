        @extends('Layouts.admin')
        @section('content')
        
        
        <div class="page-content">
        <!--breadcrumb-->
        <div class="page-breadcrumb d-none d-sm-flex align-items-center mb-3">
        <div class="breadcrumb-title pe-3">Zordic Article</div>
        <div class="ps-3">
        <nav aria-label="breadcrumb">
        <ol class="breadcrumb mb-0 p-0">
        <li class="breadcrumb-item"><a href="javascript:;"><i class="bx bx-home-alt"></i></a>
        </li>
        <li class="breadcrumb-item active" aria-current="page">Add Zordic Article</li>
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
        <!-- Check if there's a success message in the session -->
        @if(session('success'))
        <div class="alert alert-success">
        {{ session('success') }}
        </div>
        @endif
        
        <div class="card-body p-5">
        <div class="card-title d-flex align-items-center">
        
        <h5 class="mb-0 text-primary">Add</h5>
        </div>
        <hr>
        <form class="row g-3" method="post" action="{{ route('zordic-article-store') }}">
        @csrf
        
        
        <div class="col-md-12">
        <label for="title" class="form-label">Gender</label>
        <select class="form-control" name="zordic_gender">
        @if($zordicgender)
        @foreach($zordicgender as $gender)
        <option value="{{$gender->id}}">{{$gender->gender}}</option>
        @endforeach
        @endif
        </select>
        </div>
        
        
        <div class="col-md-12">
        <label for="title" class="form-label">Sign</label>
        <select class="form-control" name="zordicsign_id">
        @if($zordic_sign)
        @foreach($zordic_sign as $sign)
        <option value="{{$sign->id}}">{{$sign->title}}</option>
        @endforeach
        @endif
        </select>
        </div>
        
        <div class="col-md-12">
        <label for="mantra" class="form-label">Content</label>
        <textarea class="form-control" id="mytextarea2" name="content"  rows="4"></textarea>
        </div>
        
        
        <div class="col-12">
        <button type="submit" class="btn btn-primary px-5">Submit</button>
        </div>
        </form>
        </div>
        </div>
        
        </div>
        </div>
        
        <!--end row-->
        </div>
        @stop