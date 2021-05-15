<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class TipoempesaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //insertar tipo de empresa software
        DB::table('tipo_empresa')->insert([
            'tipo'=>'Software',
            'created_at' =>date('Y-m-d H:i:s'),
            'updated_at' =>date('Y-m-d H:i:s')
        ]);
        //insertar tipo de empresa software
        DB::table('tipo_empresa')->insert([
            'tipo'=>'Retail',
            'created_at' =>date('Y-m-d H:i:s'),
            'updated_at' =>date('Y-m-d H:i:s')
        ]);
    }
}
