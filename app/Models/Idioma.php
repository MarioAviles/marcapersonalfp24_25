<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Idioma extends Model
{

    use HasFactory;

    protected $fillable = [
        'id',
        'alpha2',
        'alpha3',
        'alpha3b',
        'english_name',
        'native_name'
    ];
}
