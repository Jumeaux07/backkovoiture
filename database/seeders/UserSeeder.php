<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('users')->insert([
            "nom" => "Zouzoua",
            "prenoms" => "Essis cedric",
            "adresse" => "Abidjan Yopougon",
            "telephone" => "0103772742",
            "email" => "Zouzouacedric@gmail.com",
            "password" => Hash::make('123456789'),
            "statut" => 1,
            "role_id" => 1,
        ]);

        DB::table('users')->insert([
            "nom" => "Zouzoua",
            "prenoms" => "Bill",
            "adresse" => "Abidjan Cocody",
            "telephone" => "0704127286",
            "email" => "Cedriczouzoua17@gmail.com",
            "password" => Hash::make('123456789'),
            "statut" => 1,
            "role_id" => 2,
        ]);
    }
}
