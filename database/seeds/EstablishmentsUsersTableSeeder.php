<?php

use Illuminate\Database\Seeder;
use App\Establishment;
use App\User;

class EstablishmentsUsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        $this->EstablishmentsUsersCreate();
    }

    private function EstablishmentsUsersCreate(){
        $estab1 = App\Establishment::find(1);
        $estab1->users()->attach(1);
        $estab1->save();

        $estab2 = App\Establishment::find(2);
        $estab2->users()->attach(1);
        $estab2->users()->attach(2);
        $estab2->save();

    }
}
