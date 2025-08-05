<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class BienImmo extends Model
{
    protected $fillable = [
        'titre', 'description', 'type', 'prix', 'adresse', 'photos', 'statut'
    ];
}
