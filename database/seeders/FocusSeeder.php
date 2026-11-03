<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class FocusSeeder extends Seeder
{
    public function run(): void
    {
        $foci = [
            [
                'name' => 'Comanda i Fulmini',
                'description' => 'Inscatoli e scagli cariche elettriche per folgorare i nemici e alimentare macchinari antichi.',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'Lotta con le Ombre',
                'description' => 'Manipoli l oscurità per occultarti, creare illusioni e terrorizzare chiunque ti ostacoli.',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'Porta una Furia',
                'description' => 'Incani la ferocia in combattimento entrando in uno stato di berserk devastante per chiunque ti circondi.',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'Sfonderà qualsiasi ostacolo',
                'description' => 'Sei una forza inarrestabile capace di frantumare barriere, armature e strutture con colpi titanici.',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'Tesse Illusione',
                'description' => 'Pieghi la percezione degli altri creando immagini, suoni e ologrammi realistici che ingannano i sensi.',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'Veste un Mantello di Fiamme',
                'description' => 'Generi calore e fuoco attorno al tuo corpo, bruciando i nemici a contatto e scagliando proiettili incandescenti.',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'Caccia nel Buio',
                'description' => 'Tracci prede ed individui pericoli anche nell oscurità totale grazie a sensi ipersviluppati.',
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ];

        DB::table('foci')->insert($foci);
    }
}