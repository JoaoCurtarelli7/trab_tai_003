<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Placa extends Model
{
    protected $table = "placa";

    protected $fillable = [ 'nome_arquivo'];


    public static function rules()
    {
        return [


            'nome_arquivo' => 'image|mimes:jpeg,jpg,png|max:2048',
        ];
    }

    public function fabrica()
    {
        return $this->belongsTo(Fabrica::class,'fabri_id','id');
    }



}
