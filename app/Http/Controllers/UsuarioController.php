<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UsuarioController extends Controller
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
     * Show the form for create a new user for the new resource.
     *
     * @return \Illuminate\Http\Response
     */
    
    public function create_newUser()    ////FALTA AGREGAR METODO POST A RUTAS EN API!!!!
    {
        <form action="{{ route('users.create') }}" method="post">
        @csrf
        <label for="name">Nombre:</label>
        <input type="text" name="name" id="name">
        <label for="email">Correo electrónico:</label>
        <input type="email" name="email" id="email">
        <label for="password">Contraseña:</label>
        <input type="password" name="password" id="password">
        <button type="submit">Agregar usuario</button>
        </form>
        }
   
    
    
    /**
     * Show the form for manage the new resource.
     *
     * @return \Illuminate\Http\Response
     */
    

    public function manageUser()
    {
        $users = User::all(); // Obtener todos los usuarios
        return view('users.manage', compact('users'));
    }

    
    
    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    
     */
    public function update(Request $request, $id) //// AGREGAR EL METODO UPDATE O POST A LAS RUTAAS EN ARCHIVO API!!!
    {
        $user = User::find($id);
        $user->name = $request->input('name');
        $user->email = $request->input('email');
        $user->password = bcrypt($request->input('password'));
        $user->save();

        return redirect('/users')->with('success', 'El usuario ha sido actualizado exitosamente.');
    }


         
        
    public function deleteUser($id)  ////AGREGAR EL METODO DELETE A LAS RUTAS EN ARCHIVO API
    {
        $user = User::find($id);
        $user->delete();
        return redirect('/users')->with('success', 'El usuario ha sido eliminado exitosamente.');
    }

}
