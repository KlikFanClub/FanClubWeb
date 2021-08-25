@extends ('layouts.app')
@section ('content')

    <x-header />

@foreach ($artists as $artist)
    <img src="{{ $artist->profile_picture }}">
    <h6>{{ $artist->name }}</h6>
    <div>
        <a href="{{route ('editArtist', ['id'=>$artist->id])}}">
            <i class="far fa-edit"></i>
        </a>
        <a href="{{route ('deleteArtist', ['id'=>$artist->id])}}">
            <i class="fas fa-trash-alt"></i>
        </a>
    </div>
@endforeach

@endsection
