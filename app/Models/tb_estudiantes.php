<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class tb_estudiantes extends Model
{
    use HasFactory;
    protected $table = 'tb_estudiantes';
    protected $primaryKey = 'id_estudiantes';
    protected $fillable = [
        'matricula',
        'nombre',
        'ApellidoP',
        'FechaN',
        'Sexo',
        'direccion',
        'estudio',
        'id_estado'
    ];
}
