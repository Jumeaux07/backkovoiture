<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class ContactSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('contacts')->insert([
            'nom_prenoms' => 'Aya Caterine',
            'email' => 'aya@gmail.com',
            'objet' => 'Devenir chauffeur',
            'telephone' => '0102030405',
            'message' => 'MEssage MEssage MEssage MEssage MEssage MEssage MEssage MEssage MEssage MEssage '
        ]);
    }
}
