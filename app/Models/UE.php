<?php
namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class UE extends Model
{
    protected $table = 'ues';

    protected $fillable = [
        'libelle',
        'date_debut',
        'date_fin',
        'coef',
    ];

    public function matieres()
    {
        return $this->hasMany(Matiere::class);
    }
}