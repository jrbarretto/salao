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

        $estab2 = new App\Establishment();
        $estab2->name = 'Elmos Bairro';
        $estab2->company_id = 1;
        $estab2->save();
        $this->command->info('Estab Elmos Bairro created');

        $estab = new App\Establishment();
        $estab->name = 'Elmos CAV';
        $estab->company_id = 1;
        $estab->save();
        $this->command->info('Estab Elmos CAV created');

    }
}
