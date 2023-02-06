@extends('predefinido')

@section('contenido')
    <section>

        <div class=" w-50 m-auto py-5 bg-light">
            <div class="container px-5">
                <h2>Modificación de Publicacion: {{$publicaciones->titulo}}</h2>
                <form id="formPublicacion" action="/publicacion/{{$publicaciones->id}}" method="post">
                    {{csrf_field()}}
                    @method('put')
                    <div class="form-check form-switch">
                        <label for="inputTitulo" class="form-label">Título</label>
                        <input type="text" class="form-control" id="inputTitulo" name="titulo" value="{{$publicaciones->titulo}}">
                    </div>
                    <div class="form-check form-switch">
                        <label for="inputDescripcion" class="form-label">Descripción</label>
                        <textarea name="descripcion" id="inputDescripcion" class="form-control">{{$publicaciones->descripcion}}</textarea>
                    </div>

                    <div class="form-check form-switch">
                        <label for="inputImagen" class="form-label">Imagen</label>
                        <input type="text" class="form-control" id="inputImagen" name="imagen" value="{{$publicaciones->imagen}}">
                    </div>
                    @if($publicaciones->enventa)
                        <div class="form-check form-switch">
                            <label for="inputEnventa" class="form-check-label">En Venta</label>
                            <input type="checkbox" class="form-check-input" id="inputEnventa" name="enventa" value=1 checked>
                        </div>
                    @else
                        <div class="form-check form-switch">
                            <label for="inputEnventa" class="form-check-label">En Venta</label>
                            <input type="checkbox" class="form-check-input" id="inputEnventa" name="enventa" value=1>
                        </div>
                    @endif
                    <div class="form-check form-switch">
                        <label for="inputPrecio" class="form-label">Precio</label>
                        <input type="number" step="0.01" class="form-control" id="inputPrecio" name="precio" value="{{$publicaciones->precio}}">
                    </div>
                    <button id="botonSubmitPublicacion" type="submit" class="btn btn-primary">Editar</button>
                </form>

            </div>
        </div>
    </section>

    <script src="https://unpkg.com/just-validate@latest/dist/just-validate.production.min.js"></script>
    <script type="module" src="/../../js/validarPublicacion.js"></script>

    @include('parciales.errores')

@endsection
