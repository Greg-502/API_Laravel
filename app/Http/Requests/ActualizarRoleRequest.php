<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ActualizarRoleRequest extends FormRequest
{
    public function authorize()
    {
        return true;
    }

    public function rules()
    {
        return [
            "nombre" => "required|unique:roles,nombre,".$this->route('role')->id,
            "descripcion" => "sometimes|string"
        ];
    }
}
