@extends ('layouts.app')
@section('content')
<main class="catalogue">
  @if (Auth::user())
    @if (Auth::user()->isAdmin)
      <div>
        <a href="{{ route('createArtist') }}">
          <button type='submit'>Crear Nuevo Artista</button>
        </a>
      </div>
    @endif
  @endif

  
    <artists-component></artists-component>
  </main>
  {{-- @foreach ($artists as $artist)
        <img src= <?php /* echo "storage/{$artist->profile_picture}" */
?> width="100">
        <h6>{{ $artist->name }}</h6>
        @if (Auth::user())
            @if (Auth::user()->isAdmin)


                <div>
                    <a href="{{ route('editArtist', ['id' => $artist->id]) }}">
                        <i class="far fa-edit"></i>
                    </a>
                    <a href="{{ route('deleteArtist', ['id' => $artist->id]) }}">
                        <i class="fas fa-trash-alt"></i>
                    </a>
                </div>
            @endif
        @endif
    @endforeach
--}}
@endsection 

  @if (Auth::user() && Auth::user()->isAdmin)
    <script>
      window.authCheck = {!! json_encode($authCheck) !!};
    </script>
  @endif
