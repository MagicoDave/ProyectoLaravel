@extends('layouts.app')

@section('template_title')
    Update Conjuro
@endsection

@section('content')
    <section class="content container-fluid">
        <div class="">
            <div class="col-md-12">

                @includeif('partials.errors')

                <div class="card card-default">
                    <div class="card-header">
                        <h1>Actualizar Conjuro</h1>
                    </div>
                    <div class="card-body">
                        <form method="POST" action="{{ route('conjuros.update', $conjuro->id) }}"  role="form" enctype="multipart/form-data">
                            {{ method_field('PATCH') }}
                            @csrf

                            @include('conjuro.form')

                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
