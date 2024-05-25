    @extends('Layouts.admin')
    @section('content')
    
    
    <div class="page-content">
    <!--breadcrumb-->
    <div class="page-breadcrumb d-none d-sm-flex align-items-center mb-3">
    <div class="breadcrumb-title pe-3">Zordic Sign</div>
    <div class="ps-3">
    <nav aria-label="breadcrumb">
    <ol class="breadcrumb mb-0 p-0">
    <li class="breadcrumb-item"><a href="javascript:;"><i class="bx bx-home-alt"></i></a>
    </li>
    <li class="breadcrumb-item active" aria-current="page">Zordic Sign</li>
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
    
    <h5 class="mb-0 text-primary">Edit</h5>
    </div>
    <hr>
    <form class="row g-3" method="post" action="{{ route('Zordicsign.update', ['id' => $data->id]) }}" enctype="multipart/form-data">
    @csrf
    <div class="col-md-12">
    <label for="title" class="form-label">Title</label>
    <input type="text" id="title" name="title" value="{{$data->title}}" class="form-control">
    <input type="hidden" id="zordicsign_id" name="zordicsign_id" value="{{$data->id}}">
    
    </div>
    
    <div class="col-md-12">
    <label for="title" class="form-label">Date</label>
    <input type="date" id="date" name="date" value="{{$data->date}}" class="form-control">
    </div>
    
    <div class="col-md-12">
    <label for="title" class="form-label">Zodiac Symbol</label>
    <input type="text" id="zodiac_symbol" name="zodiac_symbol" value="{{$data->zodiac_symbol}}" class="form-control">
    
    </div>
    
    
    <div class="col-md-12">
    <label for="planet" class="form-label"> Element </label>
    <input type="text" id="planet" name="element"
        class="form-control" value="{{$data->element}}">
    </div>
    
    <div class="col-md-12">
    <label for="title" class="form-label">Ruling Panet</label>
    <input type="text" id="ruling_planet" name="ruling_planet" value="{{$data->ruling_planet}}" class="form-control">
    
    </div>
    
    <div class="col-md-12">
    <label for="title" class="form-label">Ruling House</label>
    <input type="text" id="ruling_house" name="ruling_house" value="{{$data->ruling_house}}" class="form-control">
    </div>
    
    <div class="col-md-12">
    <label for="title" class="form-label">Quality</label>
    <input type="text" id="quality" name="quality" value="{{$data->quality}}" class="form-control">
    </div>
    
    <div class="col-md-12">
    <label for="title" class="form-label">Polarity</label>
    <input type="text" id="polarity" name="polarity" value="{{$data->polarity}}" class="form-control">
    </div>
    
    <div class="col-md-12">
    <label for="title" class="form-label">Power Color</label>
    <input type="text" id="power_color" name="power_color" value="{{$data->power_color}}" class="form-control">
    </div>
    <div class="col-md-12">
    <label for="title" class="form-label">Birth Stones</label>
    <input type="text" id="birthstones" name="birthstones" value="{{$data->birthstones}}" class="form-control">
    </div>
    
    <div class="col-md-12">
    <label for="title" class="form-label">Flowers</label>
    <input type="text" id="birthstones" name="flowers" value="{{$data->flowers}}" class="form-control">
    </div>
    
    <div class="col-md-12">
    <label for="planet" class="form-label"> Key Traits </label>
    <input type="text" id="planet" name="key_traits"
        class="form-control"  value="{{$data->key_traits}}">
    </div>
    
    <div class="col-md-12">
    <label for="title" class="form-label">Desires</label>
    <input type="text" id="desires" name="desires" value="{{$data->desires}}" class="form-control">
    </div>
    
    <div class="col-md-12">
    <label for="title" class="form-label">Compatible Signs</label>
    <input type="text" id="compatible_signs" name="compatible_signs" value="{{$data->compatible_signs}}" class="form-control">
    </div>
    
    <div class="col-md-12">
    <label for="title" class="form-label">Mantra</label>
    <input type="text" id="mantra" name="mantra" value="{{$data->mantra}}" class="form-control">
    </div>
    
    <div class="col-md-12">
    <label for="title" class="form-label">Date</label>
    <input type="date" id="date" name="date" value="{{$data->date}}" class="form-control">
    </div>
    
    <div class="col-md-12">
    <label for="title" class="form-label">Zordic Sign Description</label>
    <textarea class="form-control" id="mytextarea2" name="zordic_sign_description" placeholder="zordic_sign_description..." rows="4">{{$data->zordic_sign_description}}</textarea>
    </div>
    
    <div class="col-md-12">
    <label for="zordic_icon" class="form-label"> Zordic icon 
    </label>
    <img src="{{ asset('storage/app/public/uploads/zordic_icons/' . $data->zordic_icon) }}" style="height:200px;width:200px" class="mb-3">
    <input type="file" id="zordic_icon" name="zordic_icon"
    class="form-control">
    </div>
    
    
    <div class="col-md-12">
    <label for="title" class="form-label">Zordic Sign</label>
    <select class="form-control" name="zordic_id">
    @if($zordicData)
    @foreach($zordicData as $sign)
    <option <?=$sign->id == $data->zordic_id ? 'selected' : '' ;?> value="{{$sign->id}}">{{$sign->Name}}</option>
    @endforeach
    @endif
    </select>
    </div>
    
    
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