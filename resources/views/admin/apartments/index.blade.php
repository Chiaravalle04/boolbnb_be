@extends('layouts.admin')
@section('content')
    <div class="container_index_apartments">

        <div class="card_index_apartments border_new_apartment">
            <a href="{{ route('admin.apartments.create') }}">
                <i class="fa-regular fa-plus fa-beat"></i>
            </a>
        </div>

        @foreach ($apartments as $apartment)

        <div class="card_index_apartments">

            <a class="link_show_apartment" href="{{ route('admin.apartments.show', $apartment->id)}}">

                <div class="image_apartment">
                    <img src="{{ asset('storage/'.$apartment->cover) }}" class="card-img-top" alt="...">
                </div>

                <div class="text_single_apartment">
                    <h5 class="card-title">{{ $apartment->title }}</h5>
                    <p class="card-text">{{ $apartment->address }}</p>
                </div>

            </a>

        </div>

        @endforeach

    </div>
    {{-- <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="title my-3">
                    <h1>
                        Appartamenti 
                    </h1> --}}

                    {{-- <form class="d-flex mt-5" role="search" method="GET" action="{{ route('admin.apartments.index') }}">
                        <input class="form-control me-2" type="search" placeholder="Inserisci il nome di una casa..." aria-label="Search" name="title" value="{{ request()->input('title') }}">
                        <button class="btn btn-outline-success" type="submit">Cerca</button>
                    </form> --}}
        
                    {{-- <a href="{{ route('admin.apartments.create') }}" class="btn btn-primary my-3">
                        Aggiungi Appartamento
                    </a>
                </div>
            </div>
        </div> --}}

       

        {{-- <div class="row">
            @foreach ($apartments as $apartment)
            <div class="col-3 mb-5">
                <div class="card h-100">
                    <img src="{{ asset('storage/'.$apartment->cover) }}" class="card-img-top" alt="...">
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
    </div> --}}
@endsection