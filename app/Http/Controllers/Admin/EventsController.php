<?php
namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Event;

class EventsController extends Controller
{
    public function index()
    {
        $events = Event::latest()->get(); // Récupère toutes les lignes
        return view('admin.events.get_events', compact('events'));
    }


}

