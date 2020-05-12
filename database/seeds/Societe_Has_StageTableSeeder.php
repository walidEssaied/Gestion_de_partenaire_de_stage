<?php
use App\societe_has_stage;
use App\societe;
use App\stage;
use Illuminate\Database\Seeder;

class Societe_Has_StageTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(societe_has_stage::class, 50)->create();
    }
}
