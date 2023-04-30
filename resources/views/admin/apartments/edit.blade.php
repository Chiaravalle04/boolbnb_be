@extends('layouts.admin')

@section('content')
    <div class="container-fluid mt-4">
        <div class="row justify-content-center">
            <div class="col-md-7">
                <div class="card">
                    <div class="card-header">{{ __('Modifica appartamento') }}</div>
                
                    <!-- errori e successo -->
                    @include('partials.errorSuccess')
        
                        <form class="p-4" action="{{ route('admin.apartments.update', $apartment->id) }}" method="POST" enctype="multipart/form-data">
                            @csrf
                            @method('PUT')
                            {{-- Title --}}
                            <div class="row col mt-2">
                                <div class="mb-3">
                                    <label for="title" class="form-label @error('title') text-danger @enderror">Titolo<span class="text-danger">*</span></label>
                                    <input 
                                        type="text" 
                                        class="form-control @error('title') border border-3 border-danger @enderror" 
                                        id="title"
                                        name="title"
                                        required
                                        maxlength="255"
                                        value="{{ old('title', $apartment->title) }}" 
                                        placeholder="Inserisci il titolo...">
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
                                        required
                                        maxlength="2000"
                                        placeholder="Inserisci la descrizione..."> {{ old('description', $apartment->description) }}
                                    </textarea>
                                </div>
                            </div>

                            <div class="row col mt-2">
                                {{-- Cover --}}
                                <div class="col-md-5">
                                    <div class="mb-3">
                                        <label for="cover" class="form-label @error('cover') text-danger @enderror">Modifica immagine<span class="text-danger">*</span></label>
                                        <input 
                                            type="file" 
                                            class="form-control @error('cover') border border-3 border-danger @enderror" 
                                            id="cover"
                                            name="cover"
                                            accept="image/*"
                                            required
                                            placeholder="Inserisci l'immagine...">
                                    </div>
                                </div>
                                {{-- Address --}}
                                <div class="col-md-7">
                                    <div class="mb-3">
                                        <label for="address" class="form-label @error('type') text-danger @enderror">Indirizzo<span class="text-danger">*</span></label>
                                        <div class="form-outline w-100">
                                            <input type="text" class="form-control @error('type') border border-3 border-danger @enderror" id="address" placeholder="Inserisci l'indirizzo" name="address"
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
                                    <label for="room" class="form-label @error('room') text-danger @enderror">Numero di stanze<span class="text-danger">*</span></label>
                                    <input 
                                        type="number" 
                                        class="form-control @error('room') border border-3 border-danger @enderror"
                                        id="room"
                                        name="room"
                                        required
                                        value="{{ old('room', $apartment->room) }}" 
                                        placeholder="Inserisci il numero di stanze'...">
                                </div>

                                {{-- Bed --}}
                                <div class="mb-3 col-md-3">
                                    <label for="bed" class="form-label @error('bed') text-danger @enderror">Numero di letti<span class="text-danger">*</span></label>
                                    <input 
                                        type="number" 
                                        class="form-control @error('bed') border border-3 border-danger @enderror"
                                        id="bed"
                                        name="bed"
                                        required
                                        value="{{ old('bed', $apartment->bed) }}" 
                                        placeholder="Inserisci il numero di letti'...">
                                </div>

                                {{-- Bathroom --}}
                                <div class="mb-3 col-md-3">
                                    <label for="bathroom" class="form-label @error('bathroom') text-danger @enderror">Numero di bagni<span class="text-danger">*</span></label>
                                    <input 
                                        type="number" 
                                        class="form-control @error('bathroom') border border-3 border-danger @enderror"
                                        id="bathroom"
                                        name="bathroom"
                                        required
                                        value="{{ old('bathroom', $apartment->bathroom) }}" 
                                        placeholder="Inserisci il numero di bagni'...">
                                </div>

                                {{-- Square meters --}}
                                <div class="mb-3 col-md-3">
                                    <label for="square_meters" class="form-label @error('square_meters') text-danger @enderror">Metri quadrati<span class="text-danger">*</span></label>
                                    <input 
                                        type="number" 
                                        class="form-control @error('square_meters') border border-3 border-danger @enderror"
                                        id="square_meters"
                                        name="square_meters"
                                        required
                                        value="{{ old('square_meters', $apartment->square_meters) }}" 
                                        placeholder="Inserisci il numero di bagni'...">
                                </div>
                            </div>

                            <div class="row mt-2">
                                {{-- Price --}}
                                <div class="mb-3 col-md-3">
                                    <label for="price" class="form-label @error('price') text-danger @enderror">Prezzo<span class="text-danger">*</span></label>
                                    <div class="input-group">
                                        <div class="input-group-text">€</div>
                                        <input 
                                            type="number" 
                                            class="form-control @error('price') border border-3 border-danger @enderror"
                                            step=0.01 
                                            id="price"
                                            name="price"
                                            required
                                            value="{{ old('price', $apartment->price) }}" 
                                        >
                                    </div>
                                </div>

                                {{-- Type --}}
                                <div class="mb-3 col-md-3">
                                    <label for="type" class="form-label @error('type') text-danger @enderror">Tipologia<span class="text-danger">*</span></label>
                                    <select 
                                    class="form-select @error('type') border border-3 border-danger @enderror"
                                    name="type"
                                    aria-label="Default select example"
                                    required >
                                        <option value="Appartamento">Appartamento</option>
                                        <option value="Stanza">Stanza</option>
                                        <option value="Hotel">Hotel</option>
                                        <option value="Villa">Villa</option>
                                        <option value="Chalet">Chalet</option>
                                    </select>
                                </div>

                                {{-- Availability --}}
                                <div class="mb-3 col-md-3">
                                    <label for="availability" class="form-label @error('availability') text-danger @enderror">Disponibilità</label>                     
                                    <select class="form-select @error('availability') border border-3 border-danger @enderror" 
                                    name="availability" 
                                    aria-label="Default select example" 
                                    required>
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
                                <label class="form-label @error('services') text-danger @enderror">Servizi</label>
                                <div class="mb-3 d-flex flex-wrap justify-content-space-between">
                                @foreach ($services as $service)
                                    <div class="form-check w-25">
                                        <input
                                            class="form-check-input @error('services') border border-3 border-danger @enderror"
                                            name="services[]"
                                            type="checkbox"
                                            id="tag-{{ $service->id }}"
                                            value="{{ $service->id }}"
                                            @if (old('services') && is_array(old('services')) && count(old('services')) > 0)
                                                {{ in_array($service->id, old('services')) ? 'checked' : '' }}
                                            @elseif($apartment->services->contains($service))
                                                checked
                                            @endif>
                                        <label class="form-check-label" for="tag-{{ $service->id }}">
                                            {{ $service->name }}
                                        </label>
                                    </div>
                                @endforeach
                                </div>
                            </div>

                            <div class="mt-3">
                                <p class="fst-italic">
                                    N.B. i campi contrassegnati con <span class="text-danger">*</span> sono obbligatori.
                                </p>
                            </div>
                                
                            <div class="btn-box">
                                <a href="{{ route('admin.apartments.index') }}" class="btn my-btn">
                                    <i class="fa-solid fa-rotate-left"></i>
                                </a>
                                <button type="submit" class="btn my-btn">Modifica</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection