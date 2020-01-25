@extends('template')
@section('title', 'Profile')
@section('background','')
@section('content')
<section>
	<div class="container py-4">
		<div class="row">
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
								<img src="https://www.itl.cat/pngfile/big/152-1525065_2019-toyota-corolla-hatchback-specs-and-review-toyota.jpg" alt="..." class="rounded-circle" width="85px" height="80px">
							</div>
							<div class="col mb-3">
								<p class="h4 mb-4"><b>Modelo/Marca</b></p>
								<h5>Corolla Hatchback 2019/Toyota</h5>
							</div>
							<div class="col mb-3">
								<p class="h4 mb-4"><b>Placa</b></p>
								<h5>J3QH45</h5>
							</div>
							<a href="{{route('home.index')}}" class="form-control text-center btn-dark btn-lg btn-block">Cancelar</a>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</section>
@endsection