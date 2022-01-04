<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    @auth
        <meta name="api_token" content="{{ Auth::User()->api_token }}">
    @else
        <meta name="api_token" content="0QOt1cXP0XvYlmbgc50d7CZ4q8sZd9ZKTccAaoAaLRaFkAdNZp3eX7KTRJ7OaqSibM1v4BesNsaEFmdz">
    @endauth
    <link rel="stylesheet" type="text/css" href="/styles/blog/profile.css"/>
    <script src="{{ asset('/js/app.js') }}"></script>
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons"
          rel="stylesheet">
    <title>Blog | Profile | {{ Auth::user()->name }}</title>
</head>
<body>
    <div class="content">

    </div>
</body>
</html>
