<?php
namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Sobebra;

class SobebraController extends Controller
{
    public function index()
    {
        $demandes = Sobebra::latest()->get(); // Récupère toutes les lignes
        return view('admin.sobebra.get_sobebra', compact('demandes'));
    }
}

