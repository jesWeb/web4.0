<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class tb_municipios extends Model
{
    use HasFactory;
    protected $table = 'tb_municipios';
    protected $primaryKey = 'id_municipio';
    protected $fillable = [

        'cp',
        'nombre',
        'id_estado'
    ];

    
   
}

