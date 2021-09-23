@extends ('layouts.app')
@section('content')

  <div class="catalogue">
    <filter-artwork></filter-artwork>
    @if (Auth::user())
      @if (Auth::user()->isAdmin)
        <a href="{{ route('createWorkart') }}">
          <button type='submit'>Crear Nueva Obra</button>
        </a>
      @endif
    @endif
    <main>
      <artworks-component></artworks-component>
    </main>
  </div>
@endsection

@if (Auth::user() && Auth::user()->isAdmin)
  <script>
    window.authCheck = {!! json_encode($authCheck) !!};
  </script>
@endif
