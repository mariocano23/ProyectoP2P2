@extends('predefinido');

@section('contenido')
    <div class=" w-50 m-auto py-5 bg-light">
        <div class="container px-5">
            <h2>Registro de usuario</h2>
            <form id="formRegistro" action="/register" method="post">
                {{csrf_field()}}
                <div class="form-group">
                    <label for="inputUsername">Nombre de usuario</label>
                    <input type="text" class="form-control" id="inputUsername" name="username">
                </div>

                <div class="form-group">
                    <label for="inputCorreo">Correo</label>
                    <input type="email" class="form-control" id="inputCorreo" aria-describedby="emailHelp" name="email">
                </div>
                <div class="form-group">
                    <label for="InputPassword1">Contraseña</label>
                    <input type="password" class="form-control" id="InputPassword1"  name="password">
                </div>
                <div class="form-group">
                    <label for="InputPasswordConfirmation">Confirmar Contraseña</label>
                    <input type="password" class="form-control" id="InputPasswordConfirmation"  name="password_confirmation">
                </div>
                <button type="submit" class="btn btn-primary" id="botonSubmitRegister">Registrarse</button>
            </form>
        </div>
    </div>
     <script src="https://unpkg.com/just-validate@latest/dist/just-validate.production.min.js"></script>
    <script type="module" src="/../../js/validarRegistro.js"></script>

    @include('parciales.errores')

@endsection
