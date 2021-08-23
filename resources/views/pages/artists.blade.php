@extends ('layouts.app')
@section ('content')

@foreach ($artists as $artist)
  <h6>{{ $artist->name }}</h6>
@endforeach

@endsection