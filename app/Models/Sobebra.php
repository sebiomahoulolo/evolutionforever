<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Sobebra extends Model
{
    protected $table = 'sobebras'; 

    protected $fillable = [
        'entreprise',
        'nom_complet',
        'email',
        'telephone',
        'objet',
        'type_boisson',
        'quantite',
        'adresse_livraison',
        'occasion',
        'date_heure',
        'informations_complementaires',
    ];
}
