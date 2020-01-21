@extends('template')
@section('title', 'Login')
@section('background','#000')

@section('content')
<div class="container">
	<div class="row">
		<div class="col-12">
			<br>
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
	<div class="form-group">
		<input type="email"  class="form-control" name="email" value="{{old('email')}}"  placeholder="Correo">
	</div>

	<div class="from-group mb-2">
		<input type="password"  class="form-control" name="password" placeholder="Contraseña">
	</div>

	<div class="from-group">
		<button type="submit" class="form-control" >Iniciar Sesion</button>
	</div>
	<br>
</form>
		</div>
	</div>
</div>
@endsection