@extends('layouts.app')

@section('body-class', 'profile-page sidebar-collapse')
@section('title', 'producto')
@section('content')

<div class="page-header header-filter" data-parallax="true" style="background-image: url('/images/products/fondo4.jpg');"></div>

  <div class="main main-raised">
        <div class="profile-content">
            <div class="container">
                <div class="row">
                    <div class="col-md-6 ml-auto mr-auto">
                    <div class="profile">
                    <div class="avatar">
                        <div class="img-thumbnail img">
                            <img src="{{ $product->featured_image_url}}" alt="Circle Image" class="imagensize1">
                        </div>
                    </div>
                    <div class="name">
                        <h3 class="title">{{$product->name}}</h3>
                        <h6>{{$product->category->name}}</h6>
                         <!-- Button trigger modal -->
                        <button type="button" class="btn btn-just-icon btn-link btn-lg" data-toggle="modal" data-target="#exampleModal" rel="tooltip" title="Agregar al carrito"><i class="material-icons"> add_shopping_cart</i></button>
                    </div>
                    @if (session('notification'))
                        <div class="alert alert-success">
                            {{session('notification')}}
                        </div>
                    @endif
                    </div>
                </div>
                </div>
                <div class="description text-center">
                    <p>{{$product->long_description}} </p>
                </div>
                <div class="tab-content tab-space">
                    <div class="tab-pane active text-center gallery" id="studio">
                        <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
                            <ol class="carousel-indicators">
                                <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
                                <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
                                <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
                            </ol>
                            <div class="carousel-inner">
                            </div>
                            <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
                                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                <span class="sr-only">Previous</span>
                            </a>
                            <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
                                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                <span class="sr-only">Next</span>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
  </div>



  <!-- Modal -->
  <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h4 class="modal-title" id="exampleModalLabel"><strong>Cantidad del producto que desea añadir</strong></h4>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <form method="POST" action="{{ url('/cart') }}">
        @csrf
        <input type="hidden" name="product_id" value="{{$product->id}}">
        <div class="modal-body col-6 mx-auto">
          <input type="number" class="text-center form-control" value="1" name="quantity" placeholder="Cantidad..">
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary btn-round" data-dismiss="modal">Cancelar</button>
          <button type="submit" class="btn btn-primary btn-round">Añadir producto</button>
        </div>
        </form>
      </div>
    </div>
  </div>

    @include('includes.footer')

@endsection
