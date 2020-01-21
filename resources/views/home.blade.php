@extends('template')

@section('title', 'Home')
@section('background', '')
@section('content')

<style>
	iframe{
		min-width: 100%;
	}
</style>

<div class="container">
	<div class="row">
		<div class="col-12">
			<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3976.198795265339!2d-74.05608458584278!3d4.7354981426748814!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x8e3f8512ae0a8aed%3A0x18475ffa0597d8f!2sCl.%20152%20%2350-99%20a%2050-57%2C%20Bogot%C3%A1!5e0!3m2!1ses-419!2sco!4v1579482527362!5m2!1ses-419!2sco"
			 width="600"
			 height="450"
			 frameborder="0"
			 style="border:0;"
			 allowfullscreen="">
			 </iframe>

				<div>
					<p class="text-center">
						<strong>Buenas noches, Marco</strong>
					</p>
				</div>
				<hr>
			 <a href="{{route('destiny.index')}}" class="btn btn-block btn-secondary">¿A dónde vas?</a>
		</div>
	</div>
</div>
@endsection