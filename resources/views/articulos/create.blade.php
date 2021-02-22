@extends('layouts.plantilla')
@section('title','UmbroShop-Create')
@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header bg-dark text-white display-4">{{ __('UmbroShop Create Article') }}</div>

                <div class="card-body bg-dark text-white">
                    <form action="{{route('umbroshop.store')}}" method="post" autocomplete="off" enctype="multipart/form-data">
                        @csrf

                        <div class="form-group row">
                            <label for="nombre" class="col-md-4 col-form-label text-md-right">{{ __('Nombre del producto') }}</label>

                            <div class="col-md-6">
                                <input id="nombre" type="text" class="form-control" name="nombre" value="{{old('nombre')}}" required autofocus>

                                @error('nombre')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="codigo" class="col-md-4 col-form-label text-md-right">{{ __('Codigo del producto') }}</label>

                            <div class="col-md-6">
                                <input id="codigo" type="text" class="form-control" name="codigo" value="{{old('codigo')}}" required>

                                @error('codigo')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="categoria" class="col-md-4 col-form-label text-md-right">{{ __('Categoria del producto') }}</label>

                            <div class="col-md-6">
                                <input id="categoria" type="text" class="form-control" name="categoria" value="{{old('categoria')}}" required>

                                @error('categoria')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="talla" class="col-md-4 col-form-label text-md-right">{{ __('Talla del producto') }}</label>

                            <div class="col-md-6">
                                <input id="talla" type="text" class="form-control" name="talla" value="{{old('talla')}}" placeholder="Small, Medium, Large, # americano para botas" required>

                                @error('talla')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="precio" class="col-md-4 col-form-label text-md-right">{{ __('Precio del producto') }}</label>

                            <div class="col-md-6">
                                <input id="precio" type="number" class="form-control" name="precio" value="{{old('precio')}}" placeholder="El precio se estipula en US DOLLAR $" required>

                                @error('precio')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="file" class="col-md-4 col-form-label text-md-right">{{ __('Imagen del producto') }}</label>

                            <div class="col-md-6">
                                <input id="file" type="file" class="btn px-1 text-white" name="file" value="" accept="image/*" required>

                                @error('file')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row mb-0">
                            <div class="col-md-6 offset-md-4">
                                <button type="submit" class="btn btn-block btn-lg umbroboton text-white">
                                    {{ __('Crear producto') }}
                                </button>
                            </div>
                            <div class="col-md-6 offset-md-4 py-3">
                                <button type="submit" class="btn btn-block btn-lg umbroboton text-white">
                                    {{ __('Cancelar creacion')}}
                                    <a href="{{route('umbroshop.home')}}"></a>
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

    @if (session('info1'))
        <script>
            alert("{{session('info1')}}");
        </script>
    @endif


@endsection