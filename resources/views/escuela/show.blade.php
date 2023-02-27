@extends('layouts.app')

@section('template_title')
    {{ $escuela->name ?? 'Show Escuela' }}
@endsection

@section('content')
    <section class="content container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <div class="float-left">
                            <h1>Show Escuela</h1>
                        </div>

                    </div>

                    <div class="box">

                        <div class="form-group">
                            <strong>Nombre:</strong>
                            {{ $escuela->nombre }}
                        </div>
                        <div class="float-right">
                            <a class="button orange small" href="{{ route('escuelas.index') }}"> Back</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
