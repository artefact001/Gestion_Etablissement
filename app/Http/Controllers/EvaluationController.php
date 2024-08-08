<?php

namespace App\Http\Controllers;

use App\Models\Evaluation;
use Illuminate\Http\Request;

class EvaluationController extends Controller
{
    public function index()
    {
        return Evaluation::all();
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'date' => 'required|date',
            'valeur' => 'required|numeric',
            'etudiant_id' => 'required|exists:etudiants,id',
            'matiere_id' => 'required|exists:matieres,id',
        ]);

        return Evaluation::create($validated);
    }

    public function show(Evaluation $evaluation)
    {
        return $evaluation;
    }

    public function update(Request $request, Evaluation $evaluation)
    {
        $validated = $request->validate([
            'date' => 'sometimes|required|date',
            'valeur' => 'sometimes|required|numeric',
            'etudiant_id' => 'sometimes|required|exists:etudiants,id',
            'matiere_id' => 'sometimes|required|exists:matieres,id',
        ]);

        $evaluation->update($validated);

        return $evaluation;
    }

    public function destroy(Evaluation $evaluation)
    {
        $evaluation->delete();
        return response()->noContent();
    }
}
