<!DOCTYPE html>
<html lang="zxx" class="js">

@include('Admin.layouts.head')

<body class="nk-body npc-invest bg-lighter ">
<div class="nk-app-root">
    <!-- wrap @s -->
    <div class="nk-wrap ">
        @include('Admin.layouts.header')

        <!-- content @s -->
            @yield('content')
        <!-- content @e -->


        @include('Admin.layouts.footer')

    </div>
    <!-- wrap @e -->
</div>
    @include('Admin.layouts.script')
</body>

</html>
