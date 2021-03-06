<!DOCTYPE html>
<html lang="en-US">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>@yield('title')</title>
    <link rel="stylesheet" href="{{ asset('css/master.css') }}">      
    <link rel="stylesheet" href="{{ asset('css/portfolio.css') }}">
    <link rel="stylesheet" href="{{ asset('fontawesome-free-5.13.0-web/css/all.min.css') }}">
    <link rel="stylesheet" href="{{ asset('css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('css/home.css') }}">
    <link rel="stylesheet" href="{{ asset('css/service.css') }}">
    <link href="https://fonts.googleapis.com/css2?family=Patua+One&family=Rokkitt:wght@500;800&family=Russo+One&display=swap" rel="stylesheet">
    {{-- yang diatas google fonst buat halaman home   --}}

</head>
    <body>

        @include('include.header')

        @yield('content')

        @include('include.footer')

        <script type="text/javascript" src="{{ asset('js/jquery-3.5.1.slim.min.js') }}"></script>
        <script type="text/javascript" src="{{ asset('js/popper.min.js') }}"></script>
        <script type="text/javascript" src="{{ asset('js/bootstrap.min.js') }}"></script>
    </body>
</html>