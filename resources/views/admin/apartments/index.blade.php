@extends('layouts.admin')
@section('content')
    <div class="container">
        <div class="title my-3">
            <h1>Apartments</h1>

            <a href="{{ route('admin.apartments.create') }}" class="btn btn-primary my-3">
                New Apartment
            </a>
        </div>
        
        <table class="table">
            <thead>
              <tr>
                <th scope="col">id</th>
                <th scope="col">title</th>
                <th scope="col">address</th>
                <th scope="col">room</th>
                <th scope="col">price</th>
              </tr>
            </thead>
            
            <tbody>
                @foreach ($apartments as $apartment)
                <tr>
                    <th scope="row">{{ $apartment->id }}</th>
                    <td>{{ $apartment->title }}</td>
                    <td>{{ $apartment->address }}</td>
                    <td>{{ $apartment->room }}</td>
                    <td>{{ $apartment->price }}</td>
                    <td>
                        <a href="{{ route('admin.apartments.show', $apartment->id) }}" class="btn btn-outline-primary border">
                            visualizza
                        </a>
                    </td>
                </tr>
              @endforeach
            </tbody>
          </table>
    </div>
@endsection