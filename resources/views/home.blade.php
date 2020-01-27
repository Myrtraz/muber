@extends('template')

@section('title', 'Home')
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

<script type="text/javascript">
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
    }

	function loadLocation() {
		navigator.geolocation.getCurrentPosition(({coords}) => {
			initMap(coords)
		})
	}
</script>
<script async defer src="https://maps.googleapis.com/maps/api/js?key={{ env('GOOGLE_MAPS_API_KEY') }}&callback=loadLocation"></script>
@endsection