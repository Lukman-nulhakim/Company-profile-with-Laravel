<!DOCTYPE html>
<html lang="en-US">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>@yield('title')</title>
    <link rel="stylesheet" href="{{ asset('css/components.css') }}">
    <link rel="stylesheet" href="{{ asset('css/icons.css') }}">
    <link rel="stylesheet" href="{{ asset('css/responsee.css') }}">    
    <link rel="stylesheet" href="{{ asset('css/template-style.css') }}">
    <link href='https://fonts.googleapis.com/css?family=Playfair+Display&subset=latin,latin-ext' rel='stylesheet' type='text/css'>
    <link href='https://fonts.googleapis.com/css?family=Open+Sans:400,300,700,800&subset=latin,latin-ext' rel='stylesheet' type='text/css'>
    <script type="text/javascript" src="{{ asset('js/jquery-1.8.3.min.js') }}"></script>
    <script type="text/javascript" src="{{ asset('js/jquery-ui.min.js') }}"></script>
    <link rel="stylesheet" href="{{ asset('css/master.css') }}">      
    <link rel="stylesheet" href="{{ asset('fontawesome-free-5.13.0-web/css/all.min.css') }}">

</head>
    <body class="size-1140">

        @include('include.header')

        <div class="jumbotron jumbotron-fluid">
            <div class="container">
                <img src="img/jumbotron1.jpg" class="img-fluid" alt="Responsive image">
            </div>
        </div>

        @yield('content')

        @include('include.footer')

        <script type="text/javascript" src="{{ asset('js/responsee.js') }}"></script>
        <script type="text/javascript" src="{{ asset('js/template-scripts.js') }}"></script>
    </body>
</html>