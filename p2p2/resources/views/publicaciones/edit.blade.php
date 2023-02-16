@extends('predefinido')

@section('contenido')
    @auth
        @if(\Illuminate\Support\Facades\Auth::user()->getAuthIdentifier()==$publicaciones->usuario)
    <section>

        <div class=" w-50 m-auto mt-4 py-5 bg-dark-subtle rounded-2 ">
            <div class="container px-5">
                <h2>Modificación de Publicación: {{$publicaciones->titulo}}</h2>
                <form id="formPublicacion" action="/publicacion/{{$publicaciones->id}}" method="post">
                    {{csrf_field()}}
                    @method('put')
                    <div class="mb-3">
                        <label for="inputTitulo" class="form-label">Título</label>
                        <input type="text" class="form-control" id="inputTitulo" name="titulo" value="{{$publicaciones->titulo}}">
                    </div>
                    <div class="mb-3">
                        <label for="inputDescripcion" class="form-label">Descripción</label>
                        <textarea name="descripcion" id="inputDescripcion" class="form-control">{{$publicaciones->descripcion}}</textarea>
                    </div>

                    <div class="mb-3">
                        <label for="inputImagen" class="form-label">Imagen</label>
                        <input type="text" class="form-control" id="inputImagen" name="imagen" value="{{$publicaciones->imagen}}">
                    </div>
                    @if($publicaciones->enventa)
                        <div class="mb-3">
                            <label for="inputEnventa" class="form-check-label">En Venta</label>
                            <input type="checkbox" class="form-check-input ms-1" id="inputEnventa" name="enventa" value=1 checked>
                        </div>
                    @else
                        <div class="mb-3">
                            <label for="inputEnventa" class="form-check-label">En Venta</label>
                            <input type="checkbox" class="form-check-input ms-1" id="inputEnventa" name="enventa" value=1>
                        </div>
                    @endif
                    <div class="mb-3">
                        <label for="inputPrecio" class="form-label">Precio</label>
                        <input type="number" step="0.01" class="form-control" id="inputPrecio" name="precio" value="{{$publicaciones->precio}}">
                    </div>
                    <button id="botonSubmitPublicacion" type="submit" class=" btn btn-primary ">Aceptar</button>
                </form>

            </div>
        </div>
    </section>

    <script src="https://unpkg.com/just-validate@latest/dist/just-validate.production.min.js"></script>
    <script type="module" src="/../../js/validarPublicacion.js"></script>
        @else

            <h2 class="m-auto text-center">No puedes editar esta publicación</h2>
            <div class="m-auto">
                <img class="mx-auto d-block" src="https://media.tenor.com/c5a_h8U1MzkAAAAC/nuh-uh-beocord.gif">
            </div>

        @endif
    @else

        <h2 class="m-auto text-center">No puedes acceder aquí sin iniciar sesión</h2>
        <div class="m-auto">
            <img class="mx-auto d-block" src="https://media.tenor.com/c5a_h8U1MzkAAAAC/nuh-uh-beocord.gif">
        </div>
    @endauth

    @include('parciales.errores')

@endsection
