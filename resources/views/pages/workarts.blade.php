@extends ('layouts.app')
@section('content')

  <x-header />

  <div class="catalogue">
    <a role="button" tabindex="0" class="mobile_filterBtn">
      <span class="iconify" data-icon="cil:filter"></span>
    </a>
    
    <aside class="filter">
      <span class="filter_category">TODOS LOS PRODUCTOS</span>
      <span class="filter_category">EDICIÓN</span>
      <span class="filter_category">TAMAÑO</span>
      <span class="filter_category">PRECIO</span>
      <span class="filter_category">TÉCNICA</span>
      <span class="filter_category">TEMAS</span>
      <span class="filter_category">OTROS</span>
      <span class="filter_category">ARTISTAS</span>
    </aside>

    <main class="catalogue_artworks">
      @foreach ($workarts as $workart)
        <div class="artwork_card">
          <img class="artwork_img" src="{{ $workart->imageworkart }}" alt="">
          <span class="artwork_title">{{-- {{ $workart->title . ' - ' . $workart->created_at }} --}}Nombre de la obra</span>
          <span class="artwork_artistName">{{-- {{ $workart->artistname }} --}}Nombre del artista</span>
          <span class="artwork_date">10/12/2016</span>
          <span class="artwork_price">{{-- {{ $workart->price }} --}}123€</span>
          <div class="action_buttons">
            <a href="{{ route('editWorkart', ['id' => $workart->id]) }}">
              <i class="far fa-edit"></i>
            </a>
            <a href="">
              <i class="fas fa-trash-alt"></i>
            </a>
          </div>
        </div>
      @endforeach
    </main>
  </div>
@endsection
