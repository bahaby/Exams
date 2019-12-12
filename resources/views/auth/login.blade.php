@extends('layouts.app')

@section('content')

<div class="wrapper fadeInDown">
      <div id="formContent" class>
          <div class="fadeIn first">
          <img src="img/user.svg" class = "p-5" id="icon" alt="User Icon" />
          </div>
      <form method="POST" action="{{ route('login') }}">
        @csrf

        <input id="username" type="text" class="fadeIn second @error('username') is-invalid @enderror" name="username" value="{{ old('username') }}" placeholder="username" required autocomplete="username" autofocus>

        @error('username')
            <span class="invalid-feedback" role="alert">
                <strong>{{ $message }}</strong>
            </span>
        @enderror
                <input id="password" type="password" class="fadeIn third @error('password') is-invalid @enderror" name="password" placeholder="password" required autocomplete="current-password">

                @error('password')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror

                <input type="submit" class="fadeIn fourth" value="Log In">
    </form>
    <hr>
    <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>


      </div>
    </div>
@endsection
