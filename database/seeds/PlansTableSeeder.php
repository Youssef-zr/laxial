<?php

use App\Plan;
use Illuminate\Database\Seeder;

class PlansTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $plans = [
            // basique version
            [
                'version' => 'basique',
                'titre' => 'de 1 a 499 élèves',
                'prix_initial_dh' => '25500',
                'prix_actuel_dh' => '15500',
                'prix_initial_euro' => '2550',
                'prix_actuel_euro' => '1550',

            ],
            [
                'version' => 'basique',
                'titre' => 'De 500 a 999 élèves',
                'prix_initial_dh' => '36500',
                'prix_actuel_dh' => '26500',
                'prix_initial_euro' => '3650',
                'prix_actuel_euro' => '2650',

            ],
            [
                'version' => 'basique',
                'titre' => 'De 1000 et plus',
                'prix_initial_dh' => '49450',
                'prix_actuel_dh' => '39450',
                'prix_initial_euro' => '4945',
                'prix_actuel_euro' => '3945',

            ],
            //complete version
            [
                'version' => 'complete',
                'titre' => 'de 1 a 499 élèves',
                'prix_initial_dh' => '37900',
                'prix_actuel_dh' => '27900',
                'prix_initial_euro' => '3790',
                'prix_actuel_euro' => '2790',

            ],
            [
                'version' => 'complete',
                'titre' => 'De 500 a 999 élèves',
                'prix_initial_dh' => '47800',
                'prix_actuel_dh' => '37800',
                'prix_initial_euro' => '4780',
                'prix_actuel_euro' => '3780',

            ],
            [
                'version' => 'complete',
                'titre' => 'De 1000 et plus',
                'prix_initial_dh' => '56350',
                'prix_actuel_dh' => '46350',
                'prix_initial_euro' => '5635',
                'prix_actuel_euro' => '4635',

            ],

        ];

        foreach ($plans as $plan) {
            $db_plans = new Plan();
            $db_plans::create($plan);
        }

    }
}
