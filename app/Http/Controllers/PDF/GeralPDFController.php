<?php

namespace App\Http\Controllers\PDF;

use App\Http\Controllers\Controller;
use App\Models\Carro;
use App\Models\Fabrica;
use App\Models\Placa;
use PDF;

class GeralPDFController extends Controller
{
    public function placa($id)
    {
        $placas = Placas::all();

        return PDF::loadView('pdf.placa', compact('placas'))->download('Placa.pdf');
    }

    public function carro($id)
    {

        $carros = Carro::all();

        return PDF::loadView('pdf.carro', compact('carros'))->download('Carro.pdf');

    }

    public function fabrica($id)
    {
        $fabricas = Fabrica::all();

        return PDF::loadView('pdf.fabrica', compact('fabricas'))->download('Fabrica.pdf');

    }
}