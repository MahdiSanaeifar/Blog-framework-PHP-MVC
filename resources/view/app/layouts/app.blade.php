<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <!--[if IE]><meta http-equiv='X-UA-Compatible' content='IE=edge,chrome=1'><![endif]-->
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <meta name="description" content="">

    @include('app.layouts.head-tag')
    @yield('head-tag')
</head>

<body class="bg-light style-default style-rounded">

    <!-- Preloader -->
    <div class="loader-mask">
        <div class="loader">
            <div></div>
        </div>
    </div>

    <!-- Bg Overlay -->
    <div class="content-overlay"></div>
    
    @include('app.layouts.navbar')

    @yield('content')

    @include('app.layouts.footer')

    @include('app.layouts.scripts')

    @yield('script')

</body>

</html>
