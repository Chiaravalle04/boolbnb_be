@extends('layouts.app')

@section('content')
<div class="container mt-4">
    <div class="row-login row justify-content-center align-items-center">
        <div class="box-shadow border-radius-15 card col-5">

            <div class="card-body">
                <form method="POST" action="{{ route('register') }}">
                    @csrf

                    <div class="mb-2 row">
                        <div>
                            <label for="name" class="my-label col-md-4 col-form-label text-md-right">{{ __('Name') }}</label>
                        </div>

                        <div class="col">
                            <input id="name" type="text" class="my-input @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" autocomplete="name" autofocus>

                            @error('name')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                            @enderror
                        </div>
                    </div>

                    <div class="mb-2 row">
                        <div>
                            <label for="surname" class="my-label col-md-4 col-form-label text-md-right">{{ __('Surname') }}</label>
                        </div>
                        <div class="col">
                            <input id="surname" type="text" class="my-input @error('surname') is-invalid @enderror" name="surname" value="{{ old('surname') }}" autocomplete="surname" autofocus>

                            @error('surname')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                            @enderror
                        </div>
                    </div>

                    <div class="mb-2 row">
                        <div>
                            <label for="birth_date" class="my-label col-md-4 col-form-label text-md-right">{{ __('Birth date') }}</label>
                        </div>
                        <div class="col">
                            <input id="birth_date" type="date" class="my-input @error('birth_date') is-invalid @enderror" name="birth_date" value="{{ old('birth_date') }}" autocomplete="birth_date" autofocus>

                            @error('birth_date')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                            @enderror
                        </div>
                    </div>

                    <div class="mb-2 row">
                        <div>
                            <label for="email" class="my-label col-md-4 col-form-label text-md-right">{{ __('E-Mail Address *') }}</label>
                        </div>
                        <div class="col">
                            <input id="email" type="email" class="my-input @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email">

                            @error('email')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                            @enderror
                        </div>
                    </div>

                    <div class="mb-2 row">
                        <div>
                            <label for="password" class="my-label col-md-4 col-form-label text-md-right">{{ __('Password *') }}</label>
                        </div>
                        <div class="col">
                            <input id="password" type="password" class="my-input @error('password') is-invalid @enderror" name="password" required autocomplete="new-password">

                            @error('password')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                            @enderror
                        </div>
                    </div>

                    <div class="mb-2 row">
                        <div>
                            <label for="password-confirm" class="my-label col-md-4 col-form-label text-md-right">{{ __('Confirm Password *') }}</label>
                        </div>
                        <div class="col">
                            <input id="password-confirm" type="password" class="my-input" name="password_confirmation" required autocomplete="new-password">
                        </div>
                    </div>

                    <div class="mt-3 row mb-0">
                        <div class="col-md-6">
                            <button type="submit" class="btn-login text-center">
                                {{ __('Register') }}
                            </button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection
