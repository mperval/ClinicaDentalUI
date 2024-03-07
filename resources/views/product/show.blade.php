@extends('layouts.navbar2')

@section('template_title')
    {{ $product->name ?? __("Show Product") }}
@endsection

@section('content')

<section class="content container-fluid">
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    <div class="float-left">
                        <span class="card-title">{{ __('Visualizar') }} Product</span>
                    </div>
                </div>

                <div class="card-body">

                    <div class="form-group">
                        <strong>{{ __('Nombre') }}:</strong>
                        {{ $product->nombre }}
                    </div>
                    <div class="form-group">
                        <strong>{{ __('Descripción') }}:</strong>
                        {{ $product->descripcion }}
                    </div>
                    <div class="form-group">
                        <strong>{{ __('Precio') }}:</strong>
                        {{ $product->precio }}
                    </div>
                    <div class="form-group">
                        <strong>{{ __('Stock') }}:</strong>
                        {{ $product->stock }}
                    </div>

                </div>
            </div>
        </div>
    </div>
</section>
<div class="text-center">
        <a class="btn btn-primary" href="{{ route('products.index') }}"> {{ __('Atrás') }}</a>
    </div>
@endsection
