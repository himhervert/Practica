<!DOCTYPE html>
<html lang="{{app()->getLocale()}}">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <link href="{{asset('css/additional.css')}}" rel="stylesheet" type="text/css">
    <link href="{{asset('css/app.css')}}" rel="stylesheet" type="text/css">
    <script type="text/javascript" src="{{URL::asset('js/app.js')}}"></script>
    <title>Sistema de anuncios UDICEI</title>
</head>
<body>
    <div class="container bg-dark" id="main-container">
        <div id="main-header" class= "no-gutters">
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
        <nav class="navbar navbar-dark bg-dark navbar-expand-md">
            <a href="#" class="navbar-brand">L</a>
            <button class="navbar-toggler" data-toggle="collapse" data-target="#Menu"><span class="navbar-toggler-icon"></span></button>
            <div id="Menu" class="collapse navbar-collapse">
                <ul class="navbar-nav mr-auto">
                    <li class="nav-item"><a href="#" class="nav-link">Inicio</a></li>
                    <li class="nav-item"><a href="#" class="nav-link">Anuncios</a></li>
                    <li class="nav-item"><a href="#" class="nav-link">Contacto</a></li>
                </ul>
                <ul class="navbar-nav ml-auto">
                    <li class="nav-item"><a href="#" class="nav-link">Iniciar Sesion</a></li>
                </ul>
        </div>
        </nav>
        <div id="main-content">
        
        </div>
        <div id="main-footer">
        </div>
    </div>
    </body>
    

</html>