<!doctype html>
<html lang="en">
<head>
    <script type="text/javascript" src="/js/app.js"></script>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Blog | Login en Register systeem</title>
    <link rel="stylesheet" href="/styles/logister.css">
</head>
<body onscroll="nav();scroll()">
<div class="header" id="header">
    <div class="title-name">
        <h1>Blog</h1>
    </div>
    <div class="links">
        @auth
            <a id="username" href="/periode/3/blog/profile">{{ Auth::User()->name }}</a>
        @else
            <a href="/login">Aanmelden</a>
            <a href="/register">Registreren</a>
        @endauth
    </div>
</div>
<div id="content">
    @yield('content')
</div>
</body>
<script>
    function nav() {
        var scroll = window.scrollY;
        var nav = document.getElementById("header");
        if (scroll > 1) {
            nav.style.boxShadow = '0px 3px 20px -6px rgba(0, 0, 0, 0.3)';
        } else {
            nav.style.boxShadow = '0px 0px 0px 0px white';
        }
    }

</script>
</html>
