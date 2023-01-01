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
        "gender",
        "birthplace",
        "domicile",
        "home_phone",
        "cell_phone",
    ];

    protected $dates = ['birthdate'];
    
}
