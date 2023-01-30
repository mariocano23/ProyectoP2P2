@extends('predefinido');

@section('contenido')
    <div class=" w-50 m-auto py-5 bg-light">
        <div class="container px-5">
            <h2>Registro de usuario</h2>
            <form action="/register" method="post">
                {{csrf_field()}}
                <div class="form-group">
                    <label for="inputNombre">Nombre</label>
                    <input type="text" class="form-control" id="inputNombre" name="nombre">
                </div>
                <div class="form-group">
                    <label for="inputApellidos">Apellidos</label>
                    <input type="text" class="form-control" id="inputApellidos" name="apellidos">
                </div>
                <div class="form-group">
                    <label for="inputTelefono">Teléfono</label>
                    <input type="text" class="form-control" id="inputTelefono" name="telefono">
                </div>
                <div class="form-group">
                    <label for="inputCorreo">Correo</label>
                    <input type="email" class="form-control" id="inputCorreo" aria-describedby="emailHelp" placeholder="Enter email" name="email">
                </div>
                <div class="form-group">
                    <label for="InputPassword1">Contraseña</label>
                    <input type="password" class="form-control" id="InputPassword1" placeholder="Password" name="password">
                </div>
                <div class="form-group">
                    <label for="InputPasswordConfirmation">Contraseña</label>
                    <input type="password" class="form-control" id="InputPasswordConfirmation" placeholder="Password" name="password_confirmation">
                </div>
                <button type="submit" class="btn btn-primary">Registrarse</button>
            </form>
        </div>
    </div>

    @include('parciales.errores')
@endsection
