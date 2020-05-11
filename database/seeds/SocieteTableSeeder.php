<?php
use App\societe;
use Illuminate\Database\Seeder;

class SocieteTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(Societe::class, 10)->create();
    }
}
