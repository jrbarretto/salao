<?php

use Illuminate\Database\Seeder;
use App\Company;

class CompanyTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        $this->createCompanies();
    }

    private function createCompanies(){
        $company = new App\Company();
        $company->name = 'Elmos';
        $company->email = 'elmos@elmos.com.br';
        $company->save(); 
        $this->command->info('Company Elmos created');

        $company = new App\Company();
        $company->name = 'Salão concorrente';
        $company->email = 'concorrente@concorre.com.br';
        $company->save(); 
        $this->command->info('Company Concorrente created');


    }

}
