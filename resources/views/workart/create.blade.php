@extends('layouts.app')

@section ('content')

<div>
    <form method="POST" action="{{route ('storeWorkart')}}">
        @csrf
<div>
    <label for="artist_id">Artista</label>
    <select name="artist_id" >
        <option value="" selected disabled>Selecione un artista</option>
        @foreach ($artists as $artist)
            <option value="{{$artist->id}}">{{$artist->name}}</option>            
        @endforeach
    </select>
</div>
<div>
    <label for="title">Título</label>
    <input type="text" name="title" required>   
</div>
<div>
    <label for="imageworkart">ImagenWorkart</label>
    <input type="text" name="imageworkart" required>   
</div>
    <label for="edition">Edición</label>
    <input type="text" name="edition" required>   
</div>
<div>
    <label for="price">Precio</label>
    <input type="text" name="price" required>   
 </div>
 <div>
    <label for="technique">Técnica</label>
    <input type="text" name="technique" required>   
</div>
<div>
    <label for="theme">Tema</label>
    <input type="text" name="theme" required>   
</div>
<div>
    <label for="category">Categoria</label>
    <input type="text" name="category" required>   
</div>
<div>
    <label for="others">Otros</label>
    <input type="text" name="others" required>   
</div>
<div>
    <label for="caurosel">Carrusel</label>
    <input type="checkbox" name="caurosel" >   
    <label for="highlighted">Destacados</label>
    <input type="checkbox" name="highlighted" >   
</div>
<div>
    <button type="submit">Crear</button>
</div>
<div>
    <button type="submit">Cancelar</button>
</div>
    </form>
</div>

@endsection