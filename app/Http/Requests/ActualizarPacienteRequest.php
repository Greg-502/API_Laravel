<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ActualizarPacienteRequest extends FormRequest
{
    public function authorize()
    {
        return true;
    }

    public function rules()
    {
        return [
            "nombre" => "required",
            "apellido_paterno" => "required",
            "apellido_materno" => "required",
            "nacimiento" => "required|date:pacientes",
            "genero" => "required|size:1",
            "dni" => "required|digits:13|unique:pacientes,dni,".$this->route('paciente')->id,
            "sangre" => "required",
            "teléfono" => "required",
            "correo" => "required|email:rfc,dns",
            "direccion" => "required",
            "status" => "boolean"
        ];
    }
}
