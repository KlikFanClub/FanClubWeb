@extends ('layouts.app')
@section('content')
  <x-header />
  <div class="catalogue">
    <filter-artwork></filter-artwork>
    @if (Auth::user())
      @if (Auth::user()->isAdmin)
        <div>
          <a href="{{ route('createWorkart') }}">
            <button type='submit'>Crear Nueva Obra</button>
          </a>
        </div>
      @endif
    @endif

    <main>
      <artworks-component></artworks-component>
      {{-- @foreach ($workarts as $workart)
        <div class="artwork_card">
          <img class="artwork_img" src="{{ asset('storage') . '/' . $workart->imageworkart }}">
          <span class="artwork_title">{{ $workart->title }}</span>
          <span class="artwork_artistName"></span>
          <span class="artwork_date">10/12/2016</span>
          <span class="artwork_price">{{ $workart->price }}€</span>
          <div class="action_buttons">
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


          </div>
        </div>
      @endforeach 
    </main>
  </div>
  <x-footer />
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
