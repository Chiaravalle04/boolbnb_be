@extends('layouts.admin')
@section('content')
<div class="container">
    <div class="title my-3">
        <h1>Messaggi</h1>
    </div>
    
    <table class="table">
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
      </table>
</div>
@endsection