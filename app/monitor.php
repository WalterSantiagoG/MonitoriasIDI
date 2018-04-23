<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Monitor extends Model
{
    protected $table = 'monitors';

   	protected $primaryKey = 'IdMonitor';

    protected $fillable = ['nombres','apellidos','programa_academico','semestre',	'cedula','email','telefono','celular'];
}
