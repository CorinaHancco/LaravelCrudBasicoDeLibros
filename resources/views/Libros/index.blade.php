@extends('../layouts/plantilla')
@section('title','Lista de libros')
@section('content')
    <h1>Listado de libros</h1>
    <ul>
        @foreach($libros as $libro)
        <li>{{$libro->titulo}} 
        <br>
        <a href="{{route('libros.show',$libro)}}">Detalles del libro</a>
        </li>


        <br>
        @endforeach
    </ul>
@endsection