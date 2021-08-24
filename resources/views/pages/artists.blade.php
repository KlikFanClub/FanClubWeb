@extends ('layouts.app')
@section ('content')

    <x-header />

@foreach ($artists as $artist)
    <img src="{{ $artist->profile_picture }}">
    <h6>{{ $artist->name }}</h6>
@endforeach

@endsection
