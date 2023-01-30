@extends('predefinido')

@section('contenido')
    <section>

        <div class=" w-50 m-auto py-5 bg-light">
            <div class="container px-5">
                <h2>Modificación de Pista {{$pista->id}}</h2>
                <form action="/pista/{{$pista->id}}" method="post">
                    {{csrf_field()}}
                    @method('put')
                    <div class="form-check form-switch">
                        <label for="inputLuz" class="form-label">Luz</label>
                        @if($pista->luz)
                            <input type="checkbox" class="form-check-input" id="inputLuz" name="luz" checked>
                        @else
                            <input type="checkbox" class="form-check-input" id="inputLuz" name="luz" >
                        @endif

                    </div>
                    <div class="form-check form-switch">
                        <label for="inputPrecioLuz" class="form-label">Precio Luz</label>
                        <input type="number" class="form-control" id="inputPrecioLuz" name="precioLuz" value="{{$pista->precioLuz}}">
                    </div>

                    <div class="form-check form-switch">
                        @if($pista->cubierta)
                            <input class="form-check-input" type="checkbox" role="switch" id="inputCubierta" name="cubierta" checked>
                        @else
                            <input class="form-check-input" type="checkbox" role="switch" id="inputCubierta" name="cubierta" >
                        @endif
                            <label class="form-check-label" for="inputCubierta">Pista Cubierta</label>
                    </div>
                    <div class="form-check form-switch">
                        @if($pista->disponible)
                            <input class="form-check-input" type="checkbox" role="switch" id="inputDisponible" name="disponible" checked>
                        @else
                            <input class="form-check-input" type="checkbox" role="switch" id="inputDisponible" name="disponible" >
                        @endif
                        <label class="form-check-label" for="inputDisponible">Pista Disponible</label>
                    </div>
                    <div class="form-check form-switch">
                        <label class="form-check-label" for="selectTipo">Tipo de Pista</label>
                        <select class="form-select form-select-lg mb-3" id="selectTipo" name="tipoPista" aria-label=".form-select-lg example">
                            @if($pista->tipoPista=="individual")
                                <option value="individual" selected>Individual</option>
                                <option value="dobles">Dobles</option>
                            @else
                                <option value="individual" >Individual</option>
                                <option value="dobles" selected>Dobles</option>
                            @endif
                        </select>

                    </div>

                    <button type="submit" class="btn btn-primary">Submit</button>
                </form>

            </div>
        </div>
    </section>

    @include('parciales.errores')

@endsection
