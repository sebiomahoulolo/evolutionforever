<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{
    public function welcome() { return view('welcome'); }
    public function about() { return view('pages.propos'); }
    public function service() { return view('pages.service'); }
    public function blog() { return view('pages.blog'); }
    public function detail() { return view('pages.detail'); }
    public function price() { return view('pages.price'); }
    public function feature() { return view('pages.feature'); }
    public function team() { return view('pages.team'); }
    public function testimonial() { return view('pages.testimonial'); }
    public function quote() { return view('pages.quote'); }
    public function contact() { return view('pages.contact'); }
}
