<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;

class RegisterController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('register');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $validacion = Validator::make($request->all(), [
            'username' => 'required|unique:users',
            'email' => 'required|email|unique:users',
            'password' => 'required|min:6|confirmed'
        ]);

        if ($validacion->fails()){
            return back();
        }
        else{
            $user = new User();

            $user->username=$request['username'];
            $user->email=$request['email'];
            $user->password=Hash::make($request['password']);
            $user->foto='https://cdn.icon-icons.com/icons2/1154/PNG/512/1486564400-account_81513.png';

            $user->save();

            auth()->login($user, true);

            return redirect('/publicaciones');

        }


    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }

    public function createLogin(){
        return view('login');
    }

    public function storeLogin(Request $request){

        $credenciales = [
            'email' => $request['email'],
            'password' => $request['password']
        ];

        if (!Auth::attempt($credenciales)){
            return back() -> withErrors(['mensaje' => 'Correo o contraseña incorrectos.']);
        }
        else{
            return redirect('/publicaciones');
        }

    }

    public function destroyLogin(){
        Auth::logout();
        return redirect('/publicaciones');
    }

    public static function showUsername($userID){
        $usename = DB::table('users')->where('id',$userID)->value('username');
        return $usename;
    }


}
