@extends('layouts.admin')
@section('content')

<!-- servizi -->

<h1 class="mt-4 mb-3">
    {{ $service->id }}. 
    {{ $service->name }}
</h1>

<div class="container-buttons d-flex">
    <!--modifica-->
    <a href="{{ route('admin.services.edit', $service->id) }}" class="btn btn-warning text-light">
        Modifica
    </a>

    @foreach ($services as $service)
    @if ($service->name)
        <h3>{{ $service->name }}</h3>
    @else
        <h3>Nessun servizio</h3>
    @endif
    @endforeach

    <!--delete-->
<hr>
    <form
    action="{{ route('admin.services.destroy', $service->id) }}"
    method="POST"
    class="d-inline"
    onsubmit="return confirm('Do you really want to delete this servizio? You won\'t be able to recover it later')"
    >
    @csrf
    @method('DELETE')
    <button class="btn btn-danger text-light">
        elimina
    </button>
    </form>
</div>
@endsection