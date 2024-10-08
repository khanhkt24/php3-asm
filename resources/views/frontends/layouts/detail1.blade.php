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

    <div class="py-4"></div>
    @yield('content-detail')


    <footer class="footer">
        @include('frontends.layouts.patials.footer')
    </footer>


    @include('frontends.layouts.patials.js-frontend')

</html>
