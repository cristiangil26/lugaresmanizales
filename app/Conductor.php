<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Conductor extends Model
{
     protected $table = "conductor";
    protected $fillable = ['nombre','apellidos','teléfono','cédula'];
}
