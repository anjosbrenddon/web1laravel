<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Viagem extends Model
{
    protected $table = 'viagens';

    public function motorista()
    {
        return $this->belongsTo('App\Motorista', 'motorista_id');
    }

    public function caminhao()
    {
        return $this->belongsTo('App\Caminhao', 'caminhao_id');
    }
}
