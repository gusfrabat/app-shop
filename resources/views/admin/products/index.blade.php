@extends('layouts.app')

@section('body-class', 'profile-page sidebar-collapse')
@section('title', 'Listado de productos')
@section('content')


<div class="page-header header-filter" data-parallax="true" style="background-image: url('/images/products/fondo5.jpg')">
</div>
    <div class="main mrtop">
        <div class="container col-12">
            <div class="section">
            <div class="d-flex justify-content-around">
            <h2 class="title">Productos disponibles</h2>
            <div>
            <a href="{{ url('/admin/products/create')}}" class="btn btn-info btn-round text-white">Nuevo producto</a>
            </div>
            </div>
                <div class="team">
                  <div class="row">
                        <table class="table">
                                <thead>
                                    <tr class="text-center">
                                        <th>#</th>
                                        <th>Nombre</th>
                                        <th>Descripcion</th>
                                        <th>categoría</th>
                                        <th>Precio</th>
                                        <th>Opciones</th>
                                    </tr>
                                </thead>
                            <tbody>
                                @foreach ($products as $product)
                                    <tr class="text-center">
                                        <td>{{$product->id}}</td>
                                        <td>{{$product->name}}</td>
                                        <td>{{$product->description}}</td>
                                        <td>{{$product->category ? $product->category->name : 'Sin categoria' }}</td>
                                        <td>&euro;{{$product->price}}</td>
                                        <td class="td-actions d-flex justify-content-end">
                                            <a href="{{ url('/products/'.$product->id) }}" class="btn btn-just-icon btn-link" rel="tooltip" title="Ver producto">
                                                <i class="text-info fa fa-info"></i>
                                            </a>
                                            <a href="{{ url('/admin/products/'.$product->id.'/images') }}" class="btn btn-just-icon btn-link" rel="tooltip" title="Editar imagen">
                                            <i class="text-warning fa fa-image"></i>
                                            </a>
                                            <a href="{{ url('/admin/products/'.$product->id.'/edit') }}" class="btn btn-just-icon btn-link" rel="tooltip" title="Editar producto">
                                                <i class="text-success fa fa-edit"></i>
                                            </a>
                                            <div class="modal fade" id="{{$product->id}}" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                                    <div class="modal-dialog" role="document">
                                                        <div class="modal-content">
                                                        <div class="modal-header">
                                                            <h5 class="modal-title" id="exampleModalLabel">Eliminar Producto</h5>
                                                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                            <span aria-hidden="true">&times;</span>
                                                            </button>
                                                        </div>
                                                        <div class="modal-body">
                                                            <p>¿está seguro que desea eliminar el producto?</p>
                                                            <p class="text-center">{{$product->name}}</p>
                                                        </div>
                                                        <div class="d-flex justify-content-end mr-3">
                                                            <div>
                                                            <button type="button" class="btn btn-secondary btn-round" data-dismiss="modal">Cancelar</button>
                                                            </div>
                                                            <form method="POST" action="{{ url('/admin/products/'.$product->id) }}">
                                                                @csrf
                                                                @method('DELETE')
                                                                <button type="submit" class="btn btn-warning btn-round" rel="tooltip" title="Eliminar producto">Aceptar</button>
                                                            </form>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <button type="button" class="btn btn-just-icon btn-link" data-toggle="modal" data-target="#{{$product->id}}" rel="tooltip" title="Eliminar producto">
                                                    <i class="text-danger fa fa-times"></i>
                                            </button>
                                        </td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                        </div>
                        <div class="d-flex justify-content-center">
                                {{$products->links()}}
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>


    @include('includes.footer')


@endsection
 