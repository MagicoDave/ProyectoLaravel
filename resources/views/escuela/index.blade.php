@extends('layouts.app')

@section('template_title')
    Escuela
@endsection

@section('content')
    <div class="container-fluid">
        <div class="row">
            <div class="col-sm-12">
                <div class="card">
                    <div class="card-header">
                        <div style="display: flex; justify-content: space-between; align-items: baseline;">

                        <h1>
                                {{ __('Escuela') }}
                        </h1>

                             <div class="float-right">
                                <a href="{{ route('escuelas.create') }}" class="button brown small"  data-placement="left">
                                  {{ __('Nueva escuela') }}
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
                            <table class="custom-table">
                                <thead class="thead">
                                    <tr>
                                        <th>Nº</th>

										<th>Nombre</th>

                                        <th></th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($escuelas as $escuela)
                                        <tr>
                                            <td>{{ ++$i }}</td>

											<td>{{ $escuela->nombre }}</td>

                                            <td>
                                                <form action="{{ route('escuelas.destroy',$escuela->id) }}" method="POST">
                                                    <a href="{{ route('escuelas.show',$escuela->id) }}"><i class="fa fa-fw fa-eye"></i></a>
                                                    <a href="{{ route('escuelas.edit',$escuela->id) }}"><i class="fa fa-fw fa-edit"></i></a>
                                                    @csrf
                                                    @method('DELETE')
                                                    <button class="no-button" type="submit"><i class="fa fa-fw fa-trash"></i></button>
                                                </form>
                                            </td>
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
                {!! $escuelas->links() !!}
            </div>
        </div>
    </div>
@endsection
