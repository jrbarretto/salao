<?php

use Illuminate\Database\Seeder;
use App\User;

class UserTableSeeder extends Seeder
{

    private function createUsers(){
       User::create([
           'name'       => 'admin', 
           'password'   => '123456',
           'email'      => 'admin@email.com',
           'usrtype_id'=> '1',
        ]);

        User::create([
            'name'       => 'junior', 
            'password'   => '123456',
            'email'      => 'junior@email.com',
            'usrtype_id'=> '1',
         ]);
        }

    
    public function run()
    {
       // Apaga toda a tabela de usuários
       //DB::table('users')->truncate();
       // Cria usuários admins (dados controlados)
       $this->createUsers();
       $this->command->info('User admin created');
   }
}
