<?php

namespace App\Http\Controllers;

use App\Models\Matiere;
use Illuminate\Http\Request;

class MatiereController extends Controller
{
    public function index()
    {
        return Matiere::all();
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'libelle' => 'required|string|max:255',
            'date_debut' => 'required|date',
            'date_fin' => 'required|date',
        ]);

        return Matiere::create($validated);
    }

    public function show(Matiere $matiere)
    {
        return $matiere;
    }

    public function update(Request $request, Matiere $matiere)
    {
        $validated = $request->validate([
            'libelle' => 'sometimes|required|string|max:255',
            'date_debut' => 'sometimes|required|date',
            'date_fin' => 'sometimes|required|date',
        ]);

        $matiere->update($validated);

        return $matiere;
    }

    public function destroy(Matiere $matiere)
    {
        $matiere->delete();
        return response()->noContent();
    }
}
