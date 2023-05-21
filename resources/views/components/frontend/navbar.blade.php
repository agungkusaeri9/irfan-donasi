<!-- Navigation -->
<nav id="navbarExample" class="navbar navbar-expand-lg fixed-top navbar-light" aria-label="Main navigation">
    <div class="container">

        <!-- Image Logo -->
        <a class="navbar-brand logo-image" href="{{ route('home') }}">
            <img src="{{ $setting->image() }}" alt="alternative">
        </a>

        <!-- Text Logo - Use this if you don't have a graphic logo -->
        <!-- <a class="navbar-brand logo-text" href="{{ route('home') }}">Zinc</a> -->

        <button class="navbar-toggler p-0 border-0" type="button" id="navbarSideCollapse"
            aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="navbar-collapse offcanvas-collapse" id="navbarsExampleDefault">
            <ul class="navbar-nav ms-auto navbar-nav-scroll">
                <li class="nav-item mx-2">
                    <a class="nav-link" aria-current="page" href="{{ route('home') }}">Home</a>
                </li>
                <li class="nav-item mx-2">
                    <a class="nav-link" href="{{ route('artikel.index') }}">Berita</a>
                </li>
                @foreach ($categories as $category)
                    <li class="nav-item mx-2">
                        <a class="nav-link"
                            href="{{ route('campaign.category', $category->slug) }}">{{ $category->name }}</a>
                    </li>
                @endforeach
                <li class="nav-item mx-2">
                    <a class="nav-link" href="{{ route('zakat.index') }}">Zakat</a>
                </li>
                <li class="nav-item mx-2">
                    <a class="nav-link" href="{{ route('relawan.index') }}">Relawan</a>
                </li>
                <li class="nav-item mx-2">
                    <a class="nav-link" href="{{ route('kerjasama.index') }}">Kerjasama</a>
                </li>
                <li class="nav-item mx-2">
                    <a class="nav-link" href="{{ route('faq') }}">FAQ</a>
                </li>
                <li class="nav-item mx-2">
                    <a class="nav-link" href="{{ route('about') }}">About</a>
                </li>

            </ul>

            @auth
                <ul class="nav navbar-nav">
                    <li class="nav-item mx-2 dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="dropdown01" data-bs-toggle="dropdown"
                            aria-expanded="false">
                            {{ auth()->user()->name }}
                        </a>
                        <ul class="dropdown-menu" aria-labelledby="dropdown01">
                            <li><a class="dropdown-item" href="{{ route('profile.index') }}">Profile</a></li>
                            <li>
                                <a class="dropdown-item" href="{{ route('transaction.index') }}">Riwayat Donasi</a>
                            </li>
                            <li><a class="dropdown-item" href="{{ route('change-password.index') }}">Ganti Password</a>
                            </li>
                            <li><a class="dropdown-item" href="javascript:void(0)"
                                    onclick="document.getElementById('formLogout').submit()">Keluar</a></li>
                            <form action="{{ route('logout') }}" id="formLogout" method="post" class="d-inline">
                                @csrf
                            </form>
                        </ul>
                    </li>
                </ul>
            @else
                <span class="nav-item">
                    <a class="btn-solid-sm" href="{{ route('login') }}">Login</a>
                </span>
            @endauth
        </div> <!-- end of navbar-collapse -->
    </div> <!-- end of container -->
</nav> <!-- end of navbar -->
<!-- end of navigation -->
