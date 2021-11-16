<?php

namespace App\Http\Controllers;

use App\Mail\SendMailFabrica;
use Illuminate\Http\Request;
use App\Models\Fabrica;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Mail;

class FabricaController extends Controller
    {

        public function sendEmail(){

            $fabrica = [];

            $fabrica['fabricas'] = Fabrica::orderBy('nome')->get();

            Mail::to('beninijoaovitor@gmail.com')
                ->send(new SendMailFabrica($fabrica));

            return \redirect()->action('FabricaController@listar')->with('success', "E-mail enviado com Sucesso");
            }

        public function listar()
        {
            $fabrica = Fabrica::paginate(3);

            return view('fabrica.listar')->with('fabricas', $fabrica);
        }

        public function cadastrar()
        {

            return view('fabrica.cadastrar')->with('success', "Registro Salvo com Sucesso!");;
        }

        public function salvar(Request $request, $id)
        {

            $request->validate([
                'nome' => 'required',
                'dono' => 'required',
                'cidade' => 'required',
                'CNPJ' => 'required',

            ], [
                'nome.required' => 'O Nome é obrigatório',
                'dono.required' => 'O Dono é obrigatório',
                'cidade.required' => 'A cidade é obrigatório',
                'CNPJ.required' => 'O CNPJ é obrigatório',



            ]);

            if ($id == 0) {
                $fabrica = new Fabrica();
                $fabrica->nome = $request->input('nome');
                $fabrica->cidade = $request->input('cidade');
                $fabrica->dono = $request->input('dono');
                $fabrica->CNPJ = $request->input('CNPJ');



                $fabrica->save();
                $request->session()->flash('success', "Registro Salvo com Sucesso!");


                return redirect()->action('FabricaController@listar');
            } else {
                $fabrica = Fabrica::find($id);
                $fabrica->nome = $request->input('nome');
                $fabrica->cidade = $request->input('cidade');
                $fabrica->dono = $request->input('dono');
                $fabrica->CNPJ = $request->input('CNPJ');


                $fabrica->save();
                $request->session()->flash('success', "Registro Salvo com Sucesso!");



                return redirect()->action('FabricaController@listar')->with('success', "Registro Salvo com Sucesso!");
            }
        }

        public function editar($id)
        {
            $fabrica = Fabrica::find($id);


            return view('fabrica.editar')->with('fabricas', $fabrica);
        }

        public function pesquisar(Request $request)
        {
            $nome = $request->input('nome');

            if (!empty($request->nome)) {
                $fabricas = Fabrica::where('nome', 'like', '%' . $nome . '%')->orderBy('nome')->paginate(3);
            }else{
                $fabricas = Fabrica::where('nome', 'like', '%' . $nome . '%')->orderBy('nome')->paginate(3);

            }

            return view('fabrica.listar')->with('fabricas', $fabricas);
        }

        public function deletar($id)
        {
            $fabrica = Fabrica::find($id);

            if (empty($fabrica)) {
                return '<h2>Houve um problema ao consultar o ID informado</h2>';
            }
            $fabrica->delete();

            return redirect()->action('FabricaController@listar')->with('error', "Registro Removido com Sucesso!");
        }
}