<?php
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class EvaluationSeeder extends Seeder
{
    public function run()
    {
        DB::table('evaluations')->insert([
            ['date' => '2024-12-15', 'valeur' => 14],
            ['date' => '2024-12-16', 'valeur' => 16],
            ['date' => '2024-12-17', 'valeur' => 12],
            ['date' => '2024-12-18', 'valeur' => 15],
            ['date' => '2024-12-19', 'valeur' => 13],
            ['date' => '2024-12-20', 'valeur' => 18],
            ['date' => '2024-12-21', 'valeur' => 10],
            ['date' => '2024-12-22', 'valeur' => 19],
            ['date' => '2024-12-23', 'valeur' => 9],
            ['date' => '2024-12-24', 'valeur' => 11],
        ]);
    }
}
