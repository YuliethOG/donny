<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\medicamentos;
use App\Models\Paciente;
use App\Models\Formula;
use App\Models\formula_detalles;


class Formula_detalleController extends Controller
{
    //
    public function create()
    {
        $formula_detalle = new formula_detalles;

        $paciente = Paciente::all();
        $medicamentos = medicamentos::all();
        return view('formula_detalle.create', compact('formula_detalle','paciente','medicamentos'));

    }
    


}

