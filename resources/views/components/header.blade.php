<!-- <div id="app"> -->
<nav class="navbar navbar-expand-lg navbar-light shadow-sm">
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
          <a class="nav-link text-dark h5" href="{{url('agenda') }}">EVENTOS</a>
        </li>
        <li class="nav-item ">
          <a class="nav-link text-dark h5" href="{{ url('blog') }}">BLOG</a>
        </li>
        <li class="nav-item">
          <a class="nav-link text-dark h5" href="{{ url('contactus') }}">CONTACTO</a>
        </li>
      </ul>
    </div>
  </div>
</nav>
