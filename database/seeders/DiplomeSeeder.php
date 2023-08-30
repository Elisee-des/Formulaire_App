<?php

namespace Database\Seeders;

use App\Models\NiveauDiplome;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DiplomeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        NiveauDiplome::create([
            'nom' => 'Bac +2'
        ]);

        NiveauDiplome::create([
            'nom' => 'Bac +3'
        ]);

        NiveauDiplome::create([
            'nom' => 'Master'
        ]);
    }
}
