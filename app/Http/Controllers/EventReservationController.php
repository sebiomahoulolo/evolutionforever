<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\EventReserve;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Log;

class EventReservationController extends Controller
{
    /**
     * Affiche le formulaire de réservation (optionnel)
     */
    public function create()
    {
        return view('pages.evenments'); // Ou une vue spécifique
    }

    /**
     * Traite la soumission du formulaire de réservation
     */
public function store(Request $request)
    {
        // Validation des données
        $validated = $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email|max:255',
            'phone' => 'required|string|max:20',
            'event_type' => 'required|string|max:255',
            'event_date' => 'required|date|after:today',
            'event_location' => 'required|string|max:500',
            'attendees' => 'required|integer|min:1|max:10000',
            'equipments' => 'nullable|array',
            'needs' => 'nullable|string|max:1000'
        ]);

        Log::info('Données validées:', $validated);

        // Conversion des équipements en JSON
        if ($request->has('equipments') && !empty($request->equipments)) {
            $equipments = json_encode($request->equipments);
            Log::info('Équipements encodés:', ['equipments' => $equipments]);
        } else {
            $equipments = null;
        }

        try {
            // Utilisation de DB facade pour bypass Eloquent
            $id = DB::table('events_reserve')->insertGetId([
                'name' => $validated['name'],
                'email' => $validated['email'],
                'phone' => $validated['phone'],
                'event_type' => $validated['event_type'],
                'event_date' => $validated['event_date'],
                'event_location' => $validated['event_location'],
                'attendees' => $validated['attendees'],
                'equipments' => $equipments,
                'needs' => $validated['needs'] ?? null,
                'created_at' => now(),
                'updated_at' => now(),
            ]);

            Log::info('Insertion DB réussie, ID: ' . $id);
            
            return redirect()->back()->with('success', 'Réservation envoyée avec succès !');
            
        } catch (\Exception $e) {
            Log::error('Erreur DB: ' . $e->getMessage());
            return redirect()->back()->with('error', 'Erreur: ' . $e->getMessage());
        }
    }
    /**
     * Affiche la liste des réservations (pour l'admin)
     */
    public function index()
    {
        $reservations = EventReserve::latest()->get();
        return view('admin.events.reservations', compact('reservations'));
    }

    /**
     * Affiche les détails d'une réservation
     */
    public function show($id)
    {
        $reservation = EventReserve::findOrFail($id);
        return view('admin.events.show', compact('reservation'));
    }

    /**
     * Supprime une réservation
     */
    public function destroy($id)
    {
        $reservation = EventReserve::findOrFail($id);
        $reservation->delete();

        return redirect()->route('event.reservations.index')
            ->with('success', 'Réservation supprimée avec succès.');
    }
}