<?php

namespace App\Http\Controllers;

use App\Models\Carro;
use App\Models\Placa;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class CarroController extends Controller
{
    public function listar()
    {
        $carro = Carro::paginate(3);

        return view('carro.listar')->with('carros', $carro);
    }

    public function cadastrar()
    {
        $placas = Placa::get();

        return view('carro.cadastrar')->with('placas', $placas)->with('success', "Registro Salvo com Sucesso!");;
    }

    public function salvar(Request $request, $id)
    {

        $request->validate([
            'nome' => 'required',
            'marca' => 'required',
            'km' => 'required',
            'placa_id' => 'required',

        ], [
            'nome.required' => 'O Nome é obrigatório',
            'marca.required' => 'A marca é obrigatório',
            'km.required' => 'O KM é obrigatório',
            'placa_id.required' => 'A Placa é obrigatório',


        ]);

        if ($id == 0) {
            $carro = new Carro();
            $carro->nome = $request->input('nome');
            $carro->marca = $request->input('marca');
            $carro->km = $request->input('km');
            $carro->placa_id = $request->input('placa_id');

            $carro->save();
            $request->session()->flash('success', "Registro Salvo com Sucesso!");


            return redirect()->action('CarroController@listar');
        } else {
            $carro = Carro::find($id);
            $carro->nome = $request->input('nome');
            $carro->marca = $request->input('marca');
            $carro->km = $request->input('km');
            $carro->placa_id = $request->input('placa_id');

            $carro->save();
            $request->session()->flash('success', "Registro Salvo com Sucesso!");


            return redirect()->action('CarroController@listar');
        }
    }

    public function editar($id)
    {
        $carro = Carro::find($id);
        $placas = Placa::get();

        return view('carro.editar')->with('carros', $carro)->with('placas', $placas);
    }

    public function pesquisar(Request $request)
    {
        $nome = $request->input('nome');

        if (!empty($request->nome)) {
            $carros = Carro::where('nome', 'like', '%' . $nome . '%')->orderBy('nome')->paginate(20);
        }else{
            $carros = Carro::where('nome', 'like', '%' . $nome . '%')->orderBy('nome')->paginate(20);

        }


        return view('carro.listar')->with('carros', $carros);
    }

    public function deletar($id)
    {
        $carro = Carro::find($id);

        if (empty($carro)) {
            return '<h2>Houve um problema ao consultar o ID informado</h2>';
        }
        $carro->delete();

        return redirect()->action('CarroController@listar')->with('error', "Registro Removido com Sucesso!");;
    }
}