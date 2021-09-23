<!-- Footer -->
<div class="mainFatherFooterContainer">
  <footer class="footer mt-5">
    <div class="footerNav">
      <!-- logo -->
      <img class="footerLogo" src="http://127.0.0.1:8000/img/home/logo/fan-club.png" alt="footerLogo">
      <!-- links to other pages inside web -->
      <nav class="pagesLinks navbar navbar-expand-md" style="
        margin-left: -33px;">
        <ul class="navbar-links navbar-nav">
          <li class="list-unstyled" style="display: inline;">
            <a href="#!" class="txtLinks">Subir</a> <!-- poner función ir arriba de la página -->
          </li>
          <li class="list-unstyled" style="display: inline;">
            <a href="#!" class="txtLinks">Términos y condiciones</a> <!-- linkar con página TyC -->
          </li>
          <li class="list-unstyled" style="display: inline;">
            <a href="#!" class="txtLinks">Aviso legal</a> <!-- linkar con página Aviso legal -->
          </li>
          <li class="list-unstyled" style="display: inline;">
            <a href="#!" class="txtLinks">Mapa del sitio</a>
          </li>
          <li class="list-unstyled" style="display: inline;">
            <a href="{{ url('/login') }}" class="txtLinks">Administración</a>
          </li>
        </ul>
      </nav>
    </div>

    <!-- Social Media links -->

    <div class="socialLinks">

      <!-- Social buttons -->
      <p>Síguenos</p>

      <!-- Facebook -->
      <div class="socialButtons">
        <a type="button" class="btnInstagram m-2" target="_blank" href="https://www.instagram.com/fanclubtienda/">
          <i class="fab fa-instagram fa-lg iconos"></i>
        </a>
        <a type="button" class="btnFacebook m-2" target="_blank" href="https://www.facebook.com/fanclubtienda/">
          <i class="fab fa-facebook-f iconos"></i>
        </a>
        <a type="button" class="btnTweeter m-2" href="https://twitter.com/?lang=es">
          <i class="fab fa-twitter fa-lg iconos"></i>
        </a>
        <a type="button" class="btnSpotify m-2" href="https://www.spotify.com/es/">
          <i class="fa fa-spotify fa-lg iconos"></i>
        </a>
      </div>
    </div>
    <div class="rightFooter">
      <!-- Copyright -->
      <div class="footerCR text-center py-3">© 2021 Copyright:
        <a> FanClubStore</a>
      </div>
    </div>
    <!-- Copyright -->


    @guest
      <ul>
        @if (Route::has('login'))
          <li class="nav-item">
            <a class="nav-link iconos" href="{{ route('login') }}">{{ __('Login') }}</a>
          </li>
        @endif
        @if (Route::has('register'))
          <li class="nav-item d-none">
            <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
          </li>
        @endif
      @else
        <li class="nav-item dropdown punto">
          <a id="dropdownMenuButton" class="nav-link dropdown-toggle iconos" href="#" role="button" data-toggle="dropdown"
            aria-haspopup="true" aria-expanded="false" v-pre>
            {{ Auth::user()->name }}
          </a>
          <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
            <a class="dropdown-item" href="{{ route('logout') }}" onclick="event.preventDefault();
                                     document.getElementById('logout-form').submit();">
              {{ __('Logout') }}
            </a>
            <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
              @csrf
            </form>
          </div>
      </ul>
    @endguest
  </footer>
</div>
<!-- Footer -->
