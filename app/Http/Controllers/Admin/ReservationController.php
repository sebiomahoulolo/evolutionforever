<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Reservation;

class ReservationController extends Controller
{
    public function store(Request $request)
    {
        $validated = $request->validate([
            'bien_immo_id' => 'required|exists:bien_immos,id',
            'nom' => 'required|string|max:255',
            'email' => 'required|email|max:255',
            'telephone' => 'nullable|string|max:30',
            'message' => 'nullable|string',
        ]);

        Reservation::create($validated);

        return redirect()->back()->with('success', 'Votre demande de réservation a bien été envoyée !');
    }

    public function index()
    {
        $reservations = Reservation::with('bienImmo')->latest()->paginate(20);
        return view('admin.bookings.reservations', compact('reservations'));
    }
}
