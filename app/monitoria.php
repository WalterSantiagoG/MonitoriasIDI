<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Monitoria extends Model
{
    protected $table = 'monitorias';

    protected $fillable = ['IdMonitor','materia','	fecha','salon'];
}
