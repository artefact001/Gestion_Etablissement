<?php


namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Matiere extends Model
{
    protected $table = 'matieres';

    protected $fillable = [
        'libelle',
        'date_debut',
        'date_fin',
    ];

    public function ues()
    {
        return $this->belongsTo(UE::class, 'ue_id');
    }

    public function evaluations()
    {
        return $this->hasMany(Evaluation::class);
    }

    public function etudiants()
    {
        return $this->belongsToMany(Etudiant::class, 'evaluation', 'matiere_id', 'etudiant_id');
    }
}