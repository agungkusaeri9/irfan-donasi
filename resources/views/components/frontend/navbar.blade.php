<nav class="navbar navbar-expand-lg fixed-top">
    <div class="container">
        <a class="navbar-brand" href="{{ route('home') }}"> Hayu Donasi </a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse justify-content-end" id="navbarNav" data-toggle="collapse" data-target=".navbar-collapse">
            <ul class="navbar-nav">
                <li class="nav-item dropdown nav-donasikan">
                    <a class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown"
                        aria-expanded="false">
                        Donasikan
                    </a>
                    <ul class="dropdown-menu">
                        @foreach ($categories as $cat)
                            <li><a class="dropdown-item"
                                    href="{{ route('campaign.category', $cat->slug) }}">{{ $cat->name }}</a></li>
                        @endforeach
                    </ul>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('artikel.index') }}">Blog</a>
                </li>

                {{-- <li class="nav-item">
                    <a class="nav-link" href="#">Galang Dana</a>
                </li> --}}

                <li class="nav-item">
                    <a class="nav-link" href="{{ route('invoice.index') }}">Cek Invoice</a>
                </li>
                <li class="nav-item dropdown nav-tentang-kami">
                    <a class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown"
                        aria-expanded="false">
                        Tentang Kami
                    </a>
                    <ul class="dropdown-menu">
                        <li><a class="dropdown-item" href="{{ route('about') }}">Tentang Kami</a></li>
                        {{-- <li><a class="dropdown-item" href="{{ route('trans') }}">Transparansi</a></li> --}}
                        <li><a class="dropdown-item" href="{{ route('faq') }}">FAQ</a></li>
                    </ul>
                </li>
                @auth
                    <li class="nav-item dropdown nav-tentang-kami">
                        <a class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown"
                            aria-expanded="false">
                            {{ auth()->user()->name }}
                        </a>
                        <ul class="dropdown-menu">
                            @if (auth()->user()->getRoleNames()->first() !== 'Donatur')
                            <li><a class="dropdown-item" href="{{ route('admin.dashboard') }}">Dashboard</a></li>
                            @endif
                            <li><a class="dropdown-item" href="{{ route('profile.index') }}">Profile</a></li>
                            <li><a class="dropdown-item" href="javascript:void()"
                                    onclick="document.getElementById('formLogout').submit()">Logout</a></li>
                            <form action="{{ route('logout') }}" method="post" id="formLogout">
                                @csrf
                            </form>
                        </ul>
                    </li>
                @else
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('login') }}">Masuk</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('register') }}">Daftar</a>
                    </li>
                @endauth
            </ul>
        </div>
    </div>
</nav>


{{-- navbar mobile --}}
<div class="navbar-mobile my-0 py-0 d-lg-none d-xl-none " >
    <div class="container-fluid">
        <div class="row justify-content-between">
            <div class="col py-2">
               <div class="text-center">
                <a href="{{ route('home') }}" class="text-light text-decoration-none">
                    <i class="fas fa-home"></i><br>
                    <span>Beranda</span>
                </a>
               </div>
            </div>
            <div class="col py-2">
              <div class="text-center">
                <a href="{{ route('campaign.index') }}" class="text-light text-decoration-none">
                    <i class="fas fa-hand-holding-medical"></i><br>
                    <span>Campaign</span>
                </a>
              </div>
            </div>
            <div class="col py-2">
                <div class="text-center">
                  <a href="{{ route('transaction.index') }}" class="text-light text-decoration-none">
                      <i class="fas fa-donate"></i><br>
                      <span>Donasi Saya</span>
                  </a>
                </div>
              </div>
            <div class="col py-2">
               <div class="text-center">
                <a href="{{ route('profile.index') }}" class="text-light text-decoration-none">
                    <i class="fas fa-user"></i><br>
                    @auth
                    <span>Akun</span>
                    @else
                    <span>Login</span>
                    @endauth
                </a>
               </div>
            </div>
        </div>
    </div>
</div>
