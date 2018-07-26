<?php

use Illuminate\Database\Seeder;
use App\UsrType;

class UsrTypeTableSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // Apaga toda a tabela de usuários
        
        //DB::table('usrtypes')->truncate();
        // Cria usuários admins (dados controlados)
        $this->createTypes();
    }

    private function createTypes(){
        UsrType::create([
            'name' => 'Administrador', 
         ]);
        // Exibe uma informação no console durante o processo de seed
        $this->command->info('UserType Administrador created');

        UsrType::create([
            'name' => 'Caixa', 
         ]);
        // Exibe uma informação no console durante o processo de seed
        $this->command->info('UserType Caixa created');

        UsrType::create([
            'name' => 'Funcionário', 
         ]);
        // Exibe uma informação no console durante o processo de seed
        $this->command->info('UserType Funcionário created');

    }
}
