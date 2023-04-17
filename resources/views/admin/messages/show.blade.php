@extends('layouts.admin')
@section('content')
<div class="container-fluid mt-4">
    <div class="row justify-content-center">
        <div class="col">
            <h1 class="mt-4 mb-3">
                Messaggio ricevuto da: {{ $message->name }}. 
            </h1>
            <hr>
            <h3>
                Email mittente: {{ $message->email }},
            </h3>
            <hr>
            <h4>
                Corpo del messaggio: {{ $message->message }}
            </h4>
        </div>
    </div>
</div>

<hr>
    <form
    action="{{ route('admin.messages.destroy', $message->id) }}"
    method="POST"
    class="d-inline"
    onsubmit="return confirm('Vuoi davvero eliminare questo messaggio? Non sarai più in grado di recuperarlo successivamente')"
    >
    @csrf
    @method('DELETE')
    <button class="btn btn-danger text-light">
        Elimina
    </button>
    </form>
</div>
@endsection