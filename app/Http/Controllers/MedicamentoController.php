<?php

namespace App\Http\Controllers;

use App\Http\Requests\MedicamentosCreateRequest;
use App\Http\Requests\MedicamentosEditRequest;
use App\Models\medicamentos;
use App\Models\Categorias;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Gate;
use DB;

class MedicamentoController extends Controller

{
    public function index(Request $request)
    {
    
        $medicamentos = DB::select("SELECT medicamentos.id, medicamentos.Nombre, categorias.nombre  as nombrecat FROM medicamentos INNER JOIN categorias ON Categorias = categorias.id");
        $Categorias = Categorias::all();
        return view('medicamentos.index', compact('medicamentos','Categorias'));
    }

   

    public function create()
    {
        $medicamentos = new medicamentos;
        $categorias = Categorias::all();
        return view('medicamentos.create', compact('medicamentos','categorias'));
    }


    public function store(medicamentosCreateRequest $request)
    {

      medicamentos::create($request->all());
      return redirect()->route('medicamentos.index')->with('success', 'Medicamento creado correctamente');
    }




    public function edit(medicamento $medicamento)
    {
        abort_if(Gate::denies('medicamento_editar'),403);
        $categorias = Categorias::all();
        return view('medicamentos.edit', compact('medicamento','categorias'));
    }
    public function update(medicamentosEditRequest $request,medicamento $medicamento)
    {
        $datos = $request->all();
        $producto->update($datos);
        return redirect()->route('medicamentos.index')->with('success', 'Medicamento actualizado correctamente');

    }
    public function search()
    {

    }
}

