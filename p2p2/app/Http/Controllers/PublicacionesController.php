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
        //$this->crearPublicaciones();
        $publicaciones = Publicaciones::all();
        return view( 'publicaciones.index', ['publicaciones'=>$publicaciones]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('publicaciones.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $validacion = $this->validate($request,[
            'usuario' => 'string',
            'imagen' => 'required|string',
            'titulo' => 'required|string',
            'descripcion' => 'string',
            'enventa' => 'boolean',
            'precio' => 'decimal:0,2'
        ]);


        if($validacion->fails()){
            return back()->withErrors(['mensaje' => "error al crear la publicación."]);
        }else{
            $publicacion= new Publicaciones();
            $publicacion->usuario=$request['usuario'];
            $publicacion->imagen=$request['imagen'];
            $publicacion->titulo=$request['titulo'];
            $publicacion->titulo=$request['titulo'];
            $publicacion->descripcion=$request['descripcion'];
            $publicacion->enventa=$request['enventa'];
            $publicacion->precio=$request['precio'];

            $publicacion->save();

            return redirect("/publicaciones");
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

    public function crearPublicaciones()
    {
        $publicacion = new Publicaciones();

        $publicacion->usuario="pepe123";
        $publicacion->imagen="https://i.ytimg.com/vi/biiJfvppa9Q/maxresdefault.jpg";
        $publicacion->titulo="ps2 chipiada";
        $publicacion->descripcion="ps2 chipiada por mi primito";
        $publicacion->enventa=true;
        $publicacion->precio=10;


        $publicacion->save();


    }
}
