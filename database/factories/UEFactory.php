<?php
// database/factories/UEFactory.php

namespace Database\Factories;

use App\Models\UE;
use Illuminate\Database\Eloquent\Factories\Factory;

class UEFactory extends Factory
{
    protected $model = UE::class;

    public function definition()
    {
        return [
            'libelle' => $this->faker->word,
            'date_debut' => $this->faker->dateTimeBetween('-1 year', 'now'),
            'date_fin' => $this->faker->dateTimeBetween('now', '+1 year'),
            'coef' => $this->faker->randomFloat(2, 1, 5),
        ];
    }
}
