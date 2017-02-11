@extends('main.mainlayout')
@section('title', 'StudentsBase - Create Student')
@section('content')
	<div class="container form-container">
	@if (count($errors) > 0)
		<div class="col-md-12" id="alert-container">
	    	<div class="alert alert-danger">
	        	<ul>
	            	@foreach ($errors->all() as $error)
	                	<li>{{ $error }}</li>
	            	@endforeach
	        	</ul>
	    	</div>
	    </div>
	@endif
		<div class="col-md-6 col-md-offset-3">
			<h1>Create Student</h1>
			<form action="{{ url('/students') }}" method="post" enctype="multipart/form-data">
				<input type="hidden" name="_token" value="{{ csrf_token() }}" /><br />
				<div class="form-group">
					<label for="name">Name: </label>
					<input type="text" class="form-control" name="name" id="name" placeholder="Name">
				</div>
				<div class="form-group">
					<label for="surname">Surname: </label>
					<input type="text" name="surname" class="form-control" placeholder="Surname">
				</div>
				<div class="form-group">
					<label for="middlename">Middlename: </label>
					<input type="text" name="middlename" class="form-control" placeholder="Middlename">
				</div>
				<div class="form-group">
					<label for="date_of_birth">Date of birth: </label>
					<input type="text" name="date_of_birth" id="form-calendar" class="form-control" placeholder="DD-MM-YYYY">
				</div>
				<div class="form-group">
					<label for="nationality">Nationality: </label>
					<input type="text" name="nationality" class="form-control" placeholder="Nationality">
				</div>
				<div class="form-group">
					<label for="home_town">Hometown: </label>
					<input type="text" name="home_town" class="form-control" placeholder="Hometown">
				</div>
				<div class="form-group">
					<label for="current_address">Current address: </label>
					<input type="text" name="current_address" class="form-control" placeholder="Current address">
				</div>
				<div class="form-group">
					<label for="primary_school">Primary school: </label>
					<input type="text" name="primary_school" class="form-control" placeholder="Primary school">
				</div>
				<div class="form-group">
					<label for="high_school">High school: </label>
					<input type="text" name="high_school" class="form-control" placeholder="High school">
				</div>
				<div class="form-group">
					<label for="college">College: </label>
					<input type="text" name="college" class="form-control" placeholder="College">
				</div>
				<div class="form-group">
					<label for="photo">Photo: </label>
					<input type="file" name="photo" class="form-control">
				</div>
			<input type="submit" value="Add student" />
			</form>
		</div>
	</div>
@endsection