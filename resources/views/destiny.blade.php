@extends('template')

@section('title', 'Home')
@section('back|round', '')
@section('content')

<div class="container pt-4">
	<div class="row">
		<div class="col-12">
			<div class="shadow p-4 mb-4">

			<div class="mb-4 h4">
				<a href="{{route('home.index')}}" class="text-dark">
					<i class="fa fa-arrow-left"></i>
				</a>
			</div>

				<form action="">
					<div class="form-group">
						<div class="row">
						<div class="col-10">
							<input type="text" class="form-control" value="Ubicación">
						</div>

						<div class="col"></div>
						</div>
					</div>

					<div class="form-group">
						<div class="row">
							<div class="col">
								<input type="text" class="form-control" value="" autofocus="">
							</div>
							<div class="col-2 text-center">
								<i class="fa fa-plus"></i>
							</div>
						</div>
					</div>

				</form>

				</div>
			</div>

			<div class="list-group p-3 col">
  				<div class="list-group-item">
  					<a href="#" class="text-dark text-decoration-none">
  					<div class="row">
  						<div class="col-2 text-center h2">
							<i class="fa fa-clock-o"></i>
  						</div>

  						<div class="col-10">
  							<p class="m-0">
  								Alkosto 170 <br>
  								<small class="text-secondary">Cra. 69 #15, Bogotá</small>
  							</p>
  						</div>
  					</div>
  					</a>
  				</div>
			</div>
		</div>
	</div>
</div>
@endsection