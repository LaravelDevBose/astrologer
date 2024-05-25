    @extends('Layouts.admin')
    @section('content')
    
    
    <div class="page-content">
    <!--breadcrumb-->
    <div class="page-breadcrumb d-none d-sm-flex align-items-center mb-3">
    <div class="breadcrumb-title pe-3">Zordic Chinese</div>
    <div class="ps-3">
    <nav aria-label="breadcrumb">
    <ol class="breadcrumb mb-0 p-0">
    <li class="breadcrumb-item"><a href="javascript:;"><i class="bx bx-home-alt"></i></a>
    </li>
    <li class="breadcrumb-item active" aria-current="page">Zordic Chinese</li>
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
    
    <h5 class="mb-0 text-primary">Add Zordic Chinese</h5>
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
    
    <form class="row g-3" method="post" action="{{route('zordic-chinese-store')}}"  id="yourForm" enctype="multipart/form-data">
    @csrf
    
    <div class="col-md-12">
    <label for="title" class="form-label"> Title</label>
    <input type="text" id="title" name="title"
    class="form-control">
    </div>
    <div class="col-md-12">
    <label for="dates" class="form-label">Year</label>
    <input type="date" id="date" name="year" 
    class="form-control">
    </div>
    <div class="col-md-12">
    <label for="zodiac_symbol" class="form-label"> Element</label>
    <input type="text" id="element" name="element"
    class="form-control">
    </div>
    
    <div class="col-md-12">
    <label for="planet" class="form-label"> Yin or Yang</label>
    <input type="text" id="yin_or_yang" name="yin_or_yang"
    class="form-control">
    </div>
    
    <div class="col-md-12">
    <label for="ruling_planet" class="form-label"> Lucky Colours</label>
    <input type="text" id="luckycolours" name="luckycolours"
    class="form-control">
    </div>
    
    <div class="col-md-12">
    <label for="ruling_house" class="form-label"> Lucky Number </label>
    <input type="text" id="luckynumbers" name="luckynumbers"
    class="form-control">
    </div>
    
    <div class="col-md-12">
    <label for="quality" class="form-label"> Crystal</label>
    <input type="text" id="crystal" name="crystal"
    class="form-control">
    </div>
    
    <div class="col-md-12">
    <label for="polarity" class="form-label"> Flower</label>
    <input type="text" id="flower" name="flower"
    class="form-control">
    </div>
    

    <div class="col-md-12">
    <label for="power_color" class="form-label"> Characteristic </label>
    <input type="text" id="characteristic" name="characteristic"
    class="form-control">
    </div>
    
    <div class="col-md-12">
    <label for="mantra" class="form-label">Content
    </label>
    <textarea class="form-control" id="mytextarea2" name="content"  rows="4"></textarea>
    </div>
    
    
    <div class="col-md-12">
    <label for="chinese_zodiac_icon" class="form-label">Chinise Zodiac Icon 
    </label>
    <input type="file" id="chinese_zodiac_icon" name="chinese_zodiac_icon"
    class="form-control">
    </div>
    
    
    <div class="col-md-12">
    <label for="title" class="form-label">Chinise Zodiac Category</label>
    <select class="form-control" name="chinise_zordic_category_id">
    @if($chineseCategory)
    @foreach($chineseCategory as $cat)
    <option value="{{$cat->id}}">{{$cat->name}}</option>
    @endforeach
    @endif
    </select>
    </div>
    

    <div class="col-md-12">
    
    <div class="col-12">
    <button type="submit" class="btn btn-primary px-5">Submit Zordic Chinese</button>
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