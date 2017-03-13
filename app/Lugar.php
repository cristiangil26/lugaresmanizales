<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Lugar extends Model
{
    protected $table = "lugar";
    protected $fillable = ['nombre','direccion','telefono','correo','paginaweb','tipo'];
}
