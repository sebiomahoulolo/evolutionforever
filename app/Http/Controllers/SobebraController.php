<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Sobebra;

class SobebraController extends Controller
{
    public function store(Request $request)
    {
        $validated = $request->validate([
            'entreprise' => 'required|string|max:255',
            'nom_complet' => 'required|string|max:255',
            'email' => 'required|email|max:255',
            'telephone' => 'required|string|max:20',
            'objet' => 'required|string',
            'type_boisson' => 'required|string',
            'quantite' => 'required|string|max:255',
            'adresse_livraison' => 'required|string|max:255',
            'occasion' => 'required|string',
            'date_heure' => 'required|date',
            'informations_complementaires' => 'nullable|string',
        ]);

        Sobebra::create($validated);

        return redirect()->back()->with('success', 'Votre demande Sobebra a été enregistrée avec succès.');
    }
}
