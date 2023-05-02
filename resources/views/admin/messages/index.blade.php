@extends('layouts.admin')
@section('content')
<div class="index_container_messages mt-4">

    @if (count($messages) > 0)

    <div class="chat_list">

        @foreach ($messages as $message)
        <div class="card_container_message">
            <a href="{{ route('admin.messages.show', $message->id) }}">
                <h5>{{ $message->name }}</h5>
                <p><b>Appartamento:</b> {{ $message->apartment->title }}</p>
            </a>
        </div>
        @endforeach

    </div>

    <div class="text_message">

        @yield('content_message')

    </div>

    @else 

    <div class="nothing_messages">

        <h3>I tuoi messaggi appariranno qui</h3>

    </div>

    @endif

</div>
@endsection