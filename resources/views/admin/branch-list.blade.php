@extends('layouts.admin')
@section('title', 'Marcas')

@section('content')
    <main role="main" class="col-md-9 ml-sm-auto col-lg-10 px-4">
        <div class="card mt-4">
            <div class="card-body">
                <h2 class="card-title">
                    {{ __('Marcas') }}
                    <div class="btn float-right">
                        <button type="button" name="button" class="btn btn-primary">{{ __('Añadir marca') }}</button>
                    </div>
                </h2>
                <div class="table-responsive">
                    <table class="table table-hover">
                        <thead class="thead-dark">
                            <tr>
                                <th></th>
                                <th class="text-center">{{ __('Marca') }}</th>
                                <th></th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td class="text-center"><img src="{{ url('images/branches/xiaomi.png') }}" alt="" style="max-width: 45px"></td>
                                <td class="text-center align-middle">{{ __('Marca') }}</td>
                                <td class="text-center align-middle">
                                    <span class="badge badge-success pl-4 pr-4 pb-2 pt-2">
                                        <a href="#" class="text-white" data-toggle="tooltip" data-placement="top" title="Editar"><i class="fas fa-pen"></i></a>
                                    </span>
                                    <span class="badge badge-danger pl-4 pr-4 pb-2 pt-2">
                                        <a href="#" class="text-white" data-toggle="tooltip" data-placement="top" title="Eliminar"><i class="fas fa-times"></i></a>
                                    </span>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </main>
@endsection
