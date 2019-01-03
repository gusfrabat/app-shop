@extends('layouts.app')

@section('body-class', 'profile-page sidebar-collapse')
@section('title', 'Crear productos')
@section('content')


<div class="page-header header-filter" data-parallax="true" style="background-image: url('http://lorempixel.com/1920/950/technics/')">
</div>
    <div class="main mrtop">
        <div class="container col-12">
            <div class="section">
                <h2 class="title text-center">Editar Producto</h2>
                <div class="team">
                    <div class="col-10 mx-auto">
                        <form class="form" method="POST" action="{{ url('admin/products/'.$product->id.'/edit') }}">
                            @csrf
                            <div class="card-header card-header-primary text-center">
                                <h4 class="card-title">Ingrese los datos actualizados del producto</h4>
                            </div>
                            <p class="description text-center">Ingrese los datos del producto</p>
                            <div class="card-body d-flex row justify-content-center">
                                <div class="form-group bmd-form-group col-8">
                                    <label class="bmd-label-floating">Nombre del producto</label>
                                <input type="text" class="form-control" name="name" value="{{$product->name}}">
                                </div>
                                <div class="form-group bmd-form-group col-8">
                                    <label class="bmd-label-floating">Descripcion corta</label>
                                    <input type="text" class="form-control" name="description" value="{{$product->description}}">
                                </div>
                                <div class="form-group bmd-form-group col-8">
                                    <label class="bmd-label-floating">Precio del producto $$</label>
                                    <input type="number" step="0.01" class="form-control" name="price" value="{{$product->price}}">
                                </div>
                                <div class="form-group bmd-form-group col-8">
                                    <label for="exampleFormControlTextarea1">Example textarea</label>
                                    <textarea class="form-control" id="exampleFormControlTextarea1" name="long_description">{{$product->long_description}}</textarea>
                                </div>
                            </div>
                            <div class="footer text-center">
                                <button type="submit" class="btn btn-info">Actualizar producto</button>
                                <a type="button" href="{{ url('/admin/products') }}" class="btn btn-danger">Cancelar</a>
                            </div>
                        </form>
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
