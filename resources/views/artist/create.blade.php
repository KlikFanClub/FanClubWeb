@extends('layouts.app')

@section ('content')

    <x-header />

    <div class="form-container">

        <form method="POST" action="{{route ('storeArtist')}}" enctype="multipart/form-data">
            @csrf

            <div class="form-group row">

                <h4>Formulario del artista</h4>
                <br>
                <h6>Introduzca a continuación los datos del artista</h6>
                <br>

                <div class="form-box-container">
                    @if ($errors->any())
                        <div class="alert alert-danger">
                            <ul>
                                @foreach ($errors->all() as $error)
                                <li>{{$error}}</li>
                                @endforeach
                            </ul>
                        </div>
                    @endif

                    <div class="row">
                        <div class="col-25">
                            <label for="name">Nombre</label>
                        </div>
                        <div class="col-75">
                            <input type="text" name="name" value="{{old('name')}}" required>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-25">
                            <label for="profile_picture">Imagen</label>
                        </div>
                        <div class="col-75">
                            <input type="file" name="profile_picture" value="{{old('profile_picture')}}" accept="image/*" required>
                        </div>
                    </div>


                    <div class="row">
                        <div class="col-25">
                            <label for="bio">Bio</label>
                        </div>
                        <div class="col-75">
                            <input type="text" name="bio" value="{{old('bio')}}" required>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-25">
                            <label for="website">Web</label>
                        </div>
                        <div class="col-75">
                            <input type="text" name="website" value="{{old('website')}}">
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-25">
                            <label for="email">Email</label>
                        </div>
                        <div class="col-75">
                            <input type="text" name="email" value="{{old('email')}}" required>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-25">
                            <label for="instagram">Instagram</label>
                        </div>
                        <div class="col-75">
                            <input type="text" name="instagram" value="{{old('instagram')}}">
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-25">
                            <label for="facebook">Facebook</label>
                        </div>
                        <div class="col-75">
                            <input type="text" name="facebook" value="{{old('facebook')}}">
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-25">
                            <label for="twitter">Twitter</label>
                        </div>
                        <div class="col-75">
                            <input type="text" name="twitter" value="{{old('twitter')}}">
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-25">
                            <label for="other_socials">Otras redes</label>
                        </div>
                        <div class="col-75">
                            <input type="text" name="other_socials" value="{{old('other_socials')}}" >
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-25">
                            <input type="checkbox" name="highlighted">
                        </div>
                        <div class="col-75">
                            <label for="highlighted">Destacados</label>
                        </div>
                    </div>

                    <div class="buttons">
                        <button class="btnCreate" type="submit">Crear</button>
                        <button class="btnCancel" type="button">
                            <a href="{{ route('artists') }}">Cancelar</a>
                        </button>
                    </div>
                </div>
            </div>

        </form>
    </div>

@endsection
