@extends('auth.app')
@section('title', 'Login')
@section('content1')
    <section class="vh-100" style="background-color: #9A616D;">
        <div class="container py-5 h-100">
            <div class="row d-flex justify-content-center align-items-center h-100">
                <div class="col col-xl-10">
                    <div class="card" style="border-radius: 1rem;">
                        <div class="row g-0">
                            <div class="col-md-6 col-lg-5 d-none d-md-block">
                                <img src="https://mdbcdn.b-cdn.net/img/Photos/new-templates/bootstrap-login-form/img1.webp"
                                    alt="login form" class="img-fluid" style="border-radius: 1rem 0 0 1rem;" />
                            </div>
                            <div class="col-md-6 col-lg-7 d-flex align-items-center">
                                <div class="card-body p-4 p-lg-5 text-black">

                                    <form>

                                        <div class="d-flex align-items-center mb-3 pb-1">
                                            <i class="fas fa-cubes fa-2x me-3" style="color: #ff6219;"></i>
                                            <span class="h1 fw-bold mb-0">Logo</span>
                                        </div>

                                        <h5 class="fw-normal mb-3 pb-3" style="letter-spacing: 1px;">Sign into your account
                                        </h5>

                                        <div class="form-outline mb-4">
                                            <input type="email" id="form2Example17"
                                                class="form-control form-control-lg" />
                                            <label class="form-label" for="form2Example17">Email address</label>
                                        </div>

                                        <div class="form-outline mb-4">
                                            <input type="password" id="form2Example27"
                                                class="form-control form-control-lg" />
                                            <label class="form-label" for="form2Example27">Password</label>
                                        </div>

                                        <div class="pt-1 mb-4">
                                            <button class="btn btn-dark btn-lg btn-block" type="button">Login</button>
                                        </div>

                                        <a class="small text-muted" href="#!">Forgot password?</a>
                                        <p class="mb-5 pb-lg-2" style="color: #393f81;">Don't have an account? <a
                                                href="#!" style="color: #393f81;">Register here</a></p>
                                        <a href="#!" class="small text-muted">Terms of use.</a>
                                        <a href="#!" class="small text-muted">Privacy policy</a>
                                    </form>

                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
@section('content')
    <section class="section">
        <div class="container-fluid">
            <div class="row justify-content-center" style="height: 100vh">
                <div class="col-md-5 align-self-center" style="padding-right: 80px;padding-left: 80px">
                    <div class="login-brand text-center mb-5">
                        <a href="{{ route('home') }}">
                            <img src="{{ $setting->image() }}" alt="logo" width="100"
                                class="shadow-light rounded-circle">
                        </a>
                    </div>

                    <div class="card card-primary">
                        <div class="card-header text-center">
                            <h5 class="font-weight-normal mt-2">Login</h5>
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
                            <p class="my-1">Belum punya akun? Silahkan <a href="{{ route('register') }}"
                                    class="">Register</a></p>
                            {{-- <p class="my-1">Lupa password? <a href="{{ route('password.request') }}"
                                    class="">Reset Password</a></p> --}}
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
