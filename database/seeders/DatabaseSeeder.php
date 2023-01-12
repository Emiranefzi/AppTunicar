<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;

use App\Models\Client;
use App\Models\Voiture;
use App\Models\User;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        voiture::factory(20)->create();
        client::factory(20)->create();
        user::factory(20)->create();

        $this->call(RoleTableSeeder::class);
        $this->call(PermissionTableSeeder::class);




        User::find(1)->roles()->attach(1);
        User::find(2)->roles()->attach(2);
        User::find(3)->roles()->attach(1);
        User::find(3)->roles()->attach(2);
    }
}
