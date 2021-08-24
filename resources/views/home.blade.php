@extends('layouts.app')

@section('content')

    <x-header />

  <section class="artworkSlider">
    <img class="artwork" src="{{ asset('img/home/slider/Narrativas_trans.png') }}" alt="">
    <img class="artwork" src="{{ asset('img/home/slider/ORUGA_A3.png') }}" alt="">
    <img class="artwork" src="{{ asset('img/home/slider/PrintsArtboard_1.png') }}" alt="">
  </section>

  <section class="highlights">
    <h2 class="highlightsTitle">Destacados</h2>
    <div class="artworkHighlights">
      <div class="artworkCard">
        <div>
          <img class="artwork" src="{{ asset('img/home/highlighted/PrintsArtboard_2.png') }}" alt="">
        </div>
        <span class="artistName">Daniela Ilustra</span>
        <a class="artworkDetailsBtn" href="">ver su obra</a>
      </div>

      <div class="artworkCard">
        <div>
          <img class="artwork" src="{{ asset('img/home/highlighted/Reflection.png') }}" alt="">
        </div>
        <span class="artistName">Daniela Ilustra</span>
        <a class="artworkDetailsBtn" href="">ver su obra</a>
      </div>

      <div class="artworkCard">
        <div>
          <img class="artwork" src="{{ asset('img/home/highlighted/Narrativas_trans_2.png') }}" alt="">
        </div>
        <span class="artistName">Daniela Ilustra</span>
        <a class="artworkDetailsBtn" href="">ver su obra</a>
      </div>
      <div class="artworkCard">
        <div>
          <img class="artwork" src="{{ asset('img/home/highlighted/ORUGA_A3_2.png') }}" alt="">
        </div>
        <span class="artistName">Daniela Ilustra</span>
        <a class="artworkDetailsBtn" href="">ver su obra</a>
      </div>

      <div class="artworkCard">
        <div>
          <img class="artwork" src="{{ asset('img/home/highlighted/Rebirth_of_venus.png') }}" alt="">
        </div>
        <span class="artistName">Daniela Ilustra</span>
        <a class="artworkDetailsBtn" href="">ver su obra</a>
      </div>
    </div>
  </section>
@endsection
