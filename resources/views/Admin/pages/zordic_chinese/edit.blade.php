    @extends('Layouts.admin')
    @section('content')
    
    
    <div class="page-content">
    <!--breadcrumb-->
    <div class="page-breadcrumb d-none d-sm-flex align-items-center mb-3">
    <div class="breadcrumb-title pe-3">Zordic Sgn</div>
    <div class="ps-3">
    <nav aria-label="breadcrumb">
    <ol class="breadcrumb mb-0 p-0">
    <li class="breadcrumb-item"><a href="javascript:;"><i class="bx bx-home-alt"></i></a>
    </li>
    <li class="breadcrumb-item active" aria-current="page">Zordic</li>
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
    
    @if(session('error'))
    <div class="alert alert-danger">
    {{ session('error') }}
    </div>
    @endif
    
    <div class="card-body p-5">
    <div class="card-title d-flex align-items-center">
    
    <h5 class="mb-0 text-primary">Edit</h5>
    </div>
    <hr>
    <form class="row g-3" method="post" action="{{ route('zordic-chinese-update', ['id' => $data->id]) }}" enctype="multipart/form-data">
    @csrf
    <div class="col-md-12">
    <label for="title" class="form-label">Title</label>
    <input type="text" id="title" name="title" value="{{$data->title}}" class="form-control">
    <input type="hidden" id="zordicsign_id" name="zordicchinese_id" value="{{$data->id}}">
    
    </div>
    
    <div class="col-md-12">
    <label for="title" class="form-label">Year</label>
    <input type="date" id="zodiac_symbol" name="year" value="{{$data->year}}" class="form-control">
    
    </div>
    
    <div class="col-md-12">
    <label for="title" class="form-label">Element</label>
    <input type="text" id="element" name="element" value="{{$data->element}}" class="form-control">
    </div>
    
    
    <div class="col-md-12">
    <label for="planet" class="form-label"> Yin or Yang</label>
    <input type="text" id="yin_or_yang" name="yin_or_yang"
    class="form-control"  value="{{$data->yin_or_yang}}">
    </div>
    
    <div class="col-md-12">
    <label for="title" class="form-label">Lucky Colours</label>
    <input type="text" id="luckycolours" name="luckycolours" value="{{$data->luckycolours}}" class="form-control">
    </div>
    
    <div class="col-md-12">
    <label for="title" class="form-label">Luckynumbers	</label>
    <input type="text" id="luckynumbers" name="luckynumbers" value="{{$data->luckynumbers	}}" class="form-control">
    </div>
    
    <div class="col-md-12">
    <label for="title" class="form-label">Crystal</label>
    <input type="text" id="crystal" name="crystal" value="{{$data->crystal}}" class="form-control">
    </div>
    
    <div class="col-md-12">
    <label for="title" class="form-label">Flower</label>
    <input type="text" id="flower" name="flower" value="{{$data->flower}}" class="form-control">
    </div>
    <div class="col-md-12">
    <label for="title" class="form-label">characteristic</label>
    <input type="text" id="characteristic" name="characteristic" value="{{$data->characteristic}}" class="form-control">
    </div>
    
    
    <div class="col-md-12">
    <label for="title" class="form-label">Zordic Sign Description</label>
    <textarea class="form-control" id="mytextarea2" name="content" placeholder="zordic_sign_description..." rows="4">{{$data->content}}</textarea>	</div>
    
    <div class="col-md-12">
    <label for="chinese_zodiac_icon" class="form-label">Chinise Zodiac Icon 
    </label>
    <img src="{{ asset('storage/app/public/uploads/chinese_zodiac_icons/' . $data->chinese_zodiac_icon) }}" style="height:200px;width:200px" class="mb-3">
    <input type="file" id="chinese_zodiac_icon" name="chinese_zodiac_icon"
    class="form-control">
    </div>
    
    <div class="col-md-12">
    <label for="title" class="form-label">Chinise Zodiac Category</label>
    <select class="form-control" name="chinise_zordic_category_id">
    @if($chineseCategory)
    @foreach($chineseCategory as $cat)
    <option <?=$cat->id == $data->chinise_zordic_category_id ? 'selected' : '';?> value="{{$cat->id}}">{{$cat->name}}</option>
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