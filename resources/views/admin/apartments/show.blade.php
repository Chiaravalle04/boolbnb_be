@extends('layouts.admin')

@section('content')
<div class="show_container_apartments">

    <div class="left_component_show">

        <h3 class="card-title">{{ $apartment->title }}</h3>

        <p class="card-text"><i class="fa-solid fa-map-pin"></i> {{ $apartment->address }}</p>

        <p class="card-text">{{ $apartment->description }}</p>

        <hr>

        <h4>Caratteristiche</h4>

        <ul class="list-group list-group-flush">
            <li><i class="fa-solid fa-cube"></i> <span class="fw-bold"> Metri quadrati:</span> {{ $apartment->square_meters }}</li>
            <li><i class="fa-solid fa-house-chimney"></i> <span class="fw-bold"> Stanze:</span> {{ $apartment->room }}</li>
            <li><i class="fa-solid fa-bed"></i> <span class="fw-bold"> Letti:</span> {{ $apartment->bed }}</li>
            <li><i class="fa-solid fa-bath"></i> <span class="fw-bold">Bagni:</span> {{ $apartment->bathroom}}</li>
            <li><i class="fa-solid fa-coins"></i> <span class="fw-bold">Prezzo:</span> {{ $apartment->price }}€/notte</li>
            <li><i class="fa-solid fa-building"></i> <span class="fw-bold"> Tipologia:</span> {{ $apartment->type }}</li>
            <li>
                <i class="fa-solid fa-binoculars"></i> <span class="fw-bold">Disponibilità:</span>
                    @if ($apartment->availability) 
                        <span>Disponibile</span> 
                    @else 
                        <span>NON Disponibile</span>
                    @endif
            </li>
            <li>
                <i class="fa-solid fa-hand-holding-dollar"></i><span class="fw-bold"> Tipo di sponsorhip:</span> 
                @if (count($apartment->sponsorships) > 0)
                    @foreach ($apartment->sponsorships as $sponsorship)
                            <span>{{$sponsorship->name }}</span>
                    @endforeach
                
                @else
                    <span>Nessuna sponsorizzazione</span>
                @endif
            </li>
            @foreach ($apartment->sponsorships as $sponsorship)
            @if (count($apartment->sponsorships) > 0 && !($sponsorship->pivot->expired_date == null))
            <li>
                <i class="fa-solid fa-stopwatch"></i><span class="fw-bold"> Scadenza sponsorship:</span> 
                <span>{{\Carbon\Carbon::createFromFormat('Y-m-d H:i:s', $sponsorship->pivot->expired_date)->format('d/m/Y H:i') }}</span>
            </li>
            @endif
            @endforeach
        </ul>

        <a href="{{ route('admin.sponsorships.index', $apartment->id) }}" class="sponsorship_button">
            Sponsorizza la tua struttura
        </a>

        <hr>
            
        <a href="{{ route('admin.apartments.edit', $apartment->id) }}" class="upgrade_button">
            Modifica struttura
        </a>

        <form
            action="{{ route('admin.apartments.destroy', $apartment->id) }}"
            method="POST"
            class="d-inline"
            onsubmit="return confirm('Do you really want to delete this appartamento? You won\'t be able to recover it later')"
        >
        @csrf
        @method('DELETE')
            <button class="delete_button">
                Elimina struttura
            </button>
        </form>

    </div>

    <div class="right_component_show">

        <img src="{{ asset('storage/'.$apartment->cover) }}" class="card-img-top" style="height:350px; object-fit:cover" alt="...">

        <h4>Servizi</h4>

        <ul class="list-group list-group-flush">
            @if (count($apartment->services) > 0)
            @foreach ($apartment->services as $service)
            <li>
                <span>{{$service->name }}</span>
            </li>
            @endforeach
            @else
            <li>
               <span>Nessun servizio</span>
            </li>
            @endif
        </ul>

    </div>

</div>

{{-- <div class="container-fluid mt-4">
    <div class="row justify-content-center">
        <div class="col">

            <div class="col">
                <img src="{{ asset('storage/'.$apartment->cover) }}" class="card-img-top" style="height:350px; object-fit:cover" alt="...">
                <div class="card mb-5">
                    <div class="card-body">
                      <h5 class="card-title">{{ $apartment->title }}</h5>

                      <p class="card-text">{{ $apartment->address }}</p>
                    </div>
                    <ul class="list-group list-group-flush">
                        <li class="list-group-item">{{ $apartment->description }}</li>
                        <li class="list-group-item"><span class="fw-bold">Numero stanze:</span> <span class="badge bg-primary text-wrap">{{ $apartment->room }}</span></li>
                        <li class="list-group-item"><span class="fw-bold">Numero bagni:</span> <span class="badge bg-primary text-wrap">{{ $apartment->bathroom}}</span></li>
                        <li class="list-group-item"><span class="fw-bold">Prezzo:</span> <span class="badge bg-primary text-wrap">{{ $apartment->price }}$ /night</span></li>
                        <li class="list-group-item"><span class="fw-bold">Tipologia:</span> <span class="badge bg-primary text-wrap">{{ $apartment->type }}</span></li>
                        <li class="list-group-item"><span class="fw-bold">
                            Tipo di sponsorhip: 
                            @if (count($apartment->sponsorships) > 0)
                                @foreach ($apartment->sponsorships as $sponsorship)
                                    <div>
                                        <a class="text-decoration-none">{{$sponsorship->name }}</a>
                                    </div>
                                @endforeach
                            
                            @else
                                Nessuna sponsorizzazione
                            @endif
                        </li>
                        <li class="list-group-item">
                            <h6>Disponibilità:</h6>
                                @if ($apartment->availability) 
                                    <div>
                                    Che fortuna! C'è ancora un posticino!
                                    </div>
                                @else 
                                    <div>
                                        Ops! Nessuna casa disponibile!
                                    </div>
                                @endif
                        </li>
                        <li class="list-group-item">{{ $apartment->square_meters }} m²</li>
                        <li class="list-group-item">
                            @if (count($apartment->services) > 0)
                                @foreach ($apartment->services as $service)
                                    <div>
                                        <a class="text-decoration-none">{{$service->name }}</a>
                                    </div>
                                @endforeach
                            
                            @else
                                Nessun servizio
                            @endif
                        </li>
                        <li>
                            <a href="{{ route('admin.sponsorships.index', $apartment->id) }}" class="btn btn-success text-light">
                                Sponsorizza
                            </a>
                        </li>
                    </ul>
                </div>
            </div> --}}

            <!-- modifica e elimina -->
            {{-- <div class="container-buttons d-flex mb-5">
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
                <button class="btn btn-danger text-light ms-3">
                    Elimina
                </button>
                </form> --}}
                {{-- @foreach ($sponsorships as $sponsorship)
                    <div class="col-12 col-lg-4 mb-4">
                        <div class="p-3 border rounded-3">
                            <h5>Sponsorship level: <span class="fw-bold">{{$sponsorship->name}}</span></h5> 
                            <p>Price: {{$sponsorship->price}} €</p>
                            <a class="btn my-btn fw-bold py-2" href="{{ route('admin.sponsorships.checkout', ['apartment' => $apartment->id, 'sponsorship' => $sponsorship->id]) }}">Select</a>
                        </div>
                    </div>
                @endforeach --}}
            {{-- </div>
        </div>
    </div>
</div> --}}
@endsection