<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <h1>PROVA</h1>
    @foreach ($movies as $movie)
        <div class="card">
            <h2>Titolo: {{$movie['title']}}</h2>
            <h3>Titolo originale: {{$movie['original_title']}}</h3>
            <h4>Nazione: {{$movie['nationality']}}</h4>
            <h5>Data: {{$movie['date']}}</h5>
            <h6>Voto: {{$movie['vote']}}</h6>
        </div>
    @endforeach
</body>
</html>