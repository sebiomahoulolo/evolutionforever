<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Demenagement;

class DemenagementController extends Controller
{
    public function index()
    {
        $demandes = Demenagement::latest()->get(); // Récupère toutes les demandes triées par date

        return view('admin.demenagement.get_demenage', compact('demandes'));
    }
}

