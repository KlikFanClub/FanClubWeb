@extends('layouts.app')

@section ('content')

<div>
    <form method="POST" action="{{route ('updateWorkart', $workart->id)}}">
        @csrf
        @method('PUT')
        <div>
            @if ($errors->any())
            <div class="alert alert-danger">
                <ul>
                    @foreach ($errors->all() as $error)
                    <li>{{$error}}</li>
                    @endforeach
                </ul>
            </div>
        @endif
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
            <input type="text" name="title" value="{{$workart->title}}" required>
        </div>
        <div>
            <label for="imageworkart">ImagenWorkart</label>
            <input type="text" name="imageworkart" value="{{$workart->imageworkart}}" required>
        </div>
        <div>
            <label for="edition">Edición</label>
            <input type="text" name="edition" value="{{$workart->edition}}" required>
        </div>
        <div>
            <label for="price">Precio</label>
            <input type="text" name="price" value="{{$workart->price}}" required>
        </div>
        <div>
            <label for="technique">Técnica</label>
            <input type="text" name="technique" value="{{$workart->technique}}" required>
        </div>
        <div>
            <label for="theme">Tema</label>
            <input type="text" name="theme" value="{{$workart->theme}}" required>
        </div>
        <div>
            <label for="category">Categoria</label>
            <input type="text" name="category" value="{{$workart->category}}" required>
        </div>
        <div>
            <label for="others">Otros</label>
            <input type="text" name="others" value="{{$workart->others}}" >
        </div>
        <div>
            <label for="caurosel">Carrusel</label>
            <input type="checkbox"  name="caurosel" value="{{$workart->caurosel}}" >
        </div>
        <div>
            <label for="highlighted">Destacados</label>
            <input type="checkbox"  name="highlighted" value="{{$workart->highlighted}}" >
        </div>
        <div>
            <button type="submit">Editar</button>
        </div>
        <div>
            <button  class="btnCancel" type="button">
                <a href="{{ route('workarts') }}">Cancelar</a>
            </button> 
        </div>
    </form>
</div>
@endsection
