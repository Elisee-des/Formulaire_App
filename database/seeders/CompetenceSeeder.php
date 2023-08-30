<?php

namespace Database\Seeders;

use App\Models\DomaineCompetence;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class CompetenceSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DomaineCompetence::create([
            'nom' => 'Assidu'
        ]);

        DomaineCompetence::create([
            'nom' => 'Travail sous pression'
        ]);

        DomaineCompetence::create([
            'nom' => 'Apprentisage rapide'
        ]);
    }
}
