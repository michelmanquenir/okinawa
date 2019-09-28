<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Alumno extends Model
{
   protected $fillable = ['nombre', 'apellido_paterno', 'apellido_materno', 'rut', 'celular', 'correo', 'fecha_pago', 'categoria', 'imagen'];
}
