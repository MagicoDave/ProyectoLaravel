@extends('layouts.app')

@section('template_title')
    Conjuro
@endsection

@section('content')
    <div class="container-fluid">
        <div class="row">
            <div class="col-sm-12">
                <div class="card">
                    <div class="card-header">
                        <div style="display: flex; justify-content: space-between; align-items: center;">

                            <h1>
                                {{ __('Conjuro') }}
                            </h1>

                             <div class="float-right">
                                <a href="{{ route('conjuros.create') }}" class="button brown small"  data-placement="left">
                                  {{ __('Create New') }}
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
                                        <th>No</th>

										<th>Nombre</th>
										<th>Nivel</th>
										<th>Escuela</th>
										<th>Descripción</th>

                                        <th></th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($conjuros as $conjuro)
                                        <tr>
                                            <td>{{ ++$i }}</td>

											<td>{{ $conjuro->nombre }}</td>
											<td>{{ $conjuro->nivel }}</td>
											<td>{{ $conjuro->escuela->nombre }}</td>
											<td title="{{ $conjuro->descripción }}">{{ $conjuro->descripción }}</td>

                                            <td>
                                                <form action="{{ route('conjuros.destroy',$conjuro->id) }}" method="POST">
                                                    <a href="{{ route('conjuros.show',$conjuro->id) }}"><i class="fa fa-fw fa-eye"></i></a>
                                                    <a href="{{ route('conjuros.edit',$conjuro->id) }}"><i class="fa fa-fw fa-edit"></i></a>
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
                {!! $conjuros->links() !!}
            </div>
        </div>
    </div>
@endsection
