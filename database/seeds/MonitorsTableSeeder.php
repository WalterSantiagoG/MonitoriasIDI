<?php

use Illuminate\Database\Seeder;
use App\Monitor;

class MonitorsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $monitor = new Monitor;
        $monitor->nombres = 'Walter Jesus';
        $monitor->apellidos = 'Santiago Gonzalez';
        $monitor->programa_academico = 'Ing de sistemas';
        $monitor->semestre = 10;
        $monitor->cedula ='1140321456' ;
        $monitor->email = 'ing.waltersantiago@gmail.com';
        $monitor->telefono = '3725681';
        $monitor->celular = '3016844769';
        $monitor->save();

        $monitor = new Monitor;
        $monitor->nombres = 'Aris Joel';
        $monitor->apellidos = 'Julio Natera';
        $monitor->programa_academico = 'Ing de sistemas';
        $monitor->semestre = 10;
        $monitor->cedula ='1140321457' ;
        $monitor->email = 'arisjulio@gmail.com';
        $monitor->telefono = '3256478';
        $monitor->celular = '3046589746';
        $monitor->save();

        $monitor = new Monitor;
        $monitor->nombres = 'Roberto';
        $monitor->apellidos = 'Morales Perez';
        $monitor->programa_academico = 'Ing de sistemas';
        $monitor->semestre = 10;
        $monitor->cedula ='1140321458' ;
        $monitor->email = 'robertomorales@gmail.com';
        $monitor->telefono = '3231524';
        $monitor->celular = '3056457863';
        $monitor->save();

        $monitor = new Monitor;
        $monitor->nombres = 'Harold';
        $monitor->apellidos = 'Combita Sarmiento';
        $monitor->programa_academico = 'Ing de sistemas';
        $monitor->semestre = 10;
        $monitor->cedula ='1140321459' ;
        $monitor->email = 'hcombita@gmail.com';
        $monitor->telefono = '3725698';
        $monitor->celular = '3065897845';
        $monitor->save();

        $monitor = new Monitor;
        $monitor->nombres = 'Juan Jose';
        $monitor->apellidos = 'Padilla Lopez';
        $monitor->programa_academico = 'Ing de sistemas';
        $monitor->semestre = 8;
        $monitor->cedula ='1140321460' ;
        $monitor->email = 'wsantiagog1@gmail.com';
        $monitor->telefono = '3926548';
        $monitor->celular = '302145632';
        $monitor->save();
    }
}
