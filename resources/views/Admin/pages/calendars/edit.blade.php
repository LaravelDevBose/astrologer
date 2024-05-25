    @extends('Layouts.admin')
    @section('content')
    
    
    <div class="page-content">
    <!--breadcrumb-->
    <div class="page-breadcrumb d-none d-sm-flex align-items-center mb-3">
    <div class="breadcrumb-title pe-3">Calendar</div>
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
    
    <h5 class="mb-0 text-primary">Edit Calendar</h5>
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
    
    <form class="row g-3" method="post" action="{{ route('calendar-update', ['id' => $calendar->id]) }}"  id="yourForm">
    @csrf
    
    <div class="col-md-12">
    <label for="title" class="form-label">Select Month</label>
    <select class="form-control" name="month">
    <option <?=$calendar->month == 'January' ? 'selected' : '';?> value='January'>January</option>
    <option <?=$calendar->month == 'February' ? 'selected' : '';?> value='February'>February</option>
    <option <?=$calendar->month == 'March' ? 'selected' : '';?> value='March'>March</option>
    <option <?=$calendar->month == 'April' ? 'selected' : '';?> value='April'>April</option>
    <option <?=$calendar->month == 'May' ? 'selected' : '';?> value='May'>May</option>
    <option <?=$calendar->month == 'June' ? 'selected' : '';?> value='June'>June</option>
    <option <?=$calendar->month == 'July' ? 'selected' : '';?> value='July'>July</option>
    <option <?=$calendar->month == 'August' ? 'selected' : '';?> value='August'>August</option>
    <option <?=$calendar->month == 'September' ? 'selected' : '';?> value='September'>September</option>
    <option <?=$calendar->month == 'October' ? 'selected' : '';?> value='October'>October</option>
    <option <?=$calendar->month == 'November' ? 'selected' : '';?> value='November'>November</option>
    <option <?=$calendar->month == 'December' ? 'selected' : '';?> value='December'>December</option>
    </select>
    </div>
    
    <div class="col-md-12">
    <label for="mantra" class="form-label">Content
    </label>
    <textarea class="form-control" id="mytextareacontent2" name="content"  rows="4">{!! $calendar->content !!}</textarea>
    </div>
    
    <input type="hidden" name="calendar_id" value="{{ $calendar->id ?? '' }}">
    
    
    <div class="col-md-12 row mt-3">
    
    <div class="col-md-3">
    <label for="favorableMajorTransit">Favorable Major Transit</label>
    <input type="checkbox" id="favorableMajorTransit" name="favorable_major_transit" value="favorable_major_transit" {{ $calendar->favorable_major_transit ? 'checked' : '' }}>
    </div>
    
    <div class="col-md-3">
    <label for="newZodiacSeason">New Zodiac Season</label>
    <input type="checkbox" id="favorableMajorTransit" name="new_zodiac_season" value="new_zodiac_season" {{ $calendar->new_zodiac_season ? 'checked' : '' }}>
    </div>
    
    <div class="col-md-3">
    <label for="retrograde">Retrograde</label>
    <input type="checkbox" id="favorableMajorTransit" name="retrograde" value="retrograde" {{ $calendar->retrograde ? 'checked' : '' }}>
    </div>
    
    <div class="col-md-3">
    <label for="moonEvents">Moon Events</label>
    <input type="checkbox" id="favorableMajorTransit" name="moon_events" value="moon_events" {{ $calendar->moon_events ? 'checked' : '' }}>
    </div>
    
    </div>
    
    
    <div class="month_detail">
    <?php
    foreach ($calendar->months as $month) { ?>
    <div class="col-md-12">
    <label for="monthcontent" class="form-label">Month Content</label>
    <textarea class="form-control" id="monthcontent{{ $month->id }}" name="monthcontent[]" rows="4">{!! $month->month_content ?? '' !!}</textarea>
    </div>
    <script src="https://cdn.ckeditor.com/4.16.1/standard/ckeditor.js"></script>
    <script>
    CKEDITOR.replace('monthcontent{{ $month->id }}');
    </script>
    <?php } ?>
    
    </div>
    
    <br/>
    <div class="col-md-12">
    <button type="button" class="btn btn-secondary" onclick="addMonthFields()">Add Month Content</button>
    </div>
    
    <button type="submit" class="btn btn-primary px-5">Submit Calendar</button>
    
    </form>
    </div>
    </div>
    
    </div>
    </div>
    
    <!--end row-->
    </div>
    
    <script src="https://cdn.ckeditor.com/4.16.1/standard/ckeditor.js"></script>
    
    <script>
    // Counter variable to track the number of added month fields
    var monthFieldsCounter = 0;
    
    function addMonthFields() {
    // Check if the limit is reached (e.g., 10 times)
    if (monthFieldsCounter >= 10) {
    alert('You can only add up to 10 months.');
    return;
    }
    
    // Increment the counter
    monthFieldsCounter++;
    
    // Create new div element
    var newDiv = document.createElement("div");
    
    // Append HTML to the new div
    newDiv.innerHTML = `
    <div class="col-md-12 mt-2">
    <label for="monthcontent" class="form-label">Month Content</label>
    <textarea class="form-control" id="mytextarea${monthFieldsCounter}" name="monthcontent[]" rows="4"></textarea>
    </div>
    `;
    
    // Append the new div to the form
    $('.month_detail').append(newDiv);
    
    // Initialize CKEditor for the new textarea
    CKEDITOR.replace(`mytextarea${monthFieldsCounter}`);
    }
    </script>
    
    <script>
    CKEDITOR.replace('mytextareacontent2');
    </script>
    
    @stop