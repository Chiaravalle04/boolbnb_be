@extends('layouts.admin')
@section('content')
<div class="container">
    <div class="title my-3">
        <h1>Sponsorships</h1>
    </div>
    
    <table class="table">
        <thead>
          <tr>
            <th scope="col">id</th>
            <th scope="col">name</th>
            <th scope="col">price</th>
            <th scope="col">duration</th>
          </tr>
        </thead>
        
        <tbody>
            @foreach ($sponsorships as $sponsorship)
            <tr>
                <th scope="row">{{ $sponsorship->id }}</th>
                <td>{{ $sponsorship->name }}</td>
                <td>{{ $sponsorship->price }}</td>
                <td>{{ $sponsorship->duration }}h</td>
                {{-- @if ($message->apartment_id)
                    <td>{{ $message->apartment->title }}</td>
                @else
                    <td>NULL</td>
                @endif --}}
                {{-- <td>
                    <a href="{{ route('admin.messages.show', $message->id) }}" class="btn btn-outline-primary border">
                        visualizza messaggio
                    </a>
                </td> --}}
            </tr>
          @endforeach
        </tbody>
      </table>
</div>
@endsection