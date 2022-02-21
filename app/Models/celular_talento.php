<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class celular_talento extends Model
{
    use HasFactory;
    protected $table='celular_talento'; 
    protected $fillable = ['tipo','telefono'];
}
