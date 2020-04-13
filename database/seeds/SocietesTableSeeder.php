<?php

use Illuminate\Database\Seeder;

class SocietesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(App\Societe::class, 10)->create();
    }
}
