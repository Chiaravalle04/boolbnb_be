@extends('layouts.app')

@section('content')
<div class="container-login container mt-4">
    <div class="row-login row justify-content-center align-items-center">
        <div class="box-shadow border-radius-15 card col-4">

            <div class="card-body">

                <div class="container-img-login text-center">

                    <img class="my-img" src="https://upload.wikimedia.org/wikipedia/commons/thumb/6/69/Airbnb_Logo_B%C3%A9lo.svg/1200px-Airbnb_Logo_B%C3%A9lo.svg.png" alt="">

                </div>

                <form method="POST" action="{{ route('login') }}">
                    @csrf

                    <div class="mb-4 row">
                        <div>
                            <label for="email" class="my-label col-md-4 col-form-label text-md-right">{{ __('E-Mail') }}</label>
                        </div>
                        <div class="col">
                            <input id="email" type="email" class="my-input @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>

                            @error('email')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                            @enderror
                        </div>
                    </div>

                    <div class="mb-4 row">
                        <div>
                            <label for="password" class="my-label col-md-4 col-form-label text-md-right">{{ __('Password') }}</label>
                        </div>
                        <div class="col">
                            <input id="password" type="password" class="my-input @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">

                            @error('password')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                            @enderror
                        </div>
                    </div>

                    <div class="mb-4 row">
                        <div class="col">
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>

                                <label class="my-label form-check-label" for="remember">
                                    {{ __('Ricordami') }}
                                </label>
                            </div>
                        </div>
                    </div>

                    <div class="mb-4 row mb-0">
                        <div class="col">
                            <button type="submit" class="btn-login text-center">
                                {{ __('Login') }}
                            </button>

                            @if (Route::has('password.request'))
                            <a class="btn btn-link" href="{{ route('password.request') }}">
                                {{ __('Hai dimenticato la Password?') }}
                            </a>
                            @endif
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection
