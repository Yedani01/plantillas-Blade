<?php

namespace App\Http\Middleware;

use Illuminate\Auth\Middleware\Authenticate as Middleware;
use Illuminate\Support\Facades\Session;

class Authenticate extends Middleware
{
    protected function redirectTo($request)
    {
        if (!$request->expectsJson()) {
            // Establecer un mensaje de error en la sesión
            Session::flash('error', 'Debes iniciar sesión para acceder a esta página.');
            return route('login');
        }
    }
}

