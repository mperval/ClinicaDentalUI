@extends('layouts.navbar2')

@section('template_title')
    Merchandising
@endsection

@section('content')
    <div class="container-fluid">
        <div class="row">
            <div class="col-sm-12">
                <div class="card">
                    <div class="card-header">
                        <div style="display: flex; justify-content: space-between; align-items: center;">

                            <span id="card_title">
                                {{ __('Merchandising') }}
                            </span>

                             <div class="float-right">
                                <a href="{{ route('merchandisings.create') }}" class="btn btn-primary btn-sm float-right"  data-placement="left">
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
                                        
										<th>{{ __('Tipo producto') }}</th>
										<th>{{ __('Talla') }}</th>
										<th>{{ __('Precio') }}</th>

                                        <th></th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($merchandisings as $merchandising)
                                        <tr>
                                            <td>{{ ++$i }}</td>
                                            
											<td>{{ $merchandising->tipo_producto }}</td>
											<td>{{ $merchandising->talla }}</td>
											<td>{{ $merchandising->precio }}</td>

                                            <td>
                                                <form action="{{ route('merchandisings.destroy',$merchandising->id) }}" method="POST">
                                                    <a class="btn btn-sm btn-primary " href="{{ route('merchandisings.show',$merchandising->id) }}"><i class="fa fa-fw fa-eye"></i> {{ __('Visualizar') }}</a>
                                                    <a class="btn btn-sm btn-success" href="{{ route('merchandisings.edit',$merchandising->id) }}"><i class="fa fa-fw fa-edit"></i> {{ __('Editar') }}</a>
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
                {!! $merchandisings->links() !!}
            </div>
        </div>
    </div>
@endsection
