<!DOCTYPE html >
<html lang="en">

<head>
    <!-- METDATA -->
    <title>{{ config('app.name') }}</title>
    <meta charset="utf-8">
    <!-- FONT - OPEN SANS -->
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700" rel="stylesheet">
    <!-- FAVICON -->
    <link rel="icon" href="/favicon.png?3" type="image/x-icon" />
    <!-- JQUERY -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <!-- BOOTSTRAP 4 GRID -->
    <link rel="stylesheet" href="/lib/bootstrap/css/bootstrap-grid.min.css">
    <!-- P4 CSS -->
    <link href="/css/p4.min.css" type="text/css" rel="stylesheet">
    <!-- P4 JS -->
    <script src="/js/p4.min.js"></script>
    <link href="https://fonts.googleapis.com/css?family=Pangolin" rel="stylesheet">
</head>

<body>
    <div class="container">
        <header class="block header">
    @include('modules.header')
        </header>
        @yield('content')
    </div>
    <footer class="block footer">
    @include('modules.footer')
    </footer>
    <div class="login-overlay"></div>
</body>

</html>