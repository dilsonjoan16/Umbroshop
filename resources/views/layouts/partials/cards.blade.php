@extends('layouts.plantilla')
@section('title', 'UmbroShop'.$umbroshop->categoria)
@section('content')
<script>
    function comprar(){
        alert('Su orden sera atendida en brevedad, se le dara una respuesta en las proximas 24 horas para llenar el formulario de pre-compra. Muchas gracias por preferirnos, seguimos trabajando para ser el numero 1 Umbro Inc.')
    }
</script>
@foreach ($umbroshop as $umbroshops)
<div class="container mx-auto">
    <div class="row mx-auto py-4">
        <div class="col-6 col-lg-4 px-4 py-2">
            <div class="card bg-dark text-white" style="width: 14rem;">
                <img class="img-fluid" src="{{ asset('img/umbro_violet.ico') }}" class="card-img-top" alt="Articulo-umbro">
                    <div class="card-body">
                        <h5 class="card-title">
                            {{$umbroshop->nombre}}
                        </h5>
                        <p class="card-text">
                            Articulo deportivo de alta eficiencia
                        </p>
                    </div>
                    <ul class="list-group list-group-flush">
                        <li class="list-group-item bg-dark">
                            <!--<strong>-->
                                Categoria: {{$umbroshop->categoria}}
                            <!--</strong>-->
                        </li>
                        <li class="list-group-item bg-dark">
                            <!--<strong>-->
                                Codigo: {{$umbroshop->codigo}}
                            <!--</strong>-->
                        </li>
                        <li class="list-group-item bg-dark">
                            <!--<strong>-->
                                Talla: {{$umbroshop->talla}}
                            <!--</strong>-->
                        </li>
                    </ul>
                    @auth
                        <div class="card-body d-flex justify-content-between mx-auto">
                            <div class="row">
                            <a href="{{route('umbroshop.edit',$umbroshop)}}" class="card-link">
                                <button class="btn btn-sm umbroboton" type="submit">Actualizar</button> 
                            </a>
                            <form action="{{route('umbroshop.destroy',$umbroshop)}}" method="post">
                                @csrf
                                @method('delete')
                                <button class="btn btn-sm umbroboton mx-1" type="submit">Eliminar</button>
                                </form>
                            </div>
                        </div>
                    @else
                    <div class="card-body d-flex justify-content-between mx-auto">
                        <a href="{{route('umbroshop.show',$umbroshop)}}" class="card-link">
                            <button class="btn btn-lg umbroboton btn-block" type="submit" onclick="comprar()">
                                Comprar
                            </button> 
                        </a>
                    </div>
                    @endauth
                </div>
            </div>
            <div class="col-6 col-lg-3 px-4 py-2">
                <div class="card bg-dark text-white" style="width: 14rem;">
                    <img class="img-fluid" src="{{ asset('img/umbro_violet.ico') }}" class="card-img-top" alt="Articulo-umbro">
                        <div class="card-body">
                            <h5 class="card-title">
                                {{$umbroshop->nombre}}
                            </h5>
                            <p class="card-text">
                                Articulo deportivo de alta eficiencia
                            </p>
                        </div>
                        <ul class="list-group list-group-flush">
                            <li class="list-group-item bg-dark">
                                <!--<strong>-->
                                    Categoria: {{$umbroshop->categoria}}
                                <!--</strong>-->
                            </li>
                            <li class="list-group-item bg-dark">
                                <!--<strong>-->
                                    Codigo: {{$umbroshop->codigo}}
                                <!--</strong>-->
                            </li>
                            <li class="list-group-item bg-dark">
                                <!--<strong>-->
                                    Talla: {{$umbroshop->talla}}
                                <!--</strong>-->
                            </li>
                        </ul>
                        @auth
                            <div class="card-body d-flex justify-content-between mx-auto">
                                <div class="row">
                                <a href="{{route('umbroshop.edit',$umbroshop)}}" class="card-link">
                                    <button class="btn btn-sm umbroboton" type="submit">Actualizar</button> 
                                </a>
                                <form action="{{route('umbroshop.destroy',$umbroshop)}}" method="post">
                                    @csrf
                                    @method('delete')
                                    <button class="btn btn-sm umbroboton mx-1" type="submit">Eliminar</button>
                                    </form>
                                </div>
                            </div>
                        @else
                        <div class="card-body d-flex justify-content-between mx-auto">
                            <a href="{{route('umbroshop.show',$umbroshop)}}" class="card-link">
                                <button class="btn btn-lg umbroboton btn-block" type="submit" onclick="comprar()">
                                    Comprar
                                </button> 
                            </a>
                        </div>
                        @endauth
                    </div>
                </div>
        </div>
    </div>
            @endforeach
            
                     
                
@endsection