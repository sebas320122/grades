<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Act extends Model
{
    public $timestamps = false;
    public function curso(){
        return $this->belongsTo(Curso::class);
    }
    protected $primaryKey = 'id_act';
    protected $fillable = [ 
        'tipo', 'fecha', 'calificacion','id_curso' 
      ]; 
}
