<!DOCTYPE html>
<html lang="{{app()->getLocale()}}">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="ACC">
    <meta name="author" content="ACC">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>{{ config('app.name', 'ACC') }}</title>

    <link rel="stylesheet" href="{{ asset('css/additional.css') }}">
    <link rel="stylesheet" href="{{ asset('components/bootstrap/dist/css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('components/metismenu/dist/metisMenu.min.css') }}">
    <link rel="stylesheet" href="{{ asset('components/bootstrap/site/docs/4.1/assets/css/doc.min.css') }}">
</head>

<body>
    <div id="main-container" class="container-fluid">
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
<script type="text/javascript" src="{{ asset('components/jquery/dist/jquery.min.js') }}"></script>
<script type="text/javascript" src="{{ asset('components/bootstrap/dist/js/bootstrap.min.js') }}"></script>
<script type="text/javascript" src="{{ asset('components/metismenu/dist/metisMenu.min.js') }}"></script>

</html>