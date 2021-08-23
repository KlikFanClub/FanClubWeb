@extends('layouts.app')

@section ('content')



<div>
    <form action="">

         <div>
            <label for="artist_id">Artista</label>
            <input type="text" name="artist_id" value="{{$workart->artistname}}" required>
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
            <input type="text" name="others" value="{{$workart->others}}" required>
        </div>
        <div>
            <label for="caurosel">Carrusel</label>
            <input type="checkbox"  name="caurosel" value="{{$workart->caurosel}}" required>
        </div>
        <div>
            <label for="highlighted">Destacados</label>
            <input type="checkbox"  name="highlighted" value="{{$workart->highlighted}}" required>
        </div>  
        <div>
            <button type="submit">Editar</button>
        </div>
        <div>
            <button type="submit">Cancelar</button>
        </div>     

      
    </form>
</div>
@endsection