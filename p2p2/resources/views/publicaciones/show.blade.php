@extends('predefinido')

@section('contenido')
    <section>
        <div class="container-fluid py-5 pt-4 m-0">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-8">
                        <img src="{{$publicaciones->imagen}}" class="mx-auto d-block rounded-2" width="100%" height="500px">
                    </div>
                </div>
                <div class="row justify-content-center pt-3">
                    <div class="col-8">
                        <div class="card">
                            <div class="card-body">
                                <h2 class="fw-normal lh-1 mt-2">{{$publicaciones->titulo}}</h2>
                                <p class="lead">Características</p>

                                    <p >Propietario: &nbsp {{\App\Http\Controllers\RegisterController::showUsername($publicaciones->usuario)}}</p>

                                    <p ><pre>{{$publicaciones->descripcion}}</pre> </p>

                                @if($publicaciones->enventa)
                                    <p class="text-success">Precio: {{$publicaciones->precio}}€</p>
                                @else

                                @endif

                                @auth
                                    @if(\Illuminate\Support\Facades\Auth::user()->getAuthIdentifier()==$publicaciones->usuario)
                                    <div class="row">
                                        <div class="col-1">
                                            <div class="btn-group py-2">
                                                <a href="/modificar-publicacion/{{$publicaciones->id}}"><button type="button" class="btn btn-sm btn-outline-primary">Editar</button></a>
                                            </div>
                                        </div>
                                        <div class="col-1">
                                            <div class="btn-group py-2">

                                                <button type="button" class="btn btn-sm btn-outline-danger" data-bs-toggle="modal" data-bs-target="#staticBackdrop">
                                                    Borrar
                                                </button>
                                            </div>
                                        </div>
                                    </div>

                                    <div  class="modal fade" id="staticBackdrop" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
                                        <div class="modal-dialog">
                                            <div class="modal-content">
                                                <div class="modal-header">
                                                    <h1 class="modal-title fs-5" id="staticBackdropLabel">Borrar Publicación</h1>
                                                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                                </div>
                                                <div class="modal-body">
                                                    <p>Desea borrar esta publicación: {{$publicaciones->titulo}} ?<br> La acción no se podrá deshacer</p>
                                                </div>
                                                <div class="modal-footer">
                                                    <button type="button" class="btn btn-sm btn-secondary" data-bs-dismiss="modal">Cerrar</button>
                                                    <form action="/publicacion/{{$publicaciones->id}}" method="post">
                                                        {{csrf_field()}}
                                                        @method('delete')
                                                        <input type="submit" class="btn btn-sm btn-outline-danger" value="Borrar">
                                                    </form>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    @endif
                                @endauth

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
