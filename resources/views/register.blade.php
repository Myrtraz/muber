@extends('template')
@section('title', 'Registro')
@section('background', '#2f3542')

@section('content')
<style>
input[type=number]::-webkit-inner-spin-button,
input[type=number]::-webkit-outer-spin-button {
  -webkit-appearance: none;
  margin: 0;
}

input[type=number] { -moz-appearance:textfield; }
</style>

<div class="container">
	<div class="row">
		<div class="col-12 py-4">
			@if(count($errors->all()))
				<div class="alert alert-danger" role="alert">
				<h4 class="alert-heading">Error:</h4>
					<ul class="alert-danger">
						@foreach($errors->all() as $error)
							<li>{{$error}}</li>
						@endforeach
					</ul>
				</div>
			</div>
		</div>
	</div>
@endif

<div class="container">
	<div class="row">
		<div class="col-6">
			<h1 class="py-1 mb-3 text-white"><b>Registro</b></h1>
			<form action="{{ route('register.store') }}" method="post">
			@csrf

			<div class="from-group mb-4">
				<label class="h2 text-white">Introduzca su Nombre.</label>
				<input type="text" name="name" class="form-control" value="{{old('name')}}" placeholder="Nombre">
			</div>

			<div class="from-group mb-4">
				<label class="h2 text-white">Introduzca su Número Teléfonico</label>
				<input type="number" name="phone" class="form-control" value="{{old('phone')}}" placeholder="Celular">
			</div>

			<div class="from-group mb-4">
				<label class="h2 text-white">Introduzca su Correo Electrónico</label>
				<input type="email" name="email"  class="form-control" value="{{old('email')}}"  placeholder="Correo">
			</div>

			<div class="from-group mb-4">
				<label class="h2 text-white">Introduzca su Contraseña</label>
				<input type="password" name="password"  class="form-control" placeholder="Contraseña">
			</div>

			<div class="from-group col-12">
				<button type="submit" class="col-3 form-control btn-outline-success float-right">Registrarse</button>
			</div>
			</form>
		</div>
	</div>
</div>

@endsection