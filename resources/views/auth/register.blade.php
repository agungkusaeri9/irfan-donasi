@extends('auth.app')
@section('title','Register')
@section('content')
    <section class="section">
        <div class="container-fluid">
            <div class="row justify-content-center" style="height: 100vh">
                <div class="col-md-5 mb-4 mt-4 align-self-center" style="padding-right: 80px;padding-left: 80px;">
                    <div class="login-brand text-center mb-5">
                        <a href="{{ route('home') }}">
                            <img src="{{ $setting->image() }}" alt="logo" width="100"
                                class="shadow-light rounded-circle">
                        </a>
                    </div>

                    <div class="card card-primary login-c">
                        <div class="card-header">
                            <h5 class="font-weight-normal text-center mt-2">Register</h5>
                        </div>

                        <div class="card-body">
                            <form method="POST" action="{{ route('register') }}">
                                @csrf
                                <div class="form-group">
                                    <label for="name">Nama Lengkap</label>
                                    <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" autofocus value="{{ old('name') }}">
                                    @error('name')
                                    <div class="invalid-feedback">
                                        {{ $message }}
                                    </div>
                                @enderror
                                </div>

                                <div class="form-group">
                                    <label for="email">Email</label>
                                    <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}">
                                    @error('email')
                                    <div class="invalid-feedback">
                                        {{ $message }}
                                    </div>
                                @enderror
                                </div>

                                <div class="form-group">
                                    <label for="password">Password</label>
                                    <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password">
                                    @error('password')
                                    <div class="invalid-feedback">
                                        {{ $message }}
                                    </div>
                                @enderror
                                </div>

                                <div class="form-group">
                                    <label for="password_confirmation">Konfirmasi Password</label>
                                    <input id="password_confirmation" type="password" class="form-control @error('password_confirmation') is-invalid @enderror"
                                        name="password_confirmation">
                                        @error('password_confirmation')
                                        <div class="invalid-feedback">
                                            {{ $message }}
                                        </div>
                                    @enderror
                                </div>

                                <div class="form-group d-flex justify-content-center">
                                    <button type="submit" class="btn btn-primary btn-block">
                                        Register
                                    </button>
                                </div>
                            </form>
                            <p class="">
                                Sudah punya akun? Silahkan <a href="{{ route('login') }}">Login</a>
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
@section('content1')
    <section class="section">
        <div class="container mt-5 mb-5">
            <div class="row">
                <div class="col-12 col-sm-8 offset-sm-2 col-md-6 offset-md-3 col-lg-6 offset-lg-3 col-xl-4 offset-xl-4">

                    <div class="card card-primary login-c">
                        <div class="card-header d-flex justify-content-center">
                            <h4 class="h-login">Register</h4>
                        </div>

                        <div class="card-body">
                            <form method="POST" action="{{ route('register') }}">
                                @csrf
                                <div class="form-group">
                                    <label for="name">Nama Lengkap</label>
                                    <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" autofocus value="{{ old('name') }}">
                                    @error('name')
                                    <div class="invalid-feedback">
                                        {{ $message }}
                                    </div>
                                @enderror
                                </div>

                                <div class="form-group">
                                    <label for="email">Email</label>
                                    <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}">
                                    @error('email')
                                    <div class="invalid-feedback">
                                        {{ $message }}
                                    </div>
                                @enderror
                                </div>

                                <div class="form-group">
                                    <label for="password">Password</label>
                                    <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password">
                                    @error('password')
                                    <div class="invalid-feedback">
                                        {{ $message }}
                                    </div>
                                @enderror
                                </div>

                                <div class="form-group">
                                    <label for="password_confirmation">Konfirmasi Password</label>
                                    <input id="password_confirmation" type="password" class="form-control @error('password_confirmation') is-invalid @enderror"
                                        name="password_confirmation">
                                        @error('password_confirmation')
                                        <div class="invalid-feedback">
                                            {{ $message }}
                                        </div>
                                    @enderror
                                </div>

                                <div class="form-group">
                                    <div class="custom-control custom-checkbox">
                                        <input type="checkbox" name="agree" class="custom-control-input" id="agree">
                                        <label class="custom-control-label" for="agree">I agree with the terms and
                                            conditions</label>
                                    </div>
                                </div>

                                <div class="form-group d-flex justify-content-center">
                                    <button type="submit" class="btn btn-primary btn-lg btn-block">
                                        Register
                                    </button>
                                </div>
                            </form>
                            <p class="text-center">
                                Sudah menjadi donatur? <a href="{{ route('login') }}">Masuk</a>
                            </p>
                            <p class="text-center">
                                <a href="{{ route('home') }}">Kembali Ke halaman beranda</a>
                            </p>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </section>
@endsection
