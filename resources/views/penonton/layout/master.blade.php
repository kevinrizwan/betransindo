@include('penonton.layout.top')

<body>

    <!-- ======= Header ======= -->
    @include('penonton.layout.header')
    <!-- End Header -->

    <!-- ======= Sidebar ======= -->
    @include('penonton.layout.sidebar')
    <!-- End Sidebar-->

    @yield('content')

    <!-- End #main -->

    <!-- ======= Footer ======= -->
    @include('penonton.layout.bottom')

</body>

</html>