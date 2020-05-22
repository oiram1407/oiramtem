@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row card-group">
      <div class="col-lg-3 mb-4">
          <div class="card">
              <div class="card-body">
                  <h3 class="card-title">Busqueda</h3>
                  <form class="form-group" action="{{ route('products-list') }}">
                      <input type="text" name="q" value="{{ $searchv }}" placeholder="Buscar..." class="form-control">
                  </form>
                  <div class="form-group">
                    <label class="font-weight-bold">Marcas:</label>
                      <select class="form-control" name="branch" id="branchSelect">
                          <option value="-1">Elegir Marca</option>
                          @foreach ($branches as $bra)
                          <option value="{{ $bra->id_branch }}">{{ $bra->name_branch }}</option>
                          @endforeach
                      </select>
                  </div>
                  <div class="form-group">
                    <label class="font-weight-bold">Categorías:</label>
                    @foreach ($categories as $cat)
                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="cat" id="cat" value="{{ $cat->id_category }}">
                        <label class="form-check-label" for="exampleRadios1">
                            {{ $cat->name_category }}
                        </label>
                    </div>
                    @endforeach
                  </div>
              </div>
          </div>
      </div>

      <div class="col-lg-9">
          <div class="card">
              <div class="card-body">
                  <h3 class="card-title">Lista de Productos</h3>
                  <div class="container">
                      <div class="row row-cols-1 row-cols-md-3">
                          <div class="col mb-4">
                              <div class="card">
                                  <div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
                                      <div class="carousel-inner">
                                          <div class="carousel-item active">
                                              <img src="https://www.1hora.mx/wp-content/uploads/2020/01/CAB219-blanco_frente-600x600.jpg" class="card-img-top" alt="...">
                                          </div>
                                          <div class="carousel-item">
                                              <img src="https://www.1hora.mx/wp-content/uploads/2020/01/CAB219-negro_frente-600x600.jpg" class="card-img-top" alt="...">
                                          </div>
                                      </div>
                                      <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
                                          <i class="fas fa-arrow-left text-dark"></i>
                                          <span class="sr-only">Previous</span>
                                      </a>
                                      <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
                                          <i class="fas fa-arrow-right text-dark"></i>
                                          <span class="sr-only">Next</span>
                                      </a>
                                  </div>
                                  <div class="card-body">
                                      <h5 class="card-title">Nombre del producto</h5>
                                      <p class="card-text text-truncate">Aquí irá la descripción de un producto.</p>
                                  </div>

                                  <div class="card-footer">
                                      <span class="float-left mt-1"><h5>$10000.00</h5></span><span class="float-right"><a href="" class="badge badge-primary p-2">Leer más...</a></span>
                                  </div>
                              </div>
                          </div>
                      </div>
                  </div>
              </div>

          </div>
          </div>
      </div>
    </div>
</div>
@endsection
