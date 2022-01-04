<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>\-.'.-/</title>
    <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">
    <link rel="stylesheet" href="/styles/welcome.css">
    @auth
        <meta name="api_token" content="{{ Auth::User()->api_token }}">
    @else
        <meta name="api_token" content="0QOt1cXP0XvYlmbgc50d7CZ4q8sZd9ZKTccAaoAaLRaFkAdNZp3eX7KTRJ7OaqSibM1v4BesNsaEFmdz">
    @endauth
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
</head>
<body>
    <div id="app">
        <router-view></router-view>
        <sidebar></sidebar>
    </div>
    <script src="{{ asset('js/app.js') }}"></script>
    <script src="{{ asset('js/script.js') }}"></script>
</body>
</html>
