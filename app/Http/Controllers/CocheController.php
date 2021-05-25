<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Coche;
use App\Marca;

class CocheController extends Controller {

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index() { //muestra todos los coches
        $coches = Coche::all();
        return view('mostrarCoches', compact('coches'));
        // return response()->json(["coches"=>$coches]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create() { //crea coches
        $marcasCoches = Marca::all();
        return view('crearCoche', compact('marcasCoches'));
    }

    function retornarMarca($id) {
        $nombre = Marca::find($id);
        return $nombre->marca;
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request) { //guarda coche en base de datos
        $reglas = [
           
            "modelo" => "required|max:255",
            "imagen" => "required|image|mimes:jpeg,png,jpg,gif,svg|max:2048"
        ];

        $mensajes = [
            
            "modelo.required" => "Debe introducir un modelo",
            "imagen.required" => "Debe introducir una imagen",
            "imagen.max" => "Imagen muy grande"
        ];

        $this->validate($request, $reglas, $mensajes);

        $cocheNuevo = new Coche;

        $cocheNuevo->id_coche = 0;
        $cocheNuevo->modelo = $request->modelo;
        
        $cocheNuevo->marca = $this->retornarMarca($request->marca);
        $cocheNuevo->imagen = $request->imagen->getClientOriginalName();

        $cocheNuevo->save();

        $request->file('imagen')->storeAs('public/img', $cocheNuevo->imagen);

        return redirect('coche')->with('crearCoche', 'Coche creado con exito.');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id) { //muestra el listado de una marca
        $listadoCoches = Coche::where("id_marca", "=", $id)->get();
        return view('listadoCoches', compact('listadoCoches'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id) {  //editar coches
        $marcasCoches = Marca::all();
        $coche = Coche::find($id);
        return view('modificarCoche', ['coche' => $coche, 'marcasCoches' => $marcasCoches]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id) {  //guardar los cambios de modificacion coche
        $reglas = [
            
            "modelo" => "required|max:255",
            "imagen" => "required|image|mimes:jpeg,png,jpg,gif,svg|max:2048"
        ];

        $mensajes = [
            
            "modelo.required" => "Debe introducir un modelo",
            "imagen.required" => "Debe introducir una imagen",
            "imagen.max" => "Imagen muy grande"
        ];

        $this->validate($request, $reglas, $mensajes);

        $cocheModificar = Coche::find($id);

        $cocheModificar->id_coche = 0;
        $cocheModificar->modelo = $request->modelo;
        $cocheModificar->id_marca = $request->marca;
        $cocheModificar->imagen = $request->imagen->getClientOriginalName();

        $cocheModificar->save();

        $request->file('imagen')->storeAs('public/img', $cocheModificar->imagen);

        return redirect('coche')->with('modificarCoche', 'Coche modificado con exito.');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id) {  //eliminar coche
        $coche = Coche::find($id);
        $coche->delete();
        return redirect('coche');
    }

    public function ordenar() {  //ordena alfabeticamente coches
        $coches = Coche::orderBy('modelo')->get();
        return view('mostrarCoches', compact('coches'));
    }

    public function marcas() {  //muestra todas las marcas de la base de datos
        $marcas = Marca::all();
        return view('mostrarMarcas', compact('marcas'));
    }

}
