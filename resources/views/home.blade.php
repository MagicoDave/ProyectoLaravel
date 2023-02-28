@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <h1>{{ __('Panel de control') }}</h1>

                <div class="box">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    {{ __('¡Bienvenido a Pingüino Mágico!') }}
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
