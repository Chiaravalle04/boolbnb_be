@extends('layouts.admin')

@section('content')
    <div class="container-fluid mt-4">
        <div class="row justify-content-center mb-4">
            <div class="col">
                <h1>
                    Modifica Appartamento
                </h1>
            </div>
        </div>
        <div class="row mb-4">
            <div class="col">
                <form action="{{ route('admin.apartments.update', $apartment->id) }}" method="POST">
                    @csrf
                    @method('PUT')
                    <div class="mb-3">
                        <label for="title" class="form-label">Titolo<span class="text-danger">*</span></label>
                        <input 
                            type="text" 
                            class="form-control" 
                            id="title"
                            name="title"
                            required
                            maxlength="255"
                            value="{{ old('title', $apartment->title) }}" 
                            placeholder="Inserisci il titolo...">
                    </div>
                    <div class="mb-3">
                        <label for="description" class="form-label">Descrizione<span class="text-danger">*</span></label>
                        <textarea 
                            class="form-control" 
                            id="description"
                            name="description"
                            required
                            maxlength="2000"
                            placeholder="Inserisci la descrizione..."> {{ old('description', $apartment->description) }}
                        </textarea>
                    </div>
                    <div class="mb-3">
                        <label for="cover" class="form-label">Modifica immagine<span class="text-danger">*</span></label>
                        <input 
                            type="file" 
                            class="form-control" 
                            id="cover"
                            name="cover"
                            accept="image/*"
                            required
                            placeholder="Inserisci l'immagine...">
                    </div>
                    <div class="mb-3">
                        <label for="type" class="form-label">Tipologia<span class="text-danger">*</span></label>
                        <select 
                        class="form-select"
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
                    <div class="mb-3">
                        <label for="address" class="form-label">Indirizzo<span class="text-danger">*</span></label>
                        <input 
                            type="text" 
                            class="form-control" 
                            id="address"
                            name="address"
                            required
                            maxlength="255"
                            value="{{ old('address', $apartment->address) }}" 
                            placeholder="Inserisci l'indirizzo dell'appartamento'...">
                    </div>
                    <div class="mb-3">
                        <label for="price" class="form-label">Prezzo<span class="text-danger">*</span></label>
                        <input 
                            type="number" 
                            class="form-control"
                            step=0.01 
                            id="price"
                            name="price"
                            required
                            value="{{ old('price', $apartment->price) }}" 
                            placeholder="Inserisci il prezzo dell'appartamento'...">
                    </div>
                    <div class="mb-3">
                        <label for="availability" class="form-label">Disponibilità</label>                     
                        <select class="form-select" 
                        name="availability" 
                        aria-label="Default select example" 
                        required>
                            <option value="0">No</option>
                            <option value="1">Si</option>
                        </select>
                    </div>
                    <div class="mb-3">
                        <label for="room" class="form-label">Numero di stanze<span class="text-danger">*</span></label>
                        <input 
                            type="number" 
                            class="form-control"
                            id="room"
                            name="room"
                            required
                            value="{{ old('room', $apartment->room) }}" 
                            placeholder="Inserisci il numero di stanze'...">
                    </div>
                    <div class="mb-3">
                        <label for="bed" class="form-label">Numero di letti<span class="text-danger">*</span></label>
                        <input 
                            type="number" 
                            class="form-control"
                            id="bed"
                            name="bed"
                            required
                            value="{{ old('bed', $apartment->bed) }}" 
                            placeholder="Inserisci il numero di letti'...">
                    </div>
                    <div class="mb-3">
                        <label for="bathroom" class="form-label">Numero di bagni<span class="text-danger">*</span></label>
                        <input 
                            type="number" 
                            class="form-control"
                            id="bathroom"
                            name="bathroom"
                            required
                            value="{{ old('bathroom', $apartment->bathroom) }}" 
                            placeholder="Inserisci il numero di bagni'...">
                    </div>
                    <div class="mb-3">
                        <label for="square_meters" class="form-label">m²<span class="text-danger">*</span></label>
                        <input 
                            type="number" 
                            class="form-control"
                            id="square_meters"
                            name="square_meters"
                            required
                            value="{{ old('square_meters', $apartment->square_meters) }}" 
                            placeholder="Inserisci il numero di bagni'...">
                    </div>
                    <div>
                        <p>
                            N.B. i campi contrassegnati con <span class="text-danger">*</span> sono obbligatori.
                        </p>
                    </div>
                    <div class="btn-box mt-4">
                        <a href="{{ route('admin.apartments.index') }}" class="btn btn-warning text-light">
                            <i class="fa-solid fa-rotate-left"></i>
                        </a>
                        <button type="submit" class="btn btn-success">Modifica</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection