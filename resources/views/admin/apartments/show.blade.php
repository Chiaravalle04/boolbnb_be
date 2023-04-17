@extends('layouts.admin')

@section('content')

<div class="container-fluid mt-4">
    <div class="row justify-content-center">
        <div class="col">

            <div class="col">
                <img src="{{ $apartment->cover }}" class="card-img-top" style="height:350px; object-fit:cover" alt="...">
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
                       
                    </ul>
                </div>
            </div>

            <!-- modifica e elimina -->
            <div class="container-buttons d-flex mb-5">
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
                </form>
            </div>
        </div>
    </div>
</div>

@endsection