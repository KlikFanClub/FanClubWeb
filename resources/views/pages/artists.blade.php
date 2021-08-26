@extends ('layouts.app')
@section ('content')

    <x-header />

@foreach ($artists as $artist)   
        <img src="{{ $artist->profile_picture }}">
        <h6>{{ $artist->name }}</h6>
     @if (Auth::user()->isAdmin)
        <div>
            <a href="{{route ('editArtist', ['id'=>$artist->id])}}">
                <i class="far fa-edit"></i>
            </a>
            <a href="{{route ('deleteArtist', ['id'=>$artist->id])}}">
                <i class="fas fa-trash-alt"></i>
            </a>
        </div>
    @else
    <img src="{{ $artist->profile_picture }}">
    <h6>{{ $artist->name }}</h6>
    @endif
@endforeach

@endsection
