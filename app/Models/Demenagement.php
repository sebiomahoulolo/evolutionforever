<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Demenagement extends Model
{

    protected $fillable = [
    'nom',
    'email',
    'telephone',
    'type_demenagement',
    'volume',
    'adresse',
    'emballage',
    'date_souhaitee',
];

}
