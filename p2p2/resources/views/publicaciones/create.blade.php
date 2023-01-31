@extends('predefinido')

@section('contenido')
    <section>
        <div class=" w-50 m-auto py-5 bg-light">
            <div class="container px-5">
                    <form action="{{route('guardarPublicacion')}}" method="post">
                        {{csrf_field()}}
                        <div class="form-check form-switch">
                            <label for="inputUsuario" class="form-label">Usuario</label>
                            <input type="text" class="form-control" id="inputUsuario" name="usuario" >
                        </div>
                        <div class="form-check form-switch">
                            <label for="inputTitulo" class="form-label">Título</label>
                            <input type="text" class="form-control" id="inputTitulo" name="titulo" >
                        </div>
                        <div class="form-check form-switch">
                            <label for="inputDescripcion" class="form-label">Descripción</label>
                            <textarea name="descripcion" id="inputDescripcion" class="form-control"></textarea>
                        </div>

                        <div class="form-check form-switch">
                            <label for="inputImagen" class="form-label">Imagen</label>
                            <input type="text" class="form-control" id="inputImagen" name="imagen" >
                        </div>
                        <div class="form-check form-switch">
                            <label for="inputEnventa" class="form-check-label">En Venta</label>
                            <input type="checkbox" class="form-check-input" id="inputEnventa" name="enventa" value=1>
                        </div>
                        <div class="form-check form-switch">
                            <label for="inputPrecio" class="form-label">Precio</label>
                            <input type="number" step="0.01" class="form-control" id="inputPrecio" name="precio" >
                        </div>
                        <button type="submit" class="btn btn-primary">Crear</button>
                    </form>
            </div>
        </div>
    </section>
    @include('parciales.errores')

@endsection
