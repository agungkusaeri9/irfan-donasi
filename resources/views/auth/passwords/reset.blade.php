@extends('auth.app')
@section('title', 'Buat Password Baru')
@section('content')
    <section class="section">
        <div class="container-fluid">
            <div class="row" style="height: 100vh">
                <div class="col-md-7 "
                    style="background-image: url({{ asset('assets/img/bg-auth.jpg') }});background-repeat:no-repeat;background-size:cover">

                </div>
                <div class="col-md-5 align-self-center" style="padding-right: 80px;padding-left: 80px">
                    <div class="login-brand text-center mb-5">
                        <a href="{{ route('home') }}">
                            <img src="{{ asset('assets/img/stisla-fill.svg') }}" alt="logo" width="100"
                                class="shadow-light rounded-circle">
                        </a>
                    </div>

                    <div class="card card-primary">
                        <div class="card-header">
                            <h5 class="font-weight-normal">Buat Password Baru</h5>
                        </div>
                        <div class="card-body">
                            <form method="POST" action="{{ route('password.update') }}">
                                @csrf

                                <input type="hidden" name="token" value="{{ $token }}">

                                <div class="form-group">
                                    <label for="email">Email</label>
                                    <input id="email" type="email"
                                        class="form-control @error('email') is-invalid @enderror" name="email"
                                        value="{{ $email ?? old('email') }}" readonly required autocomplete="email" autofocus>

                                    @error('email')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>

                                <div class="form-group">
                                    <label for="password">Password Baru</label>

                                    <input id="password" type="password"
                                        class="form-control @error('password') is-invalid @enderror" name="password"
                                        required autocomplete="new-password">

                                    @error('password')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>

                                <div class="form-group">
                                    <label for="password-confirm">Konfirmasi Password Baru</label>

                                    <input id="password-confirm" type="password" class="form-control"
                                        name="password_confirmation" required autocomplete="new-password">
                                </div>

                                <div class="form-group">
                                    <button type="submit" class="btn btn-primary btn-block">
                                        Reset Password
                                     </button>
                                </div>
                            </form>
                            <p class="my-1">Belum punya akun? Silahkan <a href="{{ route('register') }}"
                                    class="">Register</a></p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
