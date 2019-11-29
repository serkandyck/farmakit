@extends('layouts.auth')

@section('title', 'Kullanıcı Girişi')

@section('content')
<div class="auth-wrapper">
    <div class="container-fluid h-100">
        <div class="row flex-row h-100 bg-white">
            <div class="col-xl-8 col-lg-6 col-md-5 p-0 d-md-block d-lg-block d-sm-none d-none">
                <div class="lavalite-bg" style="background-image: url('/img/auth/login-bg.jpg')">
                    <div class="lavalite-overlay"></div>
                </div>
            </div>
            <div class="col-xl-4 col-lg-6 col-md-7 my-auto p-0">
                <div class="authentication-form mx-auto">
                    <div class="logo-centered">
                        <a href="/"><img style="margin: 0 auto;display: block;" src="/img/logo.png" alt="Farmakit Logo"></a>
                    </div>
                    <h3>Kullanıcı Girişi</h3>
                    <p>Hesap bilgileriniz ile giriş yapabilirsiniz.</p>
                    <form method="POST" action="{{ route('login') }}">
                      @csrf
                        <div class="form-group">
                            <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" tabindex="1" placeholder="E-posta adresiniz">
                            <i class="ik ik-user"></i>
                            @error('email')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                        <div class="form-group">
                            <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password" tabindex="2" placeholder="Şifreniz">
                            <i class="ik ik-lock"></i>
                            @error('password')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                        <div class="row">
                            <div class="col text-left">
                                <label class="custom-control custom-checkbox">
                                    <input type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }} class="custom-control-input">
                                    <span class="custom-control-label">&nbsp;Beni Hatırla</span>
                                </label>
                            </div>
                            <div class="col text-right">
                                <a href="{{ route('password.request') }}">Şifremi Unuttum ?</a>
                            </div>
                        </div>
                        <div class="sign-btn text-center">
                            <button type="submit" class="btn btn-primary">Giriş Yap</button>
                        </div>
                    </form>
                    <div class="register">
                        <p>Henüz Müşterimiz Değilmisiniz? <a target="_blank" href="http://farmakit.com/siparis-islemleri">Hemen Müşterimiz Olun</a></p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
