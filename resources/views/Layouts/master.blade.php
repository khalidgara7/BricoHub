<!doctype html>
<html lang="en">

@include('layouts.head')

<body>
    <!--  navbar -->
    @include('layouts.topnavbar')
    @include('layouts.navbar_start')

    @yield('content')
    @include('layouts.footer')

    @include('layouts.script')

</body>

</html>
