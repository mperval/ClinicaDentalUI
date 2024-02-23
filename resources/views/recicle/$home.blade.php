@extends('layouts.app')

    <style>
        #background-image {
            background-image: url('/images/lago.jpg');
            background-size: cover; /* para cubrir todo el contenedor */
            background-position: center; /* para centrar la imagen */
            height: 100vh; /* ajustar la altura al tamaño de la ventana */
        }
    </style>

@section('content')
    <div id="background-image"> <!-- Agregar la clase background-image aquí -->
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-md-8">
                    <div class="card">
                        <div class="card-header">{{ __('ADMINISTRACIÓN DE CLINICA DENTAL') }}</div>

                        <div class="card-body d-flex justify-content-between align-items-center">
                            @if (session('status'))
                                <div class="alert alert-success" role="alert" >
                                    {{ session('status') }}
                                </div>
                            @endif

                            {{ __('PRODUCTOS') }}

                            <!-- Envolver el botón en un div con la clase "float-right" -->
                            <div class="float-right">
                                <a href="{{ route('products.index') }}" class="btn btn-primary">{{ __('Administrar Productos') }}</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection