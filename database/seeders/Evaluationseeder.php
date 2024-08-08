<?php

namespace Database\Seeders;
use App\Models\Evaluation;
use Illuminate\Database\Seeder;

class EvaluationSeeder extends Seeder
{
    public function run() : void
    {
        $evaluations = [
            ['date' => '2024-12-15', 'valeur' => 14,'etudiant_id'=>'1','matiere_id'=>'1'],
            ['date' => '2024-12-16', 'valeur' => 16,'etudiant_id'=>'2','matiere_id'=>'2'],
            ['date' => '2024-12-17', 'valeur' => 12,'etudiant_id'=>'3','matiere_id'=>'3'],
            ['date' => '2024-12-18', 'valeur' => 15,'etudiant_id'=>'4','matiere_id'=>'4'],
            ['date' => '2024-12-19', 'valeur' => 13,'etudiant_id'=>'5','matiere_id'=>'5'],
            ['date' => '2024-12-20', 'valeur' => 18,'etudiant_id'=>'6','matiere_id'=>'6'],
            ['date' => '2024-12-21', 'valeur' => 10,'etudiant_id'=>'7','matiere_id'=>'7'],
            ['date' => '2024-12-22', 'valeur' => 19,'etudiant_id'=>'8','matiere_id'=>'8'],
            ['date' => '2024-12-23', 'valeur' => 9,'etudiant_id'=>'9','matiere_id'=>'9'],
            ['date' => '2024-12-24', 'valeur' => 11,'etudiant_id'=>'10','matiere_id'=>'10'],
        ];

        foreach ($evaluations as $evaluation) {
            Evaluation::create($evaluation);
        }
    }
}
