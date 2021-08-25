@extends('layouts.app')

@section ('content')

<div>
    <form method="POST" action="{{route ('updateArtist', $artist->id)}}">
        @csrf
        @method('PUT')
      
        <div>
            <label for="name">Nombre artista</label>
            <input type="text" name="name" value="{{$artist->name}}" required>
        </div>
        <div>
            <label for="profile_picture">Imagen del perfil</label>
            <input type="text" name="profile_picture" value="{{$artist->profile_picture}}" required>
        </div>
        <div>
            <label for="bio">Bio</label>
            <input type="text" name="bio" value="{{$artist->bio}}" required>
        </div>
        <div>
            <label for="website">Web</label>
            <input type="text" name="website" value="{{$artist->website}}" required>
        </div>
        <div>
            <label for="email">Email</label>
            <input type="text" name="email" value="{{$artist->email}}" required>
        </div>
        <div>
            <label for="instagram">Instagram</label>
            <input type="text" name="instagram" value="{{$artist->instagram}}" required>
        </div>
        <div>
            <label for="facebook">Facebook</label>
            <input type="text" name="facebook" value="{{$artist->facebook}}" required>
        </div>
        <div>
            <label for="twitter">Twitter</label>
            <input type="text" name="twitter" value="{{$artist->twitter}}" required>
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
            <button type="submit">Cancelar</button>
        </div>
    </form>
</div>
@endsection
