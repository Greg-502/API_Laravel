<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class LoginResource extends JsonResource
{
    public function toArray($request)
    {
        return [
            'id' => $this->id,
			'nombre' => $this->name,
			'email' => $this->email,
			'status' => $this->status,
            'roles' => $this->roles
        ];
    }
}
