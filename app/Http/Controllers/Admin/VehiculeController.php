<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Vehicule;

class VehiculeController extends Controller
{
    public function index()
    {
        $vehicules = Vehicule::all();
        return view('admin.vehicules', compact('vehicules'));
    }

    public function create()
    {
        return view('admin.vehicules_create');
    }

    public function store(Request $request)
    {
        Vehicule::create($request->validate([
            'marque' => 'required',
            'modele' => 'required',
            'annee' => 'required|integer',
            'statut' => 'required',
        ]));
        return redirect()->route('admin.vehicules');
    }

    public function edit($id)
    {
        $vehicule = Vehicule::findOrFail($id);
        return view('admin.vehicules_edit', compact('vehicule'));
    }

    public function update(Request $request, $id)
    {
        $vehicule = Vehicule::findOrFail($id);
        $vehicule->update($request->validate([
            'marque' => 'required',
            'modele' => 'required',
            'annee' => 'required|integer',
            'statut' => 'required',
        ]));
        return redirect()->route('admin.vehicules');
    }

    public function destroy($id)
    {
        Vehicule::destroy($id);
        return redirect()->route('admin.vehicules');
    }
}
