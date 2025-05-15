<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use App\Models\Usuario;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Session;

class UsuarioController extends Controller
{
    public function mostrarFormulario()
    {
        return view('registro');
    }
     public function mostrarLogin()
    {
        return view('login');  
    }
 
    
    public function guardar(Request $request)
    {
        // Validación de los datos
        $validated = $request->validate([
            'nombre' => 'required|string|max:255',
            'apellido_paterno' => 'required|string|max:255',
            'apellido_materno' => 'required|string|max:255',
            'usuario' => 'required|string|max:255|unique:usuarios',
            'correo' => 'required|email|unique:usuarios',
            'password' => 'required|string|min:8|regex:/[a-z]/|regex:/[A-Z]/|regex:/[0-9]/|regex:/[@$!%*?&]/',


        ],['nombre.required' => 'Nombre invalido',
            'apellido_paterno.required' => 'Debes ingresar un apellido ',
            'apellido_materno.required' => 'Debes ingresar un apellido_m',
            'usuario.unique' => ' Debes ingresar un usuario',
            'correo.required' => 'Debes ingresar un correo',
            'password.required' => 'la contraseña debe de ser minimo 8 caracteres',]);

        // Crear el usuario
        $usuario = new Usuario();
        $usuario->nombre = $validated['nombre'];
        $usuario->apellido_paterno = $validated['apellido_paterno'];
        $usuario->apellido_materno = $validated['apellido_materno'];
        $usuario->usuario = $validated['usuario'];
        $usuario->correo = $validated['correo'];
        $usuario->password = Hash::make($validated['password']);  
        $usuario->save();  

        return redirect()->route('login')->with('success', 'Usuario registrado correctamente');
    }

    public function procesarLogin(Request $request) {
    $request->validate([
        'usuario' => 'required|string',
        'password' => 'required|string',

    ],['usuario.required' => 'El cambio es requerido',
        'password.required' => 'El password debe de ser valido',
]);

    $credentials = $request->only('usuario', 'password');
    
    if (Auth::attempt($credentials)) {
        request()->session()->regenerate();
        return redirect()->intended('/inicio');  
    }

    $usuario = User::where('Usuario', $request->usuario)
                ->orWhere('Correo', $request->usuario)
                ->first();

    if ($usuario && Hash::check($request->password, $usuario->password)) {
        Session::put('usuario_id', $usuario->id);
        Session::put('usuario_nombre', $usuario->Nombre);

        return redirect()->route('home')->with('success', '¡Bienvenido!');
    } else {
        return back()->withErrors(['login' => 'Credenciales incorrectas']);
    }
    
}
}