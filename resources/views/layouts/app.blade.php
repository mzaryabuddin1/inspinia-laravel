<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>My Laravel App</title>

    <link href="{{ asset('theme/css/bootstrap.min.css') }}" rel="stylesheet">
    <link href="{{ asset('theme/font-awesome/css/font-awesome.css') }}" rel="stylesheet">

    <link href="{{ asset('theme/css/animate.css') }}" rel="stylesheet">
    <link href="{{ asset('theme/css/style.css') }}" rel="stylesheet">

</head>
<body>

    <div id="wrapper">
        @include('partials.sidebar')

        <div id="page-wrapper" class="gray-bg">
            @include('partials.navbar')
            @include('partials.breadcrumb')

            @yield('content')

            @include('partials.footer')
        </div>
    </div>


    <!-- Mainly scripts -->
    <script src="{{ asset('theme/js/jquery-3.1.1.min.js') }}"></script>
    <script src="{{ asset('theme/js/popper.min.js') }}"></script>
    <script src="{{ asset('theme/js/bootstrap.js') }}"></script>
    <script src="{{ asset('theme/js/plugins/metisMenu/jquery.metisMenu.js') }}"></script>
    <script src="{{ asset('theme/js/plugins/slimscroll/jquery.slimscroll.min.js') }}"></script>

    <!-- Custom and plugin javascript -->
    <script src="{{ asset('theme/js/inspinia.js') }}"></script>
    <script src="{{ asset('theme/js/plugins/pace/pace.min.js') }}"></script>
</body>
</html>
