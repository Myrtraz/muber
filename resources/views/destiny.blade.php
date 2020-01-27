@extends('template')
@section('title', 'Destiny')
@section('background', '')
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
								<input type="text" name="destiny" id="destiny" class="form-control" value="" autofocus="">
							</div>
							<div class="col-2 text-center">
								<i class="fa fa-plus"></i>
							</div>
						</div>
					</div>
				</form>
			</div>
		</div>
		<div class="col-12">
			<div class="list-group p-3 col" id="addresses">
				
			</div>
		</div>
	</div>
</div>
<script type="text/javascript">
	function template(address) {
		return `<div class="list-group-item">
					<a href="{{  route('planning.index') }}/${address.geometry.location.lat}/${address.geometry.location.lng}/${address.place_id}" class="text-dark text-decoration-none">
						<div class="row">
							<div class="col-2 text-center h2">
								<i class="fa fa-clock-o"></i>
							</div>
							<div class="col-10">
								<p class="m-0 h4">
									${ address.formatted_address }
								</p>
							</div>
						</div>
					</a>
				</div>`
	}
 
 	const addressesListHtml = document.getElementById("addresses")
	const destinyInput = document.getElementById("destiny")


	destinyInput.addEventListener('change', function() {
		const place = encodeURIComponent(destinyInput.value)
	fetch("https://maps.googleapis.com/maps/api/geocode/json?address=" + place + "&key={{ env('GOOGLE_MAPS_API_KEY') }}")
		.then(r => r.json())
		.then(data => {
			console.log(data)

			addressesListHtml.innerHTML = ""

			data.results.forEach(address => {
				addressesListHtml.innerHTML += template(address)
			})

			
			
		})
	})
</script>
@endsection