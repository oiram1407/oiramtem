@extends('layouts.admin')
@section('title', 'Productos')

@section('content')
    <main role="main" class="col-md-9 ml-sm-auto col-lg-10 px-4">
        <form method="GET" action="{{ route('admProductList') }}" class="form-group mt-4">
            <input type="text" class="form-control" size="12" autocomplete="off" placeholder="Ingresa un producto a buscar..." name="q" value="{{ $search }}">
        </form>

        <div class="card mt-4">
            <div class="card-body">
                <h2 class="card-title">
                    {{ __('Productos') }}
                    <span class="float-right">
                        <div class="btn-group">
                            <button type="button" name="button" class="btn btn-primary font-weight" onclick="products.add_form(); return false" data-toggle="modal" data-target="#exampleModal">{{ __('Añadir Producto') }}</button>
                        </div>
                    </span>
                </h2>
                <div class="table-responsive">
                    <table class="table table-striped">
                        <thead class="thead-dark">
                            <tr>
                                <th class="text-center">Nombre</th>
                                <th class="text-center">Marca</th>
                                <th class="text-center">Categoría</th>
                                <th class="text-center">Stock</th>
                                <th></th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($products as $p)
                            <tr>
                                <td class="text-center">{{ $p->product_name }}</td>
                                <td class="text-center">{{ $p->name_branch }}</td>
                                <td class="text-center">{{ $p->name_category }}</td>
                                <td class="text-center">0</td>
                                <td class="text-center">
                                    <span class="badge badge-info pl-3 pr-3 pb-2 pt-2">
                                        <a href="#" class="text-white" data-toggle="tooltip" data-placement="top" title="Visualizar">
                                            <i class="fas fa-eye"></i>
                                        </a>
                                    </span>
                                    <span class="badge badge-success pl-3 pr-3 pb-2 pt-2">
                                        <a href="#" onclick="products.set_stock_form({{ $p->id_product }}); return false" class="text-white" data-toggle="tooltip" data-placement="top" title="Modificar stock">
                                            <i class="fas fa-database"></i>
                                        </a>
                                    </span>
                                    <span class="badge badge-secondary pl-3 pr-3 pb-2 pt-2">
                                        <a href="#" class="text-white" data-toggle="tooltip" data-placement="top" title="Eliminar">
                                            <i class="fas fa-image"></i>
                                        </a>
                                    </span>
                                    <span class="badge badge-danger pl-3 pr-3 pb-2 pt-2">
                                        <a href="#" class="text-white" data-toggle="tooltip" data-placement="top" title="Eliminar">
                                            <i class="fas fa-times"></i>
                                        </a>
                                    </span>
                                </td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                    <div class="mx-auto" style="width: 200px;">
                        {{ $products->links() }}
                    </div>
                </div>
            </div>
        </div>
    </main>
@endsection
