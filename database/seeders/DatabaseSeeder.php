<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
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
      \App\Models\compte::factory(10)->create();

     //   \App\Models\compte::factory()->create([
       //     'nom_utilisateur' => 'User',
       //     'mot_passe' => 'test',
        // 'type'=>'condidat',
        //     'etat'=>'1'

    //     ]);
    }
}
