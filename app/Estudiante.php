<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\softDeletes;


class Estudiante extends Model
{
    use SoftDeletes;
    protected $table= 'estudiantes';
    protected $fillable=['cedula','nombres','apellidos','sexo','ciudad',
    'direccion'];
}
