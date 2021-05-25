<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\usuario;

class userController extends Controller {

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index() {
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create() {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request) {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id) {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id) {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id) {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id) {
        //
    }

    public function validar(Request $request) {
        $reglas = [
            "usuario" => "bail|required",
            "password" => "bail|required",
        ];

        $mensajes = [
            "usuario.required" => "Debe introducir un usuario",
            "password.required" => "Debe introducir una contraseña"
        ];

        //$this->validate($request, $reglas, $mensajes);
        $request->validate($reglas, $mensajes);

        $user_db = usuario::select('nombre', 'apellido')->where('user', $request->usuario)->first();
        if (empty($user_db)) {
            return back()->with('errorsesion', 'Usuario o Contraseña incorrectos');
        } else {
            return redirect('/coche');
        }
    }

}
