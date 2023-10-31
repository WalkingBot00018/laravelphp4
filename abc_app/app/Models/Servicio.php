<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Servicio extends Model
{
    protected $table = 'servicios';

    protected $fillable = ['nombre_servicio', 'descripcion_servicio', 'precio'];

    public static $rules = [
        'nombre_servicio' => 'required|string|max:100',
        'descripcion_servicio' => 'required|string',
        'precio' => 'required|numeric|min:0',
    ];
    use HasFactory;
}
