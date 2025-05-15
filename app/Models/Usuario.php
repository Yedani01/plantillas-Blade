<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Usuario extends Model
{
    use HasFactory;

    protected $fillable = [
        'nombre', 
        'apellido_paterno', 
        'apellido_materno', 
        'usuario', 
        'correo', 
        'password',
    ];
    
    protected $hidden = [
        'password',
        'remember_token',
    ];
}


