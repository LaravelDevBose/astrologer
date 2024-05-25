@extends('Layouts.default')
@section('content')

<style>
    .btn-faq {
        background-color: #fff;
        color: #6f42c1;
        border-color: #6f42c1;
    }

    .btn-faq:hover {
        background-color: #472F85;
        color: #fff;
        border-color: #6f42c1;
    }

    @media (max-width: 768px) {
        .custom-width {
            margin-bottom: 10px;
            display: flex;
            justify-content: center;
        }
    }
</style>

<div class="contactFormContainer container">
    <div class="row justify-content-center">
        <div class="col-md-8 my-5">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-md-6 text-center custom-width">
                        <a href="{{ route('digitalproducts') }}" class="btn btn-primary btn-faq" style="width: 350px; font-size: 18px; padding: 5% 20%;">Digital Products</a>
                    </div>

                    <div class="col-md-6 text-center custom-width">
                        <a href="{{ route('orderspayment') }}" class="btn btn-primary btn-faq" style="width: 350px; font-size: 18px; padding: 5% 20%;">Orders & Payments</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

@stop
