<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Newstime24</title>

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <!-- Bootstrap CSS -->
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:400,600,700&display=swap" rel="stylesheet">

    <!-- CSS Libraries -->
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">
    <link href="{{asset('frontend/lib/slick/slick.css')}}" rel="stylesheet">
    <link href="{{asset('frontend/lib/slick/slick-theme.css')}}" rel="stylesheet">
    <link href="{{asset('frontend/css/style.css')}}" rel="stylesheet">



    @stack('css')
</head>

<body >

    {{-- navbar section --}}



    {{-- Slider --}}

    {{-- main content --}}
    @include('frontend.layouts.nav')

    <div class="">

        @yield('content')

    </div>
    {{-- footer include --}}
    @include('frontend.layouts.footer')




        <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.bundle.min.js"></script>
        <script src="{{asset('frontend/lib/easing/easing.min.js')}}"></script>
        <script src="{{asset('frontend/lib/slick/slick.min.js')}}"></script>
        <script src="{{asset('frontend/js/main.js')}}"></script>



    @stack('js')





    {{-- JS --}}

</body>

</html>
