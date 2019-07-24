<!doctype html>
<html class="no-js" lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>@yield('title') | PPU</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
    @yield('customCSS')
</head>
<body>
    
    @include('layouts/sidebarDashboard')
    @yield('contentDashboard')
    
    @yield('customScript')
    @include('sweet::alert')
</body>
</html>