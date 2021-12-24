<!DOCTYPE html>
<html class="no-js" lang="fa">

<head>
    @include('app.layouts.head-tag')
    @yield('head-tag')
</head>

<body id="wrapper" class="wrapper">

    <!-- Preloader Start Here -->
    <!-- <div id="preloader">
        <div class="text-center middle">
            <div class="lds-ellipsis">
                <div></div>
                <div></div>
                <div></div>
                <div></div>
            </div>
        </div>
    </div> -->
    <!-- Preloader End Here -->

    @include('app.layouts.navbar')

    @yield('content')

    @include('app.layouts.footer')

    @include('app.layouts.scripts')

    @yield('script')

</body>

</html>
