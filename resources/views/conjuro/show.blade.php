@extends('layouts.app')

@section('template_title')
    {{ $conjuro->name ?? 'Show Conjuro' }}
@endsection

@section('content')
    <section class="content container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <div class="float-left">
                            <h1>Mostrar conjuro</h1>
                        </div>

                    </div>

                    <div class="box">

                        <div class="form-group">
                            <strong>Nombre:</strong>
                            {{ $conjuro->nombre }}
                        </div>
                        <div class="form-group">
                            <strong>Nivel:</strong>
                            {{ $conjuro->nivel }}
                        </div>
                        <div class="form-group">
                            <strong>Escuela Id:</strong>
                            {{ $conjuro->escuela_id }}
                        </div>
                        <div class="form-group">
                            <strong>Descripción:</strong>
                            {{ $conjuro->descripción }}
                        </div>
                        <div class="float-right">
                            <a class="button orange small " href="{{ route('conjuros.index') }}"> Retroceder</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
