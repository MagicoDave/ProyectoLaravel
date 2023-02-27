<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class escuelas_seeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('escuelas')->insert([
            'nombre'=>'Abjuración'
        ]);
        DB::table('escuelas')->insert([
            'nombre'=>'Adivinación'
        ]);
        DB::table('escuelas')->insert([
            'nombre'=>'Conjuración'
        ]);
        DB::table('escuelas')->insert([
            'nombre'=>'Encantamiento'
        ]);
        DB::table('escuelas')->insert([
            'nombre'=>'Evocación'
        ]);
        DB::table('escuelas')->insert([
            'nombre'=>'Ilusión'
        ]);
        DB::table('escuelas')->insert([
            'nombre'=>'Nigromancia'
        ]);
        DB::table('escuelas')->insert([
            'nombre'=>'Transmutación'
        ]);
    }
}
