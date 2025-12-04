<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Demenagement;

class DemenagementController extends Controller
{
    public function store(Request $request)
{
    $validated = $request->validate([
        'nom' => 'required|string|max:255',
        'email' => 'required|email',
        'telephone' => 'required|string|max:20',
        'type_demenagement' => 'required|string',
        'volume' => 'required|string',
        'adresse' => 'required|string',
        'emballage' => 'required|string',
        'date_souhaitee' => 'required|date',
    ]);

    Demenagement::create($validated);

    return redirect()->back()->with('success', 'Demande enregistrée avec succès !');
}
}


