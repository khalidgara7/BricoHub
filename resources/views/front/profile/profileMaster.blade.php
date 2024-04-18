<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Employee</title>
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/style.css') }}" />
    <link rel="stylesheet" href="{{ asset('assets/css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/fontawsom-all.min.css') }}">
    <link rel="shortcut icon" href="{{ asset('assetspro/images/fav.jpg') }}">
    <link rel="stylesheet" href="{{ asset('assetspro/css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assetspro/css/fontawsom-all.min.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('assetspro/css/style.css') }}" />


</head>

<body>

    @include('Layouts.navbar_start')
    <div class="container-fluid">
        <div class="cover">
            <div class="cover-layer">
                
                @yield('profileContent')

            </div>
        </div>
    </div>

</body>

</html>
