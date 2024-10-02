<!DOCTYPE html>
<html lang="en-us">

<head>
    <meta charset="utf-8">
    <title>@yield('title')</title>

    @include('frontends.layouts.patials.head')
</head>

<body>
    <!-- navigation -->
    <header class="navigation fixed-top">
        <div class="container">
            @include('frontends.layouts.patials.navbar')

        </div>
    </header>
    <!-- /navigation -->

    <!-- start of banner -->
    <div class="banner text-center">
        @include('frontends.layouts.patials.header')
    </div>
    <!-- end of banner -->
    @yield('content')

    <footer class="footer">
        @include('frontends.layouts.patials.footer')
    </footer>

    <!-- JS Plugins -->
    @include('frontends.layouts.patials.js-frontend')

</html>
