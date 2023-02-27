@extends('layouts.app')

@section('template_title')
    Create Conjuro
@endsection

@section('content')
    <section class="content container-fluid">
        <div class="row">
            <div class="col-md-12">

                @includeif('partials.errors')

                <div class="card card-default">
                    <div class="card-header">
                        <h1>Create Conjuro</h1>
                    </div>
                    <div class="card-body">
                        <form method="POST" action="{{ route('conjuros.store') }}"  role="form" enctype="multipart/form-data">
                            @csrf

                            @include('conjuro.form')

                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
