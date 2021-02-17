@extends("layouts.admin")
@section("contenido_principal")
    <a href="{{ route("admin.noticias.index") }}">Volver a lista de noticias</a>
    @if(Session::has("exito"))
        <p style="color: #1a974e">{{Session::get("exito")}}</p>
    @endif
    @if(Session::has("error"))
        <p style="color: #971a1a">{{Session::get("error")}}</p>
    @endif
    <h1>Editar noticia {{ $noticia->id }}</h1>
    <form method="POST" action="{{ route("admin.noticias.update", $noticia->id) }}">
        @csrf
        @method('put')
        <label for="">Título:</label>
        <input name="titulo" type="text" value="{{$noticia->titulo}}">
        <label for="">Fecha:</label>
        <input name="fecha" type="date" value="{{$noticia->fecha}}">
        <label for="">Autor:</label>
        <input name="autor" type="text" value="{{$noticia->autor}}">
        <label for="">Cuerpo:</label>
        <textarea name="cuerpo" rows="5">{{ $noticia->cuerpo }}</textarea>
        <label for="">Foto:</label>
        <input name="foto" type="text" value="{{$noticia->foto}}">
        <button type="submit">Actualizar noticia</button>
    </form>
@endsection