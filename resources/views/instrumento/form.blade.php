<div class="box box-info padding-1">
    <div class="box-body">
        
        <div class="form-group">
            {{ Form::label('nombre') }}
            {{ Form::text('nombre', $instrumento->nombre, ['class' => 'form-control' . ($errors->has('nombre') ? ' is-invalid' : ''), 'placeholder' => 'Nombre']) }}
            {!! $errors->first('nombre', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('material') }}
            {{ Form::text('material', $instrumento->material, ['class' => 'form-control' . ($errors->has('material') ? ' is-invalid' : ''), 'placeholder' => 'Material']) }}
            {!! $errors->first('material', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('tamano') }}
            {{ Form::text('tamano', $instrumento->tamano, ['class' => 'form-control' . ($errors->has('tamano') ? ' is-invalid' : ''), 'placeholder' => 'Tamano']) }}
            {!! $errors->first('tamano', '<div class="invalid-feedback">:message</div>') !!}
        </div>

    </div>
    <div class="box-footer mt20">
        <button type="submit" class="btn btn-primary">{{ __('Submit') }}</button>
    </div>
</div>