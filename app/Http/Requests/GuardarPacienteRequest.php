<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class GuardarPacienteRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            "nombre" => "required",
            "apellido_paterno" => "required",
            "apellido_materno" => "required",
            "nacimiento" => "required|date:pacientes",
            "genero" => "required|size:1",
            "dni" => "required|digits:13|unique:pacientes,dni,",
            "sangre" => "required",
            "teléfono" => "required",
            "correo" => "required|email:rfc,dns",
            "direccion" => "required",
            "status" => "boolean"
        ];
    }
}