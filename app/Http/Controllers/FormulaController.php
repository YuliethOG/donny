<?php

namespace App\Http\Controllers;

use App\Http\Requests\FormulaCreateRequest;
use Illuminate\Http\Request;
use App\Models\medicamentos;
use App\Models\paciente;
use App\Models\Formulas;
use App\Models\formula_detalles;
use Illuminate\Support\Facades\DB;

class FormulaController extends Controller
{
    //
    public function index()
    {
        $formula = Formulas::all();
        $paciente = paciente::all();
        $medicamentos = Medicamentos::all();
        return view('formula.index', compact('formula','paciente','medicamentos'));
    }
    public function store(FormulaCreateRequest $request)
    {
        $input = $request->all();
        // return response()->json($request);
        $formula = Formulas::create([
            "paciente"=>$input["paciente"],
        ]);

        foreach($input["medicamento_id"] as $key => $value){
            formula_detalles::create([
                "formula_id"=> $formula->id,
                "medicamento"=>$value,
                "cantidad"=>  $input["cantidades"][$key],
                "hora"=>  $input["horas"][$key],
            ]);
        }

        return redirect()->route('formula.index')->with('success', 'Formula creada correctamente');
        // return response()->json($input);


}
public function show(Request $request, $id){
    $formulas = DB::select('SELECT p.nombre, p.apellido FROM formulas as f JOIN pacientes as p WHERE f.id = ? AND p.id = f.paciente', [$id]);
    $medicamentos = [];
    $a = Formulas::find($id);
    if($a != null){
        $medicamentos = medicamentos::select("medicamentos.*", "formula_detalles.cantidad as cantidad_c","formula_detalles.hora as horas")
        ->join("formula_detalles", "medicamentos.id", "=", "formula_detalles.medicamento")
        ->where("formula_detalles.formula_id", $id)
        ->get();
        return view('formula.show', compact('medicamentos','formulas'));

    }



}
public function destroy(Formulas $formula)
{
    $formula->delete();
    return back()->with('success', 'Formula Eliminada correctamente');
}
}
