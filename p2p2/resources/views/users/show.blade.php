@extends('predefinido')

@section('contenido')
    @auth
        @if(\Illuminate\Support\Facades\Auth::user()->getAuthIdentifier()==$user->id)
<div id="{{$user->id}}" class="container rounded bg-white mt-5 mb-5 divUsuario">
    <div class="row">
        <div id="datosUsuario" class="col-md-3 border-right">

        </div>
        <div  class="col-md-5 border-right">
            <div class="p-3 py-5">
                <div class="d-flex justify-content-between align-items-center mb-3">
                    <h4 class="text-right">Ajustes de Perfil</h4>
                </div>
                <form action="/mi-cuenta/{{$user->id}}" method="post">
                    {{csrf_field()}}
                    @method('put')
                <div id="ajustesUsuario" class="row mt-3">

                </div>
                <div class="mt-5 text-center"><button class="btn btn-primary profile-button" type="submit">Guardar Cambios</button></div>
                </form>
            </div>

        </div>
        <div class="col-md-4">
            <div id="publicacionesUsuario" class="p-3 py-5">
                <div  class="d-flex justify-content-between align-items-center experience"><span>Mis publicaciones</span></div><br>

            </div>
        </div>

    </div>
</div>
</div>
</div>


        <script type="module" src="../../../js/consumirApiPublicacionesUsuario.js">
        </script>
        @else

            <h2 class="m-auto text-center">No puedes ver los ajustes de esta cuenta</h2>
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
@endsection
