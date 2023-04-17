<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\State;
use App\Models\Alumno;

class City extends Model
{
    use HasFactory;

    protected $fillable = [
        'key',
        'name',
        'active'
    ];

    public function state(){
        return $this->belongsTo(State::class);
    }
    public function alumnos(){
        return $this->hasMany(Alumno::class);
    }

    public $timestamps = false;
}
