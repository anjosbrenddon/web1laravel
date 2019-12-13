<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Motorista extends Model
{
    protected $table = 'motoristas';

    public function viagens()
    {
        return $this->hasMany('App\Viagem');
    }
}
