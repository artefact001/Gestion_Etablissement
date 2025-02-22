<?php
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class UESeeder extends Seeder
{
    public function run()
    {
        DB::table('ues')->insert([
            ['libelle' => 'UE Fondamentales', 'date_debut' => '2024-09-01', 'date_fin' => '2024-12-20', 'coef' => 4],
            ['libelle' => 'UE Optionnelles', 'date_debut' => '2024-09-01', 'date_fin' => '2024-12-20', 'coef' => 3],
            ['libelle' => 'UE Spécialisées', 'date_debut' => '2024-09-01', 'date_fin' => '2024-12-20', 'coef' => 5],
            ['libelle' => 'UE Complémentaires', 'date_debut' => '2024-09-01', 'date_fin' => '2024-12-20', 'coef' => 2],
            ['libelle' => 'UE Linguistiques', 'date_debut' => '2024-09-01', 'date_fin' => '2024-12-20', 'coef' => 3],
            ['libelle' => 'UE Mathématiques', 'date_debut' => '2024-09-01', 'date_fin' => '2024-12-20', 'coef' => 4],
            ['libelle' => 'UE Sciences Sociales', 'date_debut' => '2024-09-01', 'date_fin' => '2024-12-20', 'coef' => 3],
            ['libelle' => 'UE Physique-Chimie', 'date_debut' => '2024-09-01', 'date_fin' => '2024-12-20', 'coef' => 4],
            ['libelle' => 'UE Arts et Lettres', 'date_debut' => '2024-09-01', 'date_fin' => '2024-12-20', 'coef' => 2],
            ['libelle' => 'UE Économie et Gestion', 'date_debut' => '2024-09-01', 'date_fin' => '2024-12-20', 'coef' => 3],
        ]);
    }
}
