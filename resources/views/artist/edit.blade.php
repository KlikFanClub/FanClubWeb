@extends('layouts.app')

@section('content')

    <x-header />

    <div class="form-container">
        <form method="POST" action="{{ route('updateArtist', $artist->id) }}" enctype="multipart/form-data">
            @csrf
            @method('PUT')

            <div class="form-group row">

                <h4>Formulario del artista</h4>
                <br>
                <h6>Edite a continuación los datos del artista</h6>
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
                            <label for="name">Nombre</label>
                        </div>
                        <div class="col-75">
                            <input type="text" name="name" value="{{ $artist->name }}" required>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-25">
                            <label for="profile_picture">Imagen</label>
                            <img  id="uploadPreview1" src="{{ asset('storage') . '/' . $artist->profile_picture }}" width="100">
                        </div>
                        <div class="col-75">
                            <input id="uploadImage1" type="file" name="profile_picture" value="{{ $artist->profile_picture }}"
                                accept="image/*"  onchange="previewImage(1);" >
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-25">
                            <label for="bio">Bio</label>
                        </div>
                        <div class="col-75">
                            <input type="text" name="bio" value="{{ $artist->bio }}" required>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-25">
                            <label for="website">Web</label>
                        </div>
                        <div class="col-75">
                            <input type="text" name="website" value="{{ $artist->website }}">
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-25">
                            <label for="email">Email</label>
                        </div>
                        <div class="col-75">
                            <input type="text" name="email" value="{{ $artist->email }}" required>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-25">
                            <label for="instagram">Instagram</label>
                        </div>
                        <div class="col-75">
                            <input type="text" name="instagram" value="{{ $artist->instagram }}">
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-25">
                            <label for="facebook">Facebook</label>
                        </div>
                        <div class="col-75">
                            <input type="text" name="facebook" value="{{ $artist->facebook }}">
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-25">
                            <label for="twitter">Twitter</label>
                        </div>
                        <div class="col-75">
                            <input type="text" name="twitter" value="{{ $artist->twitter }}">
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-25">
                            <label for="other_socials">Otras redes</label>
                        </div>
                        <div class="col-75">
                            <input type="text" name="other_socials" value="{{ $artist->other_socials }}">
                        </div>
                    </div>
                    @if ($artist->highlighted == 0)
                        <div class="row">
                            <div class="col-25">
                                <label for="highlighted">Destacados</label>
                            </div>
                            <div class="col-75">
                                <input type="checkbox" name="highlighted" value="1">
                            </div>
                        </div>
                    @else
                        <div class="row">
                            <div class="col-25">
                                <label for="highlighted">NO Destacados</label>
                            </div>
                            <div class="col-75">
                                <input type="checkbox" name="highlighted" value="0">
                            </div>
                        </div>
                    @endif
                    <div class="buttons">
                        <button class="btnCreate" type="submit">Crear</button>
                        <button class="btnCancel" type="button">
                            <a href="{{ route('artists') }}">Cancelar</a>
                        </button>
                    </div>
        </form>
    </div>

    <script>
        function previewImage(nb) {
            var reader = new FileReader();
            reader.readAsDataURL(document.getElementById('uploadImage' + nb).files[0]);
            reader.onload = function(e) {
                document.getElementById('uploadPreview' + nb).src = e.target.result;
            };
        }
    </script>

@endsection
