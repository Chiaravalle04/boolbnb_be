@extends('layouts.admin')

@section('content')
<div class="container-fluid mt-4">
    <div class="row justify-content-center">
        <div class="col-md">
            <div class="card">
                <div class="card-header">{{ __('Aggiungi appartamento') }}</div>

                <!-- errori e successo -->
                @include('partials.errorSuccess')

                <form class="p-4" action="{{ route('admin.apartments.store') }}" method="POST" enctype="multipart/form-data">
                    @csrf

                    {{-- <input type="hidden" name="user_id" value="{{ Auth::id() }}"> --}}

                    {{-- Title --}}
                    <div class="row col-md-6">
                        <div class="mb-3">
                            <label for="title" class="form-label @error('title') text-danger @enderror">Titolo<span class="text-danger">*</span></label>
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
                    <div class="row col-md-6">
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

                    {{-- Cover --}}
                    <div class="row col-md-6">
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
                    <div class="row col-md-6">
                        <div class="mb-3">
                            <label for="address" class="form-label @error('type') text-danger @enderror">Indirizzo<span class="text-danger">*</span></label>
                            <div class="form-outline w-100">
                                <input type="text" class="form-control @error('type') border border-3 border-danger @enderror" id="address" placeholder="Insert address" name="address"
                            value="{{ old('address') }}" required>
                            </div>
                            <ul id="autocomplete-list" class="list-group"></ul>
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

                    <div class="row">
                    {{-- Price --}}
                        <div class="mb-3 col-md-1">
                            <label for="price" class="form-label @error('price') text-danger @enderror">Prezzo<span class="text-danger">*</span></label>
                            <input type="number" 
                                id="price" 
                                class="form-control @error('price') border border-3 border-danger @enderror"
                                name="price"
                                value="{{ old('price') }}"
                                required
                                step="0.01"
                            >
                        </div>

                        {{-- Room --}}
                        <div class="mb-3 col-md-1">
                            <label for="room" class="form-label @error('room') text-danger @enderror">Numero di stanze<span class="text-danger">*</span></label>
                            <input type="number" 
                                id="room" 
                                class="form-control @error('room') border border-3 border-danger @enderror"
                                name="room"
                                value="{{ old('room') }}"
                                required
                            >
                        </div>

                        {{-- Bed --}}
                        <div class="mb-3 col-md-1">
                            <label for="bed" class="form-label @error('bed') text-danger @enderror">Numero di letti<span class="text-danger">*</span></label>
                            <input type="number" 
                                id="bed" 
                                class="form-control @error('bed') border border-3 border-danger @enderror"
                                name="bed"
                                value="{{ old('bed') }}"
                                required
                            >
                        </div>

                        {{-- Bathroom --}}
                        <div class="mb-3 col-md-1">
                            <label for="bathroom" class="form-label @error('bathroom') text-danger @enderror">Numero di bagni<span class="text-danger">*</span></label>
                            <input type="number" 
                                id="bathroom" 
                                class="form-control @error('bathroom') border border-3 border-danger @enderror"
                                name="bathroom"
                                value="{{ old('bathroom') }}"
                                required
                            >
                        </div>

                        {{-- Square meters --}}
                        <div class="mb-3 col-md-1">
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

                    <div class="row">
                        {{-- Type --}}
                        <div class="mb-3 col-md-1">
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
                        <div class="mb-3 col-md-1">
                            <label for="availability" class="form-label @error('availability') text-danger @enderror">Disponibilità<span class="text-danger">*</span></label>                     
                            <select class="form-select @error('availability') border border-3 border-danger @enderror" name="availability" aria-label="Default select example" required>
                                <option value="0">No</option>
                                <option value="1">Si</option>
                            </select>
                        </div>

                        {{-- Visibility --}}
                        <div class="mb-3 col-md-1">
                            <label for="visibility" class="form-label @error('visibility') text-danger @enderror">Visibile<span class="text-danger">*</span></label>                     
                            <select class="form-select @error('visibility') border border-3 border-danger @enderror" name="visibility" aria-label="Default select example" required>
                                <option value="0">No</option>
                                <option value="1">Si</option>
                            </select>
                        </div>
                    </div>

                    {{-- Services --}}
                    <div class="mb-3">
                        <label class="form-label @error('services') text-danger @enderror">Servizi</label>
                        @foreach ($services as $service)
                            <div class="form-check">
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