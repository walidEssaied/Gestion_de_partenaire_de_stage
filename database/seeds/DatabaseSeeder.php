<?php

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
        $this->call(UsersTableSeeder::class);
        $this->call(SocieteTableSeeder::class);
        $this->call(EtudiantTableSeeder::class);
        $this->call(StageTableSeeder::class);
        $this->call(Societe_Has_StageTableSeeder::class);
       $this->call(Etudiant_Has_StageTableSeeder::class);
    }
}
