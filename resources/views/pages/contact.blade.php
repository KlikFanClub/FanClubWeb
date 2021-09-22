@extends ('layouts.app')
@section('content')
    <div class="card d-flex justify-content-center" >
        <div class="card-body">
            <h5 class="card-title">FUN CLUB </h5>
            <p class="card-text">Tienda de arte gráfico</p>
        </div>
        <ul class="list-group list-group-flush">
            <li class="list-group-item">📱 000000000</li>
            <li class="list-group-item">📧 admin@gmail.com</li>
            <li class="list-group-item">🚩 C//de Puigmartí, 37 (Pl John Lennon)
                08012 Barcelona
            </li>
        </ul>
        <div class="card-body d-flex justify-content-center">
            <a type="button" class="btnInstagram m-2" target="_blank" href="https://www.instagram.com/">
                <i class="fab fa-instagram fa-lg iconos"></i>
            </a>
            <a type="button" class="btnFacebook m-2" target="_blank" href="https://www.facebook.com/">
                <i class="fab fa-facebook-f iconos"></i>
            </a>
        </div>
        <img src="{{ asset('img/home/about_us/fanclublocal.png') }}" class="card-img-top" alt="foto local">
    </div>
@endsection
