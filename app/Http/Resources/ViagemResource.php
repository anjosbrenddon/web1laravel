<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class ViagemResource extends JsonResource
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
            'data_inicio' => $this->data_inicio,
            'status' => $this->status,
            'ajuda_custo' => $this->ajuda_custo,
            'quilometragem' => $this->quilometragem,
            'combustivel' => $this->combustivel,
            'data_fim' => $this->data_fim,
            'observacao' => $this->observacao,
            'created_at' => $this->created_at,
            'updated_at' => $this->updated_at,
            'caminhao' => $this->caminhao,
            'motorista' => $this->motorista
        ];
    }
}
