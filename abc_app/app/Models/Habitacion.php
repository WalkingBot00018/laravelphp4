<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Habitacion extends Model
{
    protected $table = 'habitacion';

    protected $fillable = ['nro_habitacion', 'tipo', 'precio', 'disponibilidad'];

    public static $rules = [
        'nro_habitacion' => 'required|string|max:10',
        'tipo' => 'required|string|max:50',
        'precio' => 'required|numeric|min:0',
        'disponibilidad' => 'required|boolean',
    ];
    use HasFactory;
}
