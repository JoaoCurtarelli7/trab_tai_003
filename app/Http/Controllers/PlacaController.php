<?php

namespace App\Http\Controllers;

use App\Models\Fabrica;
use App\Models\Placa;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

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
        //dd($request->file('nome_arquivo'));


        if ($id == 0) {

            Validator::make($request->all(), Placa::rules(), Placa::message())->validate();
            $input = $request->all();

            $image = $request->file("nome_arquivo");
            // dd($image);
            if ($image) {
                $nome_arquivo = date('YmdHis') . "." . $image->getClientOriginalExtension();

                $request->nome_arquivo->storeAs('public/imagem', $nome_arquivo);

                $input['nome_arquivo'] = $nome_arquivo;
            }
            // dd($input);

            Placa::create($input);
            return redirect()->action('PlacaController@listar');
        } else {

            Validator::make($request->all(), Placa::rules(), Placa::message())->validate();
            $input = $request->all();

            $image = $request->file("nome_arquivo");
            if ($image) {
                $nome_arquivo = date('YmdHis') . "." . $image->getClientOriginalExtension();

                $request->nome_arquivo->storeAs('public/imagem', $nome_arquivo);

                $input['nome_arquivo'] = $nome_arquivo;
            }
            // dd($input);

            Placa::updateOrCreate(
                ['id' => $request->id],
                $input
            );

            return redirect()->action('PlacaController@listar');
        }
    }

    public function pesquisar(Request $request)
    {
        $numero = $request->input('numero');

        if (!empty($request->numero)) {
            $placas = Placa::where('numero', 'like', '%' . $numero . '%')->orderBy('numero')->paginate(20);
        } else {
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