<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Nivel_Satisfaccion;

class Niveles_Satisfaccion extends Controller
{
    public function listar(Request $request) {

    $Nivel_Satisfaccion = Nivel_Satisfaccion::where ('id_alumno', '=', $id_alumno)
    ->select('estrella', 'comentario','fecha_registro',
'fecha_actualizacion',);
  /*  Validando  */
  if ($request->has('order')){
    //$categorias->orderBy('id', $request->order);

    $filtro = ($request->has('filter')) ? $request->filter : "id"; //con esto buscamos que sea por otros
    // campos como por nombre o fecha
    $Nivel_Satisfaccion->orderBy($filtro, $request->order);
  }

  //ejecutamos la sentencia select paraun listado

  $Nivel_Satisfaccion = $Nivel_Satisfaccion->get();
  return  response()->json($Nivel_Satisfaccion); //creo que aqui va deacuedo a
  //en la base de datos
  }  

public function obtener(Request $request, $id) 
  {
    //select*from categorias where id=$id
    $Nivel_Satisfaccion =Nivel_Satisfaccion::where('id_alumno', '=', $id_alumno)
                         ->select('estrella','comentario','fecha_registro','
                         fecha_actualizacion')
                          ->first();
                        
    if ($Nivel_Satisfaccion == null){
     $mensaje = array(
      'error' => "Informacion no encontrada"
     );

     //respuesta para no encontrado - 404
     return response()->json($mensaje, 404);
    }                    
    //return $categoria;
    return response()->json($Nivel_Satisfaccion);
  } 

    
    public function insertar(Request $request) {}
    public function actualizar(Request $request) {}
    public function eliminar(Request $request) {}
}
