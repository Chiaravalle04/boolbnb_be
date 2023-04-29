@extends('admin.messages.index')
@section('content_message')
<div class="show_container_message">

    <h4>{{$message->name}}</h4>

    <h6>{{ $message->email }}</h6>

    <h6><b>Appartamento di riferimento:</b> {{ $message->apartment->title }}</h6>

    <p class="my-4">
        {{ $message->message }}
    </p>

    <form
        action="{{ route('admin.messages.destroy', $message->id) }}"
        method="POST"
        onsubmit="return confirm('Vuoi davvero eliminare questo messaggio? Non sarai più in grado di recuperarlo successivamente')"
        >
        @csrf
        @method('DELETE')
        <button class="delete_button">
            Elimina
        </button>
    </form>

</div>
{{-- <div class="container-fluid mt-4">
    <div class="row justify-content-center">
        <div class="col-md">
            <div class="card">
                <div class="card-header"><b>{{$message->name}}</b></div>
                
                <p class="p-3 m-0">
                    <b>Appartamento di riferimento:</b> {{ $message->apartment->title }}
                </p>
                <p class="p-3 m-0">
                    {{ $message->message }}
                </p>
            </div>
        </div>
    </div>
</div>

<form
    action="{{ route('admin.messages.destroy', $message->id) }}"
    method="POST"
    onsubmit="return confirm('Vuoi davvero eliminare questo messaggio? Non sarai più in grado di recuperarlo successivamente')"
    >
    @csrf
    @method('DELETE')
    <button class="btn btn-danger text-light ms-3 mt-2">
        Elimina
    </button>
</form> --}}

@endsection