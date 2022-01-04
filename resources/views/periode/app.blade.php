<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>\-.'.-/ | Periodes</title>
    <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">
    <link rel="stylesheet" href="/styles/periode.css">
    <link rel="stylesheet" href="/styles/welcome.css">
    <link href="https://fonts.googleapis.com/css?family=Cuprum&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
</head>
<body onload="scroll()">
    <div class="content"></div>
</body>
<script>
    function scroll() {
        var scroll = window.scrollY;
        if(scroll > 0) {
            document.getElementById("title").style.fontSize = '40px';
            document.getElementById("title").style.transition = '0.3s';
        } else {
            document.getElementById("title").style.fontSize = '43px';
            document.getElementById("title").style.transition = '0.3s';
        }
    }
</script>
</html>
