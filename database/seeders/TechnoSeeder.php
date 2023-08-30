<?php

namespace Database\Seeders;

use App\Models\OutilTechnologie;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class TechnoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        OutilTechnologie::create([
            'nom' => 'Laravel'
        ]);

        OutilTechnologie::create([
            'nom' => 'React js'
        ]);

        OutilTechnologie::create([
            'nom' => 'Adobe Illustrator'
        ]);

        OutilTechnologie::create([
            'nom' => 'Laravel'
        ]);
    }
}
