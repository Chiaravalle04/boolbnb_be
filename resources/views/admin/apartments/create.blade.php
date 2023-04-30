@extends('layouts.admin')

@section('content')
<div class="container-fluid mt-4">
    <div class="row justify-content-center">
        <div class="col-md-7">
            <div class="card">
                <div class="card-header">{{ __('Aggiungi appartamento') }}</div>

                <!-- errori e successo -->
                @include('partials.errorSuccess')

                <form class="p-4" action="{{ route('admin.apartments.store') }}" method="POST" enctype="multipart/form-data">
                    @csrf

                    {{-- <input type="hidden" name="user_id" value="{{ Auth::id() }}"> --}}

                    {{-- Title --}}
                    <div class="row col mt-2">
                        <div class="mb-3">
                            <label for="title" class="form-label  @error('title') text-danger @enderror">Titolo<span class="text-danger">*</span></label>
                            <input type="text" 
                                class="form-control @error('title') border border-3 border-danger @enderror" 
                                id="title" 
                                name="title"
                                value="{{ old('title') }}"
                                placeholder="Inserisci il titolo..."
                                required
                                maxlength="255"
                            >
                        </div>
                    </div>

                    {{-- Description --}}
                    <div class="row col mt-2">
                        <div class="mb-3">
                            <label for="description" class="form-label @error('description') text-danger @enderror">Descrizione<span class="text-danger">*</span></label>
                            <textarea 
                                class="form-control @error('description') border border-3 border-danger @enderror" 
                                id="description" 
                                name="description"
                                rows="3" 
                                placeholder="Inserisci la descrizione..."
                                required
                            >{{ old('description') }}</textarea>
                        </div>
                    </div>

                    <div class="row col mt-2">
                        {{-- Cover --}}
                        <div class="col-md-5">
                            <div class="mb-3">
                                <label for="cover" class="form-label @error('cover') text-danger @enderror">Inserisci cover<span class="text-danger">*</span></label>                     
                                <input type="file" 
                                    class="form-control @error('cover') border border-3 border-danger @enderror" 
                                    id="cover" 
                                    name="cover"
                                    accept="image/*"
                                    required
                                >
                            </div>
                        </div>
                        {{-- Address --}}
                        <div class="col-md-7">
                            <div class="mb-3">
                                <label for="address" class="form-label @error('address') text-danger @enderror">Indirizzo<span class="text-danger">*</span></label>
                                <div class="form-outline w-100">
                                    <input type="text" class="form-control @error('address') border border-3 border-danger @enderror" id="address" placeholder="Inserisci l'indirizzo" name="address"
                                    value="{{ old('address') }}" required>
                                </div>
                                <ul id="autocomplete-list" class="list-group box-list"></ul>
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
                        </div>
                    </div>

                    <div class="row mt-2">

                        {{-- Room --}}
                        <div class="mb-3 col-md-3">
                            <label for="room" class="form-label @error('room') text-danger @enderror">N° stanze<span class="text-danger">*</span></label>
                            <input type="number" 
                                id="room" 
                                class="form-control @error('room') border border-3 border-danger @enderror"
                                name="room"
                                value="{{ old('room') }}"
                                required
                            >
                        </div>

                        {{-- Bed --}}
                        <div class="mb-3 col-md-3">
                            <label for="bed" class="form-label @error('bed') text-danger @enderror">N° letti<span class="text-danger">*</span></label>
                            <input type="number" 
                                id="bed" 
                                class="form-control @error('bed') border border-3 border-danger @enderror"
                                name="bed"
                                value="{{ old('bed') }}"
                                required
                            >
                        </div>

                        {{-- Bathroom --}}
                        <div class="mb-3 col-md-3">
                            <label for="bathroom" class="form-label @error('bathroom') text-danger @enderror">N° bagni<span class="text-danger">*</span></label>
                            <input type="number" 
                                id="bathroom" 
                                class="form-control @error('bathroom') border border-3 border-danger @enderror"
                                name="bathroom"
                                value="{{ old('bathroom') }}"
                                required
                            >
                        </div>

                        {{-- Square meters --}}
                        <div class="mb-3 col-md-3">
                            <label for="square_meters" class="form-label @error('square_meters') text-danger @enderror">Metri quadrati<span class="text-danger">*</span></label>
                            <input type="number" 
                                id="square_meters" 
                                class="form-control @error('square_meters') border border-3 border-danger @enderror"
                                name="square_meters"
                                value="{{ old('square_meters') }}"
                                required
                            >
                        </div>
                    </div>

                    <div class="row mt-2">
                        {{-- Price --}}
                        <div class="mb-3 col-md-3">
                            <label for="price" class="form-label @error('price') text-danger @enderror">Prezzo<span class="text-danger">*</span></label>
                            <div class="input-group">
                                <div class="input-group-text">€</div>
                                <input type="number" 
                                    id="price" 
                                    class="form-control @error('price') border border-3 border-danger @enderror"
                                    name="price"
                                    value="{{ old('price') }}"
                                    required
                                    step="0.01"
                                >
                            </div>
                        </div>
                        {{-- Type --}} 
                        {{-- CAMBIARE COLORE HOVER SU SELECT --}}
                        <div class="mb-3 col-md-3">
                            <label for="type" class="form-label @error('type') text-danger @enderror">Tipo di struttura<span class="text-danger">*</span></label>                     
                            <select class="form-select @error('type') border border-3 border-danger @enderror" name="type" aria-label="Default select example" required>
                                <option value="Appartamento">Appartamento</option>
                                <option value="Stanza">Stanza</option>
                                <option value="Hotel">Hotel</option>
                                <option value="Villa">Villa</option>
                                <option value="Chalet">Chalet</option>
                            </select>
                        </div>
                        
                        {{-- Availability --}}
                        <div class="mb-3 col-md-3">
                            <label for="availability" class="form-label @error('availability') text-danger @enderror">Disponibilità<span class="text-danger">*</span></label>                     
                            <select class="form-select @error('availability') border border-3 border-danger @enderror" name="availability" aria-label="Default select example" required>
                                <option value="0">No</option>
                                <option value="1">Si</option>
                            </select>
                        </div>

                        {{-- Visibility --}}
                        <div class="mb-3 col-md-3">
                            <label for="visibility" class="form-label @error('visibility') text-danger @enderror">Visibile<span class="text-danger">*</span></label>                     
                            <select class="form-select @error('visibility') border border-3 border-danger @enderror" name="visibility" aria-label="Default select example" required>
                                <option value="0">No</option>
                                <option value="1">Si</option>
                            </select>
                        </div>
                    </div>

                    {{-- Services --}}
                    <div class="row mt-2">
                        <label for="services" class="form-label fw-medium @error('services') text-danger @enderror">Servizi</label>
                        <div class="mb-3 d-flex flex-wrap justify-content-space-between">
                        @foreach ($services as $service)
                            <div class="form-check w-25 ">
                                <input
                                    class="form-check-input @error('services') border border-3 border-danger @enderror"
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
                    </div>

                    <div class="mt-3 ">
                        <p class="fst-italic">
                            <span class="fw-semibold">N.B.</span> i campi contrassegnati con <span class="text-danger">*</span> sono obbligatori.
                        </p>
                    </div>

                    <button class="btn my-btn" type="submit">Aggiungi Appartamento</button>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection