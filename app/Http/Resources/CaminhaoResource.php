<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class CaminhaoResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array
     */
    public function toArray($request)
    {
        return [
            'id' => $this->id,
            'placa' => $this->placa,
            'chassi' => $this->chassi,
            'modelo' => $this->modelo,
            'cor' => $this->cor,
            'ano' => $this->ano,
            'created_at' => $this->created_at,
            'updated_at' => $this->updated_at,
            'viagens' => $this->viagens,
        ];
    }
}
