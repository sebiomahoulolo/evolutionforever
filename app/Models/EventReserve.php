<?php
namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class EventReserve extends Model
{
    protected $table = 'events_reserve';

    protected $fillable = [
        'name', 'email', 'phone', 'event_type',
        'event_date', 'event_location', 'attendees',
        'equipments', 'needs'
    ];

    protected $casts = [
        'equipments' => 'array', 
        'event_date' => 'date'
    ];
}