<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use \App\Models\User;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::create([
            "name" => "usuario1",
            "password" => bcrypt("1234"),
            "email" => "teste1@teste.com.br"
        ]);

        User::create([
            "name" => "usuario2",
            "password" => bcrypt("1234"),
            "email" => "teste2@teste.com.br"
        ]);

        User::create([
            "name" => "usuario3",
            "password" => bcrypt("1234"),
            "email" => "teste3@teste.com.br"
        ]);

        User::create([
            "name" => "usuario4",
            "password" => bcrypt("1234"),
            "email" => "teste4@teste.com.br"
        ]);
    }
}
