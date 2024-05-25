    @extends('Layouts.admin')
    @section('content')
    
    
    <div class="page-content">
    
    <div class="d-flex justify-content-between">
    <!--breadcrumb-->
    <div class="page-breadcrumb d-none d-sm-flex align-items-center mb-3">
    <div class="breadcrumb-title pe-3">Zodiac</div>
    <div class="ps-3">
    <nav aria-label="breadcrumb">
    <ol class="breadcrumb mb-0 p-0">
    <li class="breadcrumb-item"><a href="javascript:;"><i class="bx bx-home-alt"></i></a>
    </li>
    <li class="breadcrumb-item active" aria-current="page">Calendar</li>
    </ol>
    </nav>
    
    </div>
    
    </div>
    <!--end breadcrumb-->
    <a class="btn btn-primary px-5" href="{{route('calendar-create')}}">Add</a>
    </div>
    
    <div class="row">
    <h6 class="mb-0 text-uppercase">Calendar</h6>
    <hr />
    @if(session('success'))
    <div class="alert alert-success">{{session('success')}}</div>
    @endif
    <div class="card">
    <div class="card-body">
    <div class="table-responsive">
    <table id="example2" class="table table-striped table-bordered">
    <thead>
    <tr>
    <th scope="col">ID</th>
    <th scope="col">Month</th>
    <th scope="col">Action</th>
    </tr>
    </thead>
    <tbody>
    @if(count($data) > 0)
    @foreach($data as $k=>$datas)
    <tr>
    <th scope="row">{{$k+1}}</th>
    <td>{{$datas->month}}</td>
    <td>
    <a href="{{ route('calendar.edit', ['id' => $datas->id]) }}">
    <i class="fadeIn animated bx bx-pencil"></i>
    </a>
    
    {!! Form::open([
    'method'=>'GET',
    'route' => ['calendar.destroy',$datas->id],
    'style' => 'display:inline'
    ]) !!}
    {!! Form::button('<i class="lni lni-cross-circle"></i>', array(
    'type' => 'submit',
    'class' => 'btn btn-default btn-icon btn-simple btn-icon-mini btn-round delete',
    'title' => 'Delete Zodic',
    'onclick'=>'return confirm("Are you sure about deleting Zodiac?")'
    )) !!}
    {!! Form::close() !!}
    
    </td>
    </tr>
    @endforeach
    @else
    <tr>
    <td colspan="4"> No Record Found</td>
    </tr>
    @endif
    
    </tbody>
    
    
    </table>
    </div>
    </div>
    </div>
    </div>
    
    <!--end row-->
    </div>
    
    @stop