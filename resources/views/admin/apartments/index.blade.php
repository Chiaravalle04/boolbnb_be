@extends('layouts.admin')
@section('content')
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="title my-3">
                    <h1>
                        Apartments
                    </h1>
        
                    <a href="{{ route('admin.apartments.create') }}" class="btn btn-primary my-3">
                        New Apartment
                    </a>
                </div>
            </div>
        </div>

       

        <div class="row">
            @foreach ($apartments as $apartment)
            <div class="col-3">
                <div class="card mb-5">
                    <img src="{{ $apartment->cover }}" class="card-img-top" alt="...">
                    <div class="card-body">
                      <h5 class="card-title">{{ $apartment->title }}</h5>
                      <p class="card-text">{{ $apartment->address }}</p>
                    </div>
                    <ul class="list-group list-group-flush">
                      <li class="list-group-item">Numero stanze: {{ $apartment->room }}</li>
                      <li class="list-group-item">Numero bagni: {{ $apartment->bathroom }}</li>
                      <li class="list-group-item">Prezzo: {{ $apartment->price }} $</li>
                    </ul>
                    <div class="card-body">
                      <a href="{{ route('admin.apartments.show', $apartment->id)}}" class="card-link btn btn-success">Dettagli</a>
                    </div>
                </div>
            </div>
            
            @endforeach
            
        </div>
    </div>
@endsection