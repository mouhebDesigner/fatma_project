<?php

namespace Database\Seeders;

use DB;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
            [
                "nom" => "Akrout",
                "prenom" => "Fatma",
                "email" => "fatma@gmail.com",
                "numtel" => "12345678",
                "date_naissance" => "1999-10-15",
                "genre" => "female",
                "role" => "admin",
                "password" => Hash::make("adminadmin"),
            ]
        ]);

        \App\Models\Categorie::factory(4)->create();

    }
}
