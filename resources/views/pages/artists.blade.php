@extends ('layouts.app')
@section ('content')

    <x-header />

@foreach ($artists as $artist)
  <h6>{{ $artist->name }}</h6>
@endforeach

@endsection
