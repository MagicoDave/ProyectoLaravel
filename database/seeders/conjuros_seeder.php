<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class conjuros_seeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('conjuros')->insert([
            'nombre'=>'Mano de mago',
            'nivel' => 0,
            'escuela_id' => 3,
            'descripción' => 'Una mano espectral aparece flotando en un punto que elijas dentro del alcance. Puedes usar la mano para manipular un objeto, abrir una puerta o un recipiente cerrado, guardar o sacar un objeto de un recipiente abierto o verter el contenido de un vial.'
        ]);

        DB::table('conjuros')->insert([
            'nombre'=>'Invisivilidad',
            'nivel' => 2,
            'escuela_id' => 6,
            'descripción' => 'Una criatura que tocas se vuelve invisible hasta que el conjuro termina. Cualquier cosa que el objetivo lleve puesta o transporte se vuelve invisible siempre y cuando esté en el cuerpo del objetivo.'
        ]);

        DB::table('conjuros')->insert([
            'nombre'=>'Risa horrible de Tasha',
            'nivel' => 1,
            'escuela_id' => 4,
            'descripción' => 'Una criatura de tu elección que puedas ver dentro del alcance percibe todo como si fuera terriblemente gracioso y llora de la risa si este conjuro la afecta.'
        ]);

        DB::table('conjuros')->insert([
            'nombre'=>'Bola de fuego',
            'nivel' => 3,
            'escuela_id' => 5,
            'descripción' => 'Un rayo brillante surge de tu dedo índice hasta un punto que elijas dentro del alcance y explota con un leve estruendo en un estallido de llamas.'
        ]);
    }
}
