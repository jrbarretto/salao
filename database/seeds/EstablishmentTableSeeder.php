<?php

use Illuminate\Database\Seeder;
use App\Establishment;

class EstablishmentTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        $this->createEstablishments();

    }
    
    private function createEstablishments(){

        $estab = new App\Establishment();
        $estab->name = 'Elmos Bairro';
        $estab->company_id = 1;
        $estab->save();
        $this->command->info('Estab Elmos Bairro created');

        $estab = new App\Establishment();
        $estab->name = 'Elmos CAV';
        $estab->company_id = 1;
        $estab->save();
        $this->command->info('Estab Elmos CAV created');

        $estab = new App\Establishment();
        $estab->name = 'Concorrente Estab1';
        $estab->company_id = 2;
        $estab->save();
        $this->command->info('Estab Concorrente 1 created');

        $estab = new App\Establishment();
        $estab->name = 'Concorrente Estab2';
        $estab->company_id = 2;
        $estab->save();
        $this->command->info('Estab Concorrente 2 created');


    }
}
