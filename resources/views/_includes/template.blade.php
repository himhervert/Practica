<!DOCTYPE html>
<html lang="{!!app()->getLocale()!!}" class="h-100">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <link href="{{asset('css/app.css')}}" rel="stylesheet" type="text/css">
    <link href="{{asset('css/additional.css')}}" rel="stylesheet" type="text/css">
    <script type="text/javascript" src="{{URL::asset('js/app.js')}}"></script>
    <title></title>
</head>

<body class="h-100">
    <div id="main-container" class="container-fluid h-100">
    @include('_includes/nav/header')
        <!--Header-->
    @include('_includes/nav/topnav')
        <!--Vista Parcial -->
        @yield('content')
        <!--Plantilla -->
    @include('_includes/nav/botnav')
        <!--Footer-->
    </div>
</body>

</html>