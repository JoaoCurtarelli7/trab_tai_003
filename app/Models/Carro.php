<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Carro extends Model
{
    protected $table = "carro";

    public function placa()
    {
        return $this->belongsTo(Placa::class,'placa_id','id');
    }
}
