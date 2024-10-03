<!DOCTYPE html>
<html lang="en">

<head>
    @include('backends.layout.patial.header')
</head>

<body id="page-top">

    <!-- Page Wrapper -->
    <div id="wrapper">

        <!-- Sidebar -->
        @include('backends.layout.patial.sidebar')
        <!-- End of Sidebar -->

        <!-- Content Wrapper -->
        <div id="content-wrapper" class="d-flex flex-column mb-5">

            <!-- Main Content -->
            <div id="content">

                <!-- Topbar -->
                @include('backends.layout.patial.navbar')
                <!-- End of Topbar -->

                <!-- Begin Page Content -->
                @yield('content')
                <!-- /.container-fluid -->

            </div>
            <!-- End of Main Content -->

            <!-- Footer -->
            @include('backends.layout.patial.footer')
            <!-- End of Footer -->

        </div>
        <!-- End of Content Wrapper -->

    </div>
    <!-- End of Page Wrapper -->

    <!-- Scroll to Top Button-->
    @include('backends.layout.patial.logoutModel')

    @include('backends.layout.patial.jsAdmin')

</body>

</html>
