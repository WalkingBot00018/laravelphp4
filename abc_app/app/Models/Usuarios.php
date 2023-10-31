<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Usuarios extends Model
{
    protected $table = 'usuarios';

    protected $fillable = ['nro_doc', 'nombre_usuario', 'contraseña', 'id_rol'];

    public static $rules = [
        'nro_doc' => 'required|string|max:15|unique:usuarios', 
        'nombre_usuario' => 'required|string|max:100',
        'contraseña' => 'required|string', 
        'id_rol' => 'required|integer', 
    ];
    use HasFactory;
}
