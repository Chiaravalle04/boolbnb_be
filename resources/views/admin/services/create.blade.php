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

                <form class="p-4" action="{{ route('admin.services.store') }}" method="POST" enctype="multipart/form-data">
                    @csrf

                    {{-- Title --}}
                    <div class="mb-3">
                        <label for="name" class="form-label">Titolo*</label>
                        <input type="text" 
                            class="form-control" 
                            id="name" 
                            name="name"
                            value="{{ old('name') }}"
                            placeholder="Inserisci il servizio..."
                            required
                            maxlength="50"
                        >
                    </div>

                    <button class="btn btn-primary" type="submit">Aggiungi</button>
                </form>

            </div>
        </div>
    </div>
</div>
@endsection