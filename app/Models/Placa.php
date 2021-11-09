<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;


class Placa extends Model
{

    protected $table = "placa";

  //  public $timestamps = false;
    public static function rules()
    {
        return [
            'numero' => 'required',
            'resp' => 'required',
            'contato' => 'required',
            'tipo' => 'required',
            'data' => 'required',
            'nome_arquivo' => 'image|mimes:jpeg,jpg,png|max:2048',
        ];

    }

    public static function message()
    {
        return [
            'numero.required' => 'O numero é obrigatório',
            'resp.required' => 'O Responsavel é obrigatório',
            'contato.required' => 'O contato é obrigatório',
            'tipo.required' => 'O tipo é obrigatório',
            'data.required' => 'A dara é obrigatório',
        ];
    }

    public function fabrica()
    {
        return $this->belongsTo(Fabrica::class,'fabri_id','id');
    }



}