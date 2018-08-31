<!DOCTYPE html>
<html lang="{!!app()->getLocale()!!}">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <link href="{{asset('css/additional.css')}}" rel="stylesheet" type="text/css">
    <link href="{{asset('css/app.css')}}" rel="stylesheet" type="text/css">
    <script type="text/javascript" src="{{URL::asset('js/app.js')}}"></script>
    <title></title>
</head>
<body>
    <div id="main-container">
        <div id="main-header" class= "no-gutters bg-dark">
            <div class="row align-items-center">    
                <div class="col-6 col-sm-6 col-md-3 col-lg-3 d-xl-none">
                    <img src=" {{asset('img/uaslp.png')}} " alt="logo uaslp" class="img-fluid bg-h">
                </div>
                <div class="col-6 col-sm-6 col-md-3 col-lg-3 d-xl-none">
                    <img src=" {{asset('img/ingenieria_blanco.png')}} " alt="logo facultad de ingenieria" class="img-fluid bg-h">
                </div>
                <div class="d-none d-md-block col-md-6 col-lg-6 d-xl-none position-relative">
                    <div class="row">
                        <div class="my-auto">
                            <img src="{{asset('img/fondo.png')}}" alt="" class="img-fluid bg-h">
                        </div>
                        <div class="position-absolute mx-auto">
                            <img src="{{asset('img/titulo_acei.png')}}" alt="" class="img-fluid bg-h">
                        </div>
                    </div>
                </div>
            </div>
        </div>
        @yield('navbar')

        @yield('content')

        @yield('footer')
    </div>
    </body>
    

</html>