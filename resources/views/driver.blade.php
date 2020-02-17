@extends('template')
@section('title', 'Finish')
@section('background','')
@section('content')

    <div class="container">
        <div class="row">
            <div class="col-12">
                <h3>Disponibles:</h3>
                @foreach($availableTravels as $travel)
                    <div class="card">
                        <div class="card-body">
                            {{ $travel->id }} {{ $travel->state }} {{ $travel->total }} <br>
                            <a href="{{ route('driver.edit', ['driver' => $travel->id]) }}" class="btn btn-success">Take</a>
                        </div>
                    </div>
                @endforeach
                <br>
            </div>
            <div class="col-12">
                <h3>En curso:</h3>
                @foreach($currentTravels as $travel)
                    <div class="card">
                        <div class="card-body">
                            {{ $travel->id }} {{ $travel->state }} {{ $travel->total }}
                        </div>
                    </div>
                @endforeach
                <br>
            </div>
            <div class="col-12">
                <h3>Historial:</h3>
                @foreach($historyTravels as $travel)
                    <div class="card">
                        <div class="card-body">
                            {{ $travel->id }} {{ $travel->state }} {{ $travel->total }}
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </div>


@endsection