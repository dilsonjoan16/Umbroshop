@include('layouts.plantilla')
@section('title', 'UmbroShop-Compra')
@section('content')
    <div class="umbroalto2 my-auto mx-auto">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-md-8">
                    <div class="card">
                        <div class="card-header bg-dark text-white">{{ __('Datos de Pre-compra') }}</div>

                        <div class="card-body bg-dark text-white">
                            <form action="{{ route('umbroshop.contactanos.store') }}" method="post" autocomplete="off">
                                @csrf

                                <div class="form-group row">
                                    <label for="nombre"
                                        class="col-md-4 col-form-label text-md-right">{{ __('Nombre del producto') }}</label>

                                    <div class="col-md-6">
                                        <label for="">{{ $umbroshop->nombre }}</label>
                                    </div>
                                </div>

                                <div class="form-group row">
                                    <label for="correo"
                                        class="col-md-4 col-form-label text-md-right">{{ __('Codigo del producto') }}</label>

                                    <div class="col-md-6">
                                        <input id="correo" type="text" class="form-control" name="correo" value="" required>

                                        @error('correo')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>
                                </div>

                                <div class="form-group row">
                                    <label for="mensaje"
                                        class="col-md-4 col-form-label text-md-right">{{ __('Mensaje que desea enviar') }}</label>

                                    <div class="col-md-6">
                                        <input id="mensaje" type="text" class="form-control" name="mensaje" required>

                                        @error('mensaje')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>
                                </div>

                                <div class="form-group row mb-0">
                                    <div class="col-md-6 offset-md-4">
                                        <button type="submit" class="btn btn-block btn-lg umbroboton text-white">
                                            {{ __('Enviar mensaje') }}
                                        </button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
