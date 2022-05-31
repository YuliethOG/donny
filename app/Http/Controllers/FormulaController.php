<?php

namespace App\Http\Controllers;

use App\Http\Requests\FormulaCreateRequest;
use Illuminate\Http\Request;
use App\Models\Medicamentos;
use App\Models\paciente;
use App\Models\Formulas;
use App\Models\Formula_detalle;
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
        $formula = Formulas::create([
            "paciente"=>$input["paciente"],
        ]);

        foreach($input["medicamento_id"] as $key => $value){
            Formula_detalle::create([
                "formula_id"=> $formula->id,
                "medicamento"=>$value,
                "cantidad"=>  $input["cantidades"][$key],
                "hora"=>  $input["hora"][$key],
            ]);
        }

        return redirect()->route('formula.index')->with('success', 'Formula creada correctamente');
        // return response()->json($input);


}
public function show(Request $request, $id){
    $formulas = DB::select('SELECT p.nombre, p.apellido FROM formulas as f JOIN pacientes as p WHERE f.id = ? AND p.id = f.paciente', [$id]);
    $medicamentos = [];
    $a = Formula::find($id);
    if($a != null){
        $medicamentos = Medicamento::select("medicamentos.*", "formula_detalles.cantidad as cantidad_c","formula_detalles.hora as horas")
        ->join("formula_detalles", "medicamentos.id", "=", "formula_detalles.medicamento")
        ->where("formula_detalles.formula_id", $id)
        ->get();
        return view('formula.show', compact('medicamentos','formulas'));
    }



}
public function destroy(Formula $formula)
{
    $formula->delete();
    return back()->with('success', 'Formula Eliminada correctamente');
}
}
