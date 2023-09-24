<?php

namespace App\Http\Resources;

use Carbon\Carbon;
use Illuminate\Http\Resources\Json\JsonResource;
use Illuminate\Support\Str;

class PacienteResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array|\Illuminate\Contracts\Support\Arrayable|\JsonSerializable
     */
    public function toArray($request)
    {
        return [
            'id' => $this->id,
            'nombre' => Str::headline($this->nombre),
            'apellido_paterno' => Str::headline($this->apellido_paterno),
            'apellido_materno' => Str::headline($this->apellido_materno),
            'nacimiento' => Carbon::parse($this->nacimiento)->format('d-m-Y'),
            'genero' => Str::upper($this->genero),
            'dni' => $this->dni,
            'sangre' => $this->sangre,
            'teléfono' => $this->teléfono,
            'correo' => $this->correo,
            'direccion' => $this->direccion,
            'status' => $this->status ?? true
        ];
    }
}
