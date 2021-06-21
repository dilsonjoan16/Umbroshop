<header>
    <nav class="navbar navbar-light navbar-expand-lg bg-dark shadow-sm">
    <!--<div class="container bg-gray-700">-->
                <!-- logo -->
        <!--<div class="container col-span-4">-->
<div class="container">
        <a class="navbar-brand" href="{{route('umbroshop.home')}}"><img src="{{ asset('img/umbro_white.ico') }}" alt="umbro-logo">
            <span>
                <strong class="umbrocolor">
                    UmbroShop
                </strong>
            </span>
        </a>
        <button class="navbar-toggler bg-light" type="button" 
        data-toggle="collapse" 
        data-target="#navbarSupportedContent" 
        aria-controls="navbarSupportedContent" 
        aria-expanded="false" 
        aria-label="{{ __('Toggle navigation') }}">
            <span class="navbar-toggler-icon"></span>
        </button>

    <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <div class="d-flex justify-content-between">
        <!--</div>-->
                <!-- navbar -->
       <!-- <div class="navbar bg-white shadow-sm">-->
            <ul class="nav nav-pills">
                <li class="nav-item">
                    <a href="{{route('umbroshop.home')}}" class="nav-link {{request()->routeIs('umbroshop.home') ? 'active' : ''}}">Inicio</a>
                </li>
                <li class="nav-item">
                    <a href="{{route('umbroshop.index')}}" class="nav-link {{request()->routeIs('umbroshop.index') ? 'active' : ''}}">Nuestros Productos</a>
                </li>
            @auth
                <li class="nav-item">
                    <a href="{{route('umbroshop.create')}}" class="nav-link {{request()->routeIs('umbroshop.create') ? 'active' : ''}}">Crear Producto</a>
                </li>
                <!--<li class="nav-item">
                    <a href="{`{route('category.create')}}" class="nav-link {`{request()->routeIs('category.create') ? 'active' : ''}}">Crear Categoria</a>
                </li>-->
            @endauth
                <li class="nav-item">
                    <a href="{{route('umbroshop.contactanos.index')}}" class="nav-link {{request()->routeIs('umbroshop.contactanos.index') ? 'active' : ''}}">Contactanos</a>
                </li>
                <li class="nav-item">
                    <a href="{{route('nosotros')}}" class="nav-link {{request()->routeIs('nosotros') ? 'active' : ''}}">Nosotros</a>
                </li>
            </ul>
            <!--<div class="container col-span-2">-->
            <ul class="nav nav-pills">
                @auth
                <div>
                    <li class="nav-item">
                        <label class="nav-link text-white" for="">User: {{auth()->user()->name}}</label>
                    </li>
                </div>
                @else 
                <div>
                    <li class="nav-item">
                        <a href="{{route('register')}}" class="nav-link {{request()->routeIs('register') ? 'active' : ''}}">Registro</a>
                    </li>
                </div>
                @endauth
                @guest
                <li class="nav-item">
                    <a href="{{route('login')}}" class="nav-link {{request()->routeIs('login') ? 'active' : ''}}">Logueo</a>
                </li>
                @else 
                <li class="nav-item">
                    <button class="btn btn-sm umbroboton">
                        <a class="nav-link text-dark" href="#" onclick="event.preventDefault();
                        document.getElementById('logout-form').submit();"
                        >Cerrar sesion</a>
                    </button>
                </li>
                @endguest
                <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                    @csrf
                </form>
            </ul>
        </div>
    </div>
</div>
            <!--</div>-->
     <!--   </div>
    </div>-->
    </nav>
</header>