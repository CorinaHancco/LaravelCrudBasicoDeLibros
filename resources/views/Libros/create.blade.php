@extends('../layouts/plantilla')
@section('title','Crear Libro')

@section('content')
<h2>Formulario para Agregar a un Registro</h2>
<form action="{{route('libros.store')}}" method="post">
    @csrf
    <label for="">
        Titulo <br>
        <input type="text" name="titulo" value="{{old('titulo')}}">
    </label><br>
    @error('titulo')
        <p><strong>{{$message}}</strong></p>
    @enderror
    <label for="">
        Autor <br>
        <input type="text" name="autor" value="{{old('autor')}}">
    </label><br>
    @error('autor')
        <p><strong>{{$message}}</strong></p>
    @enderror
    <label for="">
        Año <br>
        <input type="text" name="anio" value="{{old('anio')}}">
    </label><br>
    @error('anio')
        <p><strong>{{$message}}</strong></p>
    @enderror

    <label for="">
        Genero <br>
        <input type="text" name="genero" value="{{old('genero')}}">
    </label><br>
    @error('genero')
        <p><strong>{{$message}}</strong></p>
    @enderror

    <label for="">
        Sinopsis <br>
        <input type="text" name="sinopsis" value="{{old('sinopsis')}}">
    </label><br>
    @error('sinopsis')
        <p><strong>{{$message}}</strong></p>
    @enderror
    
    <br>
    <button tipe="submit"> Enviar</button>
</form>
@endsection