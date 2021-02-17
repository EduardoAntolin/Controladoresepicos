@extends("layouts.admin")
@section("contenido_principal")
    <a href="{{ route("admin.noticias.index") }}">Volver a lista de noticias</a>
    <h1>Cinfirmar eliminacion de noticia: {{ $noticia->id }}</h1>
    <p>¿Estás seguro de eliminar la noticia {{$noticia->id }}</p>
    <form method="POST" action="{{ route("admin.noticias.destroy", $noticia->id) }}">
        @csrf
        @method("delete")
        <a href="{{ route("admin.noticias.index") }}"><button type="button">Cancelar</button></a>
        <button type="submint">Confirmar</button>
    </form>
@endsection