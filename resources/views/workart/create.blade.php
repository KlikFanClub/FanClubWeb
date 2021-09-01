@extends('layouts.app')

@section ('content')

    <x-header/>

<div class="form-container">

    <form method="POST" action="{{route ('storeWorkart')}}">
            @csrf

        <div class="form-group row">

            <h4>Formulario de la obra de arte</h4>
            <br>
            <h6>Introduzca a continuación los datos de la obra</h6>
            <br>

            <div class="form-box-container">
                <div class="row">
                    <div class="col-25">
                        <label for="artist_id">Artista</label>
                    </div>
                    <div class="col-75">
                        <select name="artist_id" >
                            <option value="" selected disabled>Seleccione un artista</option>
                            @foreach ($artists as $artist)
                                <option value="{{$artist->id}}">{{$artist->name}}</option>
                            @endforeach
                        </select>
                    </div>
                </div>

                <div class="row">
                    <div class="col-25">
                        <label for="title">Título</label>
                    </div>
                    <div class="col-75">
                        <input type="text" name="title" required>
                    </div>
                </div>

                <div class="row">
                    <div class="col-25">
                        <label for="imageworkart">Imagen</label>
                    </div>
                    <div class="col-75">
                        <input type="text" name="imageworkart" required>
                    </div>
                </div>


                <div class="row">
                    <div class="col-25">
                        <label for="edition">Edición</label>
                    </div>
                    <div class="col-75">
                        <input type="text" name="edition" required>
                    </div>
                </div>

                <div class="row">
                    <div class="col-25">
                        <label for="price">Precio</label>
                    </div>
                    <div class="col-75">
                        <input type="text" name="price" required>
                    </div>
                </div>

                <div class="row">
                    <div class="col-25">
                        <label for="technique">Técnica</label>
                    </div>
                    <div class="col-75">
                        <input type="text" name="technique" required>
                    </div>
                </div>

                <div class="row">
                    <div class="col-25">
                        <label for="theme">Tema</label>
                    </div>
                    <div class="col-75">
                        <input type="text" name="theme" required>
                    </div>
                </div>

                <div class="row">
                    <div class="col-25">
                        <label for="category">Categoría</label>
                    </div>
                    <div class="col-75">
                        <input type="text" name="category" required>
                    </div>
                </div>

                <div class="row">
                    <div class="col-25">
                        <label for="others">Otros</label>
                    </div>
                    <div class="col-75">
                        <input type="text" name="others" required>
                    </div>
                </div>

                <div class="row">
                    <div class="col-25">
                        <input type="checkbox" name="carousel">
                    </div>
                    <div class="col-75">
                        <label for="carousel">Carrusel</label>
                    </div>
                    <div class="col-25">
                        <input type="checkbox" name="highlighted">
                    </div>
                    <div class="col-75">
                        <label for="highlighted">Destacados</label>
                    </div>
                </div>

                <div class="buttons">
                    <button class="btnCreate" type="submit">Crear</button>                   
                </div>
            </div>
        </div>

</form>
<div class="buttons">
    <button class= "btnCancel" type="button">Cancelar
        <a href="{{ route('workarts') }}">
    </button>
</div>

@endsection
