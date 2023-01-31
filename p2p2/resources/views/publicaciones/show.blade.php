@extends('predefinido')

@section('contenido')
    <!-- Modal -->
    <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    ...
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                    <button type="button" class="btn btn-primary">Save changes</button>
                </div>
            </div>
        </div>
    </div>
    <section>
        <div class="col-md-7 mx-5">
            <h2 class="featurette-heading fw-normal lh-1">{{$publicaciones->titulo}}</h2>

        </div>
        <div class="container-fluid py-5 bg-light m-0">
            <div class="container">
                <div class="row">
                    <div class="col-4">
                            <img src="{{$publicaciones->imagen}}" class="bd-placeholder-img card-img-top" width="100%" height="225">
                    </div>
                    <div class="col-8">
                        <div class="card">
                            <div class="card-body">
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
                                                <div class="modal fade" id="staticBackdrop" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
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
                                                <button type="button" class="btn btn-sm btn-outline-danger" data-bs-toggle="modal" data-bs-target="#staticBackdrop">
                                                    Borrar
                                                </button>
                                            </div>
                                        </div>
                                    </div>
                                    @endif
                                @endauth

                                <nav>
                                    <ul class="pagination">
                                        @if($publicaciones->id!=1)
                                            <li class="page-item"><a class="page-link" href="/publicacion/{{($publicaciones->id)-1}}">Anterior</a></li>
                                        @else
                                            <li class="page-item disabled"><a class="page-link" href="/publicacion/{{($publicaciones->id)-1}}">Anterior</a></li>
                                        @endif
                                        @if($publicaciones->id!=\App\Models\Publicaciones::latest()->first()->id)
                                            <li class="page-item"><a class="page-link" href="/publicacion/{{($publicaciones->id)+1}}">Siguiente</a></li>
                                        @else
                                            <li class="page-item disabled"><a class="page-link" href="/publicacion/{{($publicaciones->id)+1}}">Siguiente</a></li>
                                        @endif
                                    </ul>
                                </nav>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
