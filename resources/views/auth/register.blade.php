@extends('layouts.app')

@section('content')
<div class="card-header">{{ __('Register') }}</div>

    <form method="POST" action="{{ route('register') }}">
        @csrf
        <div>
            <label for="name" class="">{{ __('Name') }}</label>

            <div class="col-md-6">
                <input id="name" type="text" class=" @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus>

                @error('name')
                <span class="" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
            </div>
        </div>

        <div>
            <label for="email">{{ __('E-Mail Address') }}</label>

            <div>
                <input id="email" type="email" class="@error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email">

                @error('email')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
            </div>
        </div>

        <div>
            <label for="password">{{ __('Password') }}</label>

            <div class="">
                <input id="password" type="password" class=" @error('password') is-invalid @enderror" name="password" required autocomplete="new-password">

                @error('password')
                    <span class="" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
            </div>
        </div>

        <div>
            <label for="password-confirm">{{ __('Confirm Password') }}</label>

            <div class="col-md-6">
                <input id="password-confirm" type="password" name="password_confirmation" required autocomplete="new-password">
            </div>
        </div>

        <div>
            <div>
                <button type="submit">
                    {{ __('Register') }}
                </button>
            </div>
        </div>
    </form>
</div>
@endsection
