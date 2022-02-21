<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class talento_global extends Model
{
    use HasFactory;
    protected $table='talento_global'; 
    protected $fillable = ['nombre','apellido','edad','correo','ciudad_reside','universidad','grado_estudio',
    'carrera','otra_carrera','nivel_ingles','experiencia','area_desarrollo','pasantia_internacional',
    'programa','descubrimiento_programa','medio_contacto','describir_documento','idcelular','iddocumento'
    ];
}
