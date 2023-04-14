@extends('layouts.admin')

@section('content')
<div class="container-fluid mt-4">
    <div class="row justify-content-center">
        <div class="col-md">
            <div class="card">
                <div class="card-header">{{ __('Aggiungi appartamento') }}</div>

                <div class="card">
                    @if (session('status'))
                    <div class="alert alert-success" role="alert">
                        {{ session('status') }}
                    </div>
                    @endif
                </div>

                <form class="p-4" action="{{ route('admin.apartments.store') }}" method="POST" enctype="multipart/form-data">
                    @csrf

                    {{-- Title --}}
                    <div class="mb-3">
                        <label for="title" class="form-label">Titolo*</label>
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
                        <label for="description" class="form-label">Descrizione*</label>
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
                        <label for="cover" class="form-label">Inserisci cover*</label>                     
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
                        <label for="type" class="form-label">Tipo di struttura</label>                     
                        <select class="form-select" name="type" aria-label="Default select example" required>
                            <option value="Appartamento">Appartamento</option>
                            <option value="Stanza">Stanza</option>
                            <option value="Hotel">Hotel</option>
                            <option value="Villa">Villa</option>
                            <option value="Chalet">Chalet</option>
                        </select>
                    </div>

                    {{-- Address --}}
                    <div class="mb-3">
                        <label for="address" class="form-label">Indirizzo</label>
                        <input type="text" 
                            class="form-control" 
                            id="address" 
                            name="address"
                            value="{{ old('address') }}"
                            placeholder="Inserisci l'indirizzo..."
                            required
                            maxlength="255"
                        >
                    </div>

                    {{-- Price --}}
                    <div class="mb-3">
                        <label for="price" class="form-label">Prezzo</label>
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
                        <label for="availability" class="form-label">Disponibilità</label>                     
                        <select class="form-select" name="availability" aria-label="Default select example" required>
                            <option value="0">No</option>
                            <option value="1">Si</option>
                        </select>
                    </div>

                    {{-- Room --}}
                    <div class="mb-3">
                        <label for="room" class="form-label">Numero di stanze</label>
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
                        <label for="bed" class="form-label">Numero di letti</label>
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
                        <label for="bathroom" class="form-label">Numero di bagni</label>
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
                        <label for="square_meters" class="form-label">Metri quadrati</label>
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
                        <label for="visibility" class="form-label">Visibile</label>                     
                        <select class="form-select" name="visibility" aria-label="Default select example" required>
                            <option value="0">No</option>
                            <option value="1">Si</option>
                        </select>
                    </div>

                    <button class="btn btn-primary" type="submit">Aggiungi</button>
                </form>

            </div>
        </div>
    </div>
</div>
@endsection