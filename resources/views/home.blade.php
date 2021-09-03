@extends('layouts.app')

@section('content')

  <x-header />


  <div class="mainFatherContainer">
    <main>
      {{-- <section class="artworkSlider">
      <img class="artwork" src="{{ asset('img/home/slider/Narrativas_trans.png') }}" alt="">
      <img class="artwork" src="{{ asset('img/home/slider/ORUGA_A3.png') }}" alt="">
      <img class="artwork" src="{{ asset('img/home/slider/PrintsArtboard_1.png') }}" alt="">
    </section> --}}

      {{-- <section class="highlights">
      <h2 class="highlightsTitle">Destacados</h2>
      <div class="artworkHighlights">
        <div class="artworkCard">
          <div>
            <img class="artwork" src="{{ asset('img/home/highlighted/PrintsArtboard_2.png') }}" alt="">
          </div>
          <span class="artistName">Daniela Ilustra</span>
          <a class="artworkDetailsBtn" href="">ver su obra</a>
        </div> --}}

      <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
        <ol class="carousel-indicators">
          <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
          <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
          <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
          <li data-target="#carouselExampleIndicators" data-slide-to="3"></li>
          <li data-target="#carouselExampleIndicators" data-slide-to="4"></li>
        </ol>
        <div class="carousel-inner">
          <div class="carousel-item active">
            <img class="d-block" src="{{ asset('img/home/general/Tarde de jardín fk.png') }}" alt="First slide">
          </div>
          <div class="carousel-item">
            <img class="d-block" src="{{ asset('img/home/general/Raizal fk.png') }}" alt="Second slide">
          </div>
          <div class="carousel-item">
            <img class="d-block" src="{{ asset('img/home/general/Santiago fk.png') }}" alt="Third slide">
          </div>
          <div class="carousel-item">
            <img class="d-block h-100" src="{{ asset('img/home/general/Regresar fk.png') }}" alt="Forth slide">
          </div>
          <div class="carousel-item">
            <img class="d-block h-100" src="{{ asset('img/home/general/Chica azul fk.png') }}" alt="Fifth slide">
          </div>
        </div>
        <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
          <span class="carousel-control-prev-icon" aria-hidden="true"></span>
          <span class="sr-only">Previous</span>
        </a>
        <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
          <span class="carousel-control-next-icon" aria-hidden="true"></span>
          <span class="sr-only">Next</span>
        </a>
      </div>


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
            <span class="artistName">Milagros Reyes</span>
            <a class="artworkDetailsBtn" href="">ver su obra</a>
          </div>

          <div class="artworkCard">
            <div>
              <img class="artwork" src="{{ asset('img/home/highlighted/Narrativas_trans_2.png') }}" alt="">
            </div>
            <span class="artistName">Agustina</span>
            <a class="artworkDetailsBtn" href="">ver su obra</a>
          </div>
          <div class="artworkCard">
            <div>
              <img class="artwork" src="{{ asset('img/home/highlighted/ORUGA_A3_2.png') }}" alt="">
            </div>
            <span class="artistName">Andrés Barthel</span>
            <a class="artworkDetailsBtn" href="">ver su obra</a>
          </div>

          <div class="artworkCard">
            <div>
              <img class="artwork" src="{{ asset('img/home/highlighted/Rebirth_of_venus.png') }}" alt="">
            </div>
            <span class="artistName">Jael Masllorens</span>
            <a class="artworkDetailsBtn" href="">ver su obra</a>
          </div>
        </div>
      </section>
    </main>

    <section id="info_aboutUs">
      <h2 class="info_title">¿Quiénes somos?</h2>
      <div class="introduction_container">
        <div class="introduction">
          <h4 class="introduction_title">Conócenos</h4>
          <p>
            Lorem ipsum dolor sit amet, consectetur adispiscing elit, sed do eiusmod tempor incididunt ut labore et dolore
            magna aliqua.
            Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.
            Lorem ipsum dolor sit amet, consectetur adispiscing elit, sed do eiusmod tempor incididunt ut labore et dolore
            magna aliqua.
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
            Lorem ipsum dolor sit amet, consectetur adispiscing elit, sed do eiusmod tempor incididunt ut labore et dolore
            magna aliqua.
            Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.
            Lorem ipsum dolor sit amet, consectetur adispiscing elit, sed do eiusmod tempor incididunt ut labore et dolore
            magna aliqua.
          </p>
        </div>
        <div>
          <img class="objectives_img" src="{{ asset('img/home/about_us/fanclublocal.png') }}" alt="">
        </div>
      </div>
    </section>
  </div>

  <div>
    <x-footer />
  </div>

  <script>
    $('.carousel').carousel()
  </script>

@endsection


{{-- <img class="artwork" src="{{ asset('img/home/slider/Narrativas_trans.png') }}" alt="">
<img class="artwork" src="{{ asset('img/home/general/Raizal.png') }}" alt="">
<img class="artwork" src="{{ asset('img/home/slider/PrintsArtboard_1.png') }}" alt=""> --}}
