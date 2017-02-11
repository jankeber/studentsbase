@extends('main.mainlayout')
@setion('title', 'StudentsBase - Student')
@section('add_assets')
	<script type="text/javascript" src="/bower_components/ekko-lightbox/dist/ekko-lightbox.min.js"></script>
	<link rel="stylesheet" href="/bower_components/ekko-lightbox/dist/ekko-lightbox.min.css">
	<link rel="stylesheet" type="text/css" href="/bower_components/sweetalert/dist/sweetalert.css">
	<script type="text/javascript" src="/bower_components/sweetalert/dist/sweetalert.min.js"></script>
	<script>
    lightbox.option({
      'resizeDuration': 50,
      'wrapAround': true
    })
</script>
@endsection
@section('content')
	<div class="container student-start">
		<div class="row">
			<div class="col-md-3 col-md-offset-2">
				<h2>{{ $students->name }} {{ $students->surname }}</h2>
				<a href="/uploads/{{ $students->photo }}" data-toggle="lightbox"><img src="/thumbnail/thumb_{{ $students->photo }}" class="img-fluid student-image" alt=""></a>
			</div>
			<div class="col-md-6">
				<div class="row">
					<div class="col-md-6">
						<h2>Student data</h2>
					</div>
					<div class="col-md-6">
						<a href="/awards/create/{{$students->id}}" class="btn btn-info award-button">Add award</a>
					</div>
				</div>
				<div class="row student-row-margin">
					<div class="col-md-6">
						<b>Name:</b>
					</div>
					<div class="col-md-6">
						<span>{{ $students->name }}</span>
					</div>
				</div>
				<div class="row student-row-margin">
					<div class="col-md-6">
						<b>Surname</b>
					</div>
					<div class="col-md-6">
						<span>{{ $students->surname }}</span>
					</div>
				</div>
				<div class="row student-row-margin">
					<div class="col-md-6">
						<b>Middle name</b>
					</div>
					<div class="col-md-6">
						<span>{{ $students->middle_name }}</span>
					</div>
				</div>
				<div class="row student-row-margin">
					<div class="col-md-6">
						<b>Date od birth</b>
					</div>
					<div class="col-md-6">
						<span>{{ $students->date_of_birth }}</span>
					</div>
				</div>
				<div class="row student-row-margin">
					<div class="col-md-6">
						<b>Awards</b>
					</div>
					<div class="col-md-6">
						<span>
							@foreach($students->awards as $award)
								{{ $award->award_description_short }} <br />	
							@endforeach
						</span>
					</div>
				</div>
			</div>
		</div>
	</div>
@endsection
@section('footjs')
	<script type="text/javascript" src="/js/ekko-light.js"></script>
	@if(Session::has('success'))
		<script type="text/javascript">
			swal("StudentBase", "Award was successfully added!", "success");
		</script>
	@endif
@endsection