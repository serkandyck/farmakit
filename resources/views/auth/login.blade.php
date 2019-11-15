@extends('layouts.auth')

@section('title', 'Kullanıcı Girişi')

@section('content')
    <section class="section">
      <div class="container mt-5">
        <div class="row">
          <div class="col-12 col-sm-8 offset-sm-2 col-md-6 offset-md-3 col-lg-6 offset-lg-3 col-xl-4 offset-xl-4">
            <div class="login-brand">
              <img src="/img/logo.png" alt="logo" width="275">
            </div>

            <div class="card card-primary">
              <div class="card-header"><h4>Kullanıcı Girişi</h4></div>

              <div class="card-body">
                <form method="POST" action="{{ route('login') }}">
                    @csrf
                  <div class="form-group">
                    <label for="email">E-mail adresiniz</label>
                    <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus tabindex="1">
                    @error('email')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                  </div>

                  <div class="form-group">
                    <div class="d-block">
                        <label for="password" class="control-label">Şifreniz</label>
                      <div class="float-right">
                        <a href="{{ route('password.request') }}" class="text-small">
                          Şifremi Unuttum?
                        </a>
                      </div>
                    </div>
                    <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password" tabindex="2">
                    @error('password')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                  </div>

                  <div class="form-group">
                    <div class="custom-control custom-checkbox">
                      <input type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }} class="custom-control-input" tabindex="3">
                      <label class="custom-control-label" for="remember-me">Beni Hatırla</label>
                    </div>
                  </div>

                  <div class="form-group">
                    <button type="submit" class="btn btn-primary btn-lg btn-block" tabindex="4">
                      GİRİŞ
                    </button>
                  </div>
                </form>
              </div>
            </div>
            <div class="mt-5 text-muted text-center">
              Henüz üye değilmisiniz? <a href="http://farmakit.com/siparis-islemleri">Sipariş Verin</a>
            </div>
            <div class="simple-footer">
              Tüm Hakları Saklıdır &copy; OrbiKey 2019
            </div>
          </div>
        </div>
      </div>
    </section>
@endsection
