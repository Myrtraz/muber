@extends('template')
@section('title', 'Login To Drivers')
@section('background','')
@section('content')
<section>
	@if(count($errors->all()))
	<div class="alert alert-danger" role="alert">
		<h4 class="alert-heading">Error:</h4>
		<ul class="alert-danger">
			@foreach($errors->all() as $error)
			<li>{{$error}}</li>
			@endforeach
		</ul>
	</div>
	@endif
</section>
<section class="py-3">
	<div class="container">
		<div class="row">
			<div class="col-12">
				<h1 class="text-center">Login</h1>
			</div>
		</div>
	</div>
</section>
<section>
	<div class="container">
		<div class="row">
			<div class="col-12">
				<form action="{{route('LoginDrivers')}}" method="post">
					@csrf
					<div class="form-group">
						<label for="" class="font-weight-bold">Email Address</label>
						<input type="email" name="email" class="form-control">
					</div>
					<div class="from-group mb-3">
						<label for="" class="font-weight-bold">Password</label>
						<input type="password" name="password" class="form-control">
					</div>
					<div class="alert alert-warning" role="alert">
						<p>
							<a href="{{route('Drivers')}}" class="alert-link">Sign Up</a>
							It’s quick and easy.
						</p>
					</div>
					<div class="mb-5">
						<button type="submit" class="btn btn-success float-right">Access</button>
					</div>
				</form>
			</div>
		</div>
	</div>
</section>
@endsection