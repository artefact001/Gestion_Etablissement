<?php
namespace App\Http\Controllers;

use App\Models\Etudiant;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class EtudiantController extends Controller
{
    public function index()
    {
        return Etudiant::all();
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'prenom' => 'required|string|max:255',
            'nom' => 'required|string|max:255',
            'adresse' => 'required|string|max:255',
            'telephone' => 'required|string|max:15',
            'matricule' => 'required|string|unique:etudiants|max:10',
            'email' => 'required|string|email|max:255|unique:etudiants',
            'mot_de_passe' => 'required|string|min:8',
            'photo' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
            'date_de_naissance' => 'required|date',
        ]);

        if ($request->hasFile('photo')) {
            $validated['photo'] = $request->file('photo')->store('photos', 'public');
        }

        return Etudiant::create($validated);
    }

    public function show(Etudiant $etudiant)
    {
        return $etudiant;
    }

    public function update(Request $request, Etudiant $etudiant)
    {
        $validated = $request->validate([
            'prenom' => 'sometimes|required|string|max:255',
            'nom' => 'sometimes|required|string|max:255',
            'adresse' => 'sometimes|required|string|max:255',
            'telephone' => 'sometimes|required|string|max:15',
            'matricule' => 'sometimes|required|string|unique:etudiants,matricule,'.$etudiant->id.'|max:10',
            'email' => 'sometimes|required|string|email|max:255|unique:etudiants,email,'.$etudiant->id,
            'mot_de_passe' => 'sometimes|required|string|min:8',
            'photo' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
            'date_de_naissance' => 'sometimes|required|date',
        ]);

        if ($request->hasFile('photo')) {
            if ($etudiant->photo) {
                Storage::delete('public/' . $etudiant->photo);
            }
            $validated['photo'] = $request->file('photo')->store('photos', 'public');
        }

        $etudiant->update($validated);

        return $etudiant;
    }

    public function destroy(Etudiant $etudiant)
    {
        if ($etudiant->photo) {
            Storage::delete('public/' . $etudiant->photo);
        }

        $etudiant->delete();

        return response()->noContent();
    }
}
