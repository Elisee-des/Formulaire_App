<?php

namespace Database\Seeders;

use App\Models\Pays;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class PaysSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Pays::create([
            'nom' => 'Burkina Faso'
        ]);

        Pays::create([
            'nom' => 'Mali'
        ]);

        Pays::create([
            'nom' => 'Togo'
        ]);

        Pays::create([
            'nom' => 'Cote d\'ivoir'
        ]);
    }
}
