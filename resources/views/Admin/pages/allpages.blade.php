@extends('Layouts.admin')
@section('content')


<div class="page-content">
	<!--breadcrumb-->
	<div class="page-breadcrumb d-none d-sm-flex align-items-center mb-3">
		<div class="breadcrumb-title pe-3">All Pages</div>
		<div class="ps-3">
			<nav aria-label="breadcrumb">
				<ol class="breadcrumb mb-0 p-0">
					<li class="breadcrumb-item"><a href="javascript:;"><i class="bx bx-home-alt"></i></a>
					</li>
					<li class="breadcrumb-item active" aria-current="page">All Pages</li>
				</ol>
			</nav>
		</div>

	</div>
	<!--end breadcrumb-->
	<div class="row">

	<div class="card">
			<div class="card-body">
				<div class="table-responsive">
					<table id="example2" class="table table-striped table-bordered">
						<thead>
							<tr>
								<th scope="col">ID</th>
								<th scope="col">Name</th>
								
							</tr>
						</thead>
						<tbody>
							
							<tr>
							<td scope="row">1</td>
								<th scope="row"><a href="{{route('home')}}">Home</a></th>
								
							</tr>
							
							<tr>
								<th scope="row">2</th>
								<td><a href="{{route('about')}}">About</a></td>
								
							</tr>
							<tr>
								<th scope="row">3</th>
								<td><a href="{{route('dream')}}">Dream Interpretation</a></td>
								
							</tr>
							
							<tr>
								<th scope="row">4</th>
								<td><a href="{{route('dream-dictionary')}}">Dream Dictionary</a></td>
								
							</tr>
							
							<tr>
							<td scope="row">5</td>
								<td><a href="{{route('privacypolicy')}}">Privacy Policy</a></td>
								
							</tr>
							
							<tr>
								<td scope="row">6</td>
								<td>
								<a href="{{route('termandcondition')}}">Terms & Condition</a>
								</td>
							</tr>
							<tr>
								<td scope="row">7</td>
								<td>
								<a href="{{route('divination')}}">Methods Of Divinations</a>
								</td>
							</tr>
							<tr>
								<td scope="row">8</td>
								<td>
								<a href="{{route('crystals')}}">Crystals</a>
								</td>
							</tr>
							<tr>
								<td scope="row">9</td>
								<td>
								<a href="{{route('money&wealth')}}">Money & Wealth</a>
								</td>
							</tr>
							<tr>
								<td scope="row">10</td>
								<td>
								<a href="{{route('planets')}}">Planets</a>
								</td>
							</tr>
							<tr>
								<td scope="row">11</td>
								<td>
								<a href="{{route('tarot')}}">Tarot Card Definitions </a>
								</td>
							</tr>
							<tr>
								<td scope="row">11</td>
								<td>
								<a href="{{route('daily-tarot-reading')}}">Daily Tarot Reading </a>
								</td>
							</tr>
							<tr>
								<td scope="row">12</td>
								<td>
								<a href="{{route('3-card-tarot')}}">3-Card Tarot Career Reading</a>
								</td>
							</tr>
							
							<tr>
								<td scope="row">13</td>
								<td>
								<a href="{{route('3_card_tarot_love_reading')}}">3-Card Tarot Love Reading</a>
								</td>
							</tr>
							
							<tr>
								<td scope="row">14</td>
								<td>
								<a href="{{route('free-3-card-reading')}}">Free 3-Card Reading</a>
								</td>
							</tr>
							<tr>
								<td scope="row">14</td>
								<td>
								<a href="{{route('yes-no-tarot')}}">Yes/No Tarrot</a>
								</td>
							</tr>

						</tbody>


					</table>
				</div>
			</div>
		</div>

	</div>

	<!--end row-->
</div>
@stop