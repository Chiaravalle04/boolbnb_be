@extends('layouts.admin')

@section('content')
<div class="container-fluid mt-4">
    <div class="row justify-content-center">
        <div class="col-md">
            <div class="card">
                <div class="card-header">{{ __('Aggiungi appartamento') }}</div>

                @if ($errors->any())
                    <div class="alert alert-danger">
                        <ul>
                            @foreach ($errors->all() as $error)
                                <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
                @endif

                <div class="card">
                    @if (session('status'))
                    <div class="alert alert-success" role="alert">
                        {{ session('status') }}
                    </div>
                    @endif
                </div>

                <form class="p-4" action="{{ route('admin.apartments.store') }}" method="POST" enctype="multipart/form-data">
                    @csrf

                    {{-- <input type="hidden" name="user_id" value="{{ Auth::id() }}"> --}}

                    {{-- Title --}}
                    <div class="mb-3">
                        <label for="title" class="form-label">Titolo<span class="text-danger">*</span></label>
                        <input type="text" 
                            class="form-control" 
                            id="title" 
                            name="title"
                            value="{{ old('title') }}"
                            placeholder="Inserisci il titolo..."
                            required
                            maxlength="255"
                        >
                    </div>

                    {{-- Description --}}
                    <div class="mb-3">
                        <label for="description" class="form-label">Descrizione<span class="text-danger">*</span></label>
                        <textarea 
                            class="form-control" 
                            id="description" 
                            name="description"
                            rows="3" 
                            placeholder="Inserisci la descrizione..."
                            required
                        >{{ old('description') }}</textarea>
                    </div>

                    {{-- Cover --}}
                   <div class="mb-3">
                        <label for="cover" class="form-label">Inserisci cover<span class="text-danger">*</span></label>                     
                        <input type="file" 
                            class="form-control" 
                            id="cover" 
                            name="cover"
                            accept="image/*"
                            required
                        >
                    </div>

                    {{-- Type --}}
                    <div class="mb-3">
                        <label for="type" class="form-label">Tipo di struttura<span class="text-danger">*</span></label>                     
                        <select class="form-select" name="type" aria-label="Default select example" required>
                            <option value="Appartamento">Appartamento</option>
                            <option value="Stanza">Stanza</option>
                            <option value="Hotel">Hotel</option>
                            <option value="Villa">Villa</option>
                            <option value="Chalet">Chalet</option>
                        </select>
                    </div>

                    {{-- City --}}
                    <div class="mb-3">
                        <label for="city" class="form-label">Città<span class="text-danger">*</span></label>
                        <input type="text" 
                            class="form-control" 
                            id="city" 
                            name="city"
                            value="{{ old('city') }}"
                            placeholder="Inserisci la città..."
                            required
                            maxlength="255"
                        >
                    </div>

                    {{-- Address --}}
                    <div class="mb-3">
                        <label for="address" class="form-label">Indirizzo<span class="text-danger">*</span></label>
                        <div class="form-outline w-100" id="autocomplete-list">
                            {{-- <input type="text" class="form-control" id="address" placeholder="Insert address" name="address"
                        value="{{ old('address', $apartment->address) }}" required> --}}
                        </div>
                        <ul id="autocomplete-list"></ul>
                        {{-- <input type="text" 
                            class="form-control" 
                            id="address" 
                            name="address"
                            value="{{ old('address') }}"
                            placeholder="Inserisci l'indirizzo..."
                            required
                            maxlength="255"
                        > --}}
                    </div>

                    {{-- Price --}}
                    <div class="mb-3">
                        <label for="price" class="form-label">Prezzo<span class="text-danger">*</span></label>
                        <input type="number" 
                            id="price" 
                            class="form-control"
                            name="price"
                            value="{{ old('price') }}"
                            required
                            step="0.01"
                        >
                    </div>

                    {{-- Availability --}}
                    <div class="mb-3">
                        <label for="availability" class="form-label">Disponibilità<span class="text-danger">*</span></label>                     
                        <select class="form-select" name="availability" aria-label="Default select example" required>
                            <option value="0">No</option>
                            <option value="1">Si</option>
                        </select>
                    </div>

                    {{-- Room --}}
                    <div class="mb-3">
                        <label for="room" class="form-label">Numero di stanze<span class="text-danger">*</span></label>
                        <input type="number" 
                            id="room" 
                            class="form-control"
                            name="room"
                            value="{{ old('room') }}"
                            required
                        >
                    </div>

                    {{-- Bed --}}
                    <div class="mb-3">
                        <label for="bed" class="form-label">Numero di letti<span class="text-danger">*</span></label>
                        <input type="number" 
                            id="bed" 
                            class="form-control"
                            name="bed"
                            value="{{ old('bed') }}"
                            required
                        >
                    </div>

                    {{-- Bathroom --}}
                    <div class="mb-3">
                        <label for="bathroom" class="form-label">Numero di bagni<span class="text-danger">*</span></label>
                        <input type="number" 
                            id="bathroom" 
                            class="form-control"
                            name="bathroom"
                            value="{{ old('bathroom') }}"
                            required
                        >
                    </div>

                    {{-- Square meters --}}
                    <div class="mb-3">
                        <label for="square_meters" class="form-label">Metri quadrati<span class="text-danger">*</span></label>
                        <input type="number" 
                            id="square_meters" 
                            class="form-control"
                            name="square_meters"
                            value="{{ old('square_meters') }}"
                            required
                        >
                    </div>

                    {{-- Visibility --}}
                    <div class="mb-3">
                        <label for="visibility" class="form-label">Visibile<span class="text-danger">*</span></label>                     
                        <select class="form-select" name="visibility" aria-label="Default select example" required>
                            <option value="0">No</option>
                            <option value="1">Si</option>
                        </select>
                    </div>

                    {{-- Services --}}
                    <div class="mb-3">
                        <label class="form-label">Servizi</label>
                        @foreach ($services as $service)
                            <div class="form-check">
                                <input
                                    class="form-check-input"
                                    name="services[]"
                                    type="checkbox"
                                    id="tag-{{ $service->id }}"
                                    value="{{ $service->id }}"
                                    {{ in_array($service->id, old('tags', [])) ? 'checked' : '' }}>
                                <label class="form-check-label" for="tag-{{ $service->id }}">
                                    {{ $service->name }}
                                </label>
                            </div>
                        @endforeach
                    </div>

                    <div>
                        <p>
                            N.B. i campi contrassegnati con <span class="text-danger">*</span> sono obbligatori.
                        </p>
                    </div>

                    <button class="btn btn-primary" type="submit">Aggiungi Appartamento</button>
                </form>

            </div>
        </div>
    </div>
</div>
@endsection