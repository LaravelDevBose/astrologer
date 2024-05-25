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
    
    <h5 class="mb-0 text-primary">Add Zordic Sign</h5>
    </div>

    <hr>
    @if(session('success'))
    <div class="alert alert-success">
    {{ session('success') }}
    </div>
    @endif
    
    @if(session('error'))
    <div class="alert alert-danger">
    {{ session('error') }}
    </div>
    @endif

    
    <form class="row g-3" method="post" action="{{ route('storezordicsign') }}" id="yourForm" enctype="multipart/form-data">
    @csrf
    
    <div class="col-md-12">
    <label for="title" class="form-label"> Title</label>
    <input type="text" id="title" name="title"
    class="form-control">
    </div>
    <div class="col-md-12">
    <label for="dates" class="form-label">Dates</label>
    <input type="date" id="date" name="date" 
    class="form-control">
    </div>
    <div class="col-md-12">
    <label for="zodiac_symbol" class="form-label"> Zodiac Symbol</label>
    <input type="text" id="zodiac_symbol" name="zodiac_symbol"
    class="form-control">
    </div>
    
    <div class="col-md-12">
    <label for="planet" class="form-label"> Element </label>
    <input type="text" id="planet" name="element"
        class="form-control">
    </div>
    
    <div class="col-md-12">
    <label for="ruling_planet" class="form-label"> Ruling Planet</label>
    <input type="text" id="ruling_planet" name="ruling_planet"
    class="form-control">
    </div>
    
    <div class="col-md-12">
    <label for="ruling_house" class="form-label"> Ruling House</label>
    <input type="text" id="ruling_house" name="ruling_house"
    class="form-control">
    </div>
    
    <div class="col-md-12">
    <label for="quality" class="form-label"> Quality</label>
    <input type="text" id="quality" name="quality"
    class="form-control">
    </div>
    
    <div class="col-md-12">
    <label for="polarity" class="form-label"> Polarity</label>
    <input type="text" id="polarity" name="polarity"
    class="form-control">
    </div>
    
    <div class="col-md-12">
    <label for="power_color" class="form-label"> Power Color </label>
    <input type="text" id="power_color" name="power_color"
    class="form-control">
    </div>
    
    <div class="col-md-12">
    <label for="birthstones" class="form-label"> Birthstones  </label>
    <input type="text" id="birthstones" name="birthstones"
    class="form-control">
    </div>
    
    <div class="col-md-12">
    <label for="flowers" class="form-label"> Flowers  </label>
    <input type="text" id="flowers" name="flowers"
    class="form-control">
    </div>
    
    <div class="col-md-12">
    <label for="planet" class="form-label"> Key Traits </label>
    <input type="text" id="planet" name="key_traits"
        class="form-control">
    </div>
    
    <div class="col-md-12">
    <label for="desires" class="form-label"> Desires  </label>
    <input type="text" id="desires" name="desires"
    class="form-control">
    </div>
    
    
    <div class="col-md-12">
    <label for="compatible_signs" class="form-label"> Compatible Signs  </label>
    <input type="text" id="compatible_signs" name="compatible_signs"
    class="form-control">
    </div>
    
    <div class="col-md-12">
    <label for="mantra" class="form-label"> Mantra  </label>
    <input type="text" id="mantra" name="mantra"
    class="form-control">
    </div>
    <div class="col-md-12">
    <label for="mantra" class="form-label"> Zordic Sign Description
    </label>
    <textarea class="form-control" id="mytextarea2" name="zordic_sign_description"  rows="4"></textarea>
    
    </div>
    
    
    
    <div class="col-md-12">
    <label for="zordic_icon" class="form-label"> Zordic Icon 
    </label>
    <input type="file" id="zordic_icon" name="zordic_icon"
    class="form-control">
    </div>
    
    
    <div class="col-md-12">
    <label for="title" class="form-label">Zordic Sign</label>
    <select class="form-control" name="zordic_id">
    @if($zordicData)
    @foreach($zordicData as $sign)
    <option value="{{$sign->id}}">{{$sign->Name}}</option>
    @endforeach
    @endif
    </select>
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
    <script>
    CKEDITOR.replace('zordic_sign_description');
    </script>
    @stop