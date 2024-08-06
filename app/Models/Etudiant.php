<?php


namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Etudiant extends Model
{
    protected $table = 'etudiants';

    protected $fillable = [
        'prenom',
        'nom',
        'adresse',
        'telephone',
        'matricule',
        'email',
        'mot_de_passe',
        'photo',
    ];

    public function evaluations()
    {
        return $this->hasMany(Evaluation::class);
    }

    public function matieres()
    {
        return $this->belongsToMany(Matiere::class, 'evaluation', 'etudiant_id', 'matiere_id');
    }
}