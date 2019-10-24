<!DOCTYPE html>
<html lang="fa">
<head>
    <meta charset="UTF-8">
    <meta content="width=device-width, initial-scale=1" name="viewport"/>
    <title>@yield('title')</title>
    <link rel="icon" href="{{asset('images/favicon.ico')}}" type="image/x-icon">
    <link href="{{asset('css/app.min.css')}}" rel="stylesheet">
    <link href="{{asset('js/bundles/materialize-rtl/materialize-rtl.min.css')}}" rel="stylesheet">
    <link href="{{asset('css/style.css')}}" rel="stylesheet"/>
    <link href="{{asset('css/all-themes.css')}}" rel="stylesheet"/>
    <link rel="manifest" href="http://localhost/AfraAdmin/manifest.json">
</head>
<body class="light rtl">
<div class="overlay"></div>
<nav class="navbar">
    @include('layouts.profile')
</nav>
<div>
    @include('layouts.nav')
</div>
<section class="content">
    @yield('main')
</section>
<script src="{{asset('js/app.min.js')}}"></script>
<script src="{{asset('js/afra.app.js')}}"></script>
<script src="{{asset('js/jquery.min.js')}}"></script>
<script src="{{asset('js/chart.min.js')}}"></script>
<script src="{{asset('js/admin.js')}}"></script>
<script src="{{asset('js/todo.js')}}"></script>
<script>
    Pushe.init("0gr643on644xooqg");
    Pushe.subscribe();
</script>
</body>
</html>
