@extends('layouts.admin')
@section('content')
<div class="container">
    <div class="title my-3">
        <h1>Messaggi</h1>
    </div>

    @foreach ($messages as $message)
    <div class="card mb-3">
        <div class="card-body">
            <h4>{{ $message->name }}</h4>
            <h6>{{ $message->email }}</h6>
            @if ($message->apartment_id)
            <p><b>Appartamento:</b> {{ $message->apartment->title }}</p>
            @else
                <p>Nessun Appartamento</p>
            @endif
            <a href="{{ route('admin.messages.show', $message->id) }}" class="btn btn-primary">
                Visualizza messaggio
            </a>
        </div>
    </div>
    @endforeach
    
    {{-- <table class="table">
        <thead>
          <tr>
            <th scope="col">ID</th>
            <th scope="col">Name</th>
            <th scope="col">Email</th>
            <th scope="col">Apartment Name</th>
          </tr>
        </thead>
        
        <tbody>
            @foreach ($messages as $message)
            <tr>
                <th scope="row">{{ $message->id }}</th>
                <td>{{ $message->name }}</td>
                <td>{{ $message->email }}</td>
                @if ($message->apartment_id)
                    <td>{{ $message->apartment->title }}</td>
                @else
                    <td>NULL</td>
                @endif
                <td>
                    <a href="{{ route('admin.messages.show', $message->id) }}" class="btn btn-primary">
                        Visualizza messaggio
                    </a>
                </td>
            </tr>
          @endforeach
        </tbody>
      </table> --}}
</div>
@endsection