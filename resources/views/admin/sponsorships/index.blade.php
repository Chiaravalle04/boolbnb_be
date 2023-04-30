@extends('layouts.admin')
@section('content')
<div class="index_sponsorship_container">

    <div class="header_sponsorship">

        <h3>Scegli il piano più adatto a te</h3>

    </div>

    <div class="main_sponsorship">

        @foreach ($sponsorships as $sponsorship)
            <div class="card_sponsorship"> 
                <h4>{{$sponsorship->name}}</h4>
                <p><b>Durata piano:</b> {{ $sponsorship->duration }} ore</p> 
                <p class="price_sponsorship">€ {{$sponsorship->price}}</p>
                <a href="{{ route('admin.sponsorships.checkout', ['apartment' => $apartment->id, 'sponsorship' => $sponsorship->id]) }}">Seleziona</a>
            </div>
        @endforeach

    </div>

</div>
{{-- <div class="container">
    <div class="row">
        <div class="col-12">
            <div class="py-4">
                <h1 class="text-uppercase">
                    Piani di sponsorizzazioni
                </h1>
                <h6 class="fs-5 pb-3">
                    Sponsor immediatly your apartments.
                </h6>
            </div>
        </div>
    </div>

    <div class="row align-items-stretch">
        @foreach ($sponsorships as $sponsorship)
            <div class="col-12 col-lg-4 mb-4">
                <div class="p-3 border rounded-3">
                    <h5>Sponsorship level: <span class="fw-bold">{{$sponsorship->name}}</span></h5>
                    <p>Durata piano: {{ $sponsorship->duration }} H</p> 
                    <p>Price: {{$sponsorship->price}} $</p>
                    <a class="btn my-btn fw-bold py-2" href="{{ route('admin.sponsorships.checkout', ['apartment' => $apartment->id, 'sponsorship' => $sponsorship->id]) }}">Select</a>
                </div>
            </div>
        @endforeach
    </div>
</div> --}}
@endsection