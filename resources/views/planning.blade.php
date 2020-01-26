@extends('template')
@section('title', 'Planning')
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
			<div class="card">
				<div class="card-body" style="background: #dfe4ea;">
					<p class="h4">
						Elige un viaje, o desliza hacia arriba para conocer más.
					</p>
					<hr>
					<div class="from-group mb-3">
						@foreach($plans as $plan)
						<div class="row">
							<div class="col-2">
								<img src="{{ $plan->img }}" alt="" class="rounded-circle" width="94px" height="71px">
							</div>
							<div class="col-8">
								<p class="h3">
									<b>{{ $plan->name }} </b><i class="fa fa-user"> {{ $plan->capacity }}</i>
									<p class="float-right h4"><b>COP</b> <b>{{ $plan->min_ride_cost }}$</b></p>
									<small class="text-muted">Llegada: xx:xx </small>
								</p>
							</div>
						</div>
						<hr>
						@endforeach
						<form method="post" action="{{  route('planning.store')  }}">
							@csrf
							<input type="hidden" name="rate_id" value="1" />
							<div class="dropdown mb-3">
								<button class="btn btn-secondary dropdown-toggle open" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
								Metodo de Pago
								</button>
								<div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
									<a class="dropdown-item" href="#"><i class="fa fa-money"></i> Efectivo</a>
									<a class="dropdown-item" href="#"><i class="fa fa-credit-card"></i> Tarjeta de Crédito</a>
								</div>
							</div>
							<button type="submit" class="btn btn-danger float-right mx-5">Confirmar Viaje</button>
						</form>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
@endsection
