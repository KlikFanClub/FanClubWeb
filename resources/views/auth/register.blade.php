@extends('layouts.app')

@section('content')
  <main>
    <div class="registerContainer container">
      <div class="formulario">
        <div class="col-md-8">
          <div class="card">
            <div class="card-header">{{ __('Datos de contacto') }}</div>

            <div class="card-body">
              <form method="POST" action='{{ route('register') }}'>
                @csrf

                <div class="form-group row">
                  <label for="name" class="col-md-4 col-form-label">{{ __('Nombre') }}</label>

                  <div class="col-md-6">
                    <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name"
                      value="{{ old('name') }}" required autocomplete="name" autofocus>

                    @error('name')
                      <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                      </span>
                    @enderror
                  </div>
                </div>

                <div class="form-group row">
                  <label for="email" class="col-md-4 col-form-label">{{ __('E-Mail') }}</label>

                  <div class="col-md-6">
                    <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email"
                      value="{{ old('email') }}" required autocomplete="email">

                    @error('email')
                      <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                      </span>
                    @enderror
                  </div>
                </div>

                <div class="form-group row">
                  <label for="" class="col-md-5 col-form-label">{{ __('Un enlace con tus obras') }}</label>

                  <div class="col-md-6">
                    <input id="someLink" type="text" class="form-control  @error('someLink') is-invalid @enderror"
                      name="someLink" value="{{ old('someLink') }}" required autocomplete="someLink" autofocus>

                    @error('someLink')
                      <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                      </span>
                    @enderror
                  </div>
                </div>

                <div class="form-group row">
                  <label for="" class="col-md-5 col-form-label">{{ __('Cuéntanos un poco sobre ti! :)') }}</label>

                  <div class="col-md-6">
                    <textarea id="aboutArtist" type="text" row: 10
                      class="form-control
                                  @error('aboutArtist') is-invalid @enderror"
                      name="aboutArtist" value="{{ old('aboutArtist') }}" required autocomplete="aboutArtist"
                      autofocus></textarea>

                    @error('aboutArtist')
                      <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                      </span>
                    @enderror
                    <div class="col-md-6 offset-md-4">
                      <button type="submit" class="btnRegister">
                        {{ __('Enviar') }}
                      </button>
                    </div>
                  </div>
                </div>
              </form>
            </div>
          </div>
        </div>
      </div>
    </div>
  </main>
@endsection
