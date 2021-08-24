@extends('layouts.app')

@section ('content')

<div>
    <form method="POST" action="{{route ('storeArtist')}}">
        @csrf
    <div>
        <label for="name">Nombre</label>
        <input type="text" name="name" required>
    </div>
    <div>
        <label for="profile_picture">Imagen de perfil</label>
        <input type="text" name="profile_picture" required>
    </div>
    <div>
        <label for="bio">Bio</label>
        <input type="text" name="bio" required>
    </div>
    <div>
        <label for="website">Web</label>
        <input type="text" name="website">
    </div>
    <div>
        <label for="email">Email</label>
        <input type="text" name="email" required>
    </div>
    <div>
        <label for="instagram">Instagram</label>
        <input type="text" name="instagram">
    </div>
    <div>
        <label for="facebook">Facebook</label>
        <input type="text" name="facebook">
    </div>
    <div>
        <label for="twitter">Twitter</label>
        <input type="text" name="twitter">
    </div>
    <div>
        <label for="other_socials">Otras redes sociales</label>
        <input type="text" name="other_socials">
    </div>
    <div>
        <button type="submit">Crear</button>
    </div>
    <div>
        <button type="submit">Cancelar</button>
    </div>
    </form>
</div>
