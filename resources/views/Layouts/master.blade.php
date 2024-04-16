<!doctype html>
<html lang="en">

@include('layouts.head')

<body>
    <!--  navbar -->
    @include('Layouts.navbar_start')

    @yield('content')
    @include('layouts.footer')

    @include('layouts.script')

</body>

</html>
