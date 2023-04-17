<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\City;
use App\Models\Alumno;

class State extends Model
{
    use HasFactory;

    protected $fillable = [
        'key',
        'name',
        'abrev',
        'active'
    ];


    public function cities(){
        return $this->hasMany(City::class);
    }

    public function alumnos(){
        return $this->hasManyThrough(Alumno::class, City::class);
    }

    public $timestamps = false;
}
