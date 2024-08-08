<?php

namespace Database\Seeders;
use Illuminate\Database\Seeder;
use App\Models\User;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::create([
            'prenom' => 'Souley',
            'nom' => 'Sane',
            'email' => 'cheikh011@example.com',
            'password' => Hash::make('password1'),
        ]);

        User::create([
            'prenom' => 'Souley',
            'nom' => 'sane',
            'email' => 'Souley001@example.com',
            'password' => Hash::make('password2'),
        ]);
    }
}
