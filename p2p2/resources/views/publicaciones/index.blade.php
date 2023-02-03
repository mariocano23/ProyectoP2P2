

@extends('predefinido')

@section('contenido')
    <section>
        <div class="album py-5 bg-light">
            <div class="container">
                <div id="contenedorPublicaciones" class="row row-cols-1 row-cols-sm-2 row-cols-md-3 g-3">
                    @foreach($publicaciones as $publicacion)
                        <div class="col">
                            <div class="card shadow-sm">
                                <img  class="bd-placeholder-img card-img-top" width="100%" height="225" src="{{$publicacion->imagen}}">
                                <div class="card-body">
                                    <p class="card-text">{{$publicacion->titulo}}</p>
                                    <div class="d-flex justify-content-between align-items-center">
                                        <div class="btn-group">
                                            <a href="/publicacion/{{$publicacion->id}}"><button type="button" class="btn btn-sm btn-outline-secondary">Ver Publicación</button></a>
                                        </div>
                                        @if($publicacion->enventa==true)
                                            <small class="text-success">En Venta</small>
                                            <small class="text-success">{{$publicacion->precio}} €</small>
                                        @else
                                            <small class="text-danger">Exposición</small>
                                        @endif

                                    </div>
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
        </div>
    </section>

@endsection
