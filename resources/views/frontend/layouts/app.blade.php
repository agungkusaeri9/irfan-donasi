<!DOCTYPE HTML>
<html>

    <x-Frontend.Head :title="$title ?? '-'"></x-Frontend.Head>
<body>

    <x-Frontend.Navbar ></x-Frontend.Navbar>

    <div style="margin-top: 80px;min-height:500px;">
        @yield('content')
    </div>

    <!-- ======= Footer ======= -->
    <x-Frontend.Navbar></x-Frontend.Navbar>

    <x-Frontend.Footer></x-Frontend.Footer>


</body>

</html>
