<!-- <div id="app"> -->
<nav class="navbar navbar-expand-md navbar-light shadow-sm">
  <div class="container navContainer">
    <a class="navbar-brand" href="{{ url('/') }}">
      <img class="navLogo" src="https://i.postimg.cc/cJBr74VS/fan-club.png" style="width: 50px"
        alt="Fan Club logo">
    </a>
    <button class="navbar-toggler" style="border: none;" type="button" data-toggle="collapse"
      data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false"
      aria-label="{{ __('Toggle navigation') }}">
      <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <!-- Left Side Of Navbar -->
      <ul class="navbar-nav mr-auto">

      </ul>

      <!-- Right Side Of Navbar -->
      <ul class="navbar-nav ml-auto">

        <!-- Authentication Links -->

        <li class="nav-item">
          <a class="nav-link text-dark h5" href="home#info_aboutUs">INFO</a>
        </li>
        <li class="nav-item">
          <a class="nav-link text-dark h5" href="{{ url('workarts') }}">CATÁLOGO</a>
        </li>
        <li class="nav-item">
          <a class="nav-link text-dark h5" href="{{ url('artists') }}">ARTISTAS</a>
        </li>
        <li class="nav-item">
          <a class="nav-link text-dark h5" href="{{ url('agenda') }}">EVENTOS</a>
        </li>
        <li class="nav-item ">
          <a class="nav-link text-dark h5" href="{{ url('blog') }}">BLOG</a>
        </li>
        <li class="nav-item">
          <a class="nav-link text-dark h5" href="{{ url('contactus') }}">CONTACTO</a>
        </li>
        @guest

          @if (Route::has('login'))
            <li class="nav-item">
              <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
            </li>
          @endif

          {{-- @if (Route::has('register'))
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
                        </li>
                    @endif --}}
        @else
          <li class="nav-item dropdown">
            <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown"
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
          @endguest
        </li>
      </ul>
    </div>
  </div>
  </div>
</nav>
