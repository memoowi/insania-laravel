@extends('auth.base-auth')

@section('title')
Login
@endsection

@section('content')
    <section id="login-page">
        <div class="login-page">
            <div class="row">
                <div class="col-md-4 kiri"></div>
                <div class="col-md-8 kanan py-5">
                    <a href="{{ url('/') }}"><img src="{{ asset('insania-assets/img/insania-company-logo.png ') }}" alt=""></a>
                    <h5 class="fw-semibold mb-5">Silahkan Login</h5>
                    <form method="POST" action="{{ route('login') }}">
                        @csrf
                        <h3 class="fw-bold mb-4">Sign In</h3>
                        <div class="mb-2">
                            <label for="email" class="form-label">{{ __('Email Address') }}</label>
                            <input type="email" class="form-control @error('email') is-invalid @enderror" id="email" name="email" value="{{ old('email') }}" autocomplete="email" autofocus>
                            @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                            @enderror
                        </div>
                        <div class="mb-2">
                            <label for="password" class="form-label">{{ __('Password') }}</label>
                            <input type="password" class="form-control @error('password') is-invalid @enderror" id="password" name="password" autocomplete="current-password">
                            @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                            @enderror
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>

                            <label class="form-check-label" for="remember">
                                {{ __('Remember Me') }}
                            </label>
                        </div>
                        @if (Route::has('password.request'))
                                    <a class="btn btn-link" href="{{ route('password.request') }}">
                                        {{ __('Forgot Your Password?') }}
                                    </a>
                        @endif
                        <button type="submit" class="btn btn-login fw-bold">{{ __('Login') }}</button><br>
                        <button type="submit" class="btn btn-sign fw-bold">Masuk dengan google</button><br>
                        <p>Belum Punya akun? <a href="{{ route('register') }}">Daftar</a></p>
                    </form>
                </div>
            </div>
        </div>
    </section>
@endsection
