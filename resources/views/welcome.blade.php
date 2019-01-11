@extends('layouts.app')

@section('body-class', 'landing-page sidebar-collapse')
@section('title', 'bievenido app shop')

@section('content')


<div class="page-header header-filter" data-parallax="true" style="background-image: url('images/products/fondo5.jpg')">
    <div class="container">
        <div class="row">
            <div class="col-md-6">
                <h1 class="title">Aplicación de comprar online</h1>
                <h4>Realiza tus pedidos en linea de inmediato con unos sencillos pasos</h4>
                <br>
                <a target="_blank" class="btn btn-danger btn-raised btn-lg">
                    <i class="fa fa-play"></i> Mira este video
                </a>
            </div>
        </div>
    </div>
</div>



<div class="main main-raised">
    <div class="container col-12">
        <div class=" text-center">
            <div class="row">
            <div class="col-8 ml-auto mr-auto">
                <h2 class="title">¿Por qué pagos online?</h2>
                <h5 class="description">Rapido y seguro</h5>
            </div>
            </div>
            <div class="features">
            <div class="row">
                <div class="col-4">
                <div class="info">
                    <div class="icon icon-info">
                    <i class="material-icons">chat</i>
                    </div>
                    <h4 class="info-title">Soporte</h4>
                    <p>brindamos ayuda las 24 horas de el dia para que tengas una buena experiencia.</p>
                </div>
                </div>
                <div class="col-4">
                <div class="info">
                    <div class="icon icon-success">
                    <i class="material-icons">verified_user</i>
                    </div>
                    <h4 class="info-title">Pagos seguros</h4>
                    <p>seguridad.</p>
                </div>
                </div>
                <div class="col-4">
                <div class="info">
                    <div class="icon icon-danger">
                    <i class="material-icons">fingerprint</i>
                    </div>
                    <h4 class="info-title">Informacion privada</h4>
                    <p>Mantenemos tu informacion segura.</p>
                </div>
                </div>
            </div>
            </div>
        </div>
                <div class="text-center">
                <h2 class="title">Productos disponibles</h2>
                <div class="team">
                  <div class="row col-12">
                    @foreach ($products as $product)
                    <div class="container col-4">
                        <div class="card-body">
                          <div class="col-6 ml-auto mr-auto">
                            <a href="{{ url('/products/'.$product->id) }}"><img src=" {{ $product->featured_image_url}} " alt="Producto sin imegen..." class="img-thumbnail imagensize1"></a>
                          </div>
                          <h4 class="card-title">
                              <a href="{{ url('/products/'.$product->id) }}">{{$product->name}}</a>
                            <br>
                            <small class="card-description text-muted">{{$product->category ? $product->category->name : 'Producto sin categoria' }}</small>
                          </h4>
                          <div class="card-body">
                            <p class="card-description">
                                {{$product->description}}
                            </p>
                            <p>
                            <button class="btn btn-just-icon btn-link btn-lg" rel="tooltip" title="Agregar al carrito"><i class="material-icons"> add_shopping_cart</i></button>
                            </p>
                          </div>
                        </div>
                    </div>
                    @endforeach
                  </div>
                  <div class="d-flex justify-content-center">
                    {{$products->links()}}
                  </div>
                </div>
              </div>

              <div class="section section-contacts">
                <div class="row">
                  <div class="col-md-8 ml-auto mr-auto">
                    <h2 class="text-center title">Trabajamos por usted</h2>
                    <h4 class="text-center description"></h4>
                    <form class="contact-form">
                      <div class="row">
                        <div class="col-md-6">
                          <div class="form-group">
                            <label class="bmd-label-floating">nombre</label>
                            <input type="email" class="form-control" placeholder="Nombre completo">
                          </div>
                        </div>
                        <div class="col-md-6">
                          <div class="form-group">
                            <label class="bmd-label-floating">Correo</label>
                            <input type="email" class="form-control" placeholder="Correo valido">
                          </div>
                        </div>
                      </div>
                      <div class="form-group">
                        <label for="exampleMessage" class="bmd-label-floating">Mensaje</label>
                        <textarea type="email" class="form-control" rows="4" id="exampleMessage"></textarea>
                      </div>
                      <div class="row">
                        <div class="col-md-4 ml-auto mr-auto text-center">
                          <button class="btn btn-primary btn-raised">
                            Enviar mensaje
                          </button>
                        </div>
                      </div>
                    </form>
                  </div>
                </div>
              </div>

            </div>
          </div>

          @include('includes.footer')



@endsection
