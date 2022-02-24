<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Http\Request;

class hospeda_internacional extends Model
{
    use HasFactory;
    protected $table='talento_global'; 
    protected $fillable = ['nombre', 'celular','correo','ciudad_reside','direccion',
    'cantidad_voluntarios','hospedar_fecha','hospedar_hora','formar_parte','saber_programa','decir_algo',
    'idofrecimiento'
    ];
    public $timestamps = false;

    public function ofrecimiento_hospeda(){
        return $this->belongsTo('App\Models\ofrecimiento_hospeda','idofrecimiento','id');
    }

    public static function store(Request $request){
        $ofrecer = new ofrecimiento_hospeda();
        $ofrecer->ofrecer = $request->ofrecer;
        $ofrecer->condicion = $request->condicion;
        $ofrecer->save();

        $talento = new hospeda_internacional();
        $talento->nombre = $request->nombre;
        $talento->celular = $request->celular;
        $talento->correo = $request->correo;
        $talento->ciudad_reside = $request->ciudad_reside;
        $talento->direccion = $request->direccion;
        $talento->cantidad_voluntarios = $request->cantidad_voluntarios;
        $talento->hospedar_fecha = $request->hospedar_fecha;
        $talento->hospedar_hora = $request->hospedar_hora;
        $talento->formar_parte = $request->formar_parte;
        $talento->saber_programa = $request->saber_programa;
        $talento->decir_algo = $request->decir_algo;
        $talento->idofrecimiento = $ofrecer->id;
        $talento->save();
    }
}
