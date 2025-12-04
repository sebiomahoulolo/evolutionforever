<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Devis;

class DevisController extends Controller
{
    public function store(Request $request)
    {
        // Validation des champs
        $request->validate([
            'nom' => 'required|string|max:255',
            'email' => 'required|email',
            'telephone' => 'required|string|max:20',
            'service' => 'required|string',
            'type_vetements' => 'required|string|max:255',
            'quantite' => 'required|integer|min:1',
            'livraison' => 'required|string',
            'frequence' => 'required|string',
            'message' => 'nullable|string'
        ]);

        // Enregistrement en base
        Devis::create([
            'nom' => $request->nom,
            'email' => $request->email,
            'telephone' => $request->telephone,
            'service' => $request->service,
            'type_vetements' => $request->type_vetements,
            'quantite' => $request->quantite,
            'livraison' => $request->livraison,
            'frequence' => $request->frequence,
            'message' => $request->message
        ]);

        // Retour avec message de succès
        return back()->with('success', 'Votre demande de devis a été envoyée avec succès.');
    }
}
