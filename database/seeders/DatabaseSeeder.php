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
        

        \App\Models\Categorie::factory(4)->create();
        DB::table('users')->insert([
            [
                "nom" => "Akrout",
                "prenom" => "Fatma",
                "email" => "fatma@gmail.com",
                "numtel" => "12345678",
                "date_naissance" => "1999-10-15",
                "genre" => "female",
                "role" => "admin",
                "cin" => "15515515",
                "categorie_id" => 1,
                'adresse' => "Gabes",
                "password" => Hash::make("adminadmin"),
            ],
            [
                "nom" => "Fournisseur",
                "prenom" => "Fournisseur",
                "email" => "fournisseur@gmail.com",
                "numtel" => "22333333",
                "date_naissance" => "1999-10-15",
                "genre" => "male",
                "role" => "fournisseur",
                "cin" => "12212112",
                "categorie_id" => 1,
                'adresse' => "Gabes",
                "password" => Hash::make("adminadmin"),
            ]
        ]);

    }
}
