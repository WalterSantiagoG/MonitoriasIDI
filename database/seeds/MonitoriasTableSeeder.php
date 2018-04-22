<?php

use Illuminate\Database\Seeder;
use App\Monitoria;

class MonitoriasTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $monitorias = new Monitoria;
        $monitorias->IdMonitor = 1;
        $monitorias->materia = 'Programacion';
        $monitorias->fecha = '2018-05-02';
        $monitorias->salon = '11205';
        $monitorias->save();

        $monitorias = new Monitoria;
        $monitorias->IdMonitor = 3;
        $monitorias->materia = 'Base de datos';
        $monitorias->fecha = '2018-05-24';
        $monitorias->salon = '10305';
        $monitorias->save();

        $monitorias = new Monitoria;
        $monitorias->IdMonitor = 4;
        $monitorias->materia = 'Mineria de datos';
        $monitorias->fecha = '2018-06-02';
        $monitorias->salon = '11205';
        $monitorias->save();

        $monitorias = new Monitoria;
        $monitorias->IdMonitor = 2;
        $monitorias->materia = 'Algoritmos';
        $monitorias->fecha = '2018-05-02';
        $monitorias->salon = '11206';
        $monitorias->save();

        $monitorias = new Monitoria;
        $monitorias->IdMonitor = 2;
        $monitorias->materia = 'Automatas';
        $monitorias->fecha = '2018-05-30';
        $monitorias->salon = '11205';
        $monitorias->save();
    }
}
