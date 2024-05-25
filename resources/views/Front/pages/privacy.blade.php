@extends('Layouts.default')
@section('content')
<div class="container shopContainer">
        <div class="row">
            <div class="col-12">
                <p class="tittle-tag  font-45-700 text-black font-1 my-2">{{$data['pages']->h1}}</p>
            </div>

            <div class="col-12">
            {{$data['pages']->contant}}
            </div>
        </div>
    </div>
@stop