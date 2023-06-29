<?php

namespace Database\Seeders;
use config\Comics;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ComicsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $comics = config('config.comics');
        foreach ($comics as $comic) { 

        }
            // Esegui l'operazione desiderata per ogni dato nel seeder
    }
}
