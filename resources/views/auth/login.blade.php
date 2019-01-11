@extends('layouts.app')

@section('body-class', 'login-page sidebar-collapse')

@section('content')
<div class="page-header header-filter" style="background-image: url('images/products/fondo4.jpg'); background-size: cover; background-position: top center;">
        <div class="container">
            <div class="row">
                <div class="col-lg-4 col-md-6 ml-auto mr-auto">
                    <div class="card card-login">
                        <form class="form" method="POST" action="{{ route('login') }}">
                            @csrf
                            <div class="card-header card-header-primary text-center">
                                <h4 class="card-title">Inicio de sesión</h4>
                                {{-- <div class="social-line">
                                    <a href="#pablo" class="btn btn-just-icon btn-link">
                                        <i class="fa fa-facebook-square"></i>
                                    </a>
                                    <a href="#pablo" class="btn btn-just-icon btn-link">
                                        <i class="fa fa-twitter"></i>
                                    </a>
                                    <a href="#pablo" class="btn btn-just-icon btn-link">
                                        <i class="fa fa-google-plus"></i>
                                    </a>
                                </div> --}}
                            </div>
                            <p class="description text-center">Ingrese sus datos</p>
                            <div class="card-body">

                                <div class="input-group">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text">
                                            <i class="material-icons">mail</i>
                                        </span>
                                    </div>
                                    <input id="email" type="email" class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }}" name="email"
                                    value="{{ old('email') }}" required autofocus placeholder="ingrese su correo">
                                </div>

                                <div class="input-group">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text">
                                            <i class="material-icons">lock_outline</i>
                                        </span>
                                    </div>
                                    <input id="password" type="password" class="form-control{{ $errors->has('password') ? ' is-invalid' : '' }}"
                                    name="password" required placeholder="Contraseña..." autocomplete="off">
                                </div>

                                <div class="form-check">
                                        <label class="form-check-label">
                                          <input class="form-check-input" type="checkbox" name="remember" id="remember"
                    {{ old('remember') ? 'checked' : '' }}>
                                          Recordar sesión
                                          <span class="form-check-sign">
                                            <span class="check"></span>
                                          </span>
                                        </label>
                                </div>
                            </div>

                            <div class="footer">
                                <div class="form-group">
                                    <div class="d-flex justify-content-center">
                                     <button type="submit" class="btn btn-primary">
                                        {{ __('Login') }}
                                     </button>

                                        @if (Route::has('password.request'))
                                        <a class="mt-3 ml-1" href="{{ route('password.request') }}">
                                            {{ __('Olvido su contraseña?') }}
                                        </a>
                                        @endif
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
        @include('includes.footer')
    </div>
@endsection
