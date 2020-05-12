<?php
use App\stage;
use App\User;
use Illuminate\Database\Seeder;

class StageTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(stage::class, 10)->create();
    }
}
