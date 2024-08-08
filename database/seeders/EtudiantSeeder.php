<?php

namespace Database\Seeders;
use App\Models\Etudiant;
use Illuminate\Database\Seeder;

class EtudiantSeeder extends Seeder
{
    public function run(): void
    {
        $etudiants=[
            ['prenom' => 'Abdoulaye', 'nom' => 'Diop', 'adresse' => 'Dakar', 'telephone' => '771234567', 'matricule' => 'ETD001', 'email' => 'abdoulaye.diop@example.com', 'mot_de_passe' => bcrypt('password'), 'photo' => 'abdoulaye.jpg'],
            ['prenom' => 'Fatou', 'nom' => 'Sarr', 'adresse' => 'Thies', 'telephone' => '778765432', 'matricule' => 'ETD002', 'email' => 'fatou.sarr@example.com', 'mot_de_passe' => bcrypt('password'), 'photo' => 'fatou.jpg'],
            ['prenom' => 'Moussa', 'nom' => 'Ndour', 'adresse' => 'Saint-Louis', 'telephone' => '776543210', 'matricule' => 'ETD003', 'email' => 'moussa.ndour@example.com', 'mot_de_passe' => bcrypt('password'), 'photo' => 'moussa.jpg'],
            ['prenom' => 'Awa', 'nom' => 'Fall', 'adresse' => 'Ziguinchor', 'telephone' => '775432109', 'matricule' => 'ETD004', 'email' => 'awa.fall@example.com', 'mot_de_passe' => bcrypt('password'), 'photo' => 'awa.jpg'],
            ['prenom' => 'Cheikh', 'nom' => 'Ba', 'adresse' => 'Kaolack', 'telephone' => '774321098', 'matricule' => 'ETD005', 'email' => 'cheikh.ba@example.com', 'mot_de_passe' => bcrypt('password'), 'photo' => 'cheikh.jpg'],
            ['prenom' => 'Maimouna', 'nom' => 'Diagne', 'adresse' => 'Fatick', 'telephone' => '773210987', 'matricule' => 'ETD006', 'email' => 'maimouna.diagne@example.com', 'mot_de_passe' => bcrypt('password'), 'photo' => 'maimouna.jpg'],
            ['prenom' => 'Ousmane', 'nom' => 'Sy', 'adresse' => 'Louga', 'telephone' => '772109876', 'matricule' => 'ETD007', 'email' => 'ousmane.sy@example.com', 'mot_de_passe' => bcrypt('password'), 'photo' => 'ousmane.jpg'],
            ['prenom' => 'Marieme', 'nom' => 'Dieng', 'adresse' => 'Kaffrine', 'telephone' => '771098765', 'matricule' => 'ETD008', 'email' => 'marieme.dieng@example.com', 'mot_de_passe' => bcrypt('password'), 'photo' => 'marieme.jpg'],
            ['prenom' => 'Amadou', 'nom' => 'Diallo', 'adresse' => 'Kolda', 'telephone' => '770987654', 'matricule' => 'ETD009', 'email' => 'amadou.diallo@example.com', 'mot_de_passe' => bcrypt('password'), 'photo' => 'amadou.jpg'],
            ['prenom' => 'Khady', 'nom' => 'Sow', 'adresse' => 'Matam', 'telephone' => '779876543', 'matricule' => 'ETD010', 'email' => 'khady.sow@example.com', 'mot_de_passe' => bcrypt('password'), 'photo' => 'khady.jpg'],
        ];

        foreach ($etudiants as $etudiant) {
            Etudiant::create($etudiant);
        }
    }
}
