<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Vehicule extends Model
{
    use HasFactory;

    protected $fillable = [
        'marque', 'modele', 'annee', 'immatriculation', 'statut', 'photos', 'prix', 'type', 'adresse'
    ];
}
