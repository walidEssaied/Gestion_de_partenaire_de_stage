<?php
use App\etudiant;
use App\societe;
use App\User;
use Illuminate\Database\Seeder;

class EtudiantTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(Etudiant::class, 50)->create();
    }
}
