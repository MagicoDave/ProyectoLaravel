<div class="box">
    <div class="form">

        <div class="field">
            {{ Form::label('nombre') }}
            {{ Form::text('nombre', $conjuro->nombre, ['class' => 'form-control' . ($errors->has('nombre') ? ' is-invalid' : ''), 'placeholder' => 'Nombre']) }}
            {!! $errors->first('nombre', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="field">
            {{ Form::label('nivel') }}
            {{ Form::text('nivel', $conjuro->nivel, ['class' => 'form-control' . ($errors->has('nivel') ? ' is-invalid' : ''), 'placeholder' => 'Nivel']) }}
            {!! $errors->first('nivel', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="field">
            {{ Form::label('escuela_id') }}
            {{ Form::select('escuela_id', $escuelas, $conjuro->escuela_id, ['class' => 'form-control' . ($errors->has('escuela_id') ? ' is-invalid' : ''), 'placeholder' => 'Escuela Id']) }}
            {!! $errors->first('escuela_id', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="field">
            {{ Form::label('descripción') }}
            {{ Form::textarea('descripción', $conjuro->descripción, ['class' => 'form-control' . ($errors->has('descripción') ? ' is-invalid' : ''), 'placeholder' => 'Descripción']) }}
            {!! $errors->first('descripción', '<div class="invalid-feedback">:message</div>') !!}
        </div>

    </div>
    <div class="buttons">
        <button type="submit" class="brown">Aplicar</button>
    </div>
</div>
