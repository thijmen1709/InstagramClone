
@extends('periode.3.blog.layouts.app')

@yield('content')
    <div class="login-container">
    <form method="post" action="{{ route('login') }}">
        <h1>Aanmelden</h1>
        @csrf
        <label for="email">
            <p>E-mail adres</p>
            <input type="email" name="email" placeholder="E-mail adres" required>
        </label>
        @error('email')
        <span class="invalid-feedback" role="alert">
            <strong>{{ $message }}</strong>
        </span>
        @enderror
        <label for="password">
            <p>Wachtwoord</p>
            <input type="password" name="password" placeholder="Wachtwoord" required>
        </label>
        @error('password')
        <span class="invalid-feedback" role="alert">
            <strong>{{ $message }}</strong>
        </span>
        @enderror
        <input type="submit" value="Inloggen">
        <div class="form-group row mb-0">
            <div class="col-md-8 offset-md-4">
                @if (Route::has('password.request'))
                    <a class="btn btn-link" href="{{ route('password.request') }}">
                        {{ __('Forgot Your Password?') }}
                    </a>
                @endif
            </div>
        </div>
    </form>
{{--        <div id="app">--}}
{{--            <login></login>--}}
{{--        </div>--}}
    </div>

<script type="text/javascript" src="/js/app.js"></script>
