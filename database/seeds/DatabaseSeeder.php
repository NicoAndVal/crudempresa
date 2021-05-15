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
        // $this->call(UsersTableSeeder::class);
        //Se crean los seeder
         $this->call(TipoempesaSeeder::class);
         $this->call(EmpresasSeeder::class);
    }
}
