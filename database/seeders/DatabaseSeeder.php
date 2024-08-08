<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Etudiant;
use App\Models\Evaluation;
use App\Models\Matiere;
use App\Models\UE;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run(): void

    {
$this->call( [

UeSeeder::class,
EtudiantSeeder::class,
MatiereSeeder::class,
EvaluationSeeder::class,

]);
    }
}
