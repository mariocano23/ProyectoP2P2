<?php

namespace App\Http\Controllers;

use App\Models\Publicaciones;
use Illuminate\Http\Request;
use Illuminate\Validation\Rule;

class PublicacionesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $publicaciones = Publicaciones::all();
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request,[
            'usuario' => 'string',
            'foto' => 'required|string',
            'titulo' => 'required|string',
            'descripcion' => 'string',
            'enventa' => 'boolean',
            'precio' => 'decimal:0,2'
        ]);

        $publicacion=Publicaciones::create($request['usuario'],$request['foto'],$request['titulo'],$request['descripcion'],$request['enventa'] ?? 0,$request['precio']);

        if ($publicacion){
            return redirect("/publicaciones");
        }else{
            return back();
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Publicaciones  $publicaciones
     * @return \Illuminate\Http\Response
     */
    public function show(Publicaciones $publicaciones)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Publicaciones  $publicaciones
     * @return \Illuminate\Http\Response
     */
    public function edit(Publicaciones $publicaciones)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Publicaciones  $publicaciones
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Publicaciones $publicaciones)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Publicaciones  $publicaciones
     * @return \Illuminate\Http\Response
     */
    public function destroy(Publicaciones $publicaciones)
    {
        //
    }
}
