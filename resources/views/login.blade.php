@extends('template')
@section('title', 'Login')
@section('background','#000')

@section('content')
<div class="container">
	<div class="row">
		<div class="col-12 py-4">
			<h1 class="text-white py-4"><b>mUber</b></h1>

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

			<form action="{{ route('login.store') }}" method="post">
				@csrf

				<div class="form-group mb-4">
					<input type="email"  class="form-control" name="email" value="{{old('email')}}"  placeholder="Correo">
				</div>

				<div class="from-group mb-4">
					<input type="password"  class="form-control" name="password" placeholder="Contraseña">
				</div>

				<div class="from-group">
					<button type="submit" class="form-control btn-outline-success" >Iniciar Sesion</button>
				</div>
			</form>
		</div>
	</div>
</div>

@endsection