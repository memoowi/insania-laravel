@extends('auth.base-auth')

@section('title')
Sign Up
@endsection

@section('content')
    <section id="sign-page">
        <div class="sign-page">
            <div class="row">
                <div class="col-md-4 kiri"></div>
                <div class="col-md-8 kanan py-5">
                    <a href="{{ url('/') }}"><img src="{{ asset('insania-assets/img/insania-company-logo.png') }}" alt=""></a>
                    <h5 class="fw-semibold">NEW ACCOUNT</h5>
                    <P>Hi, Ayo bergabung bersama kami  menjadi mitra Insania Sinergia</P>
                    <form method="POST" action="{{ route('register') }}">
                        @csrf
                        <div class="mb-2">
                            <label for="name" class="form-label">{{ __('Name') }}</label>
                            <input type="text" class="form-control @error('name') is-invalid @enderror" id="name" name="name" value="{{ old('name') }}" autocomplete="name" autofocus>
                            
                            @error('name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                            @enderror
                            
                        </div>
                        <div class="mb-2">
                            <label for="email" class="form-label">{{ __('Email Address') }}</label>
                            <input type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" autocomplete="email" id="email">
                            @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                            @enderror
                        </div>
                        <div class="mb-2">
                            <label for="password" class="form-label">{{ __('Password') }}</label>
                            <input type="password" class="form-control @error('password') is-invalid @enderror" id="password" name="password" autocomplete="new-password">
                            @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                            @enderror
                        </div>
                        <div class="mb-2">
                            <label for="password-confirm" class="form-label">{{ __('Confirm Password') }}</label>
                            <input type="password" class="form-control" id="password-confirm" name="password_confirmation" autocomplete="new-password">
                        </div>
                        <button type="submit" class="btn btn-login fw-bold">{{ __('Register') }}</button><br>
                        <button type="submit" class="btn btn-sign fw-bold">Daftar dengan google</button><br>
                        <p>Sudah Punya akun? <a href="{{ route('login') }}">login</a></p>
                    </form>
                </div>
            </div>
        </div>
    </section>
@endsection
