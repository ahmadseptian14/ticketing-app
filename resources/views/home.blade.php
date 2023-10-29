@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        @foreach ($tickets as $ticket)
        <div class="col-md-4">
            <div class="card mb-5" style="width: 18rem;">
                <div class="card-body">
                  <h5 class="card-title">{{ $ticket->name }}</h5>
                  <p class="card-text">{{ $ticket->description }}</p>
                  <p class="card-text" style="color: red">Rp {{ number_format($ticket->price) }}</p>
                  <p class="card-text">Stok : {{ $ticket->stock }}</p>
                </div>
              </div>
        </div>
        @endforeach
    </div>
</div>
@endsection
