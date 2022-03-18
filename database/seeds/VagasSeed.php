<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class VagasSeed extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        App\Models\Vagas::create([
            'title' => str_random(10),
            'description' => str_random(1000),
            'local' => 'Balneario Camboriu / SC',
            'title' => str_random(10),
            'remote' => 'no',
            'type' => 3,
            'redemagic_id' => 1,
        ]);
    }
}