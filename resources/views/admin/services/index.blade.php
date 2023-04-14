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
            <th scope="col">id</th>
            <th scope="col">name</th>
          </tr>
        </thead>
        
        <tbody>
            @foreach ($services as $service)
            <tr>
                <th scope="row">{{ $service->id }}</th>
                <td>{{ $service->name }}</td>
                <td>
                    <a href="{{ route('admin.services.show', $service->id) }}" class="btn btn-outline-primary border">
                        visualizza
                    </a>
                </td>
            </tr>
          @endforeach
        </tbody>
      </table>
</div>
@endsection