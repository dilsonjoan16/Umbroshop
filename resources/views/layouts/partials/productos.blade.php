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
                                <!--<a href="{`{ route('articulos.category', $producto) }}" class="card-link">-->
                                    <!--<button class="btn btn-lg umbroboton btn-block" type="submit" onclick="comprar()">
                                        Comprar
                                    </button>-->
                                    <!-- Button trigger modal -->
<button type="button" class="btn btn-lg umbroboton btn-block" data-toggle="modal" data-target="#exampleModalCenter">
  Comprar
</button>

<!-- Modal -->
<div class="modal fade" id="exampleModalCenter" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLongTitle">{{$category->nombre}}</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">
                Estimado cliente, agradecemos su interes en nuestros productos! 
                Lamentablemente, no tenemos en inventario el producto seleccionado.
                Pero no te preocupes! Seras el primero en recibir una notificacion
                avisandote que ya existe e nuestro inventario para que puedas adquirirlo. <br>
                <i>Muchas gracias por preferir a Umbro Inc.</i>
            </span>
        </button>
      </div>
      <div class="modal-body">
        ...
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
        <a href="{{ route('umbroshop.contactanos.index') }}" class="card-link">
        <button type="button" class="btn btn-primary">Envianos un recordatorio</button>
        </a>
      </div>
    </div>
  </div>
</div>
                                <!--</a>-->
                            </div>
                        @endauth
                    </div>
                @endforeach

            </div>
        </div>


    </div>


@endsection
