@extends('layouts.admin')

@section('content')

<div class="container-fluid mt-4">
    <div class="row justify-content-center">
        <div class="col">

            <!-- title -->
            <h1>
               <strong>{{$apartment->id}}.</strong> {{ $apartment->title }}
            </h1>

            <hr>
            <!-- slug -->
            <h6>
                <strong>Slug:</strong>
                {{ $apartment->slug }}
            </h6>

            <hr>
            <!-- description -->
            <h5>
                <strong>Description:</strong>
                {{ $apartment->description }}
            </h5>

            <hr>
            <!-- cover -->
            <h5>
                <strong>Cover:</strong>
                <img src="{{ $apartment->cover }}" alt="" height="50px" width="50px">
            </h5>

            <hr>
            <!-- type -->   
            <h5>
                <strong>Stanza:</strong>
                {{ $apartment->type }}
            </h5>

            <hr>
            <!-- address -->
            <h5>
                <strong>Address:</strong>
                {{ $apartment->address }}
            </h5>

            <hr>
            <!-- long & lat -->
            <h4>Long & Lat</h4>
            <h5>
                <strong>long:</strong>
                {{ $apartment->long }}
            </h5>
            <h5>
                <strong>lat:</strong>
                {{ $apartment->lat }}
            </h5>

            <hr>
            <!-- price -->
            <h5>
                <strong>Prezzo:</strong>
                {{ $apartment->price }} €
            </h5>

            <hr>
            <!-- disponibilità -->
            <h6>Disponibilità</h6>
            @if ($apartment->availability) 
               <h5>
                    <strong>C'è disponibilità</strong>
                    {{ $apartment->availability }} √
               </h5>
            @else 
               <h5>
                    non c'è Disponibilità
               </h5>
            @endif
               
            <hr>
            <!-- stanze -->
            <h5>
                <strong>Numero di stanze:</strong>
                {{ $apartment->room }}
            </h5>

            
            <!-- numero di bagni -->
            <h5>
                <strong>Numero di bagni:</strong>
                {{ $apartment->bathroom }}
            </h5>

            <!-- metri quadrati --> 
            <h5>
                <strong>Metri quadrati:</strong>
                {{ $apartment->square_meters }}
            </h5>

            <h4>
                Servizi:
                @if (count($apartment->services) > 0)
                    @foreach ($apartment->services as $service)
                        <ul>
                            <a class="text-decoration-none" href="#">{{$service->name }}</a>
                        </ul>
                    @endforeach
                    @else
                    Nessun servizio
                @endif
            </h4>
            <!-- modifica e elimina -->
            <div class="container-buttons d-flex">
                    <!--modifica-->
                <a href="{{ route('admin.apartments.edit', $apartment->id) }}" class="btn btn-warning text-light">
                    Modifica
                </a>

                    <!--delete-->
                <hr>
                <form
                action="{{ route('admin.apartments.destroy', $apartment->id) }}"
                method="POST"
                class="d-inline"
                onsubmit="return confirm('Do you really want to delete this appartamento? You won\'t be able to recover it later')"
                >
                @csrf
                @method('DELETE')
                <button class="btn btn-danger text-light">
                    elimina
                </button>
                </form>
            </div>
        </div>
    </div>
</div>

@endsection