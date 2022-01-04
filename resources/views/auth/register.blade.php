@extends('periode.3.blog.layouts.app')

@yield('content')
<div class="register-container">
    <form method="POST" action="{{ route('register') }}">
        <h1>Registreren</h1>
        @csrf
        <label for="name">
            <p>Gebruikersnaam</p>
            <input type="text" name="name" placeholder="Gebruikersnaam" required>
        </label>
        @error('name')
        <span class="invalid-feedback" role="alert">
            <strong>{{ $message }}</strong>
        </span>
        @enderror
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
        <label for="repeat-password">
            <p>Herhaal wachtwoord</p>
            <input id="password-confirm" type="password" placeholder="Herhaal wachtwoord" class="form-control" name="password_confirmation" required autocomplete="new-password">
        </label>
        @error('password_confirmation')
        <span class="invalid-feedback" role="alert">
            <strong>{{ $message }}</strong>
        </span>
        @enderror
        <input type="submit" value="Registreren">
    </form>
</div>
