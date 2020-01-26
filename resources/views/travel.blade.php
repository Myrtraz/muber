@extends('template')
@section('title', 'Traveling')
@section('background','')
@section('content')
<style>
	iframe{
		min-width: 100%;
	}
</style>
<section>
	<div class="container py-4">
		<div class="row">
			<div class="col-12">
				<div class="card">
					<div class="card-body">
						<div class="row">
							<div class="col-12">
								<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3976.198795265339!2d-74.05608458584278!3d4.7354981426748814!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x8e3f8512ae0a8aed%3A0x18475ffa0597d8f!2sCl.%20152%20%2350-99%20a%2050-57%2C%20Bogot%C3%A1!5e0!3m2!1ses-419!2sco!4v1579482527362!5m2!1ses-419!2sco"
								width="600"
								height="450"
								frameborder="0"
								style="border:0;"
								allowfullscreen="">
								</iframe>
							</div>
							<div class="col pt-2">
								<a class="text-dark text-decoration-none" href="{{ route('profile.show', ['profile' => $id])  }}">
									<div class="row">
										<div class="col">
											<img src="https://4.bp.blogspot.com/-gCZuFxnBWoU/W3se4Ua2-nI/AAAAAAAAP3w/4v6clkd08bYIkndBydaK5DwyZc5zT6pgwCLcBGAs/s1600/1%2BpaB7meRmoY4te-o3.jpg" alt="..." class="rounded-circle mb-2" width="100px" height="100px">

											<img src="{{ $car->color->img }}" alt="..." class="rounded-circle" width="100px" height="100px">
										</div>
										<div class="col">
											<h3>Pablo</h3>
											<small class="text-muted h4">{{ $car->model->name }}/{{ $car->brand->name }}</small><br>
											<small class="h4"><b>{{ $car->license_plate }}</b></small>
										</div>
										<div class="col">
											<span class="badge badge-warning float-right">Oro</span>
											<p class="h2"><b>3.9M</b></p>
										</div>
									</div>
								</a>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</section>
