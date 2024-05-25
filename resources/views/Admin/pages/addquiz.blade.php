@extends('Layouts.admin')
@section('content')


<div class="page-content">
	<!--breadcrumb-->
	<div class="page-breadcrumb d-none d-sm-flex align-items-center mb-3">
		<div class="breadcrumb-title pe-3">Quiz</div>
		<div class="ps-3">
			<nav aria-label="breadcrumb">
				<ol class="breadcrumb mb-0 p-0">
					<li class="breadcrumb-item"><a href="javascript:;"><i class="bx bx-home-alt"></i></a>
					</li>
					<li class="breadcrumb-item active" aria-current="page">Quiz Compatibility</li>
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

						<h5 class="mb-0 text-primary">Add Quiz</h5>
					</div>
					<hr>
					@if(session('success'))
                            {{ session('success') }}
                        </div>
                    @endif

					<form class="row g-3" method="post" action="{{route('quiz.store')}}" enctype="multipart/form-data" id="yourForm">
						@csrf
						
						<div class="col-md-12">
                            <label for="Questions" class="form-label">Quiz Title</label>
                            <input type="text" id="title" name="title" value="{{ old('title') }}"
                                class="form-control">
                        </div>
                        <div class="col-md-12">
                            <label for="Questions" class="form-label">Quiz Description</label>
                            <input type="text" id="questions" name="description" value="{{ old('description') }}"
                                class="form-control">
                        </div>
                        
                        <div class="col-md-12">
    <button type="button" class="btn btn-primary" onclick="addQuestions()">Add Questions</button>
</div>


                        <div class="col-md-12">
                            <label for="Questions" class="form-label">Questions</label>
                            <input type="text" id="questions" name="questions" value="{{ old('questions') }}"
                                class="form-control">
                        </div>
                        
						
					
                        
                        
					<div class="col-md-12">
    <label for="AnswersName" class="form-label">Answers</label>
    <input type="text" id="answers" name="answers[]" value="{{ old('answers') }}" class="form-control">
</div>

<div class="col-md-12">
    <label for="thumbImage" class="form-label">Answer Image</label>
    <input class="form-control" type="file" name="thumbImage[]" id="formFile">
</div>

<div class="col-md-12">
    <button type="button" class="btn btn-primary" onclick="addMoreFields()">Add More Answer</button>
</div>

<div class="col-md-12">
    <label for="thumbImage" class="form-label">Featured Image</label>
    <input class="form-control" type="file" name="featured_image[]" id="formFile">
</div>




						<div class="col-12">
							<button type="submit" class="btn btn-primary px-5">Submit Quiz</button>
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
@stop