@extends('layouts.app')


<style>
    @import url('https://fonts.googleapis.com/css?family=Numans');

    html,
    body {
        background-image: url('http://getwallpapers.com/wallpaper/full/a/5/d/544750.jpg');
        background-size: cover;
        background-repeat: no-repeat;
        height: 100%;
        font-family: 'Numans', sans-serif;
    }

    .container {
        height: 100%;
        align-content: center;
    }

    .card {
        height: 370px;
        width: 400px;
        top: 100px;
        background-color: rgba(0, 0, 0, 0.5) !important;
        position: absolute;
        transform: translate(110%, 30%);

    }

    .social_icon span {
        font-size: 60px;
        margin-left: 10px;
        color: rgb(21, 228, 208);
    }

    .social_icon span:hover {
        color: white;
        cursor: pointer;
    }

    .card-header h3 {
        color: white;
    }

    .social_icon {
        position: absolute;
        right: 20px;
        top: -27px;
        color: rgb(21, 228, 208);
    }

    .input-group-prepend span {
        width: 50px;
        background-color: rgb(21, 228, 208);
        color: black;
        border: 0 !important;
    }

    input:focus {
        outline: 0 0 0 0 !important;
        box-shadow: 0 0 0 0 !important;

    }

    .remember {
        color: white;
    }

    .remember input {
        width: 20px;
        height: 20px;
        margin-left: 15px;
        margin-right: 5px;
    }

    .login_btn {
        color: black;
        background-color: rgb(21, 228, 208);
        width: 100px;
    }

    .login_btn:hover {
        color: black;
        background-color: white;
    }

    .links {
        color: white;
    }

    .links a {
        margin-left: 4px;
    }

    #btn_register {
        background-color: rgb(21, 228, 208);
        color: black;
        border: 1px solid transparent;
        border-radius: 0.25rem;
        padding: 0.375rem 0.75rem;
        font-size: 1rem;
        line-height: 1.5;

    }

    #btn_register:hover {
        background-color: white;
    }

    .navbar {
        display: none;
    }

    .company_icon {
        position: absolute;
        top: -360px;
        left: -80px;
        z-index: -2000;
        /* Asegura que el icono esté por encima del card */
        width: 550px;
        /* Ajusta el tamaño según sea necesario */
        height: 450px;
        /* Ajusta el tamaño según sea necesario */
    }
</style>

<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">

<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.3.1/css/all.css" integrity="sha384-mzrmE5qonljUremFsqc01SB46JvROS7bZs3IO2EmfFsd15uHvIt+Y8vEf7N7fWAU" crossorigin="anonymous">


@section('content')
<div class="container">
    <div>
        <div>
            <div class="card">
                <div class="card-header">

                    <h3>Registrarse</h3>
                    <div class="d-flex justify-content-end social_icon">
                        <span><i class="fab fa-facebook-square"></i></span>
                        <span><i class="fab fa-google-plus-square"></i></span>
                        <span><i class="fab fa-twitter-square"></i></span>
                    </div>


                </div>

                <div class="card-body">
                    <img src="{{ asset('images/iconoPrincipal.png') }}" alt="Company Logo" class="company_icon">
                    <form method="POST" action="{{ route('register') }}">
                        @csrf

                        <div class="input-group form-group">
                            <div class="input-group-prepend">
                                <span class="input-group-text"><i class="fas fa-user"></i></span>
                            </div>
                            <input id="name" type="text" placeholder="Nombre de Usuario" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus>


                            @error('name')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                            @enderror
                        </div>

                        <div class="input-group form-group">
                            <div class="input-group-prepend">
                                <span class="input-group-text"><i class="fas fa-envelope"></i></span>
                            </div>
                            <input id="email" placeholder="Correo Electrónico" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email">


                            @error('email')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                            @enderror
                        </div>

                        <div class="input-group form-group">
                            <div class="input-group-prepend">
                                <span class="input-group-text"><i class="fas fa-key"></i></span>
                            </div>
                            <input id="password" placeholder="Contraseña" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password">

                            @error('password')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                            @enderror
                        </div>

                        <div class="input-group form-group">
                            <div class="input-group-prepend">
                                <span class="input-group-text"><i class="fas fa-key"></i></span>
                            </div>
                            <input id="password-confirm" placeholder="Confirmar contraseña" type="password" class="form-control" name="password_confirmation" required autocomplete="new-password">
                        </div>
                        <!-- ROL -->
                        <div class="input-group form-group">
                            <div class="input-group-prepend">
                                <span class="input-group-text"><i class="fas fa-check"></i></span>
                            </div>
                            <input type="checkbox" id="is_admin" name="is_admin" class="form-check-input">
                            <label for="is_admin" class="form-check-label">¿Es administrador?</label>
                        </div>
                </div>

                <div class="form-group">
                    <div class="col-md-6 offset-md-4">
                        <button type="submit" id="btn_register">
                            {{ __('Register') }}
                        </button>
                    </div>
                </div>

                <div class="card-footer">
                    <div class="d-flex justify-content-center links">
                        ¿Ya tienes una Cuenta?<a href="{{route('login')}}">Iniciar Sesión</a>
                    </div>
                </div>
                </form>
            </div>
        </div>
    </div>
</div>
</div>
@endsection