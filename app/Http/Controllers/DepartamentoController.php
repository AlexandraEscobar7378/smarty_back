<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Departamento;
use Datetime;

class DepartamentoController extends Controller
{
    /// METODO INSERT PARA AGREGAR LOS DEPARTAMENTOS:
    public function insert(Request $request)
    {
        $datos = array(
        "nombre_departamento" => $request -> nombre,
        );
        
        $nuevoDepartamento = new Departamento($datos);
        $nuevoDepartamento -> save();
        
        return response()->json($nuevoDepartemento);
    }
    
    ///METODO LISTAR PARA MOSTRAR LOS DEPARTAMENTOS:
    public function all(Request $request)
    {
    
    $departamento = Departamento::where()->select("nombre_departamento", "id");
    if($request -> has('order'))
    {
    
    $filtro = ($request -> has('filter'))? $request -> filter: "id";
    $departamento = $departamento -> get();
    
    return response()->json($departamento);
    
    }
    
  }
    

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
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
}
