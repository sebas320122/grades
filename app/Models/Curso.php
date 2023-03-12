<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Curso extends Model
{
    public $timestamps = false;

    protected $primaryKey = 'id_curso';
    public function act(){
        return $this->hasMany(Act::class);
    }
}
