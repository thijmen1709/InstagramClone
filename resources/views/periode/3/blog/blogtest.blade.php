<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Blog</title>
</head>
<body>

<div class="content">
    <div class="post">
        @foreach($posts as $post)
            <tr>
                <th>Titel: {{ $post->title }}</th>
                <br>
                <th>Auteur: {{ $post->auteur}}</th>
                <br>
                <th>Tekst: {{ $post->description }}</th>
                <br>
                <th>Gemaakt Op: {{ $post->created_at }}</th>
            </tr>
    </div>
</div>
        @endforeach
                <form action="/periode/3/blog/comment">
                    <input type="text" name="gebruikersnaam" placeholder="gebruikersnaam">
                    <input type="text" name="comment" placeholder="comment">
                    <input type="submit" value="Stuur">
                </form>

            @foreach($reacties as $reactie)
                <tr>
                    <th>Naam: {{ $reactie->gebruikersnaam }}</th>
                    <br>
                    <th>Comment: {{ $reactie->comment}}</th>
                </tr>
                @endforeach


</body>
</html>
