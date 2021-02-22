@extends('layouts.plantilla')
@section('title','UmbroShop-Create-Category')
@section('content')
@if (session('info1'))
<script>
    alert("{{session('info1')}}");
</script>
@else

<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header bg-dark text-white display-4">{{ __('UmbroShop Create Category') }}</div>

                <div class="card-body bg-dark text-white">
                    <form action="{{route('category.create')}}" method="POST" autocomplete="off">
                        @csrf

                        <div class="form-group row">
                            <label for="nombre" class="col-md-4 col-form-label text-md-right">{{ __('Nombre de la categoria') }}</label>

                            <div class="col-md-6">
                                <input id="nombre" type="text" class="form-control" name="nombre" value="{{old('nombre')}}" required autofocus>

                                @error('nombre')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row mb-0">
                            <div class="col-md-6 offset-md-4">
                                <button type="submit" class="btn btn-block btn-lg umbroboton text-white">
                                    {{ __('Crear categoria') }}
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
@endif



@endsection