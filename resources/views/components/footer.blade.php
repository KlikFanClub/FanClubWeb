<!-- Footer -->
<div class="mainFatherFooterContainer">
    <footer class="footer">  <div class="footerNav">    <!-- logo -->
        <img class="footerLogo" src="http://127.0.0.1:8000/img/home/logo/fan-club.png" alt="footerLogo">    <!-- links to other pages inside web -->
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
              <a href="{{url ('/login')}}" class="txtLinks">Administración</a>
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
          <a type="button" class="btnFacebook" href="#!">
            <i class="fab fa-facebook-f"></i>
          </a>
          <a type="button" class="btnTweeter" href="#!">
            <i class="fab fa-twitter fa-lg"></i>
          </a>
          <a type="button" class="btnInstagram" href="#!">
            <i class="fab fa-instagram fa-lg"></i>
          </a>
          <a type="button" class="btnSpotify" href="#!">
            <i class="fa fa-spotify fa-lg"></i>
          </a>
        </div>
      </div>
        <div class="rightFooter">
          <div class="newsletter">
            <p>Si no quieres perderte lo que pasa en FAN CLUB,
              apúntate a nuestra newsletter!</p>
            <div class="login_bar">
              <input type="email" class="login">super-email@gmail.com
              <span class="subscribe_button" onclick="subscribeOnClick()">SUBSCRIBIRME</span>
              <span class="subscribing"></span>
              <span class="thanks">Gracias! pronto recibirás noticias nuestras!</span>
            </div>
          </div>
          <!-- Copyright -->
          <div class="footerCR text-center py-3">© 2021 Copyright:
            <a> FanClubStore</a>
          </div>
        </div>
      <!-- Copyright -->


        @guest
            @if (Route::has('login'))
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
                </li>
            @endif
            @if (Route::has('register'))
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
                </li>
            @endif
        @else
            <li class="nav-item dropdown">
                <a id="dropdownMenuButton" class="nav-link dropdown-toggle" href="#" role="button"
                   data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
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
        @endguest
            </li>

    </footer>

</div>
<!-- Footer -->
