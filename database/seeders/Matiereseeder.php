<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Matiere;

class MatiereSeeder extends Seeder
{
    public function run() : void
    {
    $matieres= [
            ['libelle' => 'Mathématiques', 'date_debut' => '2024-09-01', 'date_fin' => '2024-12-20','ue_id'=>'1'],
            ['libelle' => 'Physique', 'date_debut' => '2024-09-01', 'date_fin' => '2024-12-20','ue_id'=>'2'],
            ['libelle' => 'Chimie', 'date_debut' => '2024-09-01', 'date_fin' => '2024-12-20','ue_id'=>'3'],
            ['libelle' => 'Biologie', 'date_debut' => '2024-09-01', 'date_fin' => '2024-12-20','ue_id'=>'4'],
            ['libelle' => 'Informatique', 'date_debut' => '2024-09-01', 'date_fin' => '2024-12-20','ue_id'=>'5'],
            ['libelle' => 'Géographie', 'date_debut' => '2024-09-01', 'date_fin' => '2024-12-20','ue_id'=>'6'],
            ['libelle' => 'Histoire', 'date_debut' => '2024-09-01', 'date_fin' => '2024-12-20','ue_id'=>'7'],
            ['libelle' => 'Philosophie', 'date_debut' => '2024-09-01', 'date_fin' => '2024-12-20','ue_id'=>'8'],
            ['libelle' => 'Économie', 'date_debut' => '2024-09-01', 'date_fin' => '2024-12-20','ue_id'=>'9'],
            ['libelle' => 'Littérature', 'date_debut' => '2024-09-01', 'date_fin' => '2024-12-20','ue_id'=>'10'],
        ];

 foreach ($matieres as $matiere) {
            Matiere::create($matiere);
        }
    }
}
