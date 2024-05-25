    @extends('Layouts.admin')
    @section('content')
    
    
    <div class="page-content">
    <!--breadcrumb-->
    <div class="page-breadcrumb d-none d-sm-flex align-items-center mb-3">
    <div class="breadcrumb-title pe-3">Planet</div>
    <div class="ps-3">
    <nav aria-label="breadcrumb">
    <ol class="breadcrumb mb-0 p-0">
    <li class="breadcrumb-item"><a href="javascript:;"><i class="bx bx-home-alt"></i></a>
    </li>
    <li class="breadcrumb-item active" aria-current="page">Planet</li>
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
    
    <h5 class="mb-0 text-primary">Edit Planet</h5>
    </div>
    <hr>
    @if(session('success'))
    {{ session('success') }}
    </div>
    @endif
    
    <form class="row g-3" method="post" action="{{route('planet-update')}}"  id="yourForm" enctype="multipart/form-data">
    @csrf
    
    <div class="col-md-12">
    <label for="title" class="form-label"> Title</label>
    <input type="text" id="title" name="title" value="{{$data->title}}"
    class="form-control">
    </div>
    <div class="col-md-12">
    <label for="dates" class="form-label">Heading</label>
    <input type="text" id="heading" name="heading" value="{{$data->heading}}"
    class="form-control">
    </div>
    
    <div class="col-md-12">
    <label for="mantra" class="form-label">Content
    </label>
    <textarea class="form-control" id="mytextarea2" name="content"  rows="4">{!! $data->content !!}</textarea>
    
    </div>
    <input type="hidden" name="planet_id" value="{{$data->id}}">
    
    <div class="col-md-12">
    <label for="zodiac_symbol" class="form-label"> Image</label>
    <input type="file" id="image" name="image" value="{{$data->image}}"
    class="form-control">
    <img src="{{url('storage/app/public/uploads/planet_images/'.$data->image)}}" style="height:100px;width:100px" class="mt-1">
    </div>
    
    <div class="col-md-12">
    <label for="named_for" class="form-label"> Named For</label>
    <input type="text" id="named_for" name="named_for"
        class="form-control" value="{{$data->named_for}}">
    </div>
    
    <div class="col-md-12">
    <label for="ruling_planet" class="form-label"> Glyph</label>
    <input type="text" id="glyph" name="glyph" value="{{$data->glyph}}"
    class="form-control">
    </div>
    
    <div class="col-md-12">
    <label for="ruling_house" class="form-label"> Ruler Of </label>
    <input type="text" id="ruler_of" name="ruler_of" value="{{$data->ruler_of}}"
    class="form-control">
    </div>
    
    <div class="col-md-12">
    <label for="quality" class="form-label">Sign Of Dignity</label>
    <input type="text" id="sign_of_dignity" name="sign_of_dignity" value="{{$data->sign_of_dignity}}"
    class="form-control">
    </div>
    
    <div class="col-md-12">
    <label for="polarity" class="form-label">Sign Of Detriment</label>
    <input type="text" id="sign_of_detriment" name="sign_of_detriment" value="{{$data->sign_of_detriment}}"
    class="form-control">
    </div>
    
    <div class="col-md-12">
    <label for="sign_of_exaltation" class="form-label"> Sign Of Exaltation </label>
    <input type="text" id="sign_of_exaltation" name="sign_of_exaltation" value="{{$data->sign_of_exaltation}}"
    class="form-control">
    </div>
    
    <div class="col-md-12">
    <label for="polarity" class="form-label">Sign Of Fall</label>
    <input type="text" id="sign_of_fall" name="sign_of_fall" value="{{$data->sign_of_fall}}"
    class="form-control">
    </div>
    

    <div class="col-md-12">
    <label for="physical_body" class="form-label"> Physical Body </label>
    <input type="text" id="physical_body" name="physical_body" value="{{$data->physical_body}}"
    class="form-control">
    </div>
    
    <div class="col-md-12">
    <label for="changes_sign" class="form-label"> Changes Sign </label>
    <input type="text" id="changes_sign" name="changes_sign" value="{{$data->changes_sign}}"
    class="form-control">
    </div>
    
    
    <div class="col-md-12">
    
    <div class="col-12">
    <button type="submit" class="btn btn-primary px-5">Update Planet</button>
    </div>
    </form>
    </div>
    </div>
    
    </div>
    </div>
    
    <!--end row-->
    </div>
    <script>
    function addMoreFields() {
    var cloneAnswers = $("#answers").clone();
    var cloneThumbImage = $("#formFile").clone();
    
    // Clear the values of cloned fields
    cloneAnswers.val('');
    cloneThumbImage.val('');
    
    // Generate unique identifiers for the new fields
    var uniqueId = new Date().getTime();
    var newAnswersId = 'answers_' + uniqueId;
    var newImageId = 'formFile_' + uniqueId;
    
    // Update the IDs and names of the cloned fields
    cloneAnswers.attr('id', newAnswersId).attr('name', 'answers[]');
    cloneThumbImage.attr('id', newImageId).attr('name', 'thumbImage[]');
    
    // Create labels for the new fields
    var answerLabel = '<label for="' + newAnswersId + '" class="form-label">Answers</label>';
    var imageLabel = '<label for="' + newImageId + '" class="form-label">Answer Image</label>';
    
    // Append the cloned fields and labels to the container
    $(".col-md-12:last").before('<div class="col-md-12">' + answerLabel + cloneAnswers[0].outerHTML + imageLabel + cloneThumbImage[0].outerHTML + '</div>');
    }
    
    
    
    $("#submitForm").click(function() {
    // Perform AJAX request to submit form data
    $.ajax({
    url: '/storequiz', // Replace with the actual route to your controller method
    type: 'POST',
    data: $('#yourForm').serialize(), // Replace "yourForm" with the ID or class of your form element
    success: function(response) {
    // Handle success response
    console.log(response);
    },
    error: function(error) {
    // Handle error response
    console.log(error);
    }
    });
    });
    
    </script>
    <script>
    CKEDITOR.replace('zordic_sign_description');
    </script>
    <script src="https://cdn.ckeditor.com/4.16.2/standard/ckeditor.js"></script>
    
    @stop