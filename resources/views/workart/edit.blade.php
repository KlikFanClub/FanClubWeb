@extends('layouts.app')
@section('content')
    <div class="form-container">
        <form method="POST" action="{{ route('updateWorkart', $workart->id) }}" enctype="multipart/form-data">
            @csrf
            @method('PUT')
            <div class="form-group row">
                <h4>Formulario de la obra de arte</h4>
                <br>
                <h6>Edite a continuación los datos de la obra</h6>
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
                                <option value="" selected disabled>Selecione un artista</option>
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
                            <input type="text" name="title" value="{{ $workart->title }}" required>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-25">
                            <label for="imageworkart">Imagen</label>
                            <img src="{{ asset('storage') . '/' . $workart->imageworkart }}" width="100">
                        </div>
                        <div class="col-75">
                            <input type="file" name="imageworkart" accept="image/*" required>
                            {{-- {{$workart->imageworkart}} --}}
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-25">
                            <label for="edition">Edición</label>
                        </div>
                        <div class="col-75">
                            <input type="text" name="edition" value="{{ $workart->edition }}" required>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-25">
                            <label for="price">Precio</label>
                        </div>
                        <div class="col-75">
                            <input type="text" name="price" value="{{ $workart->price }}" required>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-25">
                            <label for="technique">Técnica</label>
                        </div>
                        <div class="col-75">
                            <input type="text" name="technique" value="{{ $workart->technique }}" required>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-25">
                            <label for="theme">Tema</label>
                        </div>
                        <div class="col-75">
                            <input type="text" name="theme" value="{{ $workart->theme }}" required>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-25">
                            <label for="category">Categoria</label>
                        </div>
                        <div class="col-75">
                            <input type="text" name="category" value="{{ $workart->category }}" required>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-25">
                            <label for="others">Otros</label>
                        </div>
                        <div class="col-75">
                            <input type="text" name="others" value="{{ $workart->others }}">
                        </div>
                    </div>
                    @if ($workart->carousel == 0)
                        <div class="row">
                            <div class="col-25">
                                <label for="carousel">Carrusel</label>
                            </div>
                            <div class="col-75">
                                <input type="checkbox" name="carousel" value="1">
                            </div>
                        </div>
                    @else
                        <div class="row">
                            <div class="col-25">
                                <label for="carousel">NO Carrusel</label>
                            </div>
                            <div class="col-75">
                                <input type="checkbox" name="carousel" value="0">
                            </div>
                        </div>
                    @endif
                    <div class="buttons">
                        <button class="btnCreate" type="submit">Editar</button>
                        <button class="btnCancel" type="button">
                            <a class="quitColor" href="{{ route('workarts') }}">Cancelar</a>
                        </button>
                    </div>
                </div>
        </form>
    </div>
@endsection
