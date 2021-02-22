@extends('layouts.plantilla')
@section('title', 'Umbroshop-Productos')
@section('content')
    <div class="d-flex flex-column justify-content-between">
        <h1 class="container content-center">
            Categoria: <span class="bg-dark text-white rounded px-1">{{ $category->nombre }}</span>
        </h1>

        <div class="container mx-auto">
            <div class="row mx-auto py-4">
                @foreach ($productos as $producto)
                    <div class="card bg-dark text-white mx-4 my-4 " style="width: 14rem;">
                        <img class="img-fluid px-1 py-1" src="{{asset('images/'.$producto->file)}}" class="card-img-top"
                            alt="Articulo-umbro" style="width: 500px;">
                        <div class="card-body">
                            <h5 class="card-title">
                                {{ $producto->nombre }}
                            </h5>
                            <p class="card-text">
                                Articulo deportivo de alta eficiencia
                            </p>
                        </div>
                        <ul class="list-group list-group-flush">
                            <li class="list-group-item bg-dark">
                                <!--<strong>-->
                                Categoria: {{ $producto->categoria }}
                                <!--</strong>-->
                            </li>
                            <li class="list-group-item bg-dark">
                                <!--<strong>-->
                                Codigo: {{ $producto->codigo }}
                                <!--</strong>-->
                            </li>
                            <li class="list-group-item bg-dark">
                                <!--<strong>-->
                                Talla: {{ $producto->talla }}
                                <!--</strong>-->
                            </li>
                            <li class="list-group-item bg-dark">
                                <!--<strong>-->
                                Precio: {{ $producto->precio }} $
                                <!--</strong>-->
                            </li>
                        </ul>
                        @auth
                            <div class="card-body d-flex justify-content-between mx-auto">
                                <div class="row">
                                    <a href="{{ route('umbroshop.edit', $producto) }}" class="card-link">
                                        <button class="btn btn-sm umbroboton" type="submit">Actualizar</button>
                                    </a>
                                    <form action="{{ route('umbroshop.destroy', $producto) }}" method="post">
                                        @csrf
                                        @method('delete')
                                        <button class="btn btn-sm umbroboton mx-1" type="submit">Eliminar</button>
                                    </form>
                                </div>
                            </div>
                        @else
                            <div class="card-body d-flex justify-content-between mx-auto">
                                <a href="{{ route('articulos.category', $producto) }}" class="card-link">
                                    <button class="btn btn-lg umbroboton btn-block" type="submit" onclick="comprar()">
                                        Comprar
                                    </button>
                                </a>
                            </div>
                        @endauth
                    </div>
                @endforeach

            </div>
        </div>


    </div>


@endsection
