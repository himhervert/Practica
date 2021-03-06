<nav class=" navbar navbar-dark bg-dark navbar-expand-md d-xl-none">
    <a href="#" class="navbar-brand">L</a>
    <button class="navbar-toggler" data-toggle="collapse" data-target="#Menu"><span class="navbar-toggler-icon"></span></button>
    <div id="Menu" class="collapse navbar-collapse">
        <ul class="navbar-nav mr-auto">
            <li class="nav-item"><a href="{{route('ads')}}" class="nav-link">Anuncios</a></li>
            <li class="nav-item"><a href="{{route('about')}}" class="nav-link">Acerca de</a></li>
            <li class="nav-item"><a href="{{route('contact')}}" class="nav-link">Contacto</a></li>
        </ul>
        <ul class="navbar-nav ml-auto">
            @if (Route::has('login')) @auth
            <a href="{{ route('index') }}">Home</a> @else
            <li class="nav-item"><a href="#" class="nav-link">Iniciar Sesion</a></li>
            <li class="nav-item"><a href="{{ route('login') }}">Login</a></li>
            @endauth @endif
        </ul>
    </div>
</nav>