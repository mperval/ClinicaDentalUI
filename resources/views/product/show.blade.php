@extends('layouts.app')

@section('template_title')
{{ $product->name ?? "{{ __('Show') Product" }}
@endsection

@section('content')
<section class="content container-fluid">
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    <div class="float-left">
                        <span class="card-title">{{ __('Show') }} Product</span>
                    </div>
                </div>

                <div class="card-body">

                    <div class="form-group">
                        <strong>Nombre:</strong>
                        {{ $product->nombre }}
                    </div>
                    <div class="form-group">
                        <strong>Descripcion:</strong>
                        {{ $product->descripcion }}
                    </div>
                    <div class="form-group">
                        <strong>Precio:</strong>
                        {{ $product->precio }}
                    </div>
                    <div class="form-group">
                        <strong>Stock:</strong>
                        {{ $product->stock }}
                    </div>

                </div>
            </div>
        </div>
    </div>
    <div class="text-center">
        <a class="btn btn-primary" href="{{ route('home') }}"> {{ __('Back') }}</a>
    </div>
</section>
@endsection