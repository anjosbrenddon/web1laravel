<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
class Caminhao extends Model
{
    protected $table = 'caminhoes';

    public function viagens()
    {
        return $this->hasMany('App\Viagem');
    }
}
