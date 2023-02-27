<div class="box box-info padding-1">
    <div class="form">

        <div class="field">
            {{ Form::label('nombre') }}
            {{ Form::text('nombre', $escuela->nombre, ['class' => 'form-control' . ($errors->has('nombre') ? ' is-invalid' : ''), 'placeholder' => 'Nombre']) }}
            {!! $errors->first('nombre', '<div class="invalid-feedback">:message</div>') !!}
        </div>

    </div>
    <div class="buttons">
        <button type="submit" class="brown">Submit</button>
    </div>
</div>
