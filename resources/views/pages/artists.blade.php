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
@endsection

@if (Auth::user() && Auth::user()->isAdmin)
  <script>
    window.authCheck = {!! json_encode($authCheck) !!};
  </script>
@endif
