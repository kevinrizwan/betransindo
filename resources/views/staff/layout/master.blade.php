@include('staff.layout.top')

<body>

    <!-- ======= Header ======= -->
    @include('staff.layout.header')
    <!-- End Header -->

    <!-- ======= Sidebar ======= -->
    @include('staff.layout.sidebar')
    <!-- End Sidebar-->

    @yield('content')

    <!-- End #main -->

    <!-- ======= Footer ======= -->
    @include('staff.layout.bottom')

</body>

</html>