<?php
// database/factories/EtudiantFactory.php

namespace Database\Factories;

use App\Models\Etudiant;
use Illuminate\Database\Eloquent\Factories\Factory;

class EtudiantFactory extends Factory
{
    protected $model = Etudiant::class;

   public function definition(): array
    {
        return [
            'prenom' => $this->faker->firstName,
            'nom' => $this->faker->lastName,
            'adresse' => $this->faker->address,
            'telephone' => $this->faker->phoneNumber,
            'matricule' => $this->faker->unique()->regexify('MAT[0-9]{5}'),
            'email' => $this->faker->unique()->safeEmail,
            'mot_de_passe' => bcrypt('secret'),
            'photo' => $this->faker->imageUrl(640, 480, 'people', true, 'Faker'),
            'date_de_naissance' => $this->faker->date(),
            'created_at' => now(),
            'updated_at' => now(),
        ];
    }
}
