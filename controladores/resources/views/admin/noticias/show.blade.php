@extends("layouts.admin")
@section("contenido_principal")
    <a href="{{route("admin.noticias.index")}}">Volver a noticias</a>
    @if($noticia != NULL)
        <h1>{{ $noticia->titulo }}</h1>
        <p>{{ $noticia->fecha }}</p>
        <h4>{{ $noticia->autor }}</h4>
        @if($noticia->foto != NULL)
            <img src="{{ $noticia->foto }}">
        @endif
    <p>{{ $noticia->cuerpo }}</p>
    @else
        <h1>Lo sentimos no se encontró la noticia que buscas</h1>
    @endif
@endsection