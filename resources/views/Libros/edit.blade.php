@extends('../layouts/plantilla')
@section('title','Editar Libro')

@section('content')
<h2>Formulario para Editar libro</h2>
<form action="{{route('libros.update',$libro)}}" method="post">
    @csrf
    @method('put')
    <label for="">
        Titulo <br>
        <input type="text" name="titulo" value="{{old('titulo',$libro->titulo)}}">
    </label><br>
    @error('titulo')
        <p><strong>{{$message}}</strong></p>
    @enderror
    <label for="">
        Autor <br>
        <input type="text" name="autor" value="{{old('autor',$libro->autor)}}">
    </label><br>
    @error('autor')
        <p><strong>{{$message}}</strong></p>
    @enderror
    <label for="">
        Año <br>
        <input type="text" name="anio" value="{{old('anio',$libro->anio)}}">
    </label><br>
    @error('anio')
        <p><strong>{{$message}}</strong></p>
    @enderror

    <label for="">
        Genero <br>
        <input type="text" name="genero" value="{{old('genero',$libro->genero)}}">
    </label><br>
    @error('genero')
        <p><strong>{{$message}}</strong></p>
    @enderror

    <label for="">
        Sinopsis <br>
        <input type="text" name="sinopsis" value="{{old('sinopsis',$libro->sinopsis)}}">
    </label><br>
    @error('sinopsis')
        <p><strong>{{$message}}</strong></p>
    @enderror
    
    <br>
    <button tipe="submit"> Editar </button>
</form>
@endsection