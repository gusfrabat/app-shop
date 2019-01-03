@extends('layouts.app')

@section('body-class', 'profile-page sidebar-collapse')
@section('title', 'Listado de productos')
@section('content')


<div class="page-header header-filter" data-parallax="true" style="background-image: url('http://lorempixel.com/1920/950/technics/')">
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
                                            <a href="#" class="btn btn-just-icon btn-link" rel="tooltip" title="Agregar producto">
                                                <i class="text-info fa fa-info"></i>
                                            </a>
                                            <a href="#" class="btn btn-just-icon btn-link" rel="tooltip" title="Editar imagen">
                                                    <i class="text-warning fa fa-image"></i>
                                                </a>
                                            <a href="{{ url('/admin/products/'.$product->id.'/edit') }}" class="btn btn-just-icon btn-link" rel="tooltip" title="Editar producto">
                                                <i class="text-success fa fa-edit"></i>
                                            </a>
                                            <form method="POST" action="{{ url('/admin/products/'.$product->id) }}">
                                                @csrf
                                                @method('DELETE')
                                                <button type="submit" class="btn btn-just-icon btn-link" rel="tooltip" title="Eliminar producto">
                                                    <i class="text-danger fa fa-times"></i>
                                                </button>
                                            </form>
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

        <footer class="footer footer-default">
            <div class="container">
              <nav class="float-left">
                <ul>
                  <li>
                    <a href="https://www.creative-tim.com">
                      Creative Tim
                    </a>
                  </li>
                  <li>
                    <a href="https://creative-tim.com/presentation">
                      About Us
                    </a>
                  </li>
                  <li>
                    <a href="http://blog.creative-tim.com">
                      Blog
                    </a>
                  </li>
                  <li>
                    <a href="https://www.creative-tim.com/license">
                      Licenses
                    </a>
                  </li>
                </ul>
              </nav>
              <div class="copyright float-right">
                &copy;
                <script>
                  document.write(new Date().getFullYear())
                </script>, made with <i class="material-icons">favorite</i> by
                <a href="https://www.creative-tim.com" target="_blank">Creative Tim</a> for a better web.
              </div>
            </div>
        </footer>



@endsection
