<ul>
	@foreach($errors->all() as $error)
	<li style="color: red; font-size: 20px;">{{$error}}</li>
	@endforeach
</ul>

<form action="{{ route('register.store') }}" method="post">
	@csrf
	<input type="text" name="name" value="{{old('name')}}" placeholder="Nombre">
	<br>
	<br>
	<input type="text" name="phone" value="{{old('phone')}}" placeholder="Celular">
	<br>
	<br>
	<input type="email" name="email" value="{{old('email')}}"  placeholder="Correo">
	<br>
	<br>
	<input type="password" name="password" placeholder="Contraseña">
	<br>
	<br>
	<button type="submit">Registrarse</button>
	<br>
</form>