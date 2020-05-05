<?php

use Illuminate\Database\Seeder;
use App\etudiant_has_stage;

class Etudiant_Has_StageTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(etudiant_has_stage::class, 50)->create();
    }
}
