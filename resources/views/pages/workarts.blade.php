@extends ('layouts.app')
@section('content')

    <x-header />

    <div class="catalogue">

      <filter-artwork></filter-artwork>

    @if (Auth::user())
    @if (Auth::user()->isAdmin)
    <div>
        <a href="{{ route('createWorkart') }}">
            <button type='submit'>Crear Nueva Obra!</button>
        </a>
    </div>
    @endif
    @endif

        <main class="catalogue_artworks">
            <artworks-component></artworks-component>
        </main>
    </div>
@endsection
{{-- <div class="action_buttons">
  @if (Auth::user())
      @if (Auth::user()->isAdmin)

          <a href="{{ route('editWorkart', ['id' => $workart->id]) }}">
              <i class="far fa-edit"></i>
          </a>
          <a href="{{ route('deleteWorkart', ['id' => $workart->id]) }}">
              <i class="fas fa-trash-alt"></i>
          </a>

      @endif
  @endif


</div> --}}