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
            <h2 class="featurette-heading fw-normal lh-1">Información de la pista {{$pista->id}}</h2>

        </div>
        <div class="container-fluid py-5 bg-light m-0">
            <div class="container">
                <div class="row">
                    <div class="col-4">
                        @if($pista->tipoPista=='Individual')
                            <img src="/img/pista/individual.jpg" class="bd-placeholder-img card-img-top" width="100%" height="225">
                        @else
                            <img src="/img/pista/dobles.jpg" class="bd-placeholder-img card-img-top" width="100%" height="225">
                        @endif
                    </div>
                    <div class="col-8">
                        <div class="card">
                            <div class="card-body">
                                <p class="lead">Características</p>
                                @if($pista->luz)
                                    <p class="text-success">Esta pista tiene luz disponible</p>
                                @else
                                    <p class="text-danger">Esta pista no tiene luz disponible</p>
                                @endif
                                @if($pista->cubierta)
                                    <p class="text-success">Esta pista está cubierta</p>
                                @else
                                    <p class="text-danger">Esta pista no está cubierta</p>
                                @endif
                                @if($pista->disponible)
                                    <p class="text-success">Pista disponible</p>
                                @else
                                    <p class="text-danger">Pista no disponible</p>
                                @endif
                                <div class="btn-group py-2">
                                    <a href="/modificar-pista/{{$pista->id}}"><button type="button" class="btn btn-sm btn-outline-primary">Editar</button></a>
                                    <button type="button" class="btn btn-sm btn-outline-light mx-1 bg-danger" data-toggle="modal" data-target="#borrarPista">Borrar</button>
                                </div>

                                <nav>
                                    <ul class="pagination">
                                        @if($pista->id!=1)
                                            <li class="page-item"><a class="page-link" href="/pista/{{($pista->id)-1}}">Anterior</a></li>
                                        @else
                                            <li class="page-item disabled"><a class="page-link" href="/pista/{{($pista->id)-1}}">Anterior</a></li>
                                        @endif
                                        @if($pista->id!=\App\Models\Pista::latest()->first()->id)
                                            <li class="page-item"><a class="page-link" href="/pista/{{($pista->id)+1}}">Siguiente</a></li>
                                        @else
                                            <li class="page-item disabled"><a class="page-link" href="/pista/{{($pista->id)+1}}">Siguiente</a></li>
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
