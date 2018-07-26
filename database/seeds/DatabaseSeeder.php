<?php

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
        $this->call(UsrTypeTableSeeder::class);
        $this->call(UserTableSeeder::class);
        $this->call(CompanyTableSeeder::class);
        $this->call(EstablishmentTableSeeder::class);
        $this->call(EstablishmentsUsersTableSeeder::class);
    }
}
