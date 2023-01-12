<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use App\Models\Role;

class VoitureTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table("voiture")->insert([
            ["nom" => "Modele"],
            ["nom" => "Matricule"],
            ["nom" => "Etat"],
            ["nom" => "Kilometrage"],
            ["nom" => "Prix"],
            ["nom" => "Disponibilite"],
            ["nom" => "Image"],
        ]);
    }
}
