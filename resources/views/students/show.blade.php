@extends('main.mainlayout')
@section('title', 'StudentsBase - Last students')
@section('add_assets')
<link rel="stylesheet" type="text/css" href="/bower_components/sweetalert/dist/sweetalert.css">
<script type="text/javascript" src="/bower_components/sweetalert/dist/sweetalert.min.js"></script>
@endsection
@section('content')
	<div class="container show-start">
		<h1 class="text-center">Latest students</h1>
		<div class="row">
			@foreach($students as $student)
			@if (!$student->photo)
			<div class="col-md-3 col-pad text-center">
				<img width="200" height="200" src="/img/profile.png" alt="" /><br /><br />
				<b>Name: </b><p>{{ $student->name }}</p>
				<b>Surname: </b><p>{{ $student->surname }}</p>
				<b>Date of birth: </b><p>{{ $student->date_of_birth }}</p>
				<a class="btn btn-primary" href="/students/{{ $student->id }}">View</a>
			</div>
			@else
			<div class="col-md-3 col-pad text-center">
				<img width="200" height="200" src="/thumbnail/thumb_{{ $student->photo }}" alt="" /><br /><br />
				<b>Name: </b><p>{{ $student->name }}</p>
				<b>Surname: </b><p>{{ $student->surname }}</p>
				<b>Date of birth: </b><p>{{ $student->date_of_birth }}</p>
				<a class="btn btn-primary" href="/students/{{ $student->id }}">View</a>
			</div>
			@endif
		@endforeach
		</div>
	</div>
@endsection
@section('footjs')
	@if(Session::has('success'))
		<script type="text/javascript">
			swal("PR Sheet", "Student was successfully added!", "success");
		</script>
	@endif
@endsection