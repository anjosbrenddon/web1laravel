<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class MotoristaResource extends JsonResource
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
            'nome' => $this->nome,
            'cnh' => $this->cnh,
            'telefone' => $this->telefone,
            'data_nascimento' => $this->data_nascimento,
            'estado_civil' => $this->estado_civil,
            'experiencia' => $this->experiencia,
            'ativo' => $this->ativo,
            'created_at' => $this->created_at,
            'updated_at' => $this->updated_at,
            'viagens' => $this->viagens
        ];
    }
}
