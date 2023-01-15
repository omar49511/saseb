<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Alumno extends Model
{
    use HasFactory;

    protected $fillable = [
        "name",
        "lastname",
        "birthdate",
        "group",
        "shift",
        "gender",
        "birthplace",
        "time_to_reside",
        "domicile",
        "home_phone",
        "cell_phone",
        "work",
        "religion",
    ];

    protected $dates = ['birthdate'];
    
    public function expedientes(){
        return $this->hasMany(Expediente::class);
    }
}
