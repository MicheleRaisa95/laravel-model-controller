@extends('layouts.app')

@section('content')
<div class="container mt-5">
        <div class="row">
            @foreach($movies as $movie)
                <div class="col-md-4">
                    <div class="card mb-4">
                        <div class="card-body">
                            <h5 class="card-title">{{ $movie->title }}</h5>
                            <p class="card-text">Voto: {{ $movie->vote }}</p>
                            <p class="card-text"><small class="text-muted">Data di uscita: {{ $movie->date }}</small></p>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
@endsection