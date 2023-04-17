@extends('layouts.admin')
@section('content')
<div class="container">
    <div class="title">
        <h1>{{ $sponsorship->id }}. {{ $sponsorship->name }}</h1>
    </div>

    <div class="apartment-sponsor">
        <h2>Strutture sponsorizzate:</h2>
        <ul>
            @if (count($sponsorship->apartments) > 0)
                @foreach ($sponsorship->apartments as $sponsorApartment)
                    <li>
                        <a class="text-decoration-none" href="{{ route('admin.apartments.show', $sponsorApartment->id) }}">{{$sponsorApartment->title }}</a>
                    </li>
                @endforeach
                @else
                    Nessun appartamento sponsorizzato
            @endif
        </ul>
    </div>
    
</div>
@endsection