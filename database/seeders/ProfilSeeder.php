<?php

namespace Database\Seeders;

use App\Models\Profil;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ProfilSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Profil::create([
            'nom' => 'Devops'
        ]);

        Profil::create([
            'nom' => 'Developpeur web'
        ]);

        Profil::create([
            'nom' => 'Developpeur mobile'
        ]);

        Profil::create([
            'nom' => 'Designer'
        ]);
    }
}
