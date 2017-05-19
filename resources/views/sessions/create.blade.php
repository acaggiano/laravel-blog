@extends('layouts.master')

@section('content')
	<div class="col-md-8 blog-main">
		<h1>Sign In</h1>
	

	<form method="POST" action="/login">
		{{ csrf_field() }}
		<div class="form-group">
			<label for="email">Email Address: </label>
			<input type="email" id="email" class="form-control" name="email">
		</div>
		<div class="form-group">
			<label for="password"></label>
			<input type="password" id="password" class="form-control" name="password">
		</div>
		<div class="form-group">
			<button type="submit" class="btn btn-primary">Log In</button>
		</div>
		@include('partials.errors')
	</form>
</div>
@endsection