@extends('template')
@section('title', 'Planning')
@section('background', '')
@section('content')
<style type="text/css">
	#map {
height: 500px;
}
</style>
<div class="container">
	<div class="row">
		<div class="col-12">
			<div id="map"></div>
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
							<input type="hidden" name="travel" id="travel" value="" />



							<div class="dropdown mb-3">
								<button class="btn btn-secondary dropdown-toggle open" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
								Metodo de Pago
								</button>
								<div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
									<a class="dropdown-item" href="#"><i class="fa fa-money"></i> Efectivo</a>
									<a class="dropdown-item" href="#"><i class="fa fa-credit-card"></i> Tarjeta de Crédito</a>
								</div>
							</div>
							<button type="submit" class="btn btn-danger float-right mx-5" id="confirm" disabled="">Confirmar Viaje</button>
						</form>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
<script type="text/javascript">
	const travelInputHtml = document.getElementById("travel")
	const confirmTravelBnt = document.getElementById("confirm")
	const travel = {};

	const destinyLat = {{ $lat }};
	const destinyLng = {{ $lng }};

	function initMap(coords) {
		console.log("map loaded")
		
		var map = new google.maps.Map(document.getElementById('map'), {
			zoom: 15,
			center: {lat: coords.latitude, lng: coords.longitude},
			mapTypeId: 'terrain'
		});
		
		let directionDisplay = new google.maps.DirectionsRenderer();
		let directionService = new google.maps.DirectionsService();
		
		directionDisplay.setMap(map);
		
		const curretLocation = new google.maps.LatLng(coords.latitude, coords.longitude)
		const destiny = new google.maps.LatLng(destinyLat, destinyLng)
				
		const request = {
			origin: curretLocation,
			destination:destiny,
			travelMode:'WALKING'
		}

		travel.destinations = [ {lat:coords.latitude, lng:coords.longitude}, {lat:destinyLat, lng:destinyLng} ]
		travelInputHtml.value = JSON.stringify(travel);

		confirmTravelBnt.disabled = false;

		directionService.route(request, function(result, status) {
			console.log(result)

			if (status === "OK") {
				directionDisplay.setDirections(result)
			}
		})
	}

	function loadLocation() {
		navigator.geolocation.getCurrentPosition(({coords}) => {
			console.log("coords loaded")
			initMap(coords)
		}, () => {
			console.log("unable to load coords")
			alert('necesitas darle permisos de ubicacion')
		})
	}
</script>
<script async defer src="https://maps.googleapis.com/maps/api/js?key={{ env('GOOGLE_MAPS_API_KEY') }}&callback=loadLocation"></script>
@endsection