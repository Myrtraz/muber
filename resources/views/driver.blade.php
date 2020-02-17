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
                            {{ $travel->id }} {{ $travel->state }} {{ $travel->total }} <br>
                            @if($travel->state == \App\Travel::PICK)
                                <a href="{{ route('driver.edit', ['driver' => $travel->id]) }}" class="btn btn-primary">In place</a>
                            @endif

                            @if($travel->state == \App\Travel::WAITING)
                                <a href="{{ route('driver.edit', ['driver' => $travel->id]) }}" class="btn btn-info">Start</a>
                            @endif

                            @if($travel->state == \App\Travel::RUNNING)
                                <a href="{{ route('driver.edit', ['driver' => $travel->id]) }}" class="btn btn-dark">Finished</a>
                            @endif
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
                            <div class="row">
                                <div class="col-12">
                                    #{{ $travel->id }} <span class="badge {{ $travel->state == \App\Travel::FINISHED ? 'badge-success' : 'badge-danger' }}">{{ $travel->state }}</span>
                                </div>
                                <div class="col-12">
                                    <h6>{{ $travel->user->name }}</h6>
                                    <br>
                                    <h4><b>Distancia:</b> {{ number_format($travel->distance_in_meters / 1000, 1) }}Km</h4>
                                    <h3><b>Total:</b> ${{ number_format($travel->total, 2) }}</h3>
                                </div>
                            </div>

                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </div>


@endsection