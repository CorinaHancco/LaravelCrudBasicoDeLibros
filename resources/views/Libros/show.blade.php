@extends('../layouts/plantilla')
@section('title','Detalle del Libro')
@section('content')
    <h1>Titulo del libro: {{$libro->titulo}}</h1>
    <h2>Autor: {{$libro->autor}}</h2>
    <p>Anio: {{$libro->anio}}</p>
    <p>Genero: {{$libro->genero}}</p>
    <p>Sinopsis: {{$libro->sinopsis}}</p>
    <a href="{{route('libros.edit',$libro->id)}}">Editar datos del libro</a>
    <br><br>
    <form action="{{route('libros.destroy',$libro->id)}}" method="post">
        @method('delete')
        @csrf
        <button type="submit">Eliminar Libro</button>
    </form>

    @endsection