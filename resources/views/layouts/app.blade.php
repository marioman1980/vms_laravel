<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>{{ config('app.name', 'VMS Secure Payments') }}</title>
    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>
    <!-- Fonts -->
    <link rel="dns-prefetch" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Oswald" rel="stylesheet">
    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="css/custom.css">
</head>

<body class="parallax">

    <nav class="navbar navbar-expand-md">
        <div class="container-fluid">
            <a class="navbar-brand" href="/"><img alt="VMS logo" src="/img/title_small.png" /></a>
            <!-- Toggler/collapsibe Button -->
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#collapsibleNavbar">
                <span class="navbar-toggler-icon"></span>
            </button>
            <!-- Navbar links -->
            <div class="collapse navbar-collapse" id="collapsibleNavbar">
                <ul class="navbar-nav ml-auto">
                    <li class="nav-item"><a class="nav-link" href="/">Home</a></li>
                    <li class="nav-item"><a class="nav-link" href="/help">Help</a></li>
                    <li class="nav-item"><a class="nav-link" href="/contact">Contact</a></li> 
                    <li class="nav-item"><a class="nav-link" href="/login">Log In</a></li> 
                </ul>
            </div> 
        </div>
    </nav>

    <main>
        @yield('content')
    </main>    

    <footer class="footer container">
        <small>
            <a href="#">VMS Secure Payments.</a> Powered by <a href="https://www.stripe.com/">Stripe</a>
        </small>
        <nav>
            <ul class="navbar-right">
                <small>
                    <li><a href="/help">Help</a></li>
                    <li><a href="/contact">Contact</a></li>
                    <li><a href="/privacy_policy">Privacy Policy</a></li>
                </small>
            </ul>
        </nav>
    </footer>
</body>
</html>    