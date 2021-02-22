@extends('layouts.plantilla')
@section('title','UmbroShop-Articulos')
@section('content')
    <div class="container">
        <div class="row d-flex justify-content-between">
            <div class="col-12 col-lg-4">
                <h1 class="display-4">
                    UmbroShop Productos
                </h1>
            </div> 
            <div class="col-12 col-lg-8">
                <p class="lead text-dark text-justify">
                    Categorias de productos ofrecidos por nuestra empresa Umbro Inc. Siendo referente en calidad, precio y alcance a nivel mundial, siempre satisfaciendo la demanda global y llegando a los mas altos estandares impuestos por el mercado para todos los atletas y aficionados al deporte en general.
                </p>
            </div>  
        </div>
            <hr>
            <ul class="list-group"> 
                @foreach ($articulos as $articulo)
                    <li class="list-group-item umbroboton mb-3 shadow-sm text-dark">
                        <a class="text-dark font-extrabold" href="{{route('articulos.category', [$articulo])}}">
                            {{$articulo->nombre}}
                        </a>
                    </li>
                @endforeach
                {{$articulos->links()}}
            </ul>

            
    </div>
@endsection