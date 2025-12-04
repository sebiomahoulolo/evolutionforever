<?php

namespace App\Http\Controllers;

use App\Models\Vehicule;
use Illuminate\Http\Request;

class VehiculeController extends Controller
{
    public function index()
    {
        $vehicules = Vehicule::all();
        return view('pages.vehicule', compact('vehicules'));
    }

    public function show($id)
    {
        $vehicule = Vehicule::findOrFail($id);
        // Suggestions pour la section "Autres véhicules"
        $suggestions = Vehicule::where('id', '!=', $vehicule->id)->inRandomOrder()->limit(3)->get();
        return view('pages.vehicule.details', compact('vehicule', 'suggestions'));
    }

    // Réservation véhicule
    public function reservation(Request $request)
    {
        $request->validate([
            'vehicule_id' => 'required|exists:vehicules,id',
            'nom' => 'required|string|max:255',
            'email' => 'required|email',
            'telephone' => 'required',
            'date_debut' => 'required|date',
            'date_fin' => 'required|date|after_or_equal:date_debut',
        ]);

        \App\Models\VehiculeReservation::create([
            'vehicule_id' => $request->vehicule_id,
            'nom' => $request->nom,
            'email' => $request->email,
            'telephone' => $request->telephone,
            'date_debut' => $request->date_debut,
            'date_fin' => $request->date_fin,
            'message' => $request->message,
        ]);

        return back()->with('success', 'Votre demande de réservation a bien été envoyée. Nous vous contacterons rapidement.');
    }
}
