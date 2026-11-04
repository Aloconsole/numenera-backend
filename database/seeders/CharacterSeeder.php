<?php

namespace Database\Seeders;

use App\Models\Descriptor;
use App\Models\Focus;
use App\Models\Character;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CharacterSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
   public function run(): void
    {
        $campaign_unoId = DB::table('campaigns')->where('title', 'Chi me lo fa fare?')->value('id') ?? 1;
        $campaign_dueId = DB::table('campaigns')->where('title', 'Morningstar')->value('id') ?? 2;
        $campaign_treId = DB::table('campaigns')->where('title', 'Campagna 3')->value('id') ?? 3;
        $campaign_quattroId = DB::table('campaigns')->where('title', 'E qua?')->value('id') ?? 4;
        
        $charmanteId = DB::table('descriptors')->where('name', 'Charmante')->value('id') ?? 1;
        $intelligenteId = DB::table('descriptors')->where('name', 'Intelligente')->value('id') ?? 2;
        $lestoId = DB::table('descriptors')->where('name', 'Lesto')->value('id') ?? 3;
        $forteId = DB::table('descriptors')->where('name', 'Forte')->value('id') ?? 4;

        $fulminiId = DB::table('foci')->where('name', 'Comanda i Fulmini')->value('id') ?? 1;
        $furiaId = DB::table('foci')->where('name', 'Porta una Furia')->value('id') ?? 3;
        $illusioneId = DB::table('foci')->where('name', 'Tesse Illusione')->value('id') ?? 5;
        $fiammeId = DB::table('foci')->where('name', 'Veste un Mantello di Fiamme')->value('id') ?? 6;

        $characters = [
            [
                'name' => 'Kaelen',
                'type' => 'Glaive', 
                'tier' => 1,
                'might_pool' => 14,
                'speed_pool' => 12,
                'intellect_pool' => 10,
                'descriptor_id' => $forteId,
                'focus_id' => $furiaId,
                'campaign_id' => $campaign_unoId,
                'background' => 'Un Glaive possente nato tra le rovine del Nono Mondo, sempre in prima linea durante le spedizioni.',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'Seraphina',
                'type' => 'Nano', // Esploratrice dei Numenera / Saggia
                'tier' => 2,
                'might_pool' => 8,
                'speed_pool' => 10,
                'intellect_pool' => 18,
                'descriptor_id' => $intelligenteId,
                'focus_id' => $fulminiId,
                'campaign_id' => $campaign_dueId,
                'background' => 'Studiosa dei manufatti antichi, in grado di canalizzare cariche energetiche e svelare i segreti degli artefatti.',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'Jarek',
                'type' => 'Jack', // Tuttofare / Furtivo
                'tier' => 1,
                'might_pool' => 10,
                'speed_pool' => 15,
                'intellect_pool' => 11,
                'descriptor_id' => $lestoId,
                'focus_id' => $illusioneId,
                'campaign_id' => $campaign_treId,
                'background' => 'Tuttofare sfuggente, usa inganni visivi e rapidità di mano per sopravvivere nelle steppe selvagge.',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'Lyra',
                'type' => 'Nano',
                'tier' => 3,
                'might_pool' => 9,
                'speed_pool' => 11,
                'intellect_pool' => 16,
                'descriptor_id' => $charmanteId,
                'focus_id' => $fiammeId,
                'campaign_id' => $campaign_quattroId,
                'background' => 'Diplomatica carismatica e pericolosa, capace di manipolare le menti e avvolgersi nel fuoco quando messa alle strette.',
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ];

        DB::table('characters')->insert($characters);
    }
}
