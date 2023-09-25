<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class RoleResource extends JsonResource
{
    public function toArray($request)
    {
        return [
            'nombre' => $this->nombre,
			'descripcion' => $this->descripcion
        ];
    }
}
