@extends('layouts.navbar2')

@section('template_title')
    {{ $merchandising->name ?? "{{ __('Show') Merchandising" }}
@endsection

@section('content')
    <section class="content container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <div class="float-left">
                            <span class="card-title">{{ __('Show') }} Merchandising</span>
                        </div>
                        <div class="float-right">
                            <a class="btn btn-primary" href="{{ route('merchandisings.index') }}"> {{ __('Back') }}</a>
                        </div>
                    </div>

                    <div class="card-body">
                        
                        <div class="form-group">
                            <strong>Tipo Producto:</strong>
                            {{ $merchandising->tipo_producto }}
                        </div>
                        <div class="form-group">
                            <strong>Talla:</strong>
                            {{ $merchandising->talla }}
                        </div>
                        <div class="form-group">
                            <strong>Precio:</strong>
                            {{ $merchandising->precio }}
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
