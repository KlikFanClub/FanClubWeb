@extends('layouts.app')

@section('content')

  <x-header />

  <div class="mainFatherContainer">
    <main>

      <section class="artworkSlider">
        {{-- The .active class needs to be added to one of
       the slides. Otherwise, the carousel will not
       be visible. --}}

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
              <img class="img-fluid" src="{{ asset('img/home/general/Tarde_jardin_slider.png') }}"
                alt="First slide">
            </div>
            <div class="carousel-item">
              <img class="img-fluid" src="{{ asset('img/home/general/Raizal_slider.png') }}" alt="Second slide">
            </div>
            <div class="carousel-item">
              <img class="img-fluid" src="{{ asset('img/home/general/Santiago_slider.png') }}" alt="Third slide">
            </div>
            <div class="carousel-item">
              <img class="img-fluid" src="{{ asset('img/home/general/Regresar_slider.png') }}" alt="Forth slide">
            </div>
            <div class="carousel-item">
              <img class="img-fluid" src="{{ asset('img/home/general/Chica_azul_slider.png') }}" alt="Fifth slide">
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
            Fan Club es una tienda especializada en sistema de impresión que se apoya en el artivismo para dar visibilidad
            a mujeres artistas latinoméricanas, pero también a otros artistas cuya expresión se encuentre alineada con
            nuestros valores.
          </p>
          <p>
            Nuestra misión es servir de embajadores y de vitrina para la generación de mujeres latinoamericanas que buscan
            sentar una posición política a través de su expresión artística.
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
            Somos una tienda de arte gráfico independiente femenista especilizada en prints, collages, originales,
            fotografía, risografía y serigráfia impresos en papel reciclado; las obras y productos que vendemos tienen un
            mensaje que busca mostrar protagonistas diversos y hacer sentir a quienes lo adquieren como parte inclusiva de
            esa diversidad.
          </p>
          <p>
            También, ofreceremos talleres y cursos de modelado de plastilina y tinta china para todas las edades.
          </p>
        </div>
        <div>
          <img class="objectives_img" src="{{ asset('img/home/about_us/fanclublocal.png') }}" alt="">
        </div>
      </div>
    </section>

      <div class="joinUsContainer">

        <div class="joinUs">
          <button class="joinUsButton">
            <a href="{{ route('register') }}">Forma parte de FanClub y exhibe tus obras aqui! =)</a>
          </button>
        </div>
      </div>

  </div>

  <x-footer />

  <script>
    $('.carousel').carousel()
  </script>

@endsection

{{-- <img class="artwork" src="{{ asset('img/home/slider/Narrativas_trans.png') }}" alt="">
<img class="artwork" src="{{ asset('img/home/general/Raizal.png') }}" alt="">
<img class="artwork" src="{{ asset('img/home/slider/PrintsArtboard_1.png') }}" alt=""> --}}
