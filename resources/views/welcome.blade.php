@extends('template')
@section('title', 'Welcome')
@section('background', '#2f3542')

@section('content')
	<div class="container py-5">
		<div class="row">
			<div class="col-12">
				<h1 class="text-center text-white py-1 mb-4"><b>Bienvenido a mUber</b></h1>
					<div class="from-group mb-4">
						<a href="{{ route('login.index') }}" class="form-control text-center btn-outline-success">Inicia Sesion</a>
					</div>

					<div class="from-group">
						<a href="{{ route('register.index') }}" class="form-control text-center btn-outline-info">Registro</a>
					</div>
			</div>
		</div>
	</div>
@endsection