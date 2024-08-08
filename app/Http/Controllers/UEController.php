<?php

namespace App\Http\Controllers;

use App\Models\UE;
use Illuminate\Http\Request;

class UEController extends Controller
{
    public function index()
    {
        return UE::all();
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'libelle' => 'required|string|max:255',
            'date_debut' => 'required|date',
            'date_fin' => 'required|date',
            'coef' => 'required|numeric',
        ]);

        return UE::create($validated);
    }

    public function show(UE $ue)
    {
        return $ue;
    }

    public function update(Request $request, UE $ue)
    {
        $validated = $request->validate([
            'libelle' => 'sometimes|required|string|max:255',
            'date_debut' => 'sometimes|required|date',
            'date_fin' => 'sometimes|required|date',
            'coef' => 'sometimes|required|numeric',
        ]);

        $ue->update($validated);

        return $ue;
    }

    public function destroy(UE $ue)
    {
        $ue->delete();
        return response()->noContent();
    }
}
