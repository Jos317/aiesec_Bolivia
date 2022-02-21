<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class documento_talento extends Model
{
    use HasFactory;
    protected $table='documento_talento'; 
    protected $fillable = ['nombre'];
}
