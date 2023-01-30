@extends('predefinido')

@section('contenido')
    <section>
        <div class=" w-50 m-auto py-5 bg-light">
            <div class="container px-5">
                    <form action="{{route('guardarPista')}}" method="post">
                        {{csrf_field()}}
                        <div class="form-check form-switch">
                            <label for="inputLuz" class="form-label">Luz</label>
                            <input type="checkbox" class="form-check-input" id="inputLuz" name="luz" checked>
                        </div>
                        <div class="form-check form-switch">
                            <label for="inputPrecioLuz" class="form-label">Precio Luz</label>
                            <input type="number" class="form-control" id="inputPrecioLuz" name="precioLuz">
                        </div>

                        <div class="form-check form-switch">
                            <input class="form-check-input" type="checkbox" role="switch" id="inputCubierta" name="cubierta" checked>
                            <label class="form-check-label" for="inputCubierta">Pista Cubierta</label>
                        </div>
                        <div class="form-check form-switch">
                            <input class="form-check-input" type="checkbox" role="switch" id="inputDisponible" name="disponible" checked>
                            <label class="form-check-label" for="inputDisponible">Pista Disponible</label>
                        </div>
                        <div class="form-check form-switch">
                            <label class="form-check-label" for="selectTipo">Pista Disponible</label>
                            <select class="form-select form-select-lg mb-3" id="selectTipo" name="tipoPista" aria-label=".form-select-lg example">
                                <option value="individual" selected>Individual</option>
                                <option value="dobles">Dobles</option>
                            </select>

                        </div>

                        <button type="submit" class="btn btn-primary">Submit</button>
                    </form>

            </div>
        </div>
    </section>
@endsection
