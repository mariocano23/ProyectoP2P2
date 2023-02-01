@extends('predefinido')

@section('contenido')
    @auth
        @if(\Illuminate\Support\Facades\Auth::user()->getAuthIdentifier()==$user->id)
<div class="container rounded bg-white mt-5 mb-5">
    <div class="row">
        <div class="col-md-3 border-right">
            <div class="d-flex flex-column align-items-center text-center p-3 py-5"><img class="rounded-circle mt-5" width="150px" height="150px" src="{{$user->foto}}"><span class="font-weight-bold">{{$user->username}}</span><span class="text-black-50">{{$user->email}}</span><span> </span></div>
        </div>
        <div class="col-md-5 border-right">
            <div class="p-3 py-5">
                <div class="d-flex justify-content-between align-items-center mb-3">
                    <h4 class="text-right">Ajustes de Perfil</h4>
                </div>
                <form action="/mi-cuenta/{{$user->id}}" method="post">
                    {{csrf_field()}}
                    @method('put')
                <div class="row mt-3">
                    <div><label class="labels" for="inputDescripcion">Descripción</label><textarea type="text" name="descripcion" id="inpurDescripcion" class="form-control">{{$user->descripcion}}</textarea></div>
                    <div><label class="labels" for="inputFoto">Foto de Perfil</label><input type="text" class="form-control" id="inputFoto" name="foto" value="{{$user->foto}}"></div>
                </div>
                <div class="mt-5 text-center"><button class="btn btn-primary profile-button" type="submit">Guardar Cambios</button></div>
                </form>
            </div>

        </div>
        <div class="col-md-4">
            <div class="p-3 py-5">
                <div class="d-flex justify-content-between align-items-center experience"><span>Mis publicaciones</span></div><br>
                @foreach($publicaciones as $publicacion)
                    <div class="col">
                        <div class="card shadow-sm">
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
                    </br>
                @endforeach
            </div>
        </div>

    </div>
</div>
</div>
</div>
        @endif
    @endauth
@endsection
