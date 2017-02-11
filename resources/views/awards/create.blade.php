@extends('main.mainlayout')
@section('title', 'StudentsBase - Add award')
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
			<h1>Add crime</h1>
			<form action="{{ url('/awards') }}" method="post">
				<input type="hidden" name="_token" value="{{ csrf_token() }}" />
				<input type="hidden" name="student_id" value="{{ $id }}">
				<div class="form-group">
					<label for="award_description_short">Award description short: </label>
					<input type="text" name="award_description_short" class="form-control">
				</div>
				<div class="form-group">
					<label for="award_description">Award description: </label>
					<textarea rows="5" name="award_description" class="form-control"></textarea>
				</div>
				<div class="form-group">
					<label for="issued_by">Issued By: </label>
					<input type="text" name="issued_by" class="form-control">
				</div>
				<div class="form-group">
					<label for="award_date">Award date: </label>
						<input type="text" name="award_date" class="form-control" id="form-calendar">
				</div>
				<input type="submit" class="btn btn-info crime-button" value="Add award">
			</form>
		</div>
	</div>
@endsection