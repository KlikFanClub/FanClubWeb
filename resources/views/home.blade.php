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
<<<<<<< HEAD
  
=======

>>>>>>> f7b2a7e0e928915860acca863b20586e39287f20
  <section id="info_aboutUs">
    <h2 class="info_title">¿Quiénes somos?</h2>
    <div class="introduction_container">
      <div class="introduction">
        <h4 class="introduction_title">Conócenos</h4>
        <p>
          Lorem ipsum dolor sit amet, consectetur adispiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
          Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.
          Lorem ipsum dolor sit amet, consectetur adispiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
        </p>
      </div>
      <div>
        <img class="introduction_img" src="{{ asset('img/home/about_us/fanclublocal.png') }}" alt="">
      </div>
    </div>

    <div class="objectives_container">
      <div class="objectives">
        <h4 class="objectives_title">Objetivos</h4>
        <p>
          Lorem ipsum dolor sit amet, consectetur adispiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
          Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.
          Lorem ipsum dolor sit amet, consectetur adispiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
        </p>
      </div>
      <div>
        <img class="objectives_img" src="{{ asset('img/home/about_us/fanclublocal.png') }}" alt="">
      </div>
    </div>
  </section>
<<<<<<< HEAD

  <x-footer />
=======
  <div>
    <x-footer />
  </div>
  
>>>>>>> f7b2a7e0e928915860acca863b20586e39287f20
@endsection




