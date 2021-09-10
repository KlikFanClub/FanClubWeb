@extends('layouts.app')

@section ('content')

<div>
    <form method="POST" action="{{route ('updateArtist', $artist->id)}}" enctype="multipart/form-data">
        @csrf
        @method('PUT')
      
        <div>
            <label for="name">Nombre artista</label>
            <input type="text" name="name" value="{{$artist->name}}" required>
        </div>
        <div>
            <label for="profile_picture">Imagen del perfil</label>
            <img src="{{asset('storage') . '/' . $artist->profile_picture}}" width="100">
            <input type="file" name="profile_picture" value="{{$artist->profile_picture}}" accept="image/*"   required>
        </div>
        <div>
            <label for="bio">Bio</label>
            <input type="text" name="bio" value="{{$artist->bio}}" required>
        </div>
        <div>
            <label for="website">Web</label>
            <input type="text" name="website" value="{{$artist->website}}" >
        </div>
        <div>
            <label for="email">Email</label>
            <input type="text" name="email" value="{{$artist->email}}" required>
        </div>
        <div>
            <label for="instagram">Instagram</label>
            <input type="text" name="instagram" value="{{$artist->instagram}}" >
        </div>
        <div>
            <label for="facebook">Facebook</label>
            <input type="text" name="facebook" value="{{$artist->facebook}}" >
        </div>
        <div>
            <label for="twitter">Twitter</label>
            <input type="text" name="twitter" value="{{$artist->twitter}}" >
        </div>
        <div>
            <label for="other_socials">Otras redes sociales</label>
            <input type="text"  name="other_socials" value="{{$artist->other_socials}}" >
        </div>
        <div>
            <label for="highlighted">Destacados</label>
            <input type="checkbox"  name="highlighted" value="{{$artist->highlighted}}" >
        </div>
        <div>
            <button type="submit">Editar</button>
        </div>
        <div>
            <button  class="btnCancel" type="button">
                <a href="{{ route('artists') }}">Cancelar</a>
            </button>
        </div>
    </form>
</div>
@endsection
