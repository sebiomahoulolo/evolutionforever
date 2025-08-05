<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;
use App\Models\Vehicule;

class CarController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $vehicules = Vehicule::all();
        return view('admin.cars.vehicules', compact('vehicules'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.cars.vehicules_create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'marque' => 'required|string|max:255',
            'modele' => 'required|string|max:255',
            'immatriculation' => 'required|string|max:255',
            'annee' => 'required|integer|min:1900|max:2099',
            'statut' => 'required|string',
            'images' => 'required|array|min:6|max:8',
            'images.*' => 'image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ]);

        $photos = [];
        if ($request->hasFile('images')) {
            foreach ($request->file('images') as $image) {
                $filename = uniqid().'.'.$image->getClientOriginalExtension();
                $image->move(public_path('Vehicules'), $filename);
                $photos[] = 'Vehicules/' . $filename;
            }
        }

        Vehicule::create([
            'marque' => $request->marque,
            'modele' => $request->modele,
            'immatriculation' => $request->immatriculation,
            'annee' => $request->annee,
            'statut' => $request->statut,
            'photos' => json_encode($photos),
        ]);
        return redirect()->route('admin.cars.index')->with('success', 'Véhicule ajouté avec succès.');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        // Non utilisé dans l'admin, mais peut être ajouté si besoin
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $vehicule = Vehicule::findOrFail($id);
        return view('admin.cars.vehicules_edit', compact('vehicule'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $request->validate([
            'marque' => 'required|string|max:255',
            'modele' => 'required|string|max:255',
            'immatriculation' => 'required|string|max:255',
            'statut' => 'required|string',
        ]);
        $vehicule = Vehicule::findOrFail($id);
        $vehicule->update($request->only(['marque', 'modele', 'immatriculation', 'statut']));
        return redirect()->route('admin.cars.index')->with('success', 'Véhicule modifié avec succès.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $vehicule = Vehicule::findOrFail($id);
        $vehicule->delete();
        return redirect()->route('admin.cars.index')->with('success', 'Véhicule supprimé avec succès.');
    }
}
