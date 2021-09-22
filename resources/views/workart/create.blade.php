@extends('layouts.app')
@section('content')
    <div class="form-container">
        <form method="POST" action="{{ route('storeWorkart') }}" enctype="multipart/form-data">
            @csrf
            <div class="form-group row">
                <h4>Formulario de la obra de arte</h4>
                <br>
                <h6>Introduzca a continuación los datos de la obra</h6>
                <br>
                <div class="form-box-container">
                    @if ($errors->any())
                        <div class="alert alert-danger">
                            <ul>
                                @foreach ($errors->all() as $error)
                                    <li>{{ $error }}</li>
                                @endforeach
                            </ul>
                        </div>
                    @endif
                    <div class="row">
                        <div class="col-25">
                            <label for="artist_id">Artista</label>
                        </div>
                        <div class="col-75">
                            <select name="artist_id">
                                <option value="" selected disabled>Seleccione un artista</option>
                                @foreach ($artists as $artist)
                                    <option value="{{ $artist->id }}">{{ $artist->name }}</option>
                                @endforeach
                            </select>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-25">
                            <label for="title">Título</label>
                        </div>
                        <div class="col-75">
                            <input type="text" name="title" value="{{ old('title') }}" required>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-25">
                            <label for="imageworkart">Imagen</label>
                        </div>
                        <div class="col-75">
                            <input type="file" name="imageworkart" accept="image/*" autocomplete="imageworkart" required>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-25">
                            <label for="edition">Edición</label>
                        </div>
                        <div class="col-75">
                            <select id="edition" name="edition" required>
                                <option value="" selected disabled>Seleccione un tipo</option>
                                <option value="Pieza unica">Pieza única</option>
                                <option value="Edición limitada">Edición limitada</option>
                                <option value="Edición abierta">Edición abierta</option>
                            </select>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-25">
                            <label for="price">Precio</label>
                        </div>
                        <div class="col-75">
                            <input type="text" name="price" value="{{ old('price') }}" required>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-25">
                            <label for="technique">Técnica</label>
                        </div>
                        <div class="col-75">
                            <select id="technique" name="technique" required>
                                <option value="" selected disabled>Seleccione un tipo</option>
                                <option value="Impresión giclée">Impresión giclée</option>
                                <option value="Impresión digital">Impresión digital</option>
                                <option value="Impresión offset">Impresión offset</option>
                                <option value="Serigrafía">Serigrafía</option>
                                <option value="Risografía">Risografía</option>
                                <option value="Grabado">Grabado</option>
                                <option value="Cianotipía">Cianotipía</option>
                                <option value="Pintura">Pintura</option>
                                <option value="Dibujo">Dibujo</option>
                                <option value="Collage">Collage</option>
                                <option value="Stencil">Stencil</option>
                                <option value="Otro">Otro</option>
                            </select>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-25">
                            <label for="theme">Tema</label>
                        </div>
                        <div class="col-75">
                            <select id="theme" name="theme" required>
                                <option value="" selected disabled>Seleccione un tipo</option>
                                <option value="Figurativo">Figurativo</option>
                                <option value="Abstracto">Abstracto</option>
                                <option value="Geométrico">Geométrico</option>
                                <option value="Flores y plantas">Flores y plantas</option>
                                <option value="Animales">Animales</option>
                                <option value="Objetos">Objetos</option>
                                <option value="Personas y retratos">Personas y retratos</option>
                                <option value="Paisajes y arquitectura">Paisajes y arquitectura</option>
                                <option value="Mapas y ciudades">Mapas y ciudades</option>
                                <option value="Escenas cotidianas">Escenas cotidianas</option>
                                <option value="Arte, música y películas">Arte, música y películas</option>
                                <option value="Kids">Kids</option>
                                <option value="Vintage">Vintage</option>
                                <option value="Urban art">Urban art</option>
                                <option value="Gráfico">Gráfico</option>
                                <option value="Tipografía y lettering">Escenas cotidianas</option>
                                <option value="Blanco y negro">Arte, música y películas</option>
                                <option value="Otro">Otro</option>
                            </select>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-25">
                            <label for="category">Tamaño</label>
                        </div>
                        <div class="col-75">
                            <select id="category" name="category" required>
                                <option value="" selected disabled>Seleccione un tamaño</option>
                                <option value="Pequeño">Pequeño</option>
                                <option value="Mediano">Mediano</option>
                                <option value="Grande">Grande</option>
                                <option value="Muy grande">Muy grande</option>
                            </select>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-25">
                            <label for="others">Otros</label>
                        </div>
                        <div class="col-75">
                            <select id="others"  name="others"  required>
                                <option value="" selected disabled>Seleccione uno</option>
                                <option value="Publicaciones">Publicaciones</option>
                                <option value="Cerámica">Cerámica</option>
                                <option value="Textil">Textil</option>
                                <option value="Papelería">Papelería</option>
                                <option value="Objetos">Objetos</option>
                                <option value="Complementos">Complementos</option>
                                <option value="Otro">Otro</option>
                            </select>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-25">
                            <input type="checkbox" name="carousel" value="1">
                        </div>
                        <div class="col-75">
                            <label for="carousel">Carrusel</label>
                        </div>
                    </div>
                    <div class="buttons">
                        <button class="btnCreate" type="submit">Crear</button>
                        <button class="btnCancel" type="button">
                            <a class="btnBlanco" href="{{ route('workarts') }}">Cancelar</a>
                        </button>
                    </div>
                </div>
            </div>
        </form>
        <div class="buttons">
        </div>
    @endsection
