@extends('predefinido');

@section('contenido')
    <div class=" w-50 m-auto py-5 bg-light">
        <div class="container px-5">
            <h2>Inicio de sesión</h2>
            <form action="/login" method="post">
                {{csrf_field()}}
                <div>
                    <label for="inputCorreo">Correo</label>
                    <input type="email" class="form-control" id="inputCorreo" aria-describedby="emailHelp" placeholder="Enter email" name="email">
                </div>
                <div class="form-group">
                    <label for="InputPassword1">Contraseña</label>
                    <input type="password" class="form-control" id="InputPassword1" placeholder="Password" name="password">
                </div>
                <button type="submit" class="btn btn-primary">Iniciar sesión</button>
            </form>
        </div>
    </div>

    @include('parciales.errores')
@endsection
