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
                {{ $apartment->cover }}
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
                {{ $apartment->price }}
            </h5>

            <hr>
            <!-- disponibilità -->
            <h6>Disponibilità</h6>
            @if ($apartment->availability) 
               <h5>
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
        </div>
    </div>
</div>

@endsection