@extends('auth.app')
@section('title', 'Login')
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
                            <img src="{{ $setting->image() }}" alt="logo" width="100"
                                class="shadow-light rounded-circle">
                        </a>
                    </div>

                    <div class="card card-primary">
                        <div class="card-header text-center">
                           <h5 class="font-weight-normal">Login</h5>
                        </div>
                        <div class="card-body">
                            <form method="POST" action="{{ route('login') }}" class="needs-validation" novalidate="">
                                @csrf
                                <div class="form-group">
                                    <label for="email">Email</label>
                                    <input id="email" type="email"
                                        class="form-control @error('email') is-invalid @enderror" name="email"
                                        value="{{ old('email') }}" tabindex="1" required autofocus>
                                    @error('email')
                                        <div class="invalid-feedback">
                                            {{ $message }}
                                        </div>
                                    @enderror
                                </div>

                                <div class="form-group">
                                    <div class="d-block">
                                        <label for="password" class="control-label">Password</label>
                                    </div>
                                    <input id="password" type="password"
                                        class="form-control @error('password') is-invalid @enderror" name="password"
                                        tabindex="2" required>
                                    @error('password')
                                        <div class="invalid-feedback">
                                            {{ $message }}
                                        </div>
                                    @enderror
                                </div>

                                <div class="form-group">
                                    <div class="custom-control custom-checkbox">
                                        <input type="checkbox" name="remember" class="custom-control-input" tabindex="3"
                                            id="remember-me">
                                        <label class="custom-control-label" for="remember-me">Remember Me</label>
                                    </div>
                                </div>

                                <div class="form-group">
                                    <button type="submit" class="btn btn-primary btn-block">
                                        Login
                                    </button>
                                </div>
                            </form>
                            <p  class="my-1">Belum punya akun? Silahkan <a href="{{ route('register') }}" class="">Register</a></p>
                            <p  class="my-1">Lupa password? <a href="{{ route('password.request') }}" class="">Reset Password</a></p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
