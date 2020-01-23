@extends('template')
@section('title', 'Finish')
@section('background','')
@section('content')
<div class="container py-3">
	<div class="row">
		<div class="col-12">
			<div class="card">
				<div class="card-body">
					<section class="row">
						<div class="col">
							<img src="https://4.bp.blogspot.com/-gCZuFxnBWoU/W3se4Ua2-nI/AAAAAAAAP3w/4v6clkd08bYIkndBydaK5DwyZc5zT6pgwCLcBGAs/s1600/1%2BpaB7meRmoY4te-o3.jpg"  class="rounded-circle text-center" alt="..." width="100px" height="100px">
						</div>
						<div class="col">
							<h3>Pablo</h3>
							<small>4.8</small>
						</div>
						<div class="col">
							<span class="badge badge-warning float-right">Oro</span>
						</div>
					</section>
				</div>
				<section class="h3 text-center py-2">
					<div class="from-group mb-3">
						<i class="fa fa-star"></i>
						<i class="fa fa-star"></i>
						<i class="fa fa-star"></i>
						<i class="fa fa-star"></i>
						<i class="fa fa-star"></i>
					</div>
				</section>
				<section class="py-2">
					<div class="from-group mb-3 text-center">
						<button type="submit" class="btn btn-outline-secondary">Deplorable</button>
						<button type="submit" class="btn btn-outline-secondary">Bien</button>
						<button type="submit" class="btn btn-outline-secondary">Excelente</button>
					</div>
				</section>
				<section class="py-2">
					<div class="from-group mb-3 text-center">
						<button type="submit" class="rounded-circle btn btn-outline-secondary p-3">5%</button>
						<button type="submit" class="rounded-circle btn btn-outline-secondary p-3">7%</button>
						<button type="submit" class="rounded-circle btn btn-outline-secondary p-3">9%</button>
					</div>
				</section>
				<a href="{{route('home.index')}}" class="form-control text-center btn-dark btn-lg btn-block"><b>Finalizar</b></a>
			</div>
		</div>
	</div>
</div>
</div>
</div>
@endsection