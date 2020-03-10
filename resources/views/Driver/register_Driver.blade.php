@extends('template')
@section('title', 'Register To Drivers')
@section('background','#000')
@section('content')
<style>
input[type=number]::-webkit-inner-spin-button,
input[type=number]::-webkit-outer-spin-button {
-webkit-appearance: none;
margin: 0;
}
input[type=number] { -moz-appearance:textfield; }
</style>
<section class="py-3">
	<div class="container">
		<div class="row">
			<div class="col-12">
				<h1 class="text-center font-weight-bold text-white">Register</h1>
			</div>
		</div>
	</div>
</section>
<section>
	<div class="container">
		<div class="row">
			<div class="col-12">
				<form action="{{route('Drivers')}}" method="post">
					@csrf
					<div class="col-6">
						<div class="form-group">
							<label class="font-weight-bold h3 text-white">Create your Username</label>
							<input type="text" name="name" class="form-control" placeholder="Ex: Dobby_32">
						</div>
						<div class="form-group">
							<label class="font-weight-bold h3 text-white">Write your Email Address</label>
							<input type="email" name="email" class="form-control" placeholder="Ex: Dobby_32@gmail.com">
						</div>
						<div class="form-group">
							<label class="font-weight-bold h3 text-white">Write your Password</label>
							<input type="password" name="password" class="form-control" placeholder="Ex: dobby33">
							<small class="text-danger h6">(Do not share your password with third parties)</small>
						</div>
						<div class="form-group">
							<label class="font-weight-bold h3 text-white">Write your phone number</label>
							<input type="number" name="phone" class="form-control" placeholder="Ex: 1234567890">
						</div>
						<div class="form-group">
							<label class="font-weight-bold h3 text-white">Write the brand of your vehicle</label>
							<input type="text" name="brand" class="form-control" placeholder="Ex: Chevrolet">
						</div>
						<div class="form-group">
							<label class="font-weight-bold h3 text-white">Write the model of your vehicle</label>
							<input type="text" name="model" class="form-control" placeholder="Ex: Spark">
						</div>
						<div class="form-group">
							<label class="font-weight-bold h3 text-white">Write the plate of your vehicle</label>
							<input type="text" name="plate" class="form-control" placeholder="Ex: ACM1PT">
						</div>
					</div>
					<button type="submit" class="btn btn-outline-success float-right">Next!</button>
				</form>
			</div>
		</div>
	</div>
</section>
@endsection