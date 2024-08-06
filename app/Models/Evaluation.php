<?php
namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Evaluation extends Model
{
    protected $table = 'evaluations';

    protected $fillable = [
        'date',
        'valeur',
        'etudiant_id',
        'matiere_id',
    ];

    public function etudiant()
    {
        return $this->belongsTo(Etudiant::class);
    }

    public function matiere()
    {
        return $this->belongsTo(Matiere::class);
    }
}