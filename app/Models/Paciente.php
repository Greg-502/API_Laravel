<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Paciente extends Model
{
    use HasFactory;

    protected $fillable = [
        'nombre',
        'apellido_paterno',
        'apellido_materno',
        'nacimiento',
        'genero',
        'dni',
        'sangre',
        'teléfono',
        'correo',
        'direccion',
        'status'
    ];
    
    protected $hidden = [
        'created_at',
        'updated_at'
    ];
}
