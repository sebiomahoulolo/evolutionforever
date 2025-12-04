<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Devis; // On importe le modèle

class PressingController extends Controller
{
    public function index()
    {
        // Récupérer tous les devis
        $devis = Devis::all();

        // Retourner la vue avec les données
        return view('admin.pressing.get_pressing', compact('devis'));
    }
}
