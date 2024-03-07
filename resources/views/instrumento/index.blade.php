@extends('layouts.navbar2')

@section('template_title')
Instrumento
@endsection

@section('content')
<div class="container-fluid">
    <div class="row">
        <div class="col-sm-12">
            <div class="card">
                <div class="card-header">
                    <div style="display: flex; justify-content: space-between; align-items: center;">

                        <span id="card_title">
                            {{ __('Instrumento') }}
                        </span>

                        <div class="float-right">
                            <a href="{{ route('instrumentos.create') }}" class="btn btn-primary btn-sm float-right" data-placement="left">
                            {{ __('Crear Nuevo') }}
                            </a>
                        </div>
                    </div>
                </div>
                @if ($message = Session::get('success'))
                <div class="alert alert-success">
                    <p>{{ $message }}</p>
                </div>
                @endif

                <div class="card-body">
                    <div class="table-responsive">
                        <table class="table table-striped table-hover">
                            <thead class="thead">
                                <tr>
                                    <th>No</th>

                                    <th>{{ __('Nombre') }}</th>
                                    <th>{{ __('Material') }}</th>
                                    <th>{{ __('Tamaño') }}</th>

                                    <th></th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($instrumentos as $instrumento)
                                <tr>
                                    <td>{{ ++$i }}</td>

                                    <td>{{ $instrumento->nombre }}</td>
                                    <td>{{ $instrumento->material }}</td>
                                    <td>{{ $instrumento->tamano }}</td>

                                    <td>
                                        <form action="{{ route('instrumentos.destroy',$instrumento->id) }}" method="POST">
                                            <a class="btn btn-sm btn-primary " href="{{ route('instrumentos.show',$instrumento->id) }}"><i class="fa fa-fw fa-eye"></i> {{ __('Visualizar') }}</a>
                                            <a class="btn btn-sm btn-success" href="{{ route('instrumentos.edit',$instrumento->id) }}"><i class="fa fa-fw fa-edit"></i> {{ __('Editar') }}</a>
                                            @csrf
                                            @method('DELETE')
                                            <button type="submit" class="btn btn-danger btn-sm"><i class="fa fa-fw fa-trash"></i> {{ __('Eliminar') }}</button>
                                        </form>
                                    </td>
                                </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
            <div class="text-center">
                <a class="btn btn-primary" href="{{ route('home') }}"> {{ __('Atrás') }}</a>
            </div>
            {!! $instrumentos->links() !!}
        </div>
    </div>
</div>
@endsection