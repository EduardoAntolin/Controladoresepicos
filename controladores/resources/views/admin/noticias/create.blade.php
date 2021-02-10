<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Crear nueva noticia</title>
</head>
<body>
    <a href="{{ route("admin.noticias.index") }}">Volver a lista de noticias</a>
    <h1>Crear nueva noticia</h1>
    <form method="POST" action="{{ route("admin.noticias.store") }}">
        @csrf
        <label for="">Título:</label>
        <input name="titulo" type="text">
        <label for="">Fecha:</label>
        <input name="fecha" type="date">
        <label for="">Autor:</label>
        <input name="autor" type="text">
        <label for="">Cuerpo:</label>
        <textarea name="cuerpo" rows="5"></textarea>
        <label for="">Foto:</label>
        <input name="foto" type="text">
        <button type="submit">Agregar nueva noticia</button>
    </form>
</body>
</html>