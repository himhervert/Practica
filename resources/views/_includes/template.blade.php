<!DOCTYPE html>
<html lang="{{app()->getLocale()}}">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    {{-- <link href="{{asset('css/app.css')}}" rel="stylesheet" type="text/css"> --}}
    <link href="{{asset('css/additional.css')}}" rel="stylesheet" type="text/css">
    <link rel="stylesheet" href="{{asset('\components\bootstrap\dist\css\bootstrap.min.css')}}">
    <title>{{ config('app.name', 'ACC') }}</title>
</head>

<body class="">
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
<script type="text/javascript" src="{{asset('\components\jquery\dist\jquery.min.js')}}"></script>

<script type="text/javascript" src="{{asset('\components\bootstrap\dist\js\bootstrap.min.js')}}"></script>
</html>