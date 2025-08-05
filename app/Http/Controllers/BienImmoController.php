<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\BienImmo;

class BienImmoController extends Controller
{
    /**
     * Supprime un bien immobilier.
     */
    public function destroy(BienImmo $bienimmo)
    {
        $bienimmo->delete();
        return redirect()->route('admin.bienimmos.index')->with('success', 'Bien immobilier supprimé avec succès.');
    }
    public function index()
    {
        $bienimmos = BienImmo::all();
        return view('admin.bookings.immo', compact('bienimmos'));
    }

    public function create()
    {
        return view('admin.bookings.immo_create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'titre' => 'required|string|max:255',
            'description' => 'nullable|string',
            'type' => 'required|in:location,vente',
            'prix' => 'required|numeric|min:0',
            'adresse' => 'nullable|string',
            'statut' => 'required|string',
            'photos' => 'required|array|min:6|max:8',
            'photos.*' => 'image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ]);

        $photos = [];
        if ($request->hasFile('photos')) {
            foreach ($request->file('photos') as $image) {
                $filename = uniqid().'.'.$image->getClientOriginalExtension();
                $image->move(public_path('BienImmos'), $filename);
                $photos[] = 'BienImmos/' . $filename;
            }
        }

        BienImmo::create([
            'titre' => $request->titre,
            'description' => $request->description,
            'type' => $request->type,
            'prix' => $request->prix,
            'adresse' => $request->adresse,
            'statut' => $request->statut,
            'photos' => json_encode($photos),
        ]);
        return redirect()->route('admin.bienimmos.index')->with('success', 'Bien immobilier ajouté avec succès.');
    }
    /**
     * Affiche le formulaire d'édition d'un bien immobilier.
     */
    public function edit(BienImmo $bienimmo)
    {
        return view('admin.bookings.immo_edit', compact('bienimmo'));
    }

    /**
     * Met à jour un bien immobilier existant.
     */
    public function update(Request $request, BienImmo $bienimmo)
    {
        $request->validate([
            'titre' => 'required|string|max:255',
            'description' => 'nullable|string',
            'type' => 'required|in:location,vente',
            'prix' => 'required|numeric|min:0',
            'adresse' => 'nullable|string',
            'statut' => 'required|string',
            'photos.*' => 'image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ]);

        $photos = json_decode($bienimmo->photos, true) ?? [];
        if ($request->hasFile('photos')) {
            $photos = [];
            foreach ($request->file('photos') as $image) {
                $filename = uniqid().'.'.$image->getClientOriginalExtension();
                $image->move(public_path('BienImmos'), $filename);
                $photos[] = 'BienImmos/' . $filename;
            }
        }

        $bienimmo->update([
            'titre' => $request->titre,
            'description' => $request->description,
            'type' => $request->type,
            'prix' => $request->prix,
            'adresse' => $request->adresse,
            'statut' => $request->statut,
            'photos' => json_encode($photos),
        ]);
        return redirect()->route('admin.bienimmos.index')->with('success', 'Bien immobilier modifié avec succès.');
    }
}
