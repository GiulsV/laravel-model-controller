<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="/css/app.css">
    <title>Home</title>
</head>
<body> 
    <header>
        <h1>Film</h1>   
    </header>   

    <main>          
        @foreach($movies as $movie)
        <article>
            <p>Titolo: {{ $movie['title'] }}</p> 
            <p>Titolo originale: {{ $movie['original_title'] }}</p>
            <p>Nazionalità: {{ $movie['nationality'] }}</p>
            <p>Anno: {{ $movie['date'] }}</p>
            <p>Voto: {{ $movie['vote'] }}</p>
        </article>
        @endforeach
    </main> 
    
</body>
</html>