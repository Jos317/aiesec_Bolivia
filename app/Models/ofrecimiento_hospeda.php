<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ofrecimiento_hospeda extends Model
{
    use HasFactory;
    protected $table='ofrecimiento_hospeda'; 
    protected $fillable = ['ofrecer', 'condicion'];
    public $timestamps = false;
    
    public function ofrecimiento_hospeda()
    {
        return $this->hasOne('App\Models\ofrecimiento_hospeda','idofrecimiento','id');
    }
}