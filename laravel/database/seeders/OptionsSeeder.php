<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use \App\Models\Option;

class OptionsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Option::create([
            "name" => "Masculino"
        ]);

        Option::create([
            "name" => "Feminino"
        ]);
    }
}
