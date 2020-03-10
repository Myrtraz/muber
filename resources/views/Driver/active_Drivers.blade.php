@extends('template')
@section('title', 'Actives')
@section('background','')
@section('content')
<section class="py-3">
	<div class="container">
		<div class="row">
			<div class="col-12">
				<h1 class="text-center">Drivers Actived</h1>
			</div>
		</div>
	</div>
</section>
<section>
	<div class="container">
		<div class="row">
			<div class="col-12">
				<ul>
					@foreach($users as $user)
				<li>{{ $user->name }}</li>
				@endforeach
				</ul>
			</div>
		</div>
	</div>
</section>
@endsection