<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Noticias</title>
<body>
        <center><h1>noticias</h1></center>
        @foreach($noticias as $noticia)
            <h3>{{ $noticia["titulo"] }}</h3>
            <p>{{$noticia["fecha"] }}</p>
        
        @endforeach
</body>
</html>