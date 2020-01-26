@extends('template')
@section('title', 'Profile')
@section('background','')
@section('content')
<section>
	<div class="container py-4">
		<div class="row">
			<div class="col-12 my-2">
				<a href=" {{ route('travel.show', [ 'travel' => $id ]) }} " class="h3 text-dark text-decoration-none"><i class="fa fa-arrow-left"></i></a>
			</div>
			<div class="col-12">
				<div class="card">
					<div class="card-body">
						<div class="row">
							<div class="col">
								<img src="https://4.bp.blogspot.com/-gCZuFxnBWoU/W3se4Ua2-nI/AAAAAAAAP3w/4v6clkd08bYIkndBydaK5DwyZc5zT6pgwCLcBGAs/s1600/1%2BpaB7meRmoY4te-o3.jpg" alt="..." class="rounded-circle" width="100px" height="100px">
							</div>
							<div class="col">
								<h3>Pablo</h3>
								<small class="text-muted h4">4.8 <i class="fa fa-star"></i></small>
							</div>
							<div class="col">
								<span class="badge badge-warning float-right">Oro</span>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</section>
<section>
	<div class="container">
		<div class="row">
			<div class="col-12">
				<div class="card">
					<div class="card-body">
						<div class="row">
							<div class="col">
								<h3>Viajes realizados</h3>
							</div>
							<div class="col">
								<p class="mb-3"></p>
								<p class="float-right h3"><b>2300</b></p>
							</div>
							<div class="col-2">
								<p></p>
							</div>
						</div>
						<hr>
						<div class="row">
							<div class="col mb-3">
								<p class="h4"><b>Vehiculo</b></p>
								<img src="{{ $car->color->img }}" alt="..." class="rounded-circle" width="85px" height="80px">
							</div>
							<div class="col mb-3">
								<p class="h4 mb-4"><b>Modelo/Marca</b></p>
								<h5>{{ $car->model->name }}/{{ $car->brand->name }}</h5>
							</div>
							<div class="col mb-3">
								<p class="h4 mb-4"><b>Placa</b></p>
								<h5>{{ $car->license_plate }}</h5>
							</div>
							<div class="col-12">
								<form method="post" action="{{ route('travel.destroy', [ 'travel' => $id ]) }}">
									@csrf
									@method('DELETE')
									<button type="submit" class="form-control text-center btn-dark btn-lg btn-block">Cancelar</button>
								</form>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</section>
@endsection
