<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Reservation extends Model
{
    use HasFactory;

    protected $fillable = [
        'bien_immo_id',
        'nom',
        'email',
        'telephone',
        'message',
    ];

    public function bienImmo()
    {
        return $this->belongsTo(BienImmo::class, 'bien_immo_id');
    }
}
