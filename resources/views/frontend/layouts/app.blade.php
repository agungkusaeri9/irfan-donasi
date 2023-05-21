<!DOCTYPE HTML>
<html>
    <x-Frontend.Head :title="$title ?? 'Donasi'"></x-Frontend.Head>
<body>

    <x-Frontend.Navbar ></x-Frontend.Navbar>

    <div style="margin-top: 120px;min-height:500px;">
        @yield('content')
    </div>

    <!-- ======= Footer ======= -->

    <x-Frontend.Footer></x-Frontend.Footer>


</body>

</html>
