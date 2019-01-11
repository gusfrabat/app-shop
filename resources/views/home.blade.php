@extends('layouts.app')

@section('body-class', 'profile-page sidebar-collapse')
@section('title', 'App shop | Dashboard')
@section('content')


<div class="page-header header-filter" data-parallax="true" style="background-image: url('images/products/fondo4.jpg')">
</div>
    <div class="main mrtop">
        <div class="container col-12">
            <h2 class="text-center title">Dashboard</h2>
            <div class="section">
                <div class="team">
                    <div class="col-10 mx-auto text-center">
                            <ul class="nav nav-pills nav-pills-icons d-flex justify-content-center" role="tablist">
                                    <li class="nav-item">
                                        <a class="nav-link active text-uppercase" href="#dashboard-1" role="tab" data-toggle="tab">
                                            <i class="material-icons">shopping_cart</i>
                                            Carrito de compras
                                        </a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link text-uppercase" href="#schedule-1" role="tab" data-toggle="tab">
                                            <i class="material-icons">schedule</i>
                                            Pedidos realizados
                                        </a>
                                    </li>
                                </ul>
                                <div class="tab-content tab-space">
                                    <div class="tab-pane active" id="dashboard-1">
                                            @if (session('notification'))
                                            <div class="alert alert-success">
                                                {{session('notification')}}
                                            </div>
                                        @endif
                                        <p>Tu carrito de compras contiene {{auth()->user()->cart->details->count()}} productos.</p>
                                    <table class="table">
                                            <thead>
                                                <tr class="text-center">
                                                    <th>Imagen</th>
                                                    <th>Nombre</th>
                                                    <th>Cantidad</th>
                                                    <th>Precio</th>
                                                    <th>Total</th>
                                                    <th>Opciones</th>
                                                </tr>
                                            </thead>
                                        <tbody>
                                            @foreach (auth()->user()->cart->details as $detail)
                                                <tr class="text-center">
                                                    <td>
                                                        <div class="img">
                                                            <img src="{{$detail->product->featured_image_url}}" alt="Circle Image" class="imagensize1 " height="50px">
                                                        </div>
                                                    </td>
                                                    <td>
                                                        <a href="{{ url('/products/'.$detail->product->id) }}" target="_blank">{{$detail->product->name}}</a>
                                                    </td>
                                                    <td>{{$detail->quantity}}</td>
                                                    <td>&dollar; {{$detail->product->price}}</td>
                                                    <td>$ {{$detail->product->price * $detail->quantity}}</td>
                                                    <td class="td-actions d-flex justify-content-center">
                                                        <a href="{{ url('/products/'.$detail->product->id) }}" target="_blank" class="btn btn-just-icon btn-link" rel="tooltip" title="Ver producto">
                                                            <i class="text-info fa fa-info"></i>
                                                        </a>
                                                        <div class="modal fade" id="{{$detail->product->id}}"  tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                                                <div class="modal-dialog" role="document">
                                                                    <div class="modal-content">
                                                                    <div class="modal-header">
                                                                        <h5 class="modal-title" id="exampleModalLabel">Eliminar Producto</h5>
                                                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                                        <span aria-hidden="true">&times;</span>
                                                                        </button>
                                                                    </div>
                                                                    <div class="modal-body">
                                                                        <p>¿está seguro que desea eliminar el producto del carrito?</p>
                                                                        <p class="text-center">{{$detail->product->name}}</p>
                                                                    </div>
                                                                    <div class="d-flex justify-content-end mr-3">
                                                                        <div>
                                                                        <button type="button" class="btn btn-secondary btn-round" data-dismiss="modal">Cancelar</button>
                                                                        </div>
                                                                        <form method="POST" action="{{ url('/cart') }}">
                                                                            @csrf
                                                                            @method('DELETE')
                                                                            <input type="hidden" name="cart_detail_id" value="{{$detail->id}}">
                                                                            <button type="submit" class="btn btn-warning btn-round" rel="tooltip" title="Eliminar producto">Aceptar</button>
                                                                        </form>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <button type="button" class="btn btn-just-icon btn-link" data-toggle="modal" data-target="#{{$detail->product->id}}" rel="tooltip" title="Eliminar producto">
                                                                <i class="text-danger fa fa-times"></i>
                                                        </button>
                                                    </td>
                                                </tr>
                                            @endforeach
                                        </tbody>
                                    </table>
                                    <div class="text-center">
                                        <form method="POST" action="{{ url('/order') }}">
                                            @csrf
                                            <button class="btn btn-primary btn-round">
                                                <i class=" material-icons">done</i>
                                                Reslizar pedido
                                            </button>
                                        </form>
                                    </div>
                                    </div>
                                    <div class="tab-pane" id="schedule-1">
                                        <p>hola 2</p>
                                    </div>
                                </div>
                        @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                        @endif

                        You are logged in!
                    </div>
                </div>
            </div>
        </div>
    </div>

        @include('includes.footer')

@endsection



