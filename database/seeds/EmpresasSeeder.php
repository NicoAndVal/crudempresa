<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class EmpresasSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
         //Creación empresa 1
        DB::table('empresas')->insert([
            "nombre"=>'Empresa 1',
            "cantidad_trabajadores"=>10,
            "tipo_empresa"=>'Retail',
            'created_at' =>date('Y-m-d H:i:s'),
            'updated_at' =>date('Y-m-d H:i:s')
        ]);
         //Creación empresa 2
        DB::table('empresas')->insert([
            "nombre"=>'Empresa 2',
            "cantidad_trabajadores"=>20,
            "tipo_empresa"=>'Software',
            'created_at' =>date('Y-m-d H:i:s'),
            'updated_at' =>date('Y-m-d H:i:s')
        ]);
         //Creación empresa 3
        DB::table('empresas')->insert([
            "nombre"=>'Empresa 3',
            "cantidad_trabajadores"=>0,
            "tipo_empresa"=>'Retail',
            'created_at' =>date('Y-m-d H:i:s'),
            'updated_at' =>date('Y-m-d H:i:s')
        ]);
         //Creación empresa 4
        DB::table('empresas')->insert([
            "nombre"=>'Empresa 4',
            "cantidad_trabajadores"=>100,
            "tipo_empresa"=>'Software',
            'created_at' =>date('Y-m-d H:i:s'),
            'updated_at' =>date('Y-m-d H:i:s')
        ]);
         //Creación empresa 5
        DB::table('empresas')->insert([
            "nombre"=>'Empresa 5',
            "cantidad_trabajadores"=>0,
            "tipo_empresa"=>'Software',
            'created_at' =>date('Y-m-d H:i:s'),
            'updated_at' =>date('Y-m-d H:i:s')
        ]);
         //Creación empresa 6
        DB::table('empresas')->insert([
            "nombre"=>'Empresa 6',
            "cantidad_trabajadores"=>135,
            "tipo_empresa"=>'Retail',
            'created_at' =>date('Y-m-d H:i:s'),
            'updated_at' =>date('Y-m-d H:i:s')
        ]);
    }
}
