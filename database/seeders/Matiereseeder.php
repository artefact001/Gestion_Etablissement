<?php
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class MatiereSeeder extends Seeder
{
    public function run()
    {
        DB::table('matieres')->insert([
            ['libelle' => 'Mathématiques', 'date_debut' => '2024-09-01', 'date_fin' => '2024-12-20'],
            ['libelle' => 'Physique', 'date_debut' => '2024-09-01', 'date_fin' => '2024-12-20'],
            ['libelle' => 'Chimie', 'date_debut' => '2024-09-01', 'date_fin' => '2024-12-20'],
            ['libelle' => 'Biologie', 'date_debut' => '2024-09-01', 'date_fin' => '2024-12-20'],
            ['libelle' => 'Informatique', 'date_debut' => '2024-09-01', 'date_fin' => '2024-12-20'],
            ['libelle' => 'Géographie', 'date_debut' => '2024-09-01', 'date_fin' => '2024-12-20'],
            ['libelle' => 'Histoire', 'date_debut' => '2024-09-01', 'date_fin' => '2024-12-20'],
            ['libelle' => 'Philosophie', 'date_debut' => '2024-09-01', 'date_fin' => '2024-12-20'],
            ['libelle' => 'Économie', 'date_debut' => '2024-09-01', 'date_fin' => '2024-12-20'],
            ['libelle' => 'Littérature', 'date_debut' => '2024-09-01', 'date_fin' => '2024-12-20'],
        ]);
    }
}
