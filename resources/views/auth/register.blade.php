@extends('layouts.app')

@section('content')

<div class="wrapper fadeInDown">
    <div id="formContent" class="pt-4">
        <form method="POST" action="{{ route('register') }}">
            @csrf
                <input id="name" type="text" class="fadeIn first @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" placeholder="name"  autofocus>

                @error('name')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror

                <input id="username" type="text" class="fadeIn second @error('username') is-invalid @enderror" name="username" value="{{ old('username') }}" required autocomplete="username" placeholder="username" >

                @error('username')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror

                <input id="email" type="email" class="fadeIn third @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" placeholder="email" >

                @error('email')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
                <input id="password" type="password" class="fadeIn fourth @error('password') is-invalid @enderror" name="password" required autocomplete="new-password" placeholder="password" >

                @error('password')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
                <input id="password-confirm" type="password" class="fadeIn fifth" name="password_confirmation" required autocomplete="new-password" placeholder="confirm" >

                <input type="submit" class="fadeIn fifth " value="Register">
        </form>
        <hr>
        <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>

    </div>
</div>
@endsection

