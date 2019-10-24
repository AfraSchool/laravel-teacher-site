<!DOCTYPE html>
<html lang="fa">
<head>
    <meta charset="utf-8">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>ورود - پرتال دبیرستان غیر دولتی افرا</title>    <!-- CSS Stylesheets -->
    <link rel="stylesheet" type="text/css" href="{{asset('css/login/bootstrap4-rtl.min.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('css/login.css')}}"/>
    <link rel="manifest" href="http://localhost/AfraAdmin/manifest.json">
</head>
<body class="rtl">
<div class="limiter">
    @yield('content')
</div>

<script src="{{asset('js/jquery.min.js')}}"></script>
<script src="{{asset('js/md5.min.js')}}"></script>
<script src="{{asset('js/afra.app.js')}}"></script>

</body>
</html>
