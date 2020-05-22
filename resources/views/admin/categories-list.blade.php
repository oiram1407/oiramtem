@extends('layouts.admin')
@section('title', 'Categorías')

@section('content')
    <main role="main" class="col-md-9 ml-sm-auto col-lg-10 px-4">
        <div class="card mt-4">
            <div class="card-body">
                <h2 class="card-title">
                    {{ __('Categorías') }}
                    <span class="float-right">
                        <div class="btn-group">
                            <button type="button" name="button" class="btn btn-primary font-weight">Crear Nueva Categoría</button>
                        </div>
                    </span>
                </h2>
                <div class="table-responsive">
                    <table class="table">
                        <thead class="thead-dark">
                            <tr>
                                <th class="text-center">Nombre</th>
                                <th class="text-center"></th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($categories as $cat)
                            <tr>
                                <td class="text-center">{{ $cat->name_category }}</td>
                                <td class="text-center">
                                    <span class="badge badge-info pl-4 pr-4 pb-2 pt-2">
                                        <a href="#" class="text-white" data-toggle="tooltip" data-placement="top" title="Visualizar">
                                            <i class="fas fa-eye"></i>
                                        </a>
                                    </span>
                                    <span class="badge badge-danger pl-4 pr-4 pb-2 pt-2">
                                        <a href="#" class="text-white" data-toggle="tooltip" data-placement="top" title="Eliminar">
                                            <i class="fas fa-times"></i>
                                        </a>
                                    </span>
                                </td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
                {{ $categories->links() }}
            </div>
        </div>
    </main>
@endsection
