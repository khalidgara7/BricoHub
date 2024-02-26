
<!doctype html>
<html lang="en">

    <head>
        @include('layouts.head')
        <meta charset="UTF-8">
        <meta name="viewport"
              content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
    </head>
    <body>
    <!--  navbar -->
    @include('layouts.navbar')

    @yield('content')

    @include('layouts.script')

    </body>
    @include('layouts.footer')

</html>
