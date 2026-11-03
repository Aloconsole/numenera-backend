<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class DescriptorSeeder extends Seeder
{
    public function run(): void
    {
        $descriptors = [
            [
                'name' => 'Charmante',
                'description' => 'Maniatato dalle relazioni sociali, riesci a piegare la volontà altrui e a cavartela sempre con la parola.',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'Intelligente',
                'description' => 'Hai una mente analitica e una riserva di conoscenze superiore alla norma che ti permette di risolvere enigmi complessi.',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'Lesto',
                'description' => 'I tuoi riflessi e la tua agilità sono straordinari; ti muovi rapido schivando pericoli e trappole.',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'Forte',
                'description' => 'Dominato da una costituzione imponente e forza muscolare, fai leva sulla potenza fisica per superare gli ostacoli.',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'Furtivo',
                'description' => 'Maestro del mimetismo e del movimento silenzioso, preferisci agire nell ombra senza farti notare.',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'Gagliardo',
                'description' => 'Resistente a veleni, malattie e traumi fisici, la tua tenacia ti permette di sopravvivere dove altri crollerebbero.',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'Mistico',
                'description' => 'In sintonia profonda con la numenera e le energie inconoscibili del Nono Mondo.',
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ];

        DB::table('descriptors')->insert($descriptors);
    }
}