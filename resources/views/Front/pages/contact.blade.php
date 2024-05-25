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
</style>

<div class="contactFormContainer container">
    <div class="row justify-content-center">
        <div class="col-md-8 my-5">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-md-6 text-center custom-width">
                        <a href="{{ route('faq') }}" class="btn btn-primary btn-faq" style="width: 250px; font-size: 18px; padding: 5% 20%;">FAQ's</a>
                    </div>
                </div>
            </div>

            <br /><br />

            <p class="title-tag text-center">Submit a request</p>

            @if(session('success'))
            <div class="alert alert-success">{{session('success')}}</div>
            @endif

            @if ($errors->any())
            <div class="alert alert-danger">
                <ul>
                    @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
            @endif
            <form method="post" enctype="multipart/form-data" action="{{route('contactSubmit')}}">
                @csrf
                <div class="row">
                    <div class="col-lg-6">
                        <div class="from-group my-lg-3 my-3">
                            <label for="">Your email address</label>
                            <input type="text" name="email" class="form-control" />
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="from-group my-lg-3 my-3">
                            <label for="">Subject</label>
                            <input type="text" name="subject" class="form-control">
                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="col-lg-6">
                        <div class="from-group my-lg-3 my-3">
                            <label for="">Description</label>
                            <input type="text" name="description" class="form-control">
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="from-group my-lg-3 my-3">
                            <label for="">Attachments <span>(optional)</span></label>
                            <input type="file" class="d-none" id="file1" name="attachment">
                            <div class="filebox" onclick="document.getElementById('file1').click()">
                                <span><span class="tx-prime">Add file</span> or drop files here</span>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="row justify-content-center align-items-center">
                    <div class="col-lg-12 col-md-12 col-sm-12 col-12 text-center">
                        <small class="small-text">Please enter the details of your request. A member of our support staff will respond within 24 to 48 hours.</small>
                    </div>
                </div>


                <div class="row justify-content-center">
                    <div class="col-lg-6">
                        <div class="from-group my-lg-3 my-3 text-center">
                            <input style="margin-left: 23.5%" type="submit" value="Submit" class="btn btn-primary">
                        </div>
                    </div>
                </div>

            </form>
        </div>
    </div>
</div>

@stop