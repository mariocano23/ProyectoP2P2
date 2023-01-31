<?php

namespace App\Http\Controllers;

use App\Models\Publicaciones;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Validator;
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
        $request->validate([
            'imagen' => 'required',
            'titulo' => 'required',
            'descripcion' => 'required',
            'enventa' => 'boolean',
            'precio' => 'nullable|decimal:0,2'
        ]);

            $publicacion= new Publicaciones();
            $publicacion->usuario=Auth::user()->getAuthIdentifier();
            $publicacion->imagen=$request['imagen'];
            $publicacion->titulo=$request['titulo'];
            $publicacion->descripcion=$request['descripcion'];
            $publicacion->enventa=$request['enventa'] ?? 0;
            $publicacion->precio=$request['precio'];

            $publicacion->save();

            return redirect("/publicaciones");

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Publicaciones  $publicaciones
     * @return \Illuminate\Http\Response
     */
    public function show(Publicaciones $publicaciones)
    {
        return view('publicaciones.show',compact('publicaciones'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Publicaciones  $publicaciones
     * @return \Illuminate\Http\Response
     */
    public function edit(Publicaciones $publicaciones)
    {
        return view('publicaciones.edit',compact('publicaciones'));
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
        $request->validate([
            'imagen' => 'required',
            'titulo' => 'required',
            'descripcion' => 'required',
            'enventa' => 'boolean',
            'precio' => 'nullable|decimal:0,2'
        ]);

        $publicaciones->usuario=Auth::user()->getAuthIdentifier();
        $publicaciones->imagen=$request['imagen'];
        $publicaciones->titulo=$request['titulo'];
        $publicaciones->descripcion=$request['descripcion'];
        $publicaciones->enventa=$request['enventa'] ?? 0;
        $publicaciones->precio=$request['precio'];

        $publicaciones->update();

        return redirect("/publicaciones");
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Publicaciones  $publicaciones
     * @return \Illuminate\Http\Response
     */
    public function destroy(Publicaciones $publicaciones)
    {
        try {
            $publicaciones -> deleteOrFail();
        }catch (\Throwable $e){
            return back();
        }
        return redirect('/publicaciones');
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
