<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{
    public function welcome() { return view('welcome'); }
    public function about() { return view('pages.propos'); }
    public function service() { return view('pages.service'); }
    public function immobilier() { return view('pages.immobilier'); }
    public function detail() { return view('pages.detail'); }
    public function price() { return view('pages.price'); }
    public function feature() { return view('pages.feature'); }

    public function immo() {
        $query = \App\Models\BienImmo::query();
        if (request('titre')) {
            $query->where('titre', 'like', '%' . request('titre') . '%');
        }
        if (request('adresse')) {
            $query->where('adresse', 'like', '%' . request('adresse') . '%');
        }
        if (request('type')) {
            $query->where('type', request('type'));
        }
        if (request('prix')) {
            $query->where('prix', '<=', request('prix'));
        }
        $bienimmos = $query->get();
        return view('pages.immo', compact('bienimmos'));
    }
    public function events() { return view('pages.events'); }
    public function vehicule() { return view('pages.vehicule'); }
    public function team() { return view('pages.team'); }
    public function testimonial() { return view('pages.testimonial'); }
    public function quote() { return view('pages.quote'); }
    public function contact() { return view('pages.contact'); }
    public function bienDetail($id) {
        $bien = \App\Models\BienImmo::findOrFail($id);
        $suggestions = \App\Models\BienImmo::where('id', '!=', $id)
            ->where('statut', 'Disponible')
            ->orderByDesc('created_at')
            ->take(3)
            ->get();
        return view('pages.bien-detail', compact('bien', 'suggestions'));
    }
    public function voiture() { return view('pages.voiture'); }
    public function even() { return view('pages.even'); }
    public function pressing() { return view('pages.pressing'); }
    public function demenagement() { return view('pages.demenagement'); }
    public function produit() { return view('pages.produit'); }

}
