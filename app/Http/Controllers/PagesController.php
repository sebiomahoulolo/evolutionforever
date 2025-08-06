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
    public function voiture() { return view('pages.voiture'); }
    public function even() { return view('pages.even'); }
    public function testimonial() { return view('pages.testimonial'); }
    public function quote() { return view('pages.quote'); }
    public function contact() { return view('pages.contact'); }
    public function pressing() { return view('pages.pressing'); }
    public function demenagement() { return view('pages.demenagement'); }
    public function produit() { return view('pages.produit'); }

}
