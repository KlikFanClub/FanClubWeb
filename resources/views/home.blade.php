@extends('layouts.app')@section('content') <div class="mainFatherContainer">
    <main>
      <section class="artworkSlider">
        <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
          <ol class="carousel-indicators">
            <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
            <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
            <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
            <li data-target="#carouselExampleIndicators" data-slide-to="3"></li>
            <li data-target="#carouselExampleIndicators" data-slide-to="4"></li>
          </ol>
          <div class="carousel-inner">
            @foreach ($workarts as $workart)
              @if ($workart->carousel)
                <div class="carousel-item active">
                  <img class="img-fluid" src="{{ asset('storage') . '/' . $workart->imageworkart }}"
                    alt="First image">
                </div>
                <div class="carousel-item">
                  <img class="img-fluid" src="{{ asset('img/home/general/Raizal_slider.png') }}" alt="Second slide">
                </div>
                <div class="carousel-item">
                  <img class="img-fluid" src="{{ asset('img/home/general/Santiago_slider.png') }}"
                    alt="Third slide">
                </div>
                <div class="carousel-item">
                  <img class="img-fluid" src="{{ asset('img/home/general/Regresar_slider.png') }}"
                    alt="Forth slide">
                </div>
                <div class="carousel-item">
                  <img class="img-fluid" src="{{ asset('img/home/general/Chica_azul_slider.png') }}"
                    alt="Fifth slide">
                </div>
              @endif
            @endforeach
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
          @foreach ($artists as $artist)
            @if ($artist->highlighted)
              <div class="artworkCard">
                <div>
                  <img class="artwork" alt="" src=<?php echo "storage/{$artist->profile_picture}"; ?>>
                </div>
                <span class="artistName">{{ $artist->name }} </span>
                <a class="artworkDetailsBtn" href="{{ route('showArtist', $artist->id) }}">Ver sus
                  obras</a>
              </div>
            @endif
          @endforeach
          <div class="artworkCard">
            <div>
              <img class="artwork" src="{{ asset('img/home/highlighted/Narrativas_trans_2.png') }}" alt="">
            </div>
            <span class="artistName">Agustina</span>
            <a class="artworkDetailsBtn" href="{{ route('showArtist', $artist->id) }}">Ver sus
              obras</a>
          </div>
          <div class="artworkCard">
            <div>
              <img class="artwork" src="{{ asset('img/home/highlighted/ORUGA_A3_2.png') }}" alt="">
            </div>
            <span class="artistName">Andr??s Barthel</span>
            <a class="artworkDetailsBtn" href="{{ route('showArtist', $artist->id) }}">Ver sus
              obras</a>
          </div>
          <div class="artworkCard">
            <div>
              <img class="artwork" src="{{ asset('img/home/highlighted/Rebirth_of_venus.png') }}" alt="">
            </div>
            <span class="artistName">Jael Masllorens</span>
            <a class="artworkDetailsBtn" href="{{ route('showArtist', $artist->id) }}">Ver sus
              obras</a>
          </div>
        </div>
      </section>
    </main>
    <section id="info_aboutUs">
      <h2 class="info_title">??Qui??nes somos?</h2>
      <div class="introduction_container">
        <div class="introduction">
          <h4 class="introduction_title">Con??cenos</h4>
          <p>
            Fan Club es una tienda especializada en sistema de impresi??n que se apoya en el artivismo para dar
            visibilidad
            a mujeres artistas latinom??ricanas, pero tambi??n a otros artistas cuya expresi??n se encuentre
            alineada con
            nuestros valores.
          </p>
          <p>
            Nuestra misi??n es servir de embajadores y de vitrina para la generaci??n de mujeres latinoamericanas
            que buscan
            sentar una posici??n pol??tica a trav??s de su expresi??n art??stica.
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
            Somos una tienda de arte gr??fico independiente femenista especilizada en prints, collages,
            originales,
            fotograf??a, risograf??a y serigr??fia impresos en papel reciclado; las obras y productos que vendemos
            tienen un
            mensaje que busca mostrar protagonistas diversos y hacer sentir a quienes lo adquieren como parte
            inclusiva de
            esa diversidad.
          </p>
          <p>
            Tambi??n, ofreceremos talleres y cursos de modelado de plastilina y tinta china para todas las
            edades.
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
@endsection
