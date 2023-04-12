<?php

namespace App\Http\Controllers;

use Auth;
use Carbon\Carbon;
use Datetime;
use Illuminate\Http\Request;
use App\Models\User;


class AutenticacionController extends Controller
{////DEFINIENDO LOS 4 METODOS A IMPLEMENTAR: REGISTRO - INICIO DE SESION - CREACION DE PERFIL -CIERRE DE SESION
    public function registro(Request $request) 
    {
        $actual = new DateTime();
        $data = array(
            'user' => $request->input('usuario'),
            'email' => $request->input('email'),
            'password' => bcrypt($request->input('password')),
            'estado' => 1,
            'fecha_registro' => $actual,
            'fecha_actualizacion' => $actual,
        );

///creamos el nuevo usuario para el login
        $nuevoUsuario = new User($data);
        $nuevoUsuario->save();

        $mensaje = array(
            'mensaje' => "Usuario registrado exitosamente"
        );
            
        return response()->json($mensaje);

    }
    
    public function iniciar_sesion(Request $request) 
    {
        $credenciales = [
            'email' => $request->input('correo'),
            'password' => $request->input('password')
        ];
        if (Auth::attempt($credenciales)== false) {
            $mensaje = array(
                'mensaje' => "Verifique sus credenciales"
            );
            return response()->json($mensaje, 401);
        }
            $usuario = $request->user();
            $generarToken = $usuario->createToken('Personal Access Token');
            $token = $generarToken->token;
            $token->save();
            
            $respuesta = array(

                'token_acceso' => $generarToken->accessToken,
                'tipo_token' => 'Bearer',
                'fecha_expiracion' => $generarToken->token->expires_at,
            );

            return response()->json($respuesta);

        }

        public function perfil(Request $request)
        {

            $data = array(
                'nombre' => $request->input('nombre'),
                'apellido' => $request->input('apellido'),
                'email' => $request->input('email'),
                'password' => bcrypt($request->input('password')),
                'estado' => 1,
                'fecha_nacimiento' => $request->input('fecha_nacimiento'),
                'genero' => $request->input('genero'),
                'foto' => $request->input('foto'),
            );

        }


        public function cerrar_sesion()
        {
            Auth::logout();
            return redirect('/login');
                      

        }
    }

   