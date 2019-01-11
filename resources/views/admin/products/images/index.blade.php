@extends('layouts.app')

@section('body-class', 'profile-page sidebar-collapse')
@section('title', 'Imagenes de productos')
@section('content')


<div class="page-header header-filter" data-parallax="true" style="background-image: url('/images/products/fondo5.jpg')">
</div>
    <div class="main mrtop">
        <div class="container col-12">
            <div class="section">
                <div class="d-flex justify-content-around">
                    <h2 class="title">Imagenes del producto {{$product->name}}</h2>
                </div>
                <div class="card col-12">
                    <div class="d-flex justify-content-around">
                        <div>
                            <a href="{{url('admin/products')}}" class="btn btn-warning btn-lg btn-round">Listado de productos</a>
                        </div>
                        <form method="POST" action="" enctype="multipart/form-data">
                            @csrf
                            <input type="file" name="photo" required>
                            <button class="btn btn-info btn-lg btn-round text-white">Nueva imagen</button>
                        </form>
                    </div>
                </div>
                <div class="row">
                    @foreach ($images as $image)
                        <div class="col-sm-12 col-md-4 col-lg-4 col-xl-3">
                            <div class="card">
                                <div class="card-body text-center">
                                    <img class="imagensize" src="{{$image->url}}" alt="Card image cap">
                                </div>
                                <div class="d-flex justify-content-center">
                                    <button type="button" class="btn btn-danger btn-round" data-toggle="modal" data-target="#{{$image->id}}">Eliminar imagen</button>
                                    @if ($image->featured)
                                    <button type="button" class="btn btn-success btn-fab btn-round" rel="tooltip" title="Imagen destacada"><i class="material-icons" >check_circle</i></button>
                                    @else
                                    <a href="{{ url('/admin/products/'.$product->id.'/images/select/'.$image->id) }}" class="btn btn-info btn-fab btn-round" rel="tooltip" title="Destacar imagen"><i class=" text-white material-icons">favorite</i></a>
                                    @endif
                                    <div class="modal fade" id="{{$image->id}}" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                        <div class="modal-dialog" role="document">
                                            <div class="modal-content">
                                                <div class="modal-header">
                                                    <h5 class="modal-title" id="exampleModalLabel">Eliminar Producto</h5>
                                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                    <span aria-hidden="true">&times;</span>
                                                    </button>
                                                </div>
                                                <div class="modal-body">
                                                    <p class="text-center">¿está seguro que desea eliminar la imagen?</p>
                                                </div>
                                                <div class="d-flex justify-content-end mr-3">
                                                    <div>
                                                        <button type="button" class="btn btn-secondary btn-round" data-dismiss="modal">Cancelar</button>
                                                    </div>
                                                    <form method="POST" action="">
                                                        @csrf
                                                        @method('DELETE')
                                                        <input type="hidden" name="image_id" value="{{$image->id}}">
                                                        <button type="submit" class="btn btn-warning btn-round" rel="tooltip"       title="EliminaImagen">Aceptar</button>
                                                    </form>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
        </div>
    </div>


    @include('includes.footer')

@endsection
