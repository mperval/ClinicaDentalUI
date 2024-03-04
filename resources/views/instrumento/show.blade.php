@extends('layouts.app')

@section('template_title')
    {{ $instrumento->name ?? "{{ __('Show') Instrumento" }}
@endsection

@section('content')
    <section class="content container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <div class="float-left">
                            <span class="card-title">{{ __('Show') }} Instrumento</span>
                        </div>
                        <div class="float-right">
                            <a class="btn btn-primary" href="{{ route('instrumentos.index') }}"> {{ __('Back') }}</a>
                        </div>
                    </div>

                    <div class="card-body">
                        
                        <div class="form-group">
                            <strong>Nombre:</strong>
                            {{ $instrumento->nombre }}
                        </div>
                        <div class="form-group">
                            <strong>Material:</strong>
                            {{ $instrumento->material }}
                        </div>
                        <div class="form-group">
                            <strong>Tamano:</strong>
                            {{ $instrumento->tamano }}
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
