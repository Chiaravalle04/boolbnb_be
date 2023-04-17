@extends('layouts.admin')
@section('content')
<div class="container">
    <div class="title my-3">
        <h1>Services</h1>

        <a href="{{ route('admin.services.create') }}" class="btn btn-primary my-3">
            New Service
        </a>
    </div>
    
    <table class="table">
        <thead>
          <tr>
            <th scope="col">ID</th>
            <th scope="col">Name</th>
          </tr>
        </thead>
        
        <tbody>
            @foreach ($services as $service)
            <tr>
                <th scope="row">{{ $service->id }}</th>
                <td>{{ $service->name }}</td>
                <td class="text-end">
                    <a href="{{ route('admin.services.edit', $service->id) }}" class="btn btn-warning">
                      Modifica
                    </a>
                    <form
                      action="{{ route('admin.services.destroy', $service->id) }}"
                      method="POST"
                      class="d-inline"
                      onsubmit="return confirm('Do you really want to delete this servizio? You won\'t be able to recover it later')"
                      >
                      @csrf
                      @method('DELETE')
                      <button class="btn btn-danger text-light">
                          Elimina
                      </button>
                      </form>
                </td>
            </tr>
          @endforeach
        </tbody>
      </table>
</div>
@endsection