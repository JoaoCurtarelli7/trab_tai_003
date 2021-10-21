<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Placa;
use App\Models\Fabrica;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Validator;
use Illuminate\Database\Eloquent\Builder;

class PlacaController extends Controller
{



    public function listar()
    {
        $placa = Placa::paginate(3);
        //dd($placa);

        return view('placa.listar')->with('placas', $placa);
    }

    public function cadastrar()
    {
        $fabricas = Fabrica::get();

        return view('placa.cadastrar')->with('fabricas', $fabricas)->with('success', "Registro Salvo com Sucesso!");
    }

    public function salvar(Request $request, $id)
    {

        $request->validate([
            'numero' => 'required',
            'resp' => 'required',
            'contato' => 'required',
            'tipo' => 'required',
            'data' => 'required',

        ], [
            'numero.required' => 'O numero é obrigatório',
            'resp.required' => 'O Responsavel é obrigatório',
            'contato.required' => 'O contato é obrigatório',
            'tipo.required' => 'O tipo é obrigatório',
            'data.required' => 'A dara é obrigatório',

        ]);


        if ($id == 0) {
            $placa = new Placa();
            $placa->numero = $request->input('numero');
            $placa->resp = $request->input('resp');
            $placa->fabri_id = $request->input('fabri_id');
            $placa->contato = $request->input('contato');
            $placa->tipo = $request->input('tipo');
            $placa->data = $request->input('data');
            $placa->nome_arquivo = $request->input('nome_arquivo');

$placa->save();

$request->session()->flash('success', "Registro Salvo com Sucesso!");

            $input = $request->all();

        $image = $request->file("nome_arquivo");
        if ($image) {
            $nome_arquivo = date('YmdHis') . "." . $image->getClientOriginalExtension();

            $request->nome_arquivo->storeAs('public/imagem', $nome_arquivo);

            $input['nome_arquivo'] = $nome_arquivo;
        }
            return redirect()->action('PlacaController@listar');
        } else {

            Validator::make($request->all(), Placa::rules())->validate();

            $placa = Placa::find($id);
            $placa->numero = $request->input('numero');
            $placa->resp = $request->input('resp');
            $placa->fabri_id = $request->input('fabri_id');
            $placa->contato = $request->input('contato');
            $placa->tipo = $request->input('tipo');
            $placa->data = $request->input('data');
            $placa->nome_arquivo = $request->input('nome_arquivo');
            $placa->save();
            $request->session()->flash('success', "Registro Salvo com Sucesso!");



            $input = $request->all();

        $image = $request->file("nome_arquivo");
        if ($image) {
            $nome_arquivo = date('YmdHis') . "." . $image->getClientOriginalExtension();

            $request->nome_arquivo->storeAs('public/imagem', $nome_arquivo);

            $input['nome_arquivo'] = $nome_arquivo;
        }


            return redirect()->action('PlacaController@listar');
        }
    }

    public function pesquisar(Request $request)
    {
        $numero = $request->input('numero');

        if (!empty($request->numero)) {
            $placas = Placa::where('numero', 'like', '%' . $numero . '%')->orderBy('numero')->paginate(20);
        }else{
            $placas = Placa::where('numero', 'like', '%' . $numero . '%')->orderBy('numero')->paginate(20);

        }

        return view('placa.listar')->with('placas', $placas);
    }

    public function editar($id)
    {
        $placa = Placa::find($id);
        $fabricas = Fabrica::get();

        return view('placa.editar')->with('placas', $placa)->with('fabricas', $fabricas);
    }

    public function deletar($id)
    {
        $placa = Placa::find($id);

        if (empty($placa)) {
            return '<h2>Houve um problema ao consultar o ID informado</h2>';


       }
        $placa->delete();

        return redirect()->action('PlacaController@listar')->with('error', "Registro Removido com Sucesso!");
    }
}