<!-- Navigation -->
<nav id="navbarExample" class="navbar navbar-expand-lg fixed-top navbar-light" aria-label="Main navigation">
    <div class="container">

        <!-- Image Logo -->
        <a class="navbar-brand logo-image" href="index.html"><img src="images/logo.svg" alt="alternative"></a>

        <!-- Text Logo - Use this if you don't have a graphic logo -->
        <!-- <a class="navbar-brand logo-text" href="index.html">Zinc</a> -->

        <button class="navbar-toggler p-0 border-0" type="button" id="navbarSideCollapse"
            aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="navbar-collapse offcanvas-collapse" id="navbarsExampleDefault">
            <ul class="navbar-nav ms-auto navbar-nav-scroll">
                <li class="nav-item mx-2">
                    <a class="nav-link active" aria-current="page" href="{{ route('home') }}">Home</a>
                </li>
                <li class="nav-item mx-2">
                    <a class="nav-link" href="{{ route('artikel.index') }}">Berita</a>
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
                            <li><a class="dropdown-item" href="article.html">Article Details</a></li>
                            <li>
                                <div class="dropdown-divider"></div>
                            </li>
                            <li><a class="dropdown-item" href="terms.html">Terms Conditions</a></li>
                            <li>
                                <div class="dropdown-divider"></div>
                            </li>
                            <li><a class="dropdown-item" href="privacy.html">Privacy Policy</a></li>
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
