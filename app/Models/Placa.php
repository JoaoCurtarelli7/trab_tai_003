<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;


class Placa extends Model
{
    // public $timestamps = false;
    protected $table = "placa";

    protected $fillable = [
        'numero', 'resp', 'contato','tipo','data','nome_arquivo', 'fabri_id'
    ];


    public static function rules()
    {
        return [
            'numero' => 'required',
            'resp' => 'required',
            'contato' => 'required',
            'tipo' => 'required',
            'data' => 'required',
            'nome_arquivo' => 'image|mimes:jpeg,jpg,png|max:2048',
            'fabri_id' => 'required'
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